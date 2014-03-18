<?php
class Controller_Signup extends Controller
{

    public function action_view(){

        return Response::forge(View::forge('home/signup'));
    }

    public function action_index()
    {
        $view = View::forge("home/signup");
        if(\Fuel\Core\Input::post())
        {
            $post=\Fuel\Core\Input::post();
            $validate = Validation::forge();

            $validate->add('first_name', 'First Name')->add_rule('required')->add_rule('max_length', 255);
            $validate->add('last_name', 'Last Name')->add_rule('required')->add_rule('max_length', 255);
            $validate->add('email', 'Email')->add_rule('required')->add_rule('max_length', 255)->add_rule('valid_email');
            $validate->add('username', 'Username')->add_rule('required')->add_rule('max_length', 255);
            $validate->add('password', 'Password')->add_rule('required')->add_rule('max_length', 255)->add_rule('min_length', 6);
            $validate->add('password_confirm', 'Confirm Password')->add_rule('match_field', 'password');
            $validate->add('screen_name', 'Screen Name')->add_rule('required')->add_rule('max_length', 255);
            $validate->add('city', 'City')->add_rule('required')->add_rule('max_length', 255);
            $validate->add('zip', 'Zip')->add_rule('required')->add_rule('max_length', 255);

            if ($validate->run())
            {
               try
               {
                    $activation_code = Crypt::encode($post["email"]);

                   //here is where the transaction starts in case if the power failed in the middle of the insertion
                   //to the two tables or in case the verification is not sent while the records are inserted for both
                   //user and profile tables and something like this.

                   \Fuel\Core\DB::Start_transaction();
                    $user_id = Auth::create_user($post["username"], $post["password"], $post["email"], 3);

                    $first_Name= $post["first_name"];
                    $last_Name= $post["last_name"];
                    $screen_name= $post["screen_name"];
                    $city= $post["city"];
                    $zip= $post["zip"];
                    $state=$post["state"];

                    $profile=  new Model_Profile;
                    $profile->first_name=$first_Name;
                    $profile->last_name=$last_Name;
                    $profile->screen_name=$screen_name;
                    $profile->city=$city;
                    $profile->zip=$zip;
                    $profile->state=$state;
                    $profile->is_activated=0;
                    $profile->users_id=$user_id;
                    $profile->save();
                    try
                    {

                           Email::forge('default', array('driver' => 'smtp'))
                           ->to($post["email"])
                           ->from("millajimma@gmail.com")
                           ->subject("Confirm Registration")
                           ->html_body(View::forge('email/sign_up', array("activation_code" => $activation_code)))
                           ->send();
                            $view->error = "success";
                        \Fuel\Core\DB::commit_transaction();
                    }
                    catch (EmailSendingFailedException $e)
                    {
                        \Fuel\Core\DB::rollback_transaction();
                        Session::set_flash($e);

                    }
                    catch (\Fuel\Core\FuelException $e)
                    {
                        \Fuel\Core\DB::rollback_transaction();
                         Session::set_flash($e);

                    }
                }
               catch (Auth\SimpleUserUpdateException $e)
               {
                   \Fuel\Core\DB::rollback_transaction();
                   Session::set_flash($e);
                }
            }
        }
        return Response::forge(View::forge('home/signup'));
        }


    public function action_activate($activation_code) {


        $view = View::forge("signup/activate");

        if ($activation_code)
        {

            $user_by_email = \Auth\Model\Auth_User::find('first', array("where" => array(array("email", Crypt::decode($activation_code)))));
            if ($user_by_email)
            {
                if (Auth::force_login($user_by_email))
                {
                    $user_Profile = Model_Profile::find('first', array(
                        'where' => array(
                            array('users_id', $user_by_email->id),
                        ),
                    ));

                    if($user_Profile)
                    {
                        $user_Profile->is_activated = 1;
                        if($user_Profile->save())
                        {
                            \Fuel\Core\Session::set_flash("Activation succeeded!");

                        }
                        else
                        {
                            \Fuel\Core\Session::set_flash("Activation failed!");
                        }
                    }
                    else
                    {
                        \Fuel\Core\Session::set_flash("Activation please check your email inbox or spam!");
                    }
                }
            }
            else
            {
                \Fuel\Core\Session::set_flash("Incorrect Activation please check your email inbox or spam!");
            }
        }
    }




}

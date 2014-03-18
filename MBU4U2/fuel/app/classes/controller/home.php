<?php
class Controller_Home extends Controller
{
    public function action_index()
    {

        if(Input::method()=='POST'){
            if(\Auth\Auth::login(\Fuel\Core\Input::post('username'),\Fuel\Core\Input::post('password'))){
                Session::set_flash('Success','you have logged in');
                \Fuel\Core\Response::redirect('profile/index');


            }
            else{

                echo 'invalid login';
            }

        }


        return Response::forge(View::forge('home/home'));

    }
    public function action_logout(){
        \Auth\Auth::logout();
        Session::set_flash('Success','you have logged out');
        \Fuel\Core\Response::redirect('/');
    }


}
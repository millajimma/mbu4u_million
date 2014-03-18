<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>MadeByUs4U</title>
    <?php echo \Fuel\Core\Asset::css('sign_up_style.css')?>
</head>
<body>
<div class="main">

    <div class="content">
        <div class="bannerlinks1">
            <div class="login">
                <div class="loginbutton">
                    <input type="submit" name="LOGIN" value="LOGIN"/>
                </div>
                <div class="loginkey">
                    <input type="submit" name="KEY" value=""/>
                </div>
            </div>
        </div>
        <div class="signup">
            <label>   NOT A MEMBER? </label><a href="signup/index">SIGN UP</a>
        </div>
        <div class="bannerlinks2">


            <div class="logo">
                <a href="<?php echo \Fuel\Core\Uri::base()?>">
                    <?php echo \Fuel\Core\Asset::img('logo.gif')?>
                </a>
            </div>



            <div class="bannerLink">
                <a href="" >
                    <div class="bannerLinkCollection" >
                        <label>CAREGORIES</label>
                    </div>
                </a>

                <a href="" >
                    <div class="bannerLinkCollectionDownArrow" >
                        <?php echo \Fuel\Core\Asset::img('ColoredDownArrow.gif')?>
                    </div>
                </a>
                <a href="" >
                    <div class="bannerLinkCollection" >
                        <label>SHOP</label>
                    </div>
                </a>

                <a href="sellerspublic/index" >
                    <div class="bannerLinkCollection" >
                        <label>SELL</label>
                    </div>
                </a>
                <a href="" >
                    <div class="bannerLinkCollection" >
                        <label>BID</label>
                    </div>
                </a>

            </div>
        </div>
        <div class="sign_up_title">
            <label>Sign Up</label>
            <div class="sign_up_title_right">
                <label>Share &</label>  Connect

                <a href=""><?php echo Asset::img('social1.png')?></a>
                <a href=""> <?php echo Asset::img('social2.png')?></a>
                <a href=""><?php echo Asset::img('social3.png')?></a>
            </div>
        </div>
        <div class="sign_up">
            <div class="sign_up_form">
                <div class="sign_up_form_left_text">
                        <label>  Get Started Now!</label> Complete the fields to join MadeByUs4U.com today!
                    </div>
                <?php echo Form::open(array("action" => "/signup/index")) ?>
                    <div class="sign_up_form_left">
                        <label>First Name:</label><br><br>
                        <label>Last Name:</label><br><br>
                        <label>Screen Name:</label><br><br>
                        <label>Email Address:</label><br><br>
                        <label>Username:</label><br><br>
                        <label>Password:</label><br><br>
                        <label>Confirm:</label><br><br>
                        <label>City:</label><br><br>
                        <label>State:</label><br><br>
                        <label>Zip:</label>

                    </div>

                    <div class="sign_up_form_right">
                        <?php echo Form::input('first_name', Validation::instance()->validated('first_name')); ?><br><br>
                        <span ><?php echo Validation::instance()->error('first_name'); ?></span>
                        <?php echo Form::input('last_name', Validation::instance()->validated('last_name')); ?><br><br>
                        <span ><?php echo Validation::instance()->error('last_name'); ?></span>
                        <?php echo Form::input('screen_name', Validation::instance()->validated('screen_name')); ?><br><br>
                        <span ><?php echo Validation::instance()->error('screen_name'); ?></span>
                        <?php echo Form::input('email', Validation::instance()->validated('email')); ?><br><br>
                        <span ><?php echo Validation::instance()->error('email'); ?></span>
                        <?php echo Form::input('username', Validation::instance()->validated('username')); ?><br><br>
                        <span ><?php echo Validation::instance()->error('username'); ?></span>
                        <?php echo Form::password('password', '')?><br><br>
                        <span ><?php echo Validation::instance()->error('password'); ?></span>
                        <?php echo Form::password('password_confirm', '')?><br><br>
                        <span><?php echo Validation::instance()->error('password_confirm'); ?></span>
                        <?php echo Form::input('city', Validation::instance()->validated('city')); ?><br><br>
                        <span ><?php echo Validation::instance()->error('city'); ?></span>
                        <?php echo Form::select('state', 'none', array(
                           'none' => 'None',
                           'America' =>array(
                              'Alabama'=>'Alabama',
                                'Alaska'=>'Alaska',
                               'Arizona'=>'Arizona',
                               'Arkansas'=>'Arkansas',
                                'California'=>'California',
                                'Colorado'=>'Colorado',
                               'Connecticut'=> 'Connecticut',
                               'Delaware'=> 'Delaware',
                                'Florida'=>'Florida',
                               'Georgia'=>'Georgia',
                                'Hawaii'=> 'Hawaii',
                                'Idaho'=>'Idaho',
                               'Illinois'=>'Illinois',
                               'Indiana'=>'Indiana',
                                'Iowa'=>'Iowa',
                                'Kansas'=>'Kansas',
                                'Kentucky'=>'Kentucky',
                                'Louisiana'=>'Louisiana',
                                'Maine'=> 'Maine',
                               'Maryland'=>'Maryland',
                                'Massachusetts'=>'Massachusetts',
                                'Michigan'=>'Michigan',
                                'Minnesota'=>'Minnesota',
                                'Mississippi'=>'Mississippi',
                               'Missouri'=>'Mississippi',
                                'Montana'=> 'Montana',
                                'Nebraska'=>'Nebraska',
                                'Nevada'=>'Nevada',
                                'New Hampshire'=>'New Hampshire',
                                'New Jersey'=>'New Jersey',
                                'New Mexico'=> 'New Mexico',
                                'New York'=>'New York',
                                'North Carolina'=>'North Carolina',
                                'North Dakota'=>'North Dakota',
                                'Ohio'=>'Ohio',
                                'Oklahoma'=>'Oklahoma',
                                'Oregon'=>'Oregon',
                                'Pennsylvania'=>'Pennsylvania',
                                'Rhode Island'=>'Rhode Island',
                                'South Carolina'=>'South Carolina',
                                'South Dakota'=>'South Dakota',
                                'Tennessee'=>'Tennessee',
                                'Texas'=>'Texas',
                                'Utah'=>'Texas',
                                'Vermont'=>'Vermont',
                                'Virginia'=>'Virginia',
                                'Washington'=>'Washington',
                                'West Virginia'=>'West Virginia',
                                'Wisconsin'=>'Wisconsin',
                                'Wyoming'=>'Wyoming',


                           ),
                         ));?>
                        <div class="zip_code">
                        <?php echo Form::input('zip', Validation::instance()->validated('')); ?><br><br>
                        <span ><?php echo Validation::instance()->error('zip'); ?></span>
                        </div>
                        <div class="sign_up_form_right_button">
                        <input type="submit" name="submit" value="REGISTER NOW!"/>
                        </div>



                    </div>

                <?php echo Form::close(); ?>




            </div>
            <div class="singupdescription">
                <div class="sing_up_discription_text">
                    REGISTER NOW WITH MADEBYUS4U.COM NOW!<br>
                    We connect buyers with independent creators, sellers and business owners
                    and businesses alike to find the very best in new, used, handmade and vintage
                    and resalable consumer goods that fall in the Terms of use policy.
                    We're glad you're here. We will help you learn how to get started, how you are
                    protected, and how to get help when you need it.
                </div>

                <?php if (isset($error)) { ?>
                    <script>alert('success');</script>

                <?php } ?>

                <div class="sing_up_discription_image">
                </div>
            </div>
        </div>
    </div>

    <div class="footer">

        <div class="order1">
            <label>COMPANY</label>
            <ul>

                <li><a href="">Home</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Partners</a></li>
                <li><a href="">Locations</a></li>
            </ul>
        </div>
        <div class="order2">
            <label>STORE</label>
            <ul >


                <li><a href="">What's New</a></li>
                <li><a href="">Return Policy</a></li>

            </ul>
        </div>
        <div class="order3">
            <label>	SUPPORT</label>
            <ul>

                <li><a href="">Contact</a></li>
            </ul>
        </div>


        <div class="copy_right">
            <label>All Right Reserved:</label><br>
            <a href="">MadeByUs4U.com</a>
        </div>
    </div>
</div>

</body>
</html>

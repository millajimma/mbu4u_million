<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>MadeByUs4U</title>
    <?php echo Asset::css('style_profile.css')?>
</head>
<body>
<div class="main">
<div class="content">
<div class="bannerlinks1">
    <div class="login">
        <div class="loginbutton">

            <?php echo Form::open(array("action"=>'/home/logout'))?>
            <input type="submit" name="submit" value="LOGOUT"/>
            <?php echo Form::close()?>
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
                <label>CATEGORIES</label>
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
<div class="content_main">


    <div class="content_left">
        <div class="user_profile_picture">
            <?php echo \Fuel\Core\Asset::img('/Profile/Profile_pic.gif')?>
        </div>
        <div class="user_profile_name">
            <label>User's Name Profile</label>
        </div>
        <div class="send_friend_request">
            <input type="submit" name="submit" value=""/>
        </div>
        <div class="profile_rating">
            <label>Rating:</label>
        </div>
        <div class="profile_content_item">
            <label> Friends: (7)</label>
        </div>
        <div class="profile_content_item">
            <label> Stores: (6)</label>
        </div>
        <div class="profile_content_item">
            <label> Products: (6)</label>
        </div>
        <div class="profile_content_item">
            <label> Comments: (1)</label>
        </div>
        <div class="profile_content_item">
            <label> Images: (2)</label>
        </div>
        <div class="profile_content_item">
            <label> Videos: (1)</label>
        </div>
        <div class="profile_content_item">
            <label> Messages: (0)</label>
        </div>
        <div class="profile_content_item">
            <label> WishList: (0)</label>
        </div>

        <div class="profile_member_since">
            <label>Las Vegas NV.</label><br>
            <label>Member Since: Aug 4, 2010</label>
        </div>
        <div class="profile_video_player">

        </div>
    </div>
    <div class="content_right">
        <div class="stores_title">
            <label>User's Stores</label>
            <div class="stores_title_right">
                <label>Share &</label>  Connect

                <a href=""><?php echo Asset::img('social1.png')?></a>
                <a href=""> <?php echo Asset::img('social2.png')?></a>
                <a href=""><?php echo Asset::img('social3.png')?></a>
            </div>
        </div>
        <div class="content_right_stores">
            <div class="home_rows">
                <div class="home_rows_one_left">
                    <div class="home_rows_one1">
                        <div class="pic11">
                            <?php echo \Fuel\Core\Asset::img('/Products/Row1/product1.gif')?>
                        </div>
                        <div class="product11">
                            <label>NAME OF USER'S STORES</label>
                        </div>

                    </div>
                    <div class="home_rows_one2">
                        <div class="pic12">
                            <?php echo \Fuel\Core\Asset::img('/Products/Row1/product2.gif')?>
                        </div>
                        <div class="product12">
                            <label>NAME OF USER'S STORES</label>
                        </div>

                    </div>
                </div>

                <div class="home_rows_one_right">
                    <div class="home_rows_one3">
                        <div class="pic13">
                            <?php echo \Fuel\Core\Asset::img('/Products/Row1/product3.gif')?>
                        </div>
                        <div class="product13">
                            <label>NAME OF USER'S STORES</label>
                        </div>

                    </div>

                </div>
            </div>


            <div class="home_rows">
                <div class="home_rows_one_left">
                    <div class="home_rows_one1">
                        <div class="pic11">
                            <?php echo \Fuel\Core\Asset::img('/Products/Row1/product1.gif')?>
                        </div>
                        <div class="product11">
                            <label>NAME OF USER'S STORES</label>
                        </div>

                    </div>
                    <div class="home_rows_one2">
                        <div class="pic12">
                            <?php echo \Fuel\Core\Asset::img('/Products/Row1/product2.gif')?>
                        </div>
                        <div class="product12">
                            <label>NAME OF USER'S STORES</label>
                        </div>

                    </div>
                </div>

                <div class="home_rows_one_right">
                    <div class="home_rows_one3">
                        <div class="pic13">
                            <?php echo \Fuel\Core\Asset::img('/Products/Row1/product3.gif')?>
                        </div>
                        <div class="product13">
                            <label>NAME OF USER'S STORES</label>
                        </div>

                    </div>

                </div>
            </div>


        </div>

        <div class="Home_Latest_Member_title">
            <div class="Home_Latest_Member_text">
                <label>Comments</label>
            </div>
            <div class="Home_Latest_Member_line">

            </div>
        </div>

        <div class="content_right_comments">
            <div class="comment_sign_in">
                <a href="">Sign in </a><label>now to post a comment!</label>
            </div>
            <div class="comment_main">
                <div class="comment_main_pic">

                    <?php echo \Fuel\Core\Asset::img('/Profile/profile_pic_small.png')?>
                </div>
                <div class="comment_main_input">
                    <div class="comment_main_input_text">
                        <label> Vegas_Craig</label> 3 minutes ago
                        <input type="text" placeholder="Comment will go here..."/>
                    </div>
                    <div class="comment_main_input_button">
                        <input type="submit" value="Submit" />
                    </div>
                </div>



            </div>
            <div class="comment1">
                <div class="comment_small_pic">
                    <?php echo \Fuel\Core\Asset::img('/Profile/profile_pic_very_small.png')?>
                </div>
                <div class="comment_small_input">
                    <div class="comment_small_input_text">
                        <label> Vegas_Craig</label> 3 minutes ago
                        <input type="text" placeholder="Comment will go here..."/>
                    </div>
                    <div class="comment_small_input_button">
                        <input type="submit" value="Submit" />
                    </div>
                </div>

            </div>
            <div class="comment2">
                <div class="comment_very_small_pic">
                    <?php echo \Fuel\Core\Asset::img('/Profile/profile_pic_very_small.png')?>
                </div>
                <div class="comment_very_small_input">
                    <div class="comment_very_small_input_text">
                        <label> Vegas_Craig</label> 3 minutes ago
                        <input type="text" placeholder="Comment will go here..."/>
                    </div>
                    <div class="comment_very_small_input_button">
                        <input type="submit" value="Submit" />
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<div class="become_a_seller">
        <?php echo \Fuel\Core\Asset::img('become.png')?>
        <label class="become">Become a <a href="">SELLER</a> on <a href="">MadeByUs4U</a></label>
        <label class="once">Once you create your free account you will gain instant access to all of our sellers features!</label>
        <input type="submit" value="BECOME A SELLER!">


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

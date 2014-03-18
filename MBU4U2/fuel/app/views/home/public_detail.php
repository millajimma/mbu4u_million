<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Public Profile</title>
    <?php echo Asset::css('sellers_public_view_style.css')?>
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


                <a href="../sellerspublic/index" >
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
  
<div class="public_view_user">
<div class="public_view_user_name">
	<div class="public_view_user_pic">
        <?php echo \Fuel\Core\Asset::img('/Profile/Profile_pic.gif')?>
	
     </div>
    <div class="public_view_name">
        User Name<br>
        <label> Las Vegas, NV <br>
        Member Since: Aug 4, 2010</label>
	
     </div>
     <div class="public_view_rate">

     </div>
</div>
<div class="profile_bio">
	    <div class="profile_bio_title">
                <label>Bio</label>
                <div class="profile_bio_right">
                    <label>Share &</label>  Connect

                    <a href=""><?php echo Asset::img('social1.png')?></a>
                    <a href=""> <?php echo Asset::img('social2.png')?></a>
                    <a href=""><?php echo Asset::img('social3.png')?></a>
                </div>

        </div>
		<div class="profile_bio_body">
			<div class="profile_bio_body_discription">
			
			<div class="profile_bio_body_discription_up">
               <p>
                Lorem ipsum dolor site amet, consectetur adipisicing elit, sedet dolor et eius mod te mpor incidetness
                lorem ipsum dolor sitensits amet, consectetur adipisicing elit, sede do eiusmod tempor incidetness .
                lorem ipsum dolor site amet, consectetur adipisicing elit, sed do eiusmod tempor incidetne- ss, lorem ips um dolor site amet,
                consectetur adipisicing elit, sed dolor eiu smod dose tempor incidetne- sslorem ipsum dolor site a met,
                consectetur adipisicing elit, sed do eiusmod tempor incidetness. lorem ipsum en dolor site amet,
                consectetur adipisicing elit, sed dolor eiusmod tempor. Dolor site am et, consectetur adipisicing elit, sed do eiusmod.
               </p>
            </div>
	         <div class="profile_bio_body_discription_bottom">
                 <div class="send_friend_request">
                     <input type="submit" name="submit" value=""/>
                     <a href="">Find more friends now by</a> <a href=""> <?php echo \Fuel\Core\Asset::img('become.png')?></a>
                 </div>

			
			
	         </div>
			
	         </div>
			
			<div class="profile_bio_body_video">
			
			<?php echo \Fuel\Core\Asset::img('/Sellers_stores/video_small.gif')?>
			
	         </div>
			
	         </div>
        </div>
</div>
	<div class="public_view_sellers_store_title">
	<div class="public_view_sellers_store_text">
        <label>Seller's Stores</label>
		
	</div>
	<div class="public_view_sellers_store_line">
		
	</div>
	</div>




        <div class="public_view_rows">
            <div class="public_view_one_left">
                <div class="public_view_one1">
                    <div class="pic11">
                        <?php echo Asset::img('Sellers_stores/sellers_stores_1.gif')?>
                    </div>

                </div>
                <div class="public_view_one2">
                    <div class="pic12">
                        <?php echo Asset::img('Sellers_stores/sellers_stores_2.gif')?>
                    </div>

                </div>
            </div>

            <div class="public_view_one_right">
                <div class="public_view_one3">
                    <div class="pic13">
                        <?php echo Asset::img('Sellers_stores/sellers_stores_3.gif')?>
                    </div>

                </div>
                <div class="public_view_one4">
                    <div class="pic14">
                        <?php echo Asset::img('Sellers_stores/sellers_stores_4.gif')?>
                    </div>

                </div>
            </div>
        </div>


  <div class="public_view_sellers_comment_title">
	<div class="public_view_sellers_comment_text">
		<label>COMMENTS</label>
	</div>
	<div class="public_view_sellers_comment_line">
		
	</div>
	</div>

        <div class="comment">
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

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>MadeByUs4U</title>
    <?php echo Asset::css('default.css')?>
    <?php echo Asset::css('light.css')?>
    <?php echo Asset::css('dark.css')?>
    <?php echo Asset::css('bar.css')?>
    <?php echo Asset::css('nivo-slider.css')?>
    <?php echo Asset::css('style1.css')?>
    <?php echo Asset::css('style.css')?>
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
    NOT A MEMBER?<a href="signup/index">SIGN UP</a>
</div>
<div class="bannerlinks2">

    <div class="logo">
        <?php echo Asset::img('logo.gif'); ?>

    </div>

    <div class="bannerLink">
        <a href="" >
            <div class="bannerLinkCollection" >
                <label>CAREGORIES</label>
            </div>
        </a>

        <a href="" >
            <div class="bannerLinkCollectionDownArrow" >

            </div>
        </a>
        <a href="" >
            <div class="bannerLinkCollection" >
                <label>SHOP</label>
            </div>
        </a>

        <a href="sellerspublic/index"  >
            <div class="bannerLinkCollection" >
                <label>SELL</label>
            </div>
        </a>
        <a href="publicdetail/view" >
            <div class="bannerLinkCollection" >
                <label>BILL</label>
            </div>
        </a>

    </div>
</div>
<div class="section_header">

    <div class="slider_main">

        <div id="wrapper">
            <div class="slider-wrapper theme-default">
                <div id="slider" class="nivoSlider">
                    <?php echo Asset::img('Header1.gif')?>
                    <?php echo Asset::img('Header2.gif')?>
                    <?php echo Asset::img('Header3.gif')?>

                </div>
            </div>

        </div>
    </div>


    <div class="join_our_community">


        <div class="register1">
            <form method="post" action="<?php echo ('profile/index')?>">
                <div class="user_name">
                    <label>Username</label><input type="text"  name="username"/>
                </div>
                <div class="password">
                    <label>Password</label><input type="password"  name="Password"/>
                </div>
                <div class="remember_me">
                    <label>	<input type="checkbox"  value="Rememberme"/>Remember me</label>
                </div>
                <p>Forget Your Password or Username?</p>
                <div class="login_button">
                    <input type="submit" name="submit" value="Login"/>
                </div>
            </form>
        </div>
        <div class="register2">
            <div class="sign_up_now">
                <label>Sign Up Now!</label>
            </div>
            <div class="click_here_to_create">
                <label>Click here to create your account today.</label>
            </div>
            <div class="click_here_to_go">
                <form method="post" action="<?php echo ('signup/index')?>">
                <input type="submit" name="submit" value="Click here to go!" />
                </form>
            </div>
        </div>
    </div>

</div>

<div class="home_rows">
    <div class="home_rows_one_left">
        <div class="home_rows_one1">
            <div class="pic11">
                <?php echo Asset::img('Products/Row1/product1.gif')?>
            </div>
            <div class="product11">
                <label>NAME OF PRODUCT GOES HERE.</label>
            </div>
            <div class="product11_rating">
                <label>
                    Seller: Vegas_Craig     USD: $49.99
                </label>
            </div>
        </div>
        <div class="home_rows_one2">
            <div class="pic12">
                <?php echo Asset::img('Products/Row1/product2.gif')?>
            </div>
            <div class="product12">
                <label>NAME OF PRODUCT GOES HERE.</label>
            </div>
            <div class="product12_rating">
                <label>
                    Seller: Vegas_Craig     USD: $49.99
                </label>
            </div>
        </div>
    </div>

    <div class="home_rows_one_right">
        <div class="home_rows_one3">
            <div class="pic13">
                <?php echo Asset::img('Products/Row1/product3.gif')?>
            </div>
            <div class="product13">
                <label>NAME OF PRODUCT GOES HERE.</label>
            </div>
            <div class="product13_rating">
                <label>
                    Seller: Vegas_Craig     USD: $49.99
                </label>
            </div>
        </div>
        <div class="home_rows_one4">
            <div class="pic14">
                <?php echo Asset::img('Products/Row1/product4.gif')?>
            </div>
            <div class="product14">
                <label>NAME OF PRODUCT GOES HERE.</label>
            </div>
            <div class="product14_rating">
                <label>
                    Seller: Vegas_Craig     USD: $49.99
                </label>
            </div>
        </div>
    </div>
</div>

<div class="home_rows">
    <div class="home_rows_two_left">
        <div class="home_rows_two1">
            <div class="pic21">
                <?php echo Asset::img('Products/Row2/product21.gif')?>
            </div>
            <div class="product21">
                <label>NAME OF PRODUCT GOES HERE.</label>
            </div>
            <div class="product21_rating">
                <label>
                    Seller: Vegas_Craig     USD: $49.99
                </label>
            </div>
        </div>
        <div class="home_rows_two2">
            <div class="pic22">
                <?php echo Asset::img('Products/Row2/product22.gif')?>
            </div>
            <div class="product22">
                <label>NAME OF PRODUCT GOES HERE.</label>
            </div>
            <div class="product22_rating">
                <label>
                    Seller: Vegas_Craig     USD: $49.99
                </label>
            </div>
        </div>
    </div>

    <div class="home_rows_two_right">
        <div class="home_rows_two3">
            <div class="pic23">
                <?php echo Asset::img('Products/Row2/product23.gif')?>
            </div>
            <div class="product23">
                <label>NAME OF PRODUCT GOES HERE.</label>
            </div>
            <div class="product23_rating">
                <label>
                    Seller: Vegas_Craig     USD: $49.99
                </label>
            </div>
        </div>
        <div class="home_rows_two4">
            <div class="pic24">
                <?php echo Asset::img('Products/Row2/product24.gif')?>
            </div>
            <div class="product24">
                <label>NAME OF PRODUCT GOES HERE.</label>
            </div>
            <div class="product24_rating">
                <label>
                    Seller: Vegas_Craig     USD: $49.99
                </label>
            </div>
        </div>
    </div>
</div>
<div class="home_rows">
    <div class="home_rows_three_left">
        <div class="home_rows_three1">
            <div class="pic31">
                <?php echo Asset::img('Products/Row3/product31.gif')?>
            </div>
            <div class="product31">
                <label>NAME OF PRODUCT GOES HERE.</label>
            </div>
            <div class="product31_rating">
                <label>
                    Seller: Vegas_Craig     USD: $49.99
                </label>
            </div>
        </div>
        <div class="home_rows_three2">
            <div class="pic32">
                <?php echo Asset::img('Products/Row3/product32.gif')?>
            </div>
            <div class="product32">
                <label>NAME OF PRODUCT GOES HERE.</label>
            </div>
            <div class="product32_rating">
                <label>
                    Seller: Vegas_Craig     USD: $49.99
                </label>
            </div>
        </div>
    </div>
    <div class="home_rows_three_right">
        <div class="home_rows_three3">
            <div class="pic33">
                <?php echo Asset::img('Products/Row3/product33.gif')?>
            </div>
            <div class="product33">
                <label>NAME OF PRODUCT GOES HERE.</label>
            </div>
            <div class="product33_rating">
                <label>
                    Seller: Vegas_Craig     USD: $49.99
                </label>
            </div>
        </div>
        <div class="home_rows_three4">
            <div class="pic34">

                <?php echo Asset::img('Products/Row3/product34.gif')?>
            </div>
            <div class="product34">
                <label>NAME OF PRODUCT GOES HERE.</label>
            </div>
            <div class="product34_rating">
                <label>
                    Seller: Vegas_Craig     USD: $49.99
                </label>
            </div>
        </div>
    </div>
</div>

<div class="Home_Latest_Member_title">
    <div class="Home_Latest_Member_text">
        <label>Latest Members</label>
    </div>
    <div class="Home_Latest_Member_line">

    </div>
</div>
<div class="latest_members">
    <div class="latest_members_one1">
        <div class="members_pic1">
            <?php echo Asset::img('Member1.gif')?>
        </div>
        <div class="members_seller_name1">
            <label>
                Seller: Vegas_Craig     USD: $49.99
            </label>
        </div>
    </div>
    <div class="latest_members_one2">
        <div class="members_pic2">
            <?php echo Asset::img('Member2.gif')?>
        </div>
        <div class="members_seller_name2">
            <label>
                Seller: Vegas_Craig     USD: $49.99
            </label>
        </div>
    </div>
    <div class="latest_members_one3">
        <div class="members_pic3">
            <?php echo Asset::img('Member3.gif')?>
        </div>
        <div class="members_seller_name3">
            <label>
                Seller: Vegas_Craig     USD: $49.99
            </label>
        </div>
    </div>
    <div class="latest_members_one4">
        <div class="members_pic4">
            <?php echo Asset::img('Member4.gif')?>
        </div>
        <div class="members_seller_name4">
            <label>
                Seller: Vegas_Craig     USD: $49.99
            </label>
        </div>
    </div>
    <div class="latest_members_one5">
        <div class="members_pic5">
            <?php echo Asset::img('Member5.gif')?>
        </div>
        <div class="members_seller_name5">
            <label>
                Seller: Vegas_Craig     USD: $49.99
            </label>
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

<?php echo Asset::js('jquery-1.7.1.min.js')?>
<?php echo Asset::js('jquery.nivo.slider.js')?>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
</script>
</body>
</html>

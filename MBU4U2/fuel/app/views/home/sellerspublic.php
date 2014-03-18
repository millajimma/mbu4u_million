<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>public profile</title>

    <?php echo \Fuel\Core\Asset::css('sellers_public_style.css')?>
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

            <a href="" >
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

        <div class="become_a_seller">
            <?php echo \Fuel\Core\Asset::img('become.png')?>
            <label class="become">Become a <a href="">SELLER</a> on <a href="">MadeByUs4U</a></label>
            <label class="once">Once you create your free account you will gain instant access to all of our sellers features!</label>
            <input type="submit" value="BECOME A SELLER!">


        </div>
       <div class="stores_title">
        <label>User's Stores</label>
        <div class="stores_title_right">
            <label>Share &</label>  Connect

            <a href=""><?php echo Asset::img('social1.png')?></a>
            <a href=""> <?php echo Asset::img('social2.png')?></a>
            <a href=""><?php echo Asset::img('social3.png')?></a>
        </div>
        </div>


        <div class="latest_members">
            <div class="latest_members_one1">

                <div class="members_pic1">

                    <?php

                    $image= Asset::img('profilefriends1.gif');
                    echo Html::anchor("publicdetail/view", $image) ?>



                </div>
                <div class="members_seller_name1">
                    <div class="product_name">
                     <label>Product Name</label><br>
                     Member Since: Aug 4,2010
                    </div>
                    <label>Rating:</label><br>
                    <label>Followers(18)</label><br>
                     <label>Product(3)</label><br>
                </div>
            </div>
            <div class="latest_members_one2">
                <div class="members_pic2">
                    <?php

                    $image= Asset::img('profilefriends2.gif');
                    echo Html::anchor("publicdetail/view", $image) ?>


                </div>
                <div class="members_seller_name2">
                    <div class="product_name">
                        <label>Product Name</label><br>
                        Member Since: Aug 4,2010
                    </div>
                    <label>Rating:</label><br>
                    <label>Followers(18)</label><br>
                    <label>Product(3)</label><br>
                </div>
            </div>
            <div class="latest_members_one3">
                <div class="members_pic3">
                    <?php

                    $image= Asset::img('profilefriends3.gif');
                    echo Html::anchor("publicdetail/view", $image) ?>
                </div>
                <div class="members_seller_name3">
                    <div class="product_name">
                        <label>Product Name</label><br>
                        Member Since: Aug 4,2010
                    </div>
                    <label>Rating:</label><br>
                    <label>Followers(18)</label><br>
                    <label>Product(3)</label><br>
                </div>
            </div>
            <div class="latest_members_one4">
                <div class="members_pic4">
                    <?php

                    $image= Asset::img('profilefriends4.gif');
                    echo Html::anchor("publicdetail/view", $image) ?>
                </div>
                <div class="members_seller_name4">
                    <div class="product_name">
                        <label>Product Name</label><br>
                        Member Since: Aug 4,2010
                    </div>
                    <label>Rating:</label><br>
                    <label>Followers(18)</label><br>
                    <label>Product(3)</label><br>
                </div>
            </div>
            <div class="latest_members_one5">
                <div class="members_pic5">
                    <?php

                    $image= Asset::img('profilefriends5.gif');
                    echo Html::anchor("publicdetail/view", $image) ?>
                </div>
                <div class="members_seller_name5">
                    <div class="product_name">
                        <label>Product Name</label><br>
                        Member Since: Aug 4,2010
                    </div>
                    <label>Rating:</label><br>
                    <label>Followers(18)</label><br>
                    <label>Product(3)</label><br>
                </div>
            </div>
        </div>


        <div class="latest_members">
            <div class="latest_members_one1">
                <div class="members_pic1">
                    <?php

                    $image= Asset::img('profilefriends1.gif');
                    echo Html::anchor("publicdetail/view", $image) ?>
                </div>
                <div class="members_seller_name1">
                    <div class="product_name">
                        <label>Product Name</label><br>
                        Member Since: Aug 4,2010
                    </div>
                    <label>Rating:</label><br>
                    <label>Followers(18)</label><br>
                    <label>Product(3)</label><br>
                </div>
            </div>
            <div class="latest_members_one2">
                <div class="members_pic2">
                    <?php

                    $image= Asset::img('profilefriends2.gif');
                    echo Html::anchor("publicdetail/view", $image) ?>
                </div>
                <div class="members_seller_name2">
                    <div class="product_name">
                        <label>Product Name</label><br>
                        Member Since: Aug 4,2010
                    </div>
                    <label>Rating:</label><br>
                    <label>Followers(18)</label><br>
                    <label>Product(3)</label><br>
                </div>
            </div>
            <div class="latest_members_one3">
                <div class="members_pic3">
                    <?php

                    $image= Asset::img('profilefriends3.gif');
                    echo Html::anchor("publicdetail/view", $image) ?>
                </div>
                <div class="members_seller_name3">
                    <div class="product_name">
                        <label>Product Name</label><br>
                        Member Since: Aug 4,2010
                    </div>
                    <label>Rating:</label><br>
                    <label>Followers(18)</label><br>
                    <label>Product(3)</label><br>
                </div>
            </div>
            <div class="latest_members_one4">
                <div class="members_pic4">
                    <?php

                    $image= Asset::img('profilefriends4.gif');
                    echo Html::anchor("publicdetail/view", $image) ?>
                </div>
                <div class="members_seller_name4">
                    <div class="product_name">
                        <label>Product Name</label><br>
                        Member Since: Aug 4,2010
                    </div>
                    <label>Rating:</label><br>
                    <label>Followers(18)</label><br>
                    <label>Product(3)</label><br>
                </div>
            </div>
            <div class="latest_members_one5">
                <div class="members_pic5">
                    <?php

                    $image= Asset::img('profilefriends5.gif');
                    echo Html::anchor("publicdetail/view", $image) ?>
                </div>
                <div class="members_seller_name5">
                    <div class="product_name">
                        <label>Product Name</label><br>
                        Member Since: Aug 4,2010
                    </div>
                    <label>Rating:</label><br>
                    <label>Followers(18)</label><br>
                    <label>Product(3)</label><br>
                </div>
            </div>
        </div>

        <div class="latest_members">
            <div class="latest_members_one1">
                <div class="members_pic1">
                    <?php

                    $image= Asset::img('profilefriends1.gif');
                    echo Html::anchor("publicdetail/view", $image) ?>
                </div>
                <div class="members_seller_name1">
                    <div class="product_name">
                        <label>Product Name</label><br>
                        Member Since: Aug 4,2010
                    </div>
                    <label>Rating:</label><br>
                    <label>Followers(18)</label><br>
                    <label>Product(3)</label><br>
                </div>
            </div>
            <div class="latest_members_one2">
                <div class="members_pic2">
                    <?php

                    $image= Asset::img('profilefriends2.gif');
                    echo Html::anchor("publicdetail/view", $image) ?>
                </div>
                <div class="members_seller_name2">
                    <div class="product_name">
                        <label>Product Name</label><br>
                        Member Since: Aug 4,2010
                    </div>
                    <label>Rating:</label><br>
                    <label>Followers(18)</label><br>
                    <label>Product(3)</label><br>
                </div>
            </div>
            <div class="latest_members_one3">
                <div class="members_pic3">
                    <?php

                    $image= Asset::img('profilefriends3.gif');
                    echo Html::anchor("publicdetail/view", $image) ?>
                </div>
                <div class="members_seller_name3">
                    <div class="product_name">
                        <label>Product Name</label><br>
                        Member Since: Aug 4,2010
                    </div>
                    <label>Rating:</label><br>
                    <label>Followers(18)</label><br>
                    <label>Product(3)</label><br>
                </div>
            </div>
            <div class="latest_members_one4">
                <div class="members_pic4">
                    <?php

                    $image= Asset::img('profilefriends4.gif');
                    echo Html::anchor("publicdetail/view", $image) ?>
                </div>
                <div class="members_seller_name4">
                    <div class="product_name">
                        <label>Product Name</label><br>
                        Member Since: Aug 4,2010
                    </div>
                    <label>Rating:</label><br>
                    <label>Followers(18)</label><br>
                    <label>Product(3)</label><br>
                </div>
            </div>
            <div class="latest_members_one5">
                <div class="members_pic5">
                    <?php

                    $image= Asset::img('profilefriends5.gif');
                    echo Html::anchor("publicdetail/view", $image) ?>
                </div>
                <div class="members_seller_name5">
                    <div class="product_name">
                        <label>Product Name</label><br>
                        Member Since: Aug 4,2010
                    </div>
                    <label>Rating:</label><br>
                    <label>Followers(18)</label><br>
                    <label>Product(3)</label><br>
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

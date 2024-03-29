<!DOCTYPE html>
<html <?php echo language_attributes(); ?>>

<head>
    <meta charset=" <?php echo bloginfo('charset') ?>">
    <link rel="icon" href="assets/img/fevicon.png">


    <!--Google Fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Khula:wght@400;600&amp;family=Lustria&amp;family=Poppins:wght@400;500;600&amp;display=swap"
        rel="stylesheet">

    <?php echo wp_head();  ?>


</head>

<body class='sc5' <?php echo body_class()?>>
    <!-- preloader area end -->
    <div class="body-overlay" id="body-overlay"></div>
    <header class="navbar-area pt-5">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid nav-container">
                <div class="responsive-mobile-menu">
                    <button class="menu toggle-btn d-block d-lg-none" data-target="#themefie_main_menu"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button>
                </div>
                <div class="lawel-header-left">
                    <div class="side-menu-bar d-inline-flex">
                        <i id="side-menu-open" class="fa fa-bars"></i>
                    </div>
                    <a href="home-1.html" class="logo">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="img">
                    </a>
                    <div class="nav-right-part">
                        <ul class="social-area">
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="search" href="#"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="themefie_main_menu">

                    <?php 
                        wp_nav_menu([
                            'theme_location' => 'primary_menu',
                            'conatiner' => '',
                            'menu_class' => 'navbar-nav menu-open text-center',
                            'menu_id' => '',
                        ])
                    ?>

                </div>
                <div class="nav-right-part text-end nav-right-part-desktop">
                    <ul>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a class="search" href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- navbar end -->

    <div class="banner-logo-area">
        <img src="<?php echo get_template_directory_uri()?>/assets/img/logo.png" alt="img">
    </div>

    <!-- Banner Area Start-->
    <section class="banner-area">
        <div class="container">
            <div class="banner-slider">
                <div class="item"
                    style="background: url(<?php echo get_template_directory_uri() ?>/assets/img/banner/slider-1.jpg)">
                    <div class="banner-inner">
                        <h4>Fashion</h4>
                        <h2>Dining Room Reveal</h2>
                        <a href="single.html" class="btn readmore-button">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- latest post Area Start-->
    <section class="latest-post-area text-center pd-top-65 pd-bottom-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8">


                    <div class="blog-post-item-wrap">
                        <div class="post-content">
                            <h6>Fashion</h6>
                            <h4><a href="single.html">Three Favorite Swimwear</a></h4>
                            <div class="post-meta">
                                <ul>
                                    <li>By</li>
                                    <li><a href="#">Alison morgan</a></li>
                                    <li>May 8, 2017</li>
                                </ul>
                            </div>
                        </div>
                        <div class="thumb pd-top-45">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/post/3.jpg" alt="img">
                        </div>
                        <p class="text-start pt-4 pb-3">Nam rutrum suscipit orci ut ultrices. Sedarcu orci, quis augue
                            porta feugiat posuere nisi. Fusce fringilla ametiam sit ameeque vitae elit condimentum
                            auctor. Sed in turpis pulvinar, euismod arcu condimentum, gravida nisi. Proin vitae elit
                            felis. Ut lobor tis elit arcu, at maximus dolor laoreet vel. Vestibulum elementum sem
                            libero, nec euismod velit ullamcorper vitae.</p>
                        <a class="link-btn" href="single.html">Read More</a>
                    </div>


                    <div class="row">

                        <?php while(have_posts()) : the_post();?>


                        <div class="col-lg-6">
                            <?php if(has_post_thumbnail()) {  ?>

                            <div class="thumb pb-lg-3 pb-5">
                                <?php the_post_thumbnail('full') ?>
                            </div>

                            <?php } ?>
                            <div class="blog-post-item-wrap">
                                <div class="post-content">
                                    <h6>Fashion</h6>
                                    <h4><a href="single.html"><?php echo the_title() ?></a></h4>
                                    <p><?php echo the_content() ?></p>
                                    <div class="post-meta">
                                        <ul>
                                            <li>By</li>
                                            <li><a href="#"><?php echo the_author() ?></a></li>
                                            <li><?php echo the_date() ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php endwhile;?>





                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="pagination-area text-start">
                                <a href="single-blog-3.html">Older post</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-4">
                    <div class="sidebar-area text-center">


                        <div class="widget widget_author_bio p-0 border-0">


                            <?php 
                            
                          $author = new WP_Query([
                              'post_type' => 'zubu_author',
                          ]);
                            
                            ?>

                            <?php  while( $author -> have_posts() ) :  $author  -> the_post()?>


                            <div class="thumb">
                                <?php echo the_post_thumbnail() ?>
                            </div>
                            <div class="bio-data">
                                <h4> <?php echo the_content() ?></h4>
                                <h2> <?php echo the_title() ?></h2>
                            </div>
                        </div>

                        <?php endwhile;?>




                        <!-- <div class="widget widget-subscribe-form">
                            <h2 class="widget-title">Subscribe</h2>
                            <p>Get Lawel Straight Your Inbox.</p>
                            <div class="single-input-wrap">
                                <input type="email" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="widget author-insta-bio p-0 border-0">
                            <div class="thumb">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/widget/insta_widget.jpg"
                                    alt="img">
                            </div>
                            <div class="insta-bio-data">
                                <h4><a href="#"><i class="fab fa-instagram"></i></a></h4>
                                <h2>Instagram</h2>
                                <a href="#" class="insta-link">@lawelblog</a>
                            </div>
                        </div>
                        <div class="widget social-widget">
                            <h2 class="widget-title">Follow me</h2>
                            <ul class="social-area">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <div class="widget ads-widget p-0 border-0">
                            <div class="thumb">
                                <a href="#"><img
                                        src="<?php echo get_template_directory_uri() ?>/assets/img/widget/ads.jpg"
                                        alt="img"></a>
                            </div>
                        </div>
                        <div class="widget category-widget">
                            <h2 class="widget-title">Categories</h2>
                            <div class="cat-name-list">
                                <ul>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Travel</a></li>
                                    <li><a href="#">Health</a></li>
                                    <li><a href="#">Food</a></li>
                                </ul>
                            </div>
                        </div>
 -->

                        <?php

                          dynamic_sidebar('rb')
 ?>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- latest post Area End -->

    <!-- instagram Area Start-->
    <div class="instagram-area">
        <div class="instagram-slider owl-carousel">
            <div class="item">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram/1.jpg" alt="img">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram/2.jpg" alt="img">
                </a>
            </div>

            <div class="item">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram/3.jpg" alt="img">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram/4.jpg" alt="img">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram/5.jpg" alt="img">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram/6.jpg" alt="img">
                </a>
            </div>
        </div>
    </div>
    <!-- instagram Area End -->

    <!-- footer area start -->
    <footer class="footer-area text-center">
        <div class="footer-inner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="footer-widget widget">
                            <h4 class="widget-title">Follow me</h4>
                            <ul class="social-area">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-widget widget">
                            <div class="footer-logo d-inline-block">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-2.png" alt="img">
                            </div>
                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non
                                mauris vitae erat consequat auctor eu in elit. Class aptent taciti disse in orci enim.
                            </p>
                            <form>
                                <div class="single-input-wrap mb-0">
                                    <input type="email" placeholder="Enter Email">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-widget widget widget_link">
                            <h4 class="widget-title">Popular tags</h4>
                            <ul>
                                <li><a href="home-3.html">#TRAVEL</a></li>
                                <li><a href="home-3.html">#LIFE</a></li>
                                <li><a href="home-3.html">#LAKE</a></li>
                                <li><a href="home-3.html">#VLOGOS</a></li>
                                <li><a href="home-3.html">#ALTEGO</a></li>
                                <li><a href="home-3.html">#MONACO</a></li>
                                <li><a href="home-3.html">#SELECTED</a></li>
                                <li><a href="home-3.html">#HELLO</a></li>
                                <li><a href="home-3.html">#ITSON</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- back-to-top end -->
    <div class="back-to-top">
        <span class="back-top"><i class="fas fa-angle-double-up"></i></span>
    </div>



    <!-- all plugins here -->

    <?php echo wp_footer(); ?>
</body>

<!-- Mirrored from www.themefie.com/html/lawel/home-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Oct 2021 13:31:52 GMT -->

</html>
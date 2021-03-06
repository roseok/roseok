<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Rose Stories</title>
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css" />
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,700,300italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="css/animat/animate.min.css" />
    <link rel="stylesheet" href="css/fancybox/jquery.fancybox.css" />
    <link rel="stylesheet" href="css/nivo-lightbox/nivo-lightbox.css" />
    <link rel="stylesheet" href="css/themes/default/default.css" />
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.css" />
    <link rel="stylesheet" href="css/owl-carousel/owl.theme.css" />
    <link rel="stylesheet" href="css/owl-carousel/owl.transitions.css">

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
</head>
<body>


<div class='preloader'><div class='loaded'>&nbsp;</div></div>
<header id="home" class="header">
    <div class="main_menu_bg navbar-fixed-top wow slideInDown" data-wow-duration="1s">
        <div class="container">
            <div class="row">
                <div class="nave_menu">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a href="welcome">Home</a></li>
                                    <li><a href="welcome?#features">FEATURES</a></li>
                                    <li><a href="welcome?#special">PRICINGS</a></li>
                                    <li><a href="welcome?#abouts">CLIENTS</a></li>
                                    <li><a href="welcome?#footer">FAQ</a></li>

                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div>
            </div><!--End of row -->

        </div><!--End of container -->

    </div>
</header> <!--End of header -->


<section id="menus" class="menus sections">
    <div class="container">

    </div>
</section>



<!-- footer Section -->

<footer id="footer" class="footer">
    <div class="container">
        <div class="row">

            <div class="col-sm-5 col-sm-offset-7 col-xs-10 col-xs-offset-2">
                <div class="contact_area wow slideInLeft" data-wow-duration="2s">
                    <div class="head_title text-center">
                        <h2>Contact</h2>
                        <div class="separetor"></div>
                    </div>

                    <div class="main_contact_content">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="single_contact text-left">
                                    <h5>ADRES </h5>
                                    <span>ROSE stories BV</span>
                                    <span>Hoogte Kadijk 143 F19</span>
                                    <span>1018 BH Amsterdam</span>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="single_contact text-left">
                                    <h5>IBAN </h5>
                                    <span>NL64 TRIO 0254 4289 16</span>
                                    <span>KvK 60967242</span>
                                </div>
                            </div>
                        </div>

                        <div class="contact_form_area">
                            <?php if(isset($meskey))
                                echo $meskey[0];
                            ?>
                            <h3>Contact form</h3>
                            <form method="POST" action="<?= base_url('sendmail');?>" id="formid" name="formidn">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="first name">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" rows="3" placeholder="Message"></textarea>
                                        </div>


                                    </div>

                                    <div class="form_btn_area text-center">
                                        <input type="submit" value="Send">
                                        <!--                                            <a href="" class="btn" onclick="document.formidn.submit;">Send</a>-->
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>


        <div class="row">
            <div class="copyright_text_area">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="single_footer text-right wow zoomIn" data-wow-duration="2s">
                        <p>Made with <i class="fa fa-heart"></i> by <a href="http://bootstrapthemes.co">Bootstrap Themes</a>2016. All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="single_footer text-right">

                        <div class="footer_socail wow zoomIn" data-wow-duration="1.5s">
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>



<!-- STRAT SCROLL TO TOP -->

<div class="scrollup">
    <a href="#"><i class="fa fa-chevron-up"></i></a>
</div>






<script type="text/javascript" src="js/jquery/jquery.js"></script>

<script type="text/javascript" src="js/script.js"></script>

<script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>

<script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js"></script>

<script type="text/javascript" src="js/nivo-lightbox/nivo-lightbox.min.js"></script>

<script type="text/javascript" src="js/owl-carousel/owl.carousel.min.js"></script>



<script type="text/javascript" src="js/jquery-easing/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/wow/wow.min.js"></script>
</body>
</html>
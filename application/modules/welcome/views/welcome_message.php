<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CrystalLine Interiors | Home
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="icon" type="image/png" href="https://cocu.io/wp-content/uploads/2018/05/cropped-COCU.IO-C-favicon.png" />
        <meta
            name="keywords"
            content="CrystalLine Interiors"/>
        <link href="<?=base_url('assets/front/')?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="<?=base_url('assets/front/')?>css/font-awesome.css" rel="stylesheet">

        <link rel="stylesheet" href="<?=base_url('assets/front/')?>css/swipebox.css">
        <!-- gallery css -->

        <!-- testimonials css -->
        <link
            rel="stylesheet"
            href="<?=base_url('assets/front/')?>css/flexslider.css"
            type="text/css"
            media="screen"
            property=""/>
        <!-- flexslider css -->
        <!-- //testimonials css -->

        <link href="<?=base_url('assets/front/')?>css/style.css" rel="stylesheet" type="text/css" media="all"/>

        <!--fonts-->
        <link
            href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,700"
            rel="stylesheet"
            type="text/css">
        <link
            href="http://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext"
            rel="stylesheet">
        <!--//fonts-->
        <style>
            .affix {
                background-color: #000!important;
                width: 100%;
                left: 0;
                top: 0;
                padding: 10px 0 !important;
            }
            .error{
                color:red;
            }
        </style>
    </head>

    <body data-spy="scroll" data-target="#primary_nav" data-offset="50">
    <div id="contact" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header modal-head">
                <div class="modal-logo">
                    <p>Crystal <br>Interiors</p>
                </div>
                <p class="chat-head">CrystalLine Interiors <br> <span>Budget-friendly interior designing </span></p>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              
            </div>
            <div class="modal-body">
                <p>Get exclusive offers on Interior Designing. Talk to our representatives for the best deals.</p>
                <div class="row">
                    <div class="col-xs-9">
                        <input type="text" class="form-control send-text" id="mobile_number" placeholder="Type your message">
                    </div>
                    <div class="col-xs-3">
                        <button class="btn send-btn"><i class="fa fa-paper-plane" aria-hidden="true" onclick="gotoWhatsapp()"></i></button>
                    </div>
                </div>
               
            </div>
            
            </div>

        </div>
        </div>

            <!-- banner -->
            <div class="main_section_agile" id="home" >
                <div class="agileits_w3layouts_banner_nav">

                    <nav class="navbar navbar-default " data-spy="affix" data-offset-top="10" id="primary_nav">
                        <div class="container">
                            <div class="navbar-header navbar-left">
                                <button
                                    type="button"
                                    class="navbar-toggle collapsed"
                                    data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <h1>
                                    <a class="navbar-brand" href="<?=base_url()?>">
                                        CrystalLine Interiors<i class="glyphicon glyphicon-lamp" aria-hidden="true"></i>
                                    </a>
                                </h1>

                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div
                                class="collapse navbar-collapse navbar-right"
                                id="bs-example-navbar-collapse-1">
                                <nav class="link-effect-2" id="link-effect-2">
                                    <ul class="nav navbar-nav">
                                        <li class="active">
                                            <a href="<?=base_url()?>" class="effect-3">Home</a>
                                        </li>
                                        <li>
                                            <a href="#about" class="effect-3 scroll">About</a>
                                        </li>
                                        <li>
                                            <a href="#services" class="effect-3 scroll">Services</a>
                                        </li>
                                        <li>
                                            <a href="#portfolio" class="effect-3 scroll">Portfolio</a>
                                        </li>
                                        <li>
                                            <a href="#client" class="effect-3 scroll">Clients</a>
                                        </li>
                                        <li>
                                            <a href="#contact" class="effect-3 scroll">Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </nav>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="banner_top">
            <div class="slider">
                <div class="wrapper">

                    <!-- Slideshow 3 -->
                    <ul class="rslides" id="slider">
                    <?php foreach($mainslider as $slider){ ?>
                        <li style="background:url('<?=base_url('assets/uploads/files/').$slider->image?>')">
                            <div class="agile_banner_text_info " >
                                <h2><?=$slider->heading?></h2>
                                <p><?=$slider->title?></p>
                                <!-- <a href="#">Read More</a>
						<a href="#contact" class="scroll">Contact Us</a> -->
                            </div>
                        </li>
                    <?php }?>
                       
                    </ul>
                    <!-- Slideshow 3 Pager -->
                    <ul id="slider3-pager">
                    <?php foreach($mainslider as $slider){ ?>
                        <li>
                            <a href="#"><img src="<?=base_url('assets/uploads/files/').$slider->image?>" alt="" style="width:100px;height:100px"/></a>
                        </li>
                    <?php }?>

                    </ul>
                </div>
            </div>
        </div>
        <!-- //banner -->

        <!---728x90--->

        <!-- About -->
        <div class="about" id="about">
            <div class="container">
                <h3 class="heading">About
                    <span>Us</span>
                </h3>
                <div class="about_grids">
                    <div class="col-md-6 about_left">
                        <h4>Crystalline is a young dynamic architecture and interior design firm with over 7 years of experience focused on high end residence, apartments, restaurant and hospitality project. </h4>
                        <p>We work passionately with our clients so as to achieve an efficient luxurious end result which they cherish for a lifetime. We like design to be visually powerful, intellectually elegant and above all timeless. We prioritize in bringing impact promised in the design to life, also peak on site efficiency with long term return for our clients.</p>
                        <p>We offer an excellent combination of flexibility, durability, and affordability for each client along with the superior products, professional services and aims to deliver perfect results each time. Every project is unique just as we all are unique and at Crystalline, we know for each project requires a tailored team approach. We assign a design director to manage your project who has the specific skill set to make your dreams come true.</p>
                       
                    </div>
                    <div class="col-md-6 about_right">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                           
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner aboutslider">
                            <?php foreach($about_slider as $key=>$slider){?>
                            
                                <div class="item <?php if($key == 0){echo "active";}?>">
                                    <img src="<?=base_url('assets/uploads/files/').$slider->image?>" alt="" style="width:100%;">
                                    <div class="carousel-caption banner-dott"></div>
                                </div>
                            <?php }?>

                                
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="fa fa-angle-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="fa fa-angle-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- //About -->

        <!---728x90--->

        <!-- Services -->
        <div class="services" id="services">
            <div class="container">
                <h3 class="heading">What We
                    <span>Do</span>
                </h3>
                <div class="servicegrids">
                <?php foreach($services as $s){?>
                    <div class="col-md-3 ser_grid1 icon1">
                        <p class="text-center">
                        <img src="<?=base_url('assets/uploads/files/').$s->icon?>" alt="" class="img-responsive">
                        </p>
                        <h3><?=$s->title?></h3>
                        <p><?=$s->data?></p>
                        
                    </div>
                <?php }?>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- //Services -->

        <!---728x90--->

        <!-- 360 degre  -->
        <section id="360container">
                    <iframe src="<?=base_url('welcome/view')?>" frameborder="0"></iframe>
        </section>
        <!-- 360 degre  end-->

        <!-- Stats -->
        <div class="section-w3ls stats" style="background:#ffc107">
            <div class="col-md-4 team_grid1">
                <h3 class="heading">
                    Fun <span> Facts</span>
                </h3>
                <h4>Interior designers Facts</h4>
                <p>The essence of interior deign will always be about people and how they live</p>
            </div>
            <div class="stats-agileinfo about-main">
                <div class="col-sm-2 col-xs-3 stats-grid text-center">
                    <div class="stats-icon">
                        <span class="fa fa-clock-o" aria-hidden="true"></span>
                    </div>
                    <div class="stats-right">
                        <div
                            class='numscroller numscroller-big-bottom'
                            data-slno='1'
                            data-min='0'
                            data-max='1073'
                            data-delay='.5'
                            data-increment="1">1073</div>
                        <h6>Hours work</h6>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-3 stats-grid text-center">
                    <div class="stats-icon">
                        <span class="fa fa-shield" aria-hidden="true"></span>
                    </div>
                    <div class="stats-right">
                        <div
                            class='numscroller numscroller-big-bottom'
                            data-slno='1'
                            data-min='0'
                            data-max='780'
                            data-delay='.5'
                            data-increment="1">780</div>
                        <h6>Projects</h6>
                    </div>

                </div>
                <div class="col-sm-2 col-xs-3 stats-grid text-center">
                    <div class="stats-icon">
                        <span class="fa fa-external-link" aria-hidden="true"></span>
                    </div>
                    <div class="stats-right">
                        <div
                            class='numscroller numscroller-big-bottom'
                            data-slno='1'
                            data-min='0'
                            data-max='630'
                            data-delay='.5'
                            data-increment="1">630</div>
                        <h6>Designs</h6>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-3 stats-grid text-center">
                    <div class="stats-icon">
                        <span class="fa fa-barcode" aria-hidden="true"></span>
                    </div>
                    <div class="stats-right">
                        <div
                            class='numscroller numscroller-big-bottom'
                            data-slno='1'
                            data-min='0'
                            data-max='623'
                            data-delay='.5'
                            data-increment="1">623</div>
                        <h6>Others</h6>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //Stats -->

        <!-- gallery -->
        <div class="gallery" id="portfolio">
            <div class="container">
                <h3 class="heading">Our
                    <span>Gallery</span>
                </h3>
                <div class="gallery_gds">
                <?php foreach($gallery as $g){?>
                    <div class="col-md-3 gal-w3l">
                        <div class="agileits-img">
                            <a
                                href="<?=base_url('assets/uploads/files/').$g->image?>"
                                class="swipebox">
                                <img class="img-responsive img-style row2" src="<?=base_url('assets/uploads/files/').$g->image?>" alt=""/>
                            </a>
                        </div>
                    </div>
                <?php }?>
                    
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- //gallery -->

        <!-- Clients -->
        <div class="clients-main" id="client">
            <div class="container">
                <!-- Owl-Carousel -->
                <h3 class="heading">Clients
                    <span>Words
                    </span>
                </h3>
                <div class="cli-ent">
                    <section class="slider">
                        <div class="flexslider">
                            <ul class="slides">
                            <?php foreach($feedback as $f){?>
                                <li>
                                    <div class="item g1">
                                        <div class="agile-dish-caption">
                                            <img class="lazyOwl" src="<?=base_url('assets/uploads/files/').$f->photo?>" alt="" onError="this.src='https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png';"/>
                                            <h4><?=$f->name?></h4>
                                        </div>

                                        <div class="clearfix"></div>
                                        <p class="para-w3-agile">
                                            <span class="fa fa-quote-left" aria-hidden="true"></span>
                                        <?=$f->review?>
                                        </p>
                                    </div>
                                </li>
                                <?php }?>
                              
                            </ul>
                        </div>
                    </section>
                </div>
                <!--// Owl-Carousel -->
            </div>
        </div>
        <!--// Clients -->

        <!-- contact -->
        <div class="contact" id="contact">
            <div class="container">
                <h3 class="heading">Get In
                    <span>Touch</span>
                </h3>
                <div class="agile-contact-form">
                    <div class="col-md-6 contact-form-left">
                        <div class="w3layouts-contact-form-top">
                            <h3>Find Us</h3>
                            <p><?=$settings->content?></p>
                        </div>

                        <!-- <div class="contact-form-top">
                            <h3>Address</h3>
                        </div>
                        <ul class="con_inner_text">
                            <li>
                                <span class="fa fa-map-marker" aria-hidden="true"></span>
                                <?=$settings->address?>
                            </li>
                            <li>
                                <span class="fa fa-envelope-o" aria-hidden="true"></span>
                                <a href="mailto:<?=$settings->email?>"><?=$settings->email?></a>
                            </li>
                            <li>
                                <span class="fa fa-phone" aria-hidden="true"></span>
                                <?=$settings->phone?>
                            </li>
                            <li>
                                <span class="fa fa-clock-o" aria-hidden="true"></span>
                                <?=$settings->worktime?>
                            </li>
                            <li>
                                <span class="fa fa-globe" aria-hidden="true"></span>
                                <a href="http://<?=$settings->webaddress?>"><?=$settings->webaddress?></a>
                            </li>
                        </ul> -->
                    </div>
                    <div class="col-md-6 contact-form-right">
                        <div class="contact-form-top">
                            <h3>Send us a message</h3>
                        </div>
                        <div class="agileinfo-contact-form-grid">
                            <form action="#" method="post" id="contactForm" data-url="<?= base_url('welcome/form')?>">
                            <div class="form-group">
                                <input type="text" name="name"  placeholder="Name" >
                            </div>
                            <div class="form-group">
                                <input type="text" name="number" placeholder="Mobile number">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email" >
                            </div>
                            <div class="form-group">
                                <textarea name="message" placeholder="Message" ></textarea>
                            </div>
                                <button class="btn1" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- //contact -->

        <!-- footer -->
        <div class="footer">
            <div class="container">
                <div class="f-bg-w3l">
                    <div class="col-md-3 w3layouts_footer_grid" data-aos="fade-right">
                        <h3>About Company</h3>
                        <p>
                        Crystalline is a young dynamic architecture and interior design firm with over 7 years of experience focused on high end residence, apartments, restaurant and hospitality project.
                        </p>
                        <ul class="social_agileinfo">
                            <li>
                                <a href="#" class="w3_facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="w3_twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="w3_instagram">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="w3_google">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 w3layouts_footer_grid" data-aos="fade-right">
                        <h3>Contact Us</h3>
                        <ul class="con_inner_text">
                        <ul class="con_inner_text">
                            <li>
                                <span class="fa fa-map-marker" aria-hidden="true"></span>
                                <?=$settings->address?>
                            </li>
                            <li>
                                <span class="fa fa-envelope-o" aria-hidden="true"></span>
                                <a href="mailto:<?=$settings->email?>"><?=$settings->email?></a>
                            </li>
                            <li>
                                <span class="fa fa-phone" aria-hidden="true"></span>
                                <?=$settings->phone?>
                            </li>
                            <li>
                                <span class="fa fa-clock-o" aria-hidden="true"></span>
                                <?=$settings->worktime?>
                            </li>
                        </ul>

                    </div>
                    
                    <div class="col-md-3 w3layouts_footer_grid" data-aos="fade-left">
                        <h3>Instagram</h3>
                        <ul class="con_inner_text midimg">
                            <li>
                                <a href="#" data-toggle="modal" data-target="#myModal"><img src="<?=base_url('assets/front/')?>images/banner11.jpg" alt="" class="img-responsive"/></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#myModal"><img src="<?=base_url('assets/front/')?>images/banner22.jpg" alt="" class="img-responsive"/></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#myModal"><img src="<?=base_url('assets/front/')?>images/banner33.jpg" alt="" class="img-responsive"/></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#myModal"><img src="<?=base_url('assets/front/')?>images/banner44.jpg" alt="" class="img-responsive"/></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#myModal"><img src="<?=base_url('assets/front/')?>images/banner11.jpg" alt="" class="img-responsive"/></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#myModal"><img src="<?=base_url('assets/front/')?>images/banner22.jpg" alt="" class="img-responsive"/></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#myModal"><img src="<?=base_url('assets/front/')?>images/banner33.jpg" alt="" class="img-responsive"/></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#myModal"><img src="<?=base_url('assets/front/')?>images/banner44.jpg" alt="" class="img-responsive"/></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#myModal"><img src="<?=base_url('assets/front/')?>images/banner11.jpg" alt="" class="img-responsive"/></a>
                            </li>
                        </ul>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- //footer -->

      

        <!-- copyright -->
        <div class="copyright">
            <div class="container">
                <p class="copyright">© 2018 CrystalLine Interiors. All Rights Reserved
                </p>
            </div>
        </div>
        <!-- //copyright -->

        <!-- js -->
        <script type="text/javascript" src="<?=base_url('assets/front/')?>js/jquery-2.1.4.min.js"></script>
        <!-- //js -->

        <!-- flexSlider -->
        <script defer src="<?=base_url('assets/front/')?>js/jquery.flexslider.js"></script>
        <script type="text/javascript">
            $(window)
                .load(function () {
                    $('.flexslider').flexslider({
                        animation: "slide",
                        start: function (slider) {
                            $('body').removeClass('loading');
                        }
                    });
                });
        </script>
        <!-- //flexSlider -->
        <!-- swipe box js -->
        <script src="<?=base_url('assets/front/')?>js/jquery.adipoli.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function () {
                $('.row2').adipoli({'startEffect': 'overlay', 'hoverEffect': 'sliceDown'});
            });
        </script>
        <script src="<?=base_url('assets/front/')?>js/jquery.swipebox.min.js"></script>
        <script type="text/javascript">
            jQuery(function ($) {
                $(".swipebox").swipebox();
            });
        </script>
        <!-- //swipe box js -->
        <!-- Responsive Slider script -->
        <script src="<?=base_url('assets/front/')?>js/responsiveslides.min.js"></script>
        <script>
            // You can also use "$(window).load(function() {"
            $(function () {
                $("#slider").responsiveSlides({auto: true, nav: true, manualControls: '#slider3-pager'});
            });
        </script>
        <!-- move to top-js-files -->
        <script type="text/javascript" src="<?=base_url('assets/front/')?>js/move-top.js"></script>
        <script type="text/javascript" src="<?=base_url('assets/front/')?>js/easing.js"></script>
        <!-- //move to top-js-files -->

        <script type="text/javascript" src="<?=base_url('assets/front/')?>js/bootstrap-3.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="<?=base_url('assets/front/')?>js/form.js"></script>
        <!-- bootstrap js file -->

        <!-- 360 -->
        

    </body>
</html>
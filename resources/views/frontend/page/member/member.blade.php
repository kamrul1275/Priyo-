<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from html.verodate.com/verodate/members.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2024 05:34:03 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>VeroDate - Dating Social Network Website</title>

        <!-- Icon css link -->
        <link href="frontend/vendors/material-icon/css/materialdesignicons.min.css" rel="stylesheet">
        <link href="frontend/css/font-awesome.min.css" rel="stylesheet">
        <link href="frontend/vendors/linears-icon/style.css" rel="stylesheet">
        
        <!-- RS5.0 Layers and Navigation Styles -->
        <link rel="stylesheet" type="text/css" href="frontend/vendors/revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="frontend/vendors/revolution/css/navigation.css">
        <link rel="stylesheet" type="text/css" href="frontend/vendors/revolution/css/settings.css">
        
        <!-- Bootstrap -->
        <link href="frontend/css/bootstrap.min.css" rel="stylesheet">
        <link href="frontend/vendors/image-dropdown/dd.css" rel="stylesheet">
        <link href="frontend/vendors/image-dropdown/flags.css" rel="stylesheet">
        <link href="frontend/vendors/image-dropdown/skin2.css" rel="stylesheet">
        <link href="frontend/vendors/magnific-popup/magnific-popup.css" rel="stylesheet">
        <link href="frontend/vendors/bootstrap-selector/bootstrap-select.css" rel="stylesheet">
        <link href="frontend/vendors/bootstrap-datepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="frontend/vendors/owl-carousel/assets/owl.carousel.css" rel="stylesheet">
        <link href="frontend/vendors/animate-css/animate.css" rel="stylesheet">
        <link href="frontend/vendors/bs-tooltip/jquery.webui-popover.css" rel="stylesheet">
        <link href="frontend/vendors/jquery-ui/jquery-ui.css" rel="stylesheet">
        
        <link href="frontend/css/style.css" rel="stylesheet">
        <link href="frontend/css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
       <div class="login_form_inner zoom-anim-dialog mfp-hide" id="small-dialog">
           <h4>User Login</h4>
           <form>
               <input type="text" placeholder="Username">
               <input type="password" placeholder="Password">
               <div class="login_btn_area">
                   <button type="submit" value="LogIn" class="btn form-control login_btn">LogIn</button>
                   <div class="login_social">
                       <h5>Login With</h5>
                       <ul>
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                       </ul>
                   </div>
               </div>
           </form>
           <img class="mfp-close" src="img/close-btn.png" alt="">
        </div>
       
        <div class="register_form_inner zoom-anim-dialog mfp-hide" id="register_form">
            <div class="row">
                <div class="col-md-6">
                    <div class="registration_man">
                        <img src="frontend/img/Registration_man.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="registration_form_s">
                        <h4>Registration</h4>
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" id="reg_email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="reg_first" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="reg_user" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="reg_pass" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    <span data-bind="label">Gender</span>&nbsp;<span class="arrow_carrot-down"><i class="fa fa-sort-asc" aria-hidden="true"></i><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Male</a></li>
                                        <li><a href="#">Female</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="datepicker">
                                    <input type='text' class="form-control datetimepicker4" placeholder="Birthday" />
                                    <span class="add-on"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <div class="reg_chose form-group">
                                <div class="reg_check_box">
                                    <input type="radio" id="s-option" name="selector">
                                    <label for="s-option">I`m Not Robot</label>
                                    <div class="check"><div class="inside"></div></div>
                                </div>
                                <button type="submit" value="LogIn" class="btn form-control login_btn">Register</button>
                            </div>
                        </form>
                        <img class="mfp-close" src="img/close-btn.png" alt="">
                    </div>
                </div>
            </div>
        </div>
       
        <!--================Frist Main hader Area =================-->
        <header class="header_menu_area">
            <nav class="navbar navbar-default">
                <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                            <ul class="dropdown-menu">
                                <li><a href="index.html">Home 01</a></li>
                                <li><a href="index-2.html">Home 02</a></li>
                                <li><a href="index-3.html">Home 03</a></li>
                            </ul>
                        </li>
                        <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                                <li><a href="single-blog-fullwidth.html">Blog Single Fullwidth</a></li>
                                <li><a href="single-blog-left-sidebar.html">Blog Single left sidebar</a></li>
                                <li><a href="single-blog-right-sidebar.html">Blog Single right sidebar</a></li>
                            </ul>
                        </li>
                        <li class="dropdown submenu active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Community</a>
                            <ul class="dropdown-menu">
                                <li><a href="community.html">Community</a></li>
                                <li><a href="members.html">Members</a></li>
                                <li><a href="members-detail.html">Members Details</a></li>
                                <li><a href="discussions.html">Discussions</a></li>
                                <li><a href="forums.html">Forums</a></li>
                                <li><a href="groups.html">Groups</a></li>
                                <li><a href="matches.html">Matches</a></li>
                                <li><a href="quick.html">Quick</a></li>
                                <li><a href="search.html">Search</a></li>
                            </ul>
                        </li>
                        <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu">
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-left.html">Shop Left</a></li>
                                <li><a href="shop-right.html">Shop Right</a></li>
                                <li><a href="product-details.html">Product Details</a></li>
                                <li><a href="shop-cart.html">Shop Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                        </li>
                        <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="stories.html">Stories</a></li>
                                <li><a href="why-us.html">Why us</a></li>
                                <li><a href="404.html">Error</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact us</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="popup-with-zoom-anim" href="#small-dialog"><i class="mdi mdi-key-variant"></i>Login</a></li>
                        <li><a href="#register_form" class="popup-with-zoom-anim"><i class="fa fa-user-plus"></i>Registration</a></li>
                        <li class="flag_drop">
                            <div class="selector">
                                <select class="language_drop" name="countries" id="countries" style="width:300px;">
                                  <option value='yt' data-image="img/country-aus.png" data-imagecss="flag yt" data-title="English">English</option>
                                  <option value='yu' data-image="img/country-bang.png" data-imagecss="flag yu" data-title="Bangladesh">Bangla</option>
                                  <option value='yt' data-image="img/country-aus.png" data-imagecss="flag yt" data-title="English">English</option>
                                  <option value='yu' data-image="img/country-bang.png" data-imagecss="flag yu" data-title="Bangladesh">Bangla</option>
                                </select>
                            </div>
                        </li>
                    </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        <!--================Frist Main hader Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area banner_area2">
            <div class="container">
                <div class="banner_content">
                    <h3 title="Members"><img class="left_img" src="frontend/img/banner/t-left-img.png" alt="">Members<img class="right_img" src="img/banner/t-right-img.png" alt=""></h3>
                    <a href="index.html">Home</a>
                    <a href="#">Community</a>
                    <a href="blog.html">Members</a>
                    <div class="advanced_search">
                        <div class="search_inner">
                            
                            <form action="{{route('members.search')}}" method="post">
                                @csrf
                            <div class="search_item">
                                <h5>I am a</h5>
                                <select name="my_gender" class="selectpicker">
                                    <option value="men">Man</option>
                                    <option value="women">Woman</option>
                                </select>
                            </div>
                            <div class="search_item">
                                <h5>Seeking a</h5>
                                <select name="seeking_gender" class="selectpicker">
                                <option value="men">Man</option>
                                <option value="women">Woman</option>
                                </select>
                            </div>
                        
                            <div class="search_item">
                                <button type="submit" value="LogIn" class="btn form-control login_btn">Search</button>
                            </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Active Memebers Area =================-->
        <section class="actives_members">
            <div class="container">
                <div class="welcome_title">
                    <h3>Active Members</h3>
                    <img src="frontend/img/w-title-b.png" alt="">
                </div>
                <div class="row">
                    <div class="col-sm-2 col-xs-6">
                        <div class="active_mem_item">
                            <ul class="nav navbar-nav">
                                <li class="dropdown tool_hover">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/members/active-members/a-members-1.png" alt=""></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="head_area">
                                                <h4>Lara Davis</h4>
                                                <h4>53% Match</h4>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="frontend/img/photo/people-p/people-drop-3.png" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <h6>29 years old <br> From Derby <br> Single</h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <h4>Maria Doe</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <div class="active_mem_item">
                            <ul class="nav navbar-nav">
                                <li class="dropdown tool_hover">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/members/active-members/a-members-2.png" alt=""></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="head_area">
                                                <h4>Lara Davis</h4>
                                                <h4>53% Match</h4>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="frontend/img/photo/people-p/people-drop-4.png" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <h6>29 years old <br> From Derby <br> Single</h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <h4>Maria Doe</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <div class="active_mem_item">
                            <ul class="nav navbar-nav">
                                <li class="dropdown tool_hover">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/members/active-members/a-members-3.png" alt=""></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="head_area">
                                                <h4>Lara Davis</h4>
                                                <h4>53% Match</h4>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="frontend/img/photo/people-p/people-drop-5.png" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <h6>29 years old <br> From Derby <br> Single</h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <h4>Maria Doe</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <div class="active_mem_item">
                            <ul class="nav navbar-nav">
                                <li class="dropdown tool_hover">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/members/active-members/a-members-4.png" alt=""></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="head_area">
                                                <h4>Lara Davis</h4>
                                                <h4>53% Match</h4>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="frontend/img/photo/people-p/people-drop-6.png" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <h6>29 years old <br> From Derby <br> Single</h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <h4>Maria Doe</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <div class="active_mem_item">
                            <ul class="nav navbar-nav">
                                <li class="dropdown tool_hover">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/members/active-members/a-members-5.png" alt=""></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="head_area">
                                                <h4>Lara Davis</h4>
                                                <h4>53% Match</h4>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="frontend/img/photo/people-p/people-drop-2.png" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <h6>29 years old <br> From Derby <br> Single</h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <h4>Maria Doe</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                    
                    <div class="col-sm-2 col-xs-6">
                        <div class="active_mem_item">
                            <ul class="nav navbar-nav">
                                <li class="dropdown tool_hover">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/members/active-members/a-members-6.png" alt=""></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="head_area">
                                                <h4>Lara Davis</h4>
                                                <h4>53% Match</h4>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="frontend/img/photo/people-p/people-drop-7.png" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <h6>29 years old <br> From Derby <br> Single</h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <h4>Maria Doe</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <div class="active_mem_item">
                            <ul class="nav navbar-nav">
                                <li class="dropdown tool_hover">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/members/active-members/a-members-7.png" alt=""></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="head_area">
                                                <h4>Lara Davis</h4>
                                                <h4>53% Match</h4>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="frontend/img/photo/people-p/people-drop-8.png" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <h6>29 years old <br> From Derby <br> Single</h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <h4>Maria Doe</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <div class="active_mem_item">
                            <ul class="nav navbar-nav">
                                <li class="dropdown tool_hover">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/members/active-members/a-members-8.png" alt=""></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="head_area">
                                                <h4>Lara Davis</h4>
                                                <h4>53% Match</h4>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="frontend/img/photo/people-p/people-drop-9.png" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <h6>29 years old <br> From Derby <br> Single</h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <h4>Maria Doe</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <div class="active_mem_item">
                            <ul class="nav navbar-nav">
                                <li class="dropdown tool_hover">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/members/active-members/a-members-9.png" alt=""></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="head_area">
                                                <h4>Lara Davis</h4>
                                                <h4>53% Match</h4>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="frontend/img/photo/people-p/people-drop-10.png" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <h6>29 years old <br> From Derby <br> Single</h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <h4>Maria Doe</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <div class="active_mem_item">
                            <ul class="nav navbar-nav">
                                <li class="dropdown tool_hover">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/members/active-members/a-members-10.png" alt=""></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="head_area">
                                                <h4>Lara Davis</h4>
                                                <h4>53% Match</h4>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="frontend/img/photo/people-p/people-drop-11.png" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <h6>29 years old <br> From Derby <br> Single</h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <h4>Maria Doe</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <div class="active_mem_item">
                            <ul class="nav navbar-nav">
                                <li class="dropdown tool_hover">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/members/active-members/a-members-11.png" alt=""></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="head_area">
                                                <h4>Lara Davis</h4>
                                                <h4>53% Match</h4>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="frontend/img/photo/people-p/people-drop-12.png" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <h6>29 years old <br> From Derby <br> Single</h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <h4>Maria Doe</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <div class="active_mem_item">
                            <ul class="nav navbar-nav">
                                <li class="dropdown tool_hover">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/members/active-members/a-members-12.png" alt=""></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="head_area">
                                                <h4>Lara Davis</h4>
                                                <h4>53% Match</h4>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="frontend/img/photo/people-p/people-drop-13.png" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <h6>29 years old <br> From Derby <br> Single</h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <h4>Maria Doe</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Active Memebers Area =================-->
        
        <!--================Register Members slider Area =================-->
        <section class="register_members_slider">
            <div class="container">
                <div class="welcome_title">
                    <h3>Latest registered members</h3>
                    <img src="img/w-title-b.png" alt="">
                </div>
                <div class="r_members_inner">
                    <div class="item">
                        <img class="img-circle" src="frontend/img/members/r_members-1.png" alt="">
                        <h4>Rocky Ahmed</h4>
                        <h5>22 years old</h5>
                    </div>
                    <div class="item">
                        <img class="img-circle" src="frontend/img/members/r_members-2.png" alt="">
                        <h4>Alex Jones</h4>
                        <h5>23 years old</h5>
                    </div>
                    <div class="item">
                        <img class="img-circle" src="frontend/img/members/r_members-3.png" alt="">
                        <h4>Nancy Martin</h4>
                        <h5>25 years old</h5>
                    </div>
                    <div class="item">
                        <img class="img-circle" src="frontend/img/members/r_members-4.png" alt="">
                        <h4>Kavin Smith</h4>
                        <h5>20 years old</h5>
                    </div>
                    <div class="item">
                        <img class="img-circle" src="frontend/img/members/r_members-5.png" alt="">
                        <h4>Lena Adms</h4>
                        <h5>26 years old</h5>
                    </div>
                    <div class="item">
                        <img class="img-circle" src="frontend/img/members/r_members-6.png" alt="">
                        <h4>Peter Nevill</h4>
                        <h5>20 years old</h5>
                    </div>
                    <div class="item">
                        <img class="img-circle" src="frontend/img/members/r_members-2.png" alt="">
                        <h4>Alex Jones</h4>
                        <h5>23 years old</h5>
                    </div>
                    <div class="item">
                        <img class="img-circle" src="frontend/img/members/r_members-3.png" alt="">
                        <h4>Nancy Martin</h4>
                        <h5>25 years old</h5>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Register Members  slider Area =================-->
        
        <!--================All Members Area =================-->
        <section class="all_members_area">
            <div class="container">
                <div class="welcome_title">
                    <h3>All Members</h3>
                    <img src="frontend/img/w-title-b.png" alt="">
                </div>
                <div class="row">
                    <div class="col-sm-2 col-xs-6">
                        <div class="all_members_item">
                            <img src="frontend/img/members/all-members/members-1.png" alt="">
                            <h4>Lena Adms</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <div class="all_members_item">
                            <img src="frontend/img/members/all-members/members-2.png" alt="">
                            <h4>Alex Jones</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <div class="all_members_item">
                            <img src="frontend/img/members/all-members/members-3.png" alt="">
                            <h4>Lena Adms</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <div class="all_members_item">
                            <img src="frontend/img/members/all-members/members-4.png" alt="">
                            <h4>Lena Adms</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <div class="all_members_item">
                            <img src="frontend/img/members/all-members/members-5.png" alt="">
                            <h4>Lena Adms</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <div class="all_members_item">
                            <img src="frontend/img/members/all-members/members-6.png" alt="">
                            <h4>Lena Adms</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <div class="all_members_item">
                            <img src="frontend/img/members/all-members/members-7.png" alt="">
                            <h4>Lena Adms</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <div class="all_members_item">
                            <img src="frontend/img/members/all-members/members-8.png" alt="">
                            <h4>Lena Adms</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <div class="all_members_item">
                            <img src="frontend/img/members/all-members/members-9.png" alt="">
                            <h4>Lena Adms</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <div class="all_members_item">
                            <img src="frontend/img/members/all-members/members-10.png" alt="">
                            <h4>Lena Adms</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <div class="all_members_item">
                            <img src="frontend/img/members/all-members/members-11.png" alt="">
                            <h4>Lena Adms</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <div class="all_members_item">
                            <img src="frontend/img/members/all-members/members-12.png" alt="">
                            <h4>Lena Adms</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                </div>
                <a href="#" class="register_angkar_btn">View More</a>
            </div>
        </section>
        <!--================End All Members Area =================-->
        
        <!--================Footer Area =================-->
        <footer class="footer_area">
            <div class="footer_widgets_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <aside class="f_widget">
                                <div class="vero_widget">
                                    <h4><span>Vero</span>Date</h4>
                                    <p>There are many variations of passag-es of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything .</p>
                                </div>
                            </aside>
                        </div>
                        <div class="col-md-3">
                            <aside class="f_widget">
                                <div class="f_widget_title">
                                    <h3>Information</h3>
                                </div>
                                <div class="information_widget">
                                    <ul>
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Contact us</a></li>
                                        <li><a href="#">Membership</a></li>
                                        <li><a href="#">Private Policy</a></li>
                                        <li><a href="#">Forum Support</a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                        <div class="col-md-3">
                            <aside class="f_widget">
                                <div class="f_widget_title">
                                    <h3>Recent posts</h3>
                                </div>
                                <div class="recent_post_widget">
                                    <ul>
                                        <li><a href="#">Blog Standard Post <span>14 Sep, 2016</span></a></li>
                                        <li><a href="#">Blog Image Post <span>12 Sep, 2016</span></a></li>
                                        <li><a href="#">BlogVideo Post <span>08 Sep, 2016</span></a></li>
                                        <li><a href="#">Blog Audio  Post <span>03 Sep, 2016</span></a></li>
                                        <li><a href="#">Blog Standard Post <span>16 Aug, 2016</span></a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                        <div class="col-md-3">
                            <aside class="f_widget">
                                <div class="f_widget_title">
                                    <h3>Newsletter Signup</h3>
                                </div>
                                <div class="newsletter_widget">
                                    <p>Get Alert Directly Into Your Inbox After Each Post.</p>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Enter your email">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="copyright_left">
                    <div class="copyright_text">
                        <h4>Copyright © 2017. <a href="#">VeroDate</a> . all rights reserved</h4>
                    </div>
                </div>
                <div class="copyright_right">
                    <div class="copyright_social">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="frontend/js/jquery-2.1.4.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="frontend/js/bootstrap.min.js"></script>
        <script src="frontend/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="frontend/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <!--RS5.0 Extensions-->
        <script src="frontend/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="frontend/vendors/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="frontend/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="frontend/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="frontend/vendors/revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script src="frontend/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="frontend/vendors/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script src="frontend/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="frontend/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
  
        <!-- Extra plugin js -->
        <script src="frontend/vendors/image-dropdown/jquery.dd.min.js"></script>
        <script src="frontend/vendors/animate-css/wow.min.js"></script>
        <script src="frontend/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="frontend/vendors/bootstrap-selector/bootstrap-select.js"></script>
        <script src="frontend/vendors/bootstrap-datepicker/js/moment-with-locales.js"></script>
        <script src="frontend/vendors/bootstrap-datepicker/js/bootstrap-datetimepicker.min.js"></script>
        <script src="frontend/vendors/counter-up/waypoints.min.js"></script>
        <script src="frontend/vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="frontend/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="frontend/vendors/bs-tooltip/jquery.webui-popover.min.js"></script>
        <script src="frontend/vendors/jquery-ui/jquery-ui.js"></script>
        
        
        <script src="frontend/js/video_player.js"></script>
        <script src="frontend/js/theme.js"></script>
    </body>

<!-- Mirrored from html.verodate.com/verodate/members.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2024 05:34:27 GMT -->
</html>
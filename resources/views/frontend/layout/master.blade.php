<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from html.verodate.com/verodate/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2024 05:32:25 GMT -->
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Love Matrimony - Dating Social Network Website</title>

    <!-- Icon css link -->
    <link
      href="frontend/vendors/material-icon/css/materialdesignicons.min.css"
      rel="stylesheet"
    />
    <link href="frontend/css/font-awesome.min.css" rel="stylesheet" />
    <link href="frontend/vendors/linears-icon/style.css" rel="stylesheet" />

    <!-- RS5.0 Layers and Navigation Styles -->
    <link
      rel="stylesheet"
      type="text/css"
      href="frontend/vendors/revolution/css/layers.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="frontend/vendors/revolution/css/navigation.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="frontend/vendors/revolution/css/settings.css"
    />

    <!-- Bootstrap -->
    <link href="frontend/css/bootstrap.min.css" rel="stylesheet" />
    <link href="frontend/vendors/image-dropdown/dd.css" rel="stylesheet" />
    <link href="frontend/vendors/image-dropdown/flags.css" rel="stylesheet" />
    <link href="frontend/vendors/image-dropdown/skin2.css" rel="stylesheet" />
    <link href="frontend/vendors/magnific-popup/magnific-popup.css" rel="stylesheet" />
    <link
      href="frontend/vendors/bootstrap-selector/bootstrap-select.css"
      rel="stylesheet"
    />
    <link
      href="frontend/vendors/bootstrap-datepicker/css/bootstrap-datetimepicker.min.css"
      rel="stylesheet"
    />
    <link
      href="frontend/vendors/owl-carousel/assets/owl.carousel.css"
      rel="stylesheet"
    />
    <link href="frontend/vendors/animate-css/animate.css" rel="stylesheet" />
    <link href="frontend/vendors/bs-tooltip/jquery.webui-popover.css" rel="stylesheet" />
    <link href="frontend/vendors/jquery-ui/jquery-ui.css" rel="stylesheet" />

    <link href="frontend/css/style.css" rel="stylesheet" />
    <link href="frontend/css/responsive.css" rel="stylesheet" />

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>

    <script src="frontend/js/map-custome.js"></script>

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
      <form action="{{route('login')}}" method="post">
        @csrf

        <input type="text" name="email" placeholder="email" />
        <input type="password" name="password" placeholder="Password" />
        <div class="login_btn_area">
          <button
            type="submit"
            value="LogIn"
            class="btn form-control login_btn"
          >
            LogIn
          </button>
          <div class="login_social">
            <h5>Login With</h5>
            <ul>
              <li>
                <a href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-google-plus"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </form>
      <img class="mfp-close" src="frontend/img/close-btn.png" alt="" />
    </div>

    <div
      class="register_form_inner zoom-anim-dialog mfp-hide"
      id="register_form"
    >
      <div class="row">
        <div class="col-md-6">
          <div class="registration_man">
            <img src="frontend/img/Registration_man.png" alt="" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="registration_form_s">
            <h4>Registration</h4>

            <form action="{{route('register')}}" method="POST">
              @csrf

              <div class="form-group">
                <input
                  type="email"
                  class="form-control"
                  id="reg_email" name="email"
                  placeholder="Email"
                />
              </div>
              <div class="form-group">
                <input
                  type="text"
                  class="form-control"
                  id="reg_first" name="name"
                  placeholder="Full Name"
                />
              </div>
              <div class="form-group">
                <input
                  type="text"
                  class="form-control"
                  id="reg_user" name="location"
                  placeholder="Location"
                />
              </div>
              <div class="form-group">
                <input
                  type="password"
                  class="form-control"
                  id="reg_pass" name="password"
                  placeholder="Password"
                />
              </div>
              <div class="form-group">
                <div class="btn-group">
                  <button
                    type="button"
                    class="btn btn-default dropdown-toggle"
                    data-toggle="dropdown"
                  >
                    <span data-bind="label">Gender</span>&nbsp;<span
                      class="arrow_carrot-down"  
                      ><i class="fa fa-sort-asc" aria-hidden="true"></i
                      ><i class="fa fa-sort-desc" aria-hidden="true"></i
                    ></span>
                  </button>
                  <ul class="dropdown-menu" role="menu" name="gender">
                    <li><a href="#">Male</a></li>
                    <li><a href="#">Female</a></li>
                  </ul>
                </div>
              </div>
              <div class="form-group">
                <div class="datepicker">
                  <input
                    type="text"
                    class="form-control datetimepicker4"
                    placeholder="Birthday"
                  />
                  <span class="add-on"
                    ><i class="fa fa-calendar" aria-hidden="true"></i
                  ></span>
                </div>
              </div>
              <div class="reg_chose form-group">
                <div class="reg_check_box">
                  <input type="radio" id="s-option" name="selector" />
                  <label for="s-option">I`m Not Robot</label>
                  <div class="check"><div class="inside"></div></div>
                </div>
                <button
                  type="submit"
                  value="LogIn"
                  class="btn form-control login_btn"
                >
                  Register
                </button>
              </div>
            </form>

            <img class="mfp-close" src="frontend/img/close-btn.png" alt="" />
          </div>
        </div>
      </div>
    </div>

    <!--================ Nav Bar =================-->
   

@include('frontend.page.header_menu_area')

    <!--================Frist Main hader Area =================-->

    <!--================Slider Reg Area =================-->
   @include('frontend.page.slider_area')
    <!--================End Slider Reg Area =================-->

    <!--================Welcome Area =================-->
    
@include('frontend.page.welcome_area')

    <!--================End Welcome Area =================-->

    <!--================Download Area =================-->
    <section class="download_area">
      <div class="download_full_slider">
        <div class="container">
          <div class="row">
            <div class="item">
              <div class="col-md-7">
                <div class="download_app_icon">
                  <h3>Upcoming <span>Love</span><span>Matrimony</span> app</h3>
                  <h5>
                    Free Available in All Store PlayStore, AppStore & Microsoft
                    Store
                  </h5>
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-android"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-apple"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-windows"></i></a>
                    </li>
                  </ul>
                </div>
                <div class="download_content">
                  <div class="item">
                    <p>
                      It is a long established fact that a reader will be
                      distracted by the readable content of a page when looking
                      at its layout.The point of using Lorem Ipsum is that it
                      has a more-or-less normal distribution.
                    </p>
                    <h4>Amanda Davidson</h4>
                    <ul>
                      <li>
                        <a href="#"><i class="fa fa-star"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-star"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-star"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-star"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-star"></i></a>
                      </li>
                    </ul>
                  </div>
                  <div class="item">
                    <p>
                      It is a long established fact that a reader will be
                      distracted by the readable content of a page when looking
                      at its layout.The point of using Lorem Ipsum is that it
                      has a more-or-less normal distribution.
                    </p>
                    <h4>Amanda Davidson</h4>
                    <ul>
                      <li>
                        <a href="#"><i class="fa fa-star"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-star"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-star"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-star"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-star"></i></a>
                      </li>
                    </ul>
                  </div>
                  <div class="item">
                    <p>
                      It is a long established fact that a reader will be
                      distracted by the readable content of a page when looking
                      at its layout.The point of using Lorem Ipsum is that it
                      has a more-or-less normal distribution.
                    </p>
                    <h4>Amanda Davidson</h4>
                    <ul>
                      <li>
                        <a href="#"><i class="fa fa-star"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-star"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-star"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-star"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-star"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="download_moblie">
                  <div class="download_m_slider">
                    <img src="img/mobile-slider/mobile-1.png" alt="" />
                    <div class="download_moblile_slider">
                      <div class="item">
                        <img src="img/mobile-slider/screen-1.png" alt="" />
                      </div>
                      <div class="item">
                        <img src="img/mobile-slider/screen-1.png" alt="" />
                      </div>
                      <div class="item">
                        <img src="img/mobile-slider/screen-1.png" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Download Area =================-->

    <!--================Find Your Soul Area =================-->
    <section class="find_soul_area">
      <div class="container">
        <div class="welcome_title">
          <h3>Step to Find Your Soul mate</h3>
          <img src="img/w-title-b.png" alt="" />
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="find_soul_item">
              <img src="img/soul-icon/soul-1.png" alt="" />
              <h4>Create a profile</h4>
              <p>
                There are many variations of passages of Lorem Ipsum available,
                but the majority have suffered alteration.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="find_soul_item">
              <img src="img/soul-icon/soul-2.png" alt="" />
              <h4>Find matches</h4>
              <p>
                There are many variations of passages of Lorem Ipsum available,
                but the majority have suffered alteration.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="find_soul_item">
              <img src="img/soul-icon/soul-3.png" alt="" />
              <h4>Start Dating</h4>
              <p>
                There are many variations of passages of Lorem Ipsum available,
                but the majority have suffered alteration.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Find Your Soul Area =================-->

    <!--================Video Area =================-->
    <section class="video_area">
      <div class="row m0 video_row">
        <iframe
          id="video"
          src="https://www.youtube.com/embed/bCIXMvE5nL4?enablejsapi=1&amp;html5=1&amp;rel=0&amp;fs=0&amp;loop=1&amp;showinfo=0&amp;disablekb=1&amp;controls=0&amp;color=white&amp;playlist=bCIXMvE5nL4"
        ></iframe>
        <div class="overlay" id="video_overlay">
          <div class="overlay_bg"></div>
          <div class="play_pause row m0">
            <i class="fa fa-play" aria-hidden="true" id="play_btn"></i>
            <i class="fa fa-pause" aria-hidden="true" id="pause_btn"></i>
            <div class="video_content">
              <h4>Find your perfect match With us</h4>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Video Area =================-->



    <!--================Blog slider Area =================-->
    <section class="blog_slider_area" style="margin-top: 30px">
      <div class="blog_slider_inner">
        <div class="item">
          <div class="single_blog_slider">
            <img src="img/blog/blog_slider/blog_slider-1.jpg" alt="" />
            <div class="blog_item_content">
              <h4>Your Blog title here</h4>
              <h5>03 Sep, 2016 <span>|</span> Dating</h5>
              <ul>
                <li>
                  <a href="#"><i class="fa fa-search"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-link"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="single_blog_slider">
            <img src="img/blog/blog_slider/blog_slider-3.jpg" alt="" />
            <div class="blog_item_content">
              <h4>Your Blog title here</h4>
              <h5>03 Sep, 2016 <span>|</span> Dating</h5>
              <ul>
                <li>
                  <a href="#"><i class="fa fa-search"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-link"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="single_blog_slider">
            <img src="img/blog/blog_slider/blog_slider-4.jpg" alt="" />
            <div class="blog_item_content">
              <h4>Your Blog title here</h4>
              <h5>03 Sep, 2016 <span>|</span> Dating</h5>
              <ul>
                <li>
                  <a href="#"><i class="fa fa-search"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-link"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="single_blog_slider">
            <img src="img/blog/blog_slider/blog_slider-1.jpg" alt="" />
            <div class="blog_item_content">
              <h4>Your Blog title here</h4>
              <h5>03 Sep, 2016 <span>|</span> Dating</h5>
              <ul>
                <li>
                  <a href="#"><i class="fa fa-search"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-link"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="single_blog_slider">
            <img src="img/blog/blog_slider/blog_slider-3.jpg" alt="" />
            <div class="blog_item_content">
              <h4>Your Blog title here</h4>
              <h5>03 Sep, 2016 <span>|</span> Dating</h5>
              <ul>
                <li>
                  <a href="#"><i class="fa fa-search"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-link"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="single_blog_slider">
            <img src="img/blog/blog_slider/blog_slider-1.jpg" alt="" />
            <div class="blog_item_content">
              <h4>Your Blog title here</h4>
              <h5>03 Sep, 2016 <span>|</span> Dating</h5>
              <ul>
                <li>
                  <a href="#"><i class="fa fa-search"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-link"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Blog slider Area =================-->

    <!--================ Latest Register Members slider Area =================-->
    <section class="register_members_slider">
      <div class="container">
        <div class="welcome_title">
          <h3>Latest registered members</h3>
          <img src="frontend/img/w-title-b.png" alt="" />
        </div>
        <div class="r_members_inner">

        @php
        use Carbon\Carbon;
        @endphp


        @foreach ($latest_users as $itean)

        @php
        $birthday = Carbon::parse($itean->birthday);
        $now = Carbon::now();
        $ageYears = $birthday->diffInYears($now);
        $ageMonths = $birthday->copy()->addYears($ageYears)->diffInMonths($now);
       @endphp

        <div class="item">
            <img src="frontend/img/members/r_members-1.png" alt="" />
            <h4>{{$itean->name}}</h4>
            <!-- <h5>{{ $itean->birthday ? Carbon::parse($itean->birthday)->format('F d, Y') : 'N/A' }}</h5> -->

            <h5>
            @if($itean->birthday)
                {{ $ageYears }} years and {{ $ageMonths }} months
            @else
                Birthday not provided
            @endif
          </div>
        @endforeach
          
         
         
        </div>
      </div>
    </section>
    <!--================End Register Members  slider Area =================-->

    <!--================Map Area =================-->
    <section class="map_area">
      <div id="mapCanvas"></div>

      <div class="container">
        <div class="bloger_map_form">
          <h4>Find People in Map</h4>
          <div class="bloger_map_inner">
            <div class="form-single row m0">
              <h5>Looking for a</h5>
              <select class="selectpicker">
                <option>Woman</option>
                <option>Man</option>
              </select>
            </div>
            <div class="form-single row m0">
              <h5>Your location</h5>
              <select class="selectpicker">
                <option>Paris</option>
                <option>Paris</option>
              </select>
            </div>
            <div class="form-single row m0">
              <h5>From (age)</h5>
              <select class="selectpicker">
                <option>20</option>
                <option>30</option>
                <option>40</option>
              </select>
            </div>
            <div class="form-single row m0">
              <h5>To (age)</h5>
              <select class="selectpicker">
                <option>32</option>
                <option>42</option>
                <option>52</option>
              </select>
            </div>
            <div class="range_count">
              <h5>Search Distance</h5>
              <div id="slider-range-min">
                <div class="ui-slider-handle">
                  <span class="custom-handle"></span>
                </div>
              </div>
              <div class="left_value">
                <div class="custom-value"></div>
                <div class="km_value">Km</div>
              </div>
              <div class="right_value">
                <h5>50km</h5>
              </div>
            </div>
            <div class="reg_chose">
              <button
                type="submit"
                value="LogIn"
                class="btn form-control login_btn"
              >
                Search
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Map Area =================-->

    <!--================Footer Area =================-->
    <footer class="footer_area">
      <div class="footer_widgets_area">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <aside class="f_widget">
                <div class="vero_widget">
                  <h4><span>Love</span> Matrimony</h4>
                  <p>
                    There are many variations of passag-es of Lorem Ipsum
                    available, but the majority have suffered alteration in some
                    form.
                  </p>
                  <p>
                    If you are going to use a passage of Lorem Ipsum, you need
                    to be sure there isn't anything .
                  </p>
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
                    <li>
                      <a href="#"
                        >Blog Standard Post <span>14 Sep, 2016</span></a
                      >
                    </li>
                    <li>
                      <a href="#">Blog Image Post <span>12 Sep, 2016</span></a>
                    </li>
                    <li>
                      <a href="#">BlogVideo Post <span>08 Sep, 2016</span></a>
                    </li>
                    <li>
                      <a href="#">Blog Audio Post <span>03 Sep, 2016</span></a>
                    </li>
                    <li>
                      <a href="#"
                        >Blog Standard Post <span>16 Aug, 2016</span></a
                      >
                    </li>
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
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Enter your email"
                    />
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">
                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                      </button>
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
            <h4>
              Copyright © 2024. <a href="#">Love Matrimony</a> . all rights reserved
            </h4>
          </div>
        </div>
        <div class="copyright_right">
          <div class="copyright_social">
            <ul>
              <li>
                <a href="#"
                  ><i class="fa fa-facebook" aria-hidden="true"></i
                ></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
              </li>
              <li>
                <a href="#"
                  ><i class="fa fa-linkedin" aria-hidden="true"></i
                ></a>
              </li>
              <li>
                <a href="#"
                  ><i class="fa fa-youtube-play" aria-hidden="true"></i
                ></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!--================End Footer Area =================-->

    <div id="largeContent" style="display: none">
      <div class="media tool_content">
        <div class="media-left">
          <img src="img/map-persion.png" alt="" />
        </div>
        <div class="media-body">
          <h3>Sandi Williams</h3>
          <h5>21 years old</h5>
          <h5>From Paris</h5>
          <h5>Distance 16 km</h5>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="frontend/js/jquery-2.1.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="frontend/js/bootstrap.min.js"></script>
    <script src="frontend/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="frontend/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!--RS5.0 Extensions-->
    <script src="frontend/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="frontend/vendors/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script
      type="text/javascript"
      src="frontend/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js"
    ></script>
    <script
      type="text/javascript"
      src="frontend/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"
    ></script>
    <script
      type="text/javascript"
      src="frontend/vendors/revolution/js/extensions/revolution.extension.migration.min.js"
    ></script>
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

  <!-- Mirrored from html.verodate.com/verodate/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2024 05:33:11 GMT -->
</html>

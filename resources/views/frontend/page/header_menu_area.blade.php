<header class="header_menu_area">
      <nav class="navbar navbar-default">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button
              type="button"
              class="navbar-toggle collapsed"
              data-toggle="collapse"
              data-target="#bs-example-navbar-collapse-1"
              aria-expanded="false"
            >
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt=""></a> -->
            <a
              class="navbar-brand"
              href="index.html"
              style="
                font-size: 26px;
                color: white;
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman',
                  serif;
                font-weight: 700;
              "
              ><span style="color:#d8095b;">BD</span> <span style="color:#BB62CE">Love</span> Matrimony</a
            >
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div
            class="collapse navbar-collapse"
            id="bs-example-navbar-collapse-1"
          >
            <ul class="nav navbar-nav">
              <li class="dropdown active">
                <a href="index.html">Home</a>
              </li>
              <li class="dropdown">
                <a href="{{route("blog")}}">Blog</a>
              </li>
              <li class="dropdown submenu">
                <a
                  href="#"
                  class="dropdown-toggle"
                  data-toggle="dropdown"
                  role="button"
                  aria-haspopup="true"
                  aria-expanded="false"
                  >Community</a
                >
                <ul class="dropdown-menu">
                  <!-- <li><a href="community.html">Community</a></li> -->
                  <li><a href="{{route('frontend.member')}}">Members</a></li>
                  <li><a href="members-detail.html">Members Details</a></li>
                  <li><a href="discussions.html">Discussions</a></li>
                  <li><a href="forums.html">Forums</a></li>
                  <li><a href="groups.html">Groups</a></li>
                  <li><a href="matches.html">Matches</a></li>
                  <li><a href="quick.html">Quick</a></li>
                  <li><a href="search.html">Search</a></li>
                </ul>
              </li>
              <!-- <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu">
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-left.html">Shop Left</a></li>
                                <li><a href="shop-right.html">Shop Right</a></li>
                                <li><a href="product-details.html">Product Details</a></li>
                                <li><a href="shop-cart.html">Shop Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                        </li> -->
              <!-- <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="stories.html">Stories</a></li>
                                <li><a href="why-us.html">Why us</a></li>
                                <li><a href="404.html">Error</a></li>
                            </ul>
                        </li> -->
              <li><a href="{{route('frontend.contact')}}">Contact us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a class="popup-with-zoom-anim" href="#small-dialog"
                  ><i class="mdi mdi-key-variant"></i>Login</a
                >
              </li>
              <li>
                <a href="#register_form" class="popup-with-zoom-anim"
                  ><i class="fa fa-user-plus"></i>Registration</a
                >
              </li>
              <li class="flag_drop">
                <div class="selector">
                  <select
                    class="language_drop"
                    name="countries"
                    id="countries"
                    style="width: 300px"
                  >
                    <option
                      value="yt"
                      data-image="frontend/img/country-aus.png"
                      data-imagecss="flag yt"
                      data-title="English"
                    >
                      English
                    </option>
                    <option
                      value="yu"
                      data-image="frontend/img/country-bang.png"
                      data-imagecss="flag yu"
                      data-title="Bangladesh"
                    >
                      Bangla
                    </option>
                  </select>
                </div>
              </li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
      </nav>
    </header>
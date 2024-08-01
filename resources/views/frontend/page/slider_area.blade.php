<section class="slider_area">
      <div class="slider_inner">
        <div class="rev_slider" data-version="5.3.0.2" id="home-slider">
          <ul>
            <li
              data-slotamount="7"
              data-easein="Power4.easeInOut"
              data-easeout="Power4.easeInOut"
              data-masterspeed="600"
              data-rotate="0"
              data-saveperformance="off"
            >
              <!-- MAIN IMAGE -->
              <img
                src="img/slider-img/slider-1.jpg"
                alt=""
                data-bgposition="center center"
                data-bgfit="cover"
                data-bgrepeat="no-repeat"
                data-bgparallax="10"
                class="rev-slidebg"
                data-no-retina
              />
              <!-- LAYERS -->
            </li>
            <li
              data-slotamount="7"
              data-easein="Power4.easeInOut"
              data-easeout="Power4.easeInOut"
              data-masterspeed="600"
              data-rotate="0"
              data-saveperformance="off"
            >
              <!-- MAIN IMAGE -->
              <img
                src="img/slider-img/slider-2.jpg"
                alt=""
                data-bgposition="center center"
                data-bgfit="cover"
                data-bgrepeat="no-repeat"
                data-bgparallax="10"
                class="rev-slidebg"
                data-no-retina
              />
              <!-- LAYERS -->
            </li>
          </ul>
        </div>
        <!-- END REVOLUTION SLIDER -->
      </div>
      <div class="registration_form_area">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <div class="registration_form_s">
                <h4>Registration</h4>
                <form action="{{route('register')}}" method="POST">
                 @csrf
                  <div class="form-group">
                    <input
                      type="email"
                      class="form-control"
                      id="reg_email2" name="email"
                      placeholder="Email"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control"
                      id="reg_first2" name="name"
                      placeholder="Full Name"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      type="phone"
                      class="form-control"
                     autofocus="off"
                      placeholder="++88 0"name="phone"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      type="password"
                      class="form-control"
                      id="reg_pass2"name="password"
                      placeholder="Password"
                    />
                  </div>
                  <!-- <div class="row">
                    <div class="col-md-6">
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
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Male</a></li>
                            <li><a href="#">Female</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
-->

                    
                  <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control" name="gender">
                                        <option value="">Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="datepicker">
                          <input
                            type="text"
                            class="form-control datetimepicker4"
                            placeholder="Birthday"name="birthday"
                          />
                          <span class="add-on"
                            ><i class="fa fa-calendar" aria-hidden="true"></i
                          ></span>
                        </div>
                      </div>
                    </div>
                  </div> 





                  <div class="reg_chose form-group">
                    <button
                      type="submit"
                      value="LogIn"
                      class="btn form-control login_btn"
                    >
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form_man">
                <img src="img/registration-man.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
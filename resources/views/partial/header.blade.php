  <div class="topbar">
      <nav class="navbar navbar-expand-lg navbar-light">
          <div class="full">
              <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
              <div class="logo_section" style="padding: 0; width: 60%; text-align: center;background: transparent;float: left; margin-top: 10px;">
                  <div class="col-md-12" style="margin-bottom:5px; color:#fff;">
                      <form action="#" method="Post">
                          <input type="radio" name="search_type" value="leadID"
                              required /> LeadID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                          <input type="radio" name="search_type" value="mobile"
                              required /> Mobile No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                          <input type="radio" name="search_type" value="email"
                              required /> Email ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                          <input type="radio" name="search_type" value="pan"
                              required /> Pan No
                  </div>
                  <div class="col-md-10" style="float:left;">
                      <input type="text" name="search" class="form-control" style="line-height: 2;font-weight: 600; margin-bottom: 10px" placeholder="Search Customer eg. - Customer Name , Mobile No. , Email ID , PAN No." autocomplete="off" required />
                  </div>
                  <div class="col-md-2" style="float: left;">
                      <button type="submit" name="sfilerHer" class="btn cur-p btn-primary" style="margin-left: -75px;">Search</button>
                  </div>
                  </form>
              </div>
              <div class="right_topbar">
                  <div class="icon_info">

                      <ul class="user_profile_dd">
                          <li>
                              <a class="dropdown-toggle" data-toggle="dropdown"><img class="rounded-circle"
                                      src="images/layout_img/user_img.jpg" alt="#" /><span class="name_user">
                                      {{ Auth::user()->name }}
                                  </span></a>
                              <div class="dropdown-menu">
                                  <a class="dropdown-item" href="profile.php">My Profile</a>
                                  <form method="POST" action="{{ route('logout') }}">
                                      @csrf
                                      <button type="submit" class="dropdown-item">Log Out <i class="fa fa-sign-out"></i></button>
                                  </form>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </nav>
  </div>
<div class="br-header">
  <div class="br-header-left">
    <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href="#"><i class="icon ion-navicon-round"></i></a></div>
    <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href="#"><i class="icon ion-navicon-round"></i></a></div>
    <div class="input-group hidden-xs-down wd-170 transition">
      <input id="searchbox" type="text" class="form-control" placeholder="Search">
      <span class="input-group-btn">
        <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
      </span>
    </div><!-- input-group -->
  </div><!-- br-header-left -->
  <div class="br-header-right">
    <nav class="nav">

      <div class="dropdown">
        <a href="#" class="nav-link nav-link-profile" data-toggle="dropdown">
          <span class="logged-name hidden-md-down">{{ Auth::user()->name }}</span>
          <img src="/bracketplus/img/img1.jpg" class="wd-32 rounded-circle" alt="">
          <span class="square-10 bg-success"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-header wd-250">
          <div class="tx-center">
            <a href="#"><img src="/bracketplus/img/img1.jpg" class="wd-80 rounded-circle" alt=""></a>
            <h6 class="mg-t-15 mg-b-5 tx-gray-800">{{ Auth::user()->name }}</h6>
            <p class="tx-12 tx-gray-600">{{ Auth::user()->email }}</p>
          </div>
          <hr>
          <ul class="list-unstyled user-profile-nav">
            <li><a href="#"><i class="icon ion-ios-person"></i> Edit Profile</a></li>
            <li><a href="#"><i class="icon ion-ios-gear"></i> Settings</a></li>
            <li><a href="#"><i class="icon ion-power"></i> Sign Out</a></li>
          </ul>
        </div><!-- dropdown-menu -->
      </div><!-- dropdown -->
    </nav>

  </div><!-- br-header-right -->
</div><!-- br-header -->

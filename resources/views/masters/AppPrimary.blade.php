<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JobPlus</title>
    <!-- CSS -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/bootstrap/css/appfinale.css">
    <link rel="stylesheet" href="/bootcard/css/bootcards-desktop.min.css">
    <link rel="stylesheet" href="/bootstrap/bootstrap-select.min.css">
    <link rel="stylesheet" href="/sweetalert/sweetalert.css">
    <link href="/css/star-rating.css" media="all" rel="stylesheet" type="text/css" />
    <link href="/css/fontawesome-stars.css" media="all" rel="stylesheet" type="text/css" />
    @yield('css')
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">for Job Seekers</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{route('app/dashboard')}}"><i class="fa fa-lg fa-clock-o" aria-hidden="true"></i> Schedule</a></li>
        <li><a href="{{route('app/job/result')}}"><i class="fa fa-lg fa-briefcase" aria-hidden="true"></i> Find Job</a></li>
        <li><a href="{{url('app/applications')}}"><i class="fa fa-handshake-o" aria-hidden="true"></i> Job Applications</a></li>
        <li><a href="#"><i class="fa fa-lg fa-bookmark-o" aria-hidden="true"></i> Saved Jobs</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
     <!--    <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <i class="fa fa-lg fa-bell-o" aria-hidden="true"></i> Notification</a>
          <ul class="dropdown-menu dropdown-cart" role="menu">
              <li>
                  <span class="item">
                    <span class="item-left"> -->
                        <!-- <img src="http://lorempixel.com/50/50/" alt="" /> -->
                        <!-- <span class="item-info">
                            <span>Item name</span>
                            <span>23$</span>
                        </span>
                    </span>
                    <span class="item-right">
                        <button class="btn btn-xs btn-danger pull-right">x</button>
                    </span>
                </span>
              </li>
              <li class="divider"></li>
              <li><a class="#" href="">See all</a></li>
          </ul>
        </li> -->
      <!--   <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-lg fa-envelope-o" aria-hidden="true"></i> Messages</a>
          <ul class="dropdown-menu dropdown-cart" role="menu">
              <li>
                  <span class="item">
                    <span class="item-left"> -->
                        <!-- <img src="http://lorempixel.com/50/50/" alt="" /> -->
                       <!--  <span class="item-info">
                            <span>Item name</span>
                            <span>23$</span>
                        </span>
                    </span>
                    <span class="item-right">
                        <button class="btn btn-xs btn-danger pull-right">x</button>
                    </span>
                </span>
              </li>
              <li class="divider"></li>
              <li><a class="#" href="">See all</a></li>
          </ul>
        </li> -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <img src="{{Auth::user()->profile->avatar}}" style="width:25px;height:25px;border-radius:50%;">{{Auth::user()->profile->fname}} {{ Auth::user()->profile->lname}}<span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-cart" role="menu">
              <li>
              <a href="{{url('/employer/dashboard')}}"><span>Switch to Employer</span></a>
                <a href="{{url('/get/user/profile')}}"><span>Profile</span></a>
              </li>
              <li class="divider"></li>
              <li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
@yield('body')
<footer>
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 foot ">
                    <h1> JobPlus </h1>
                    <ul>
                       <li> <a href="#"><h1>#<b>Where opportunity meets people <i class="glyphicon glyphicon-education"></i></b></h1></a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6 foot ">
                 
                </div>
                <div class="col-lg-3  col-md-2 col-sm-4 col-xs-6 foot foot-social">
                   <ul class="social">
                    <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
                </ul>
            </div>
            <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6 foot">
            </div>
            <div class="col-lg-2  col-md-3 col-sm-6 col-xs-12 ">
              
            </div>
        </div>
        <!--/.row--> 
    </div>
    <!--/.container--> 
</div>
<!--/.footer-->

<div class="footer-bottom">
    <div class="container">
        <p class="pull-left"> JobPlus. All right reserved. </p>
        <div class="pull-right">
            <ul class="nav nav-pills payments">
                <li><i class="fa fa-cc-visa"></i></li>
                <li><i class="fa fa-cc-mastercard"></i></li>
                <li><i class="fa fa-cc-amex"></i></li>
                <li><i class="fa fa-cc-paypal"></i></li>
            </ul> 
        </div>
    </div>
</div>
<!--/.footer-bottom--> 
</footer>
</body>
<script src="/js/jquery-1.11.1.min.js"></script>
@yield('js')
</html>
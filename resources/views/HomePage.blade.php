<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Amar Bahon</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Page style sheet link -->
    <link rel="stylesheet" href="css/style.css">

    <link href="css/homePage.css" rel="stylesheet" media="screen">
    <link href="css/navbar_style.css" rel="stylesheet" media="screen">
    <link href="css/footer_css.css" rel="stylesheet" media="screen">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




</head>
<body>

<a href="/" class="btn">Amar Bahon</a>
<a href="#" class="btn">How it works</a>
<a href="#" class="btn">Gallery</a>
<a href="#" class="btn">Feedback</a>
<a href="#" class="btn">Login</a>
<div class="dropdown btn">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Sign up
        <span class="caret"></span></button>
    <ul class="dropdown-menu">
        <li><a href="/importer_reg">Importer Sign up</a></li>
        <li><a href="/owner_reg">Transporter Sign up</a></li>
    </ul>
</div>

<div class="dropdown btn">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">DashBoard
        <span class="caret"></span></button>
    <ul class="dropdown-menu">
        <li><a href="/company">Importer</a></li>
        <li><a href="/owner">Transporter</a></li>
    </ul>
</div>


    <!-- Navigation bar section -->
    {{--<nav class="navbar navbar-default navbar-fixed-top" id="comNav">--}}
        {{--<div class="container">--}}
            {{--<div class="navbar-header">--}}
                {{--<button type="button" class="navbar-toggle" data-toggle="collapse"--}}
                        {{--data-target="#comNavCollapse">--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                {{--</button>--}}
                {{--<a href="#" class="navbar-brand">Amar Bahon</a>--}}
            {{--</div><!-- End nav header -->--}}
            {{--<div class="collapse navbar-collapse" id="comNavCollapse">--}}
                {{--<ul class="nav navbar-nav">--}}
                    {{--<li><a href="#HIW">How it works</a></li>--}}
                    {{--<li><a href="#gallery">Gallery</a></li>--}}
                {{--</ul>--}}
                {{--<ul class="nav navbar-nav navbar-right">--}}
                    {{--<li><a href="#feedback">Feedback</a></li>--}}
                    {{--<li><a href="#logIn">Log in</a></li>--}}
                    {{--<li><a href="#signUp">Sign up</a></li>--}}
                {{--</ul>--}}
            {{--</div><!-- End navbar content area -->--}}
        {{--</div>--}}
    {{--</nav>--}}
    <!-- End navbar section -->

    <!-- Carousal slider section -->
    <div class="carousel slide" id="theSlider">
        <ol class="carousel-indicators">
            <li data-target="#theSlider" data-slide-to="0" class="active"></li>
            <li data-target="#theSlider" data-slide-to="1"></li>
            <li data-target="#theSlider" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" id="carousel_section">
            <div class="item active">
                <img class="imgJS" src="images/slider/1.jpg" alt="truck 1" id = "img1">
                <div class="carousel-caption">
                    <h3>Amar Bahon</h3>
                    <p>Your trust, our responsibility</p>
                    <a href="#" class="btn btn-info">Download App</a>
                </div>
            </div>
            <div class="item">
                <img class="imgJS" src="images/slider/2.jpg" alt="truck 2">
                <div class="carousel-caption">
                    <h3>Amar Bahon</h3>
                    <p>Your trust, our responsibility</p>
                    <a href="#" class="btn btn-info">Download App</a>
                </div>
            </div>
            <div class="item">
                <img class="imgJS" src="images/slider/4.jpg" alt="truck 3">
                <div class="carousel-caption">
                    <h3>Amar Bahon</h3>
                    <p>Your trust, our responsibility</p>
                    <a href="#" class="btn btn-info">Download App</a>
                </div>
            </div>
        </div>

        <a href="#theSlider" class="carousel-control left" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a href="#theSlider" class="carousel-control right" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
    <!-- Carousal slider ends here -->


    <div class="container-fluid feature_section img-responsive">

        <!-- How it works section -->
        <div id="HIW" class="row">
            <div class="col-md-12">

                <div class="page-header">
                    <h3 class="text-center">How it works</h3>
                </div>

                <div class="row">

                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-body text-center">
                                <span class="glyphicon glyphicon-apple"></span>
                                <h4>Register as an Importer</h4>
                                <p>To get our services as an importer you have to register first.
                                    A company have to do the same to reach our services. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-body text-center">
                                <span class="glyphicon glyphicon-apple"></span>
                                <h4>Find a Transporter</h4>
                                <p>We have a large number of reliable transporters,to reach them importer should post their requirement.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-body text-center">
                                <span class="glyphicon glyphicon-apple"></span>
                                <h4>Register as a transporter</h4>
                                <p>To find a secured transportation task, register as a transporter.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-body text-center">
                                <span class="glyphicon glyphicon-apple"></span>
                                <h4>Get a Task</h4>
                                <p>For a suitable task a transporter should bid from the jobs available in the site and get a desired task in a handsome payment.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- How it works ends -->

        <hr>

        <!-- Features section starts -->
        <div class="row feature_section_inner">

            <!-- Left side section -->
            <div class="col-md-5">
                <!-- Feature heading -->
                <div class="row feature_heading">
                    <div class="col-md-12">
                        <h2 class="cando">
                            Our Features
                        </h2>
                        <h3 class="cando">
                            WHAT CAN WE DO FOR YOU
                        </h3>
                    </div>
                </div>
                <!-- Feature image -->
                <div class="row feature_img">
                    <div class="col-md-12">
                        <img src="images/featureIMG.png" class="img-responsive" alt="Feature Image">
                    </div>
                </div>
            </div>

            <!-- Right side section -->
            <div class="col-md-7">
                <!-- Upper panel -->
                <div class="row">
                    <div class="gap_pos">

                    </div>
                    <div class="feature_items">

                        <div class="col-md-offset-2 col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body text-center">
                                    <span class="glyphicon glyphicon-apple"></span>
                                    <h4>Flexible</h4>
                                    <p> </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-offset-1 col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body text-center">
                                    <span class="glyphicon glyphicon-apple"></span>
                                    <h4>Timely execution</h4>
                                    <p> </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="gap_pos">

                    </div>
                </div>

                <div class="row">
                    <div class="gap_pos">

                    </div>
                    <div class="feature_items">

                        <div class="col-md-offset-2 col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body text-center">
                                    <span class="glyphicon glyphicon-apple"></span>
                                    <h4>Reliable</h4>
                                    <p></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-offset-1 col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body text-center">
                                    <span class="glyphicon glyphicon-apple"></span>
                                    <h4>Secured</h4>
                                    <p></p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="gap_pos">

                    </div>
                </div>
            </div>

        </div>
        <!-- Features section ends -->

        <hr>

        <!-- Feedback section starts -->
        <div id="feedback" class="row">
            <div class="col-md-5">
                <div class="row feedback_heading">
                    <div class="col-md-12">
                        <h2 class="">
                            FEEDBACK
                        </h2>
                        <h3 class="">
                            Please Give Your Feedback
                        </h3>
                    </div>
                </div>
                <div class="row feedback_img">
                    <div class="col-md-12">
                        <img src="images/feedback.png" class="img-responsive" alt="Feedback Image">
                    </div>
                </div>
            </div>

            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-offset-1 col-md-8">

                        <div class="form-group row">
                            <label  for="nameInput"><h3>Name</h3></label>
                            <input type="text" class="form-control" id="nameInput" placeholder="Your Name">
                        </div>

                        <div class="form-group row">
                            <label  for="emailInput"><h3>Email</h3></label>
                            <input type="text" class="form-control" id="emailInput" placeholder="email">
                        </div>

                        <div class="form-group row">
                            <label  for="feedbackInput"><h3>Feedback</h3></label>
                            <textarea id="feedbackInput" class="form-control" rows="3" placeholder="Feedback..." required>  </textarea>
                        </div>

                        <button type="submit" class="btn btn-primary pull-right submit_button">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feedback section ends -->
        <hr>
    </div>

    <!-- Footer section starts -->

    <div class="footer">
    <div class="container social">
        <a href='#'><i class="fa fa-twitch fa-3x fa-fw"></i></a>
        <a href='#'><i class="fa fa-facebook fa-3x fa-fw"></i></a>
        <a href='#'><i class="fa fa-twitter fa-3x fa-fw"></i></a>
        <a href='#'><i class="fa fa-youtube-play fa-3x fa-fw"></i></a>
        <a href='#'><i class="fa fa-rss fa-3x fa-fw"></i></a>
        <a href='#'><i class="fa fa-vine fa-3x fa-fw"></i></a>
        <a href='#'><i class="fa fa-flickr fa-3x fa-fw"></i></a>
        <a href='#'><i class="fa fa-linkedin fa-3x fa-fw"></i></a>
    </div>
</div>

    <a href="https://twitter.com/freshcontrast" class="footer1">@AmarBahon.com</a>


    <!-- Footer section ends -->


    <script src="js/jquery-3.1.1.min.js" rel="script"></script>
    <script src="js/bootstrap.min.js" rel="script"></script>
    <script src="js/homePageScript.js"></script>


</body>
</html>
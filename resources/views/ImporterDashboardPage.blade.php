<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Importer page</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Page style sheet link -->
    <link href="css/navbar_style.css" rel="stylesheet">
    <link href="css/inporter_dashboard_style.css" rel="stylesheet">
    <link href="css/user_info_section_style.css" rel="stylesheet">
    <link href="css/user_container_section_style.css" rel="stylesheet">
    <link href="css/search-area-style.css" rel="stylesheet">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body onload="myFunction()">

<!--------------------------------------------------------->
<!-- Navigation bar section -->
<nav class="navbar navbar-default navbar-fixed-top" id="comNav">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#comNavCollapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Amar Bahon</a>
        </div>
        <!-- End nav header -->
        <div class="collapse navbar-collapse" id="comNavCollapse">
            <ul class="nav navbar-nav">
                <li><a href="#HIW">How it works</a></li>
                <li><a href="#gallery">Gallery</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#feedback">Feedback</a></li>
                <li><a href="#logIn">Log out</a></li>
            </ul>
        </div>
        <!-- End navbar content area -->
    </div>
</nav>
<!-- End navbar section -->
<!--------------------------------------------------------->


<!--------------------------------------------------------->
<!-- The main container section starts -->
<div class="container-fluid job_noti_nego_section img-responsive">
    <div class="row">
        <div class="com-md-12">

            <!--------------------------------------------------------->
            <!-- Importer information section starts -->
            <div class="col-md-3" id="importer_info">

                <!-- user image section starts -->
                <div class="row">
                    <div class="col-md-12" id="importer_image">

                        <!-- Profile picture section starts -->
                        <div class="row">
                            <div class="col-md-12 imp-im-sec">
                                <img class="img-responsive" src="images/proIm.jpg">
                            </div>
                        </div>
                        <!-- Profile picture section ends -->

                        <!-- Browse button section starts -->
                        <div class="row">
                            <div class="col-md-12 brw-btn-sec">
                                <input class="btn" type="file">
                            </div>
                        </div>
                        <!-- Browse button section ends -->


                    </div>
                </div>
                <!-- user image section ends-->

                <!-- user personal information starts -->
                <div class="row">
                    <div class="col-md-12" id="importer_personal_info">
                        <div class="row">
                            <div class="col-md-12 panel panel-default">
                                <h4>Name: <span>Rahim</span></h4>
                                <hr>

                                <h4>ID: <a href="#">123456</a></h4>
                                <hr>

                                <!-- Rating section starts -->
                                <div class="rating">
                                    <ul>
                                        <li>Rating: &nbsp; &nbsp;</li>
                                        <li><span class="glyphicon glyphicon-star-empty"></span></li>
                                        <li><span class="glyphicon glyphicon-star-empty"></span></li>
                                        <li><span class="glyphicon glyphicon-star-empty"></span></li>
                                        <li><span class="glyphicon glyphicon-star-empty"></span></li>
                                        <li><span class="glyphicon glyphicon-star-empty"></span></li>
                                    </ul>
                                </div>
                                <!-- Rating section ends -->

                                <hr>

                                <div class="up-btn-sec text-right">
                                    <a href="/importer" type="button" class="btn btn-info">Edit Profile</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- user personal information ends -->

            </div>
            <!-- Importer information section ends -->
            <!--------------------------------------------------------->


            <!--------------------------------------------------------->
            <!-- Jobs and reply section starts -->
            <div class="col-md-6" id="jobs_and_reply">

                <!--------------------------------------------------------->
                <!-- Job posting and build company button section starts -->
                <div class="row" id="button_section">
                    <div class="col-md-12 btn-group">
                        <div class="center-btn">
                            <a type="button" href="/job" class="btn btn-lg btn-primary">Want Vehicle</a>
                            {{--<a type="button" class="btn btn-lg btn-primary">Build Up A Company</a>--}}
                        </div>
                    </div>
                </div>
                <!-- Job posting and build company button section ends -->
                <!--------------------------------------------------------->

                <!--------------------------------------------------------->
                <!-- Number of jobs starts -->
                <div id="posted_jobs">

                    <div class="row job_post_section">

                        <!-- Posted Jobs section starts -->
                        <div class="panel-group">

                            <div class="col-md-12 sec-heading text-center">
                                <div class="panel panel-info panel-color">
                                    <div class="panel-heading-sub-job">
                                        <h3>Your Submitted Jobs</h3>
                                    </div>
                                </div>
                            </div>

                            @foreach($jobs as $job)
                            <!-- Single job post -->
                            <div class="col-md-12 single_post">
                                <div class="panel panel-info">
                                    <div class="panel-heading">Job ID: 123456</div>
                                    <div class="panel-body">
                                        <h4>Submitted Date: {!! $job['created_at'] !!}</h4>
                                        <h4>Root: {!! $job['pick_up_zone'] !!} To {!! $job['destination'] !!}</h4>

                                        <div class="right-btn">
                                            <a class="btn btn-primary btn-group-sm" type="button"
                                               onclick="getNotifications()">Notifications</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single job post ends -->
                            @endforeach



                        </div>
                        <!-- Posted Jobs section ends -->

                    </div>

                </div>
                <!-- Number of jobs ends -->
                <!--------------------------------------------------------->

            </div>
            <!-- Jobs and reply section ends -->
            <!--------------------------------------------------------->

            <!--------------------------------------------------------->
            <!-- Jobs notification section starts -->
            <div class="col-md-6" id="jobs_notifications">

                <!-- Number of notifications starts -->
                <div id="specified_job_notification">

                    <div class="row job_post_section">

                        <!-- Notification section starts -->
                        <div class="panel-group">

                            <!-- Search area starts -->
                            <div class="col-md-12">
                                <div id="custom-search-input">
                                    <div class="input-group col-md-12">
                                        <input type="text" class="search-query form-control" placeholder="Search"/>
                                        <span class="input-group-btn">
                                            <button class="btn btn-danger" type="button">
                                                <span class=" glyphicon glyphicon-search"></span>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Search area ends -->

                            <!-- Jobs reply section heading starts -->
                            <div class="col-md-12 sec-heading text-center">
                                <div class="panel panel-info panel-color">
                                    <div class="panel-heading-sub-job">
                                        <h3>Jobs Reply</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- Jobs reply section heading ends -->

                            <!-- Single Notification starts -->
                            <div class="col-md-12 single_post">

                                <div class="panel panel-info">

                                    <div class="panel-heading" style="padding-bottom: 30px">
                                        <div style="float: left">Vehicle owner ID:<a href="#">5823</a></div>
                                        <div style="float: right">Vehicle owner Name: Kuddus</div>
                                    </div>


                                    <div class="panel-body">
                                        <h4>Vehicle owner's bidding: 12000TK</h4>
                                        <h4>Root: Khulna To Dhaka</h4>

                                        <div class="right-btn">
                                            <a class="btn btn-primary btn-group-sm" type="button" onclick="getJobs()">Previous</a>
                                            <a class="btn btn-primary btn-group-sm" type="button"
                                               onclick="getNegotiation()"> Negotiation</a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!-- Single Notification ends -->

                        </div>
                        <!-- Notification section ends -->

                    </div>

                </div>
                <!-- Number of notifications ends -->

            </div>
            <!-- Jobs notification section ends -->
            <!--------------------------------------------------------->

            <!--------------------------------------------------------->
            <!-- Negotiation area starts -->
            <div class="col-md-6" id="negotiation">

                <div class="row negotiation_section">

                    <div class="panel-group">

                        <div class="col-md-12 sec-heading text-center">
                            <div class="panel panel-info panel-color">
                                <div class="panel-heading-sub-job">
                                    <h3>Negotiation Area</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 single_negotiation">

                            <div class="panel panel-info">

                                <div class="panel-heading">
                                    <div> Vehicle owner ID: <a href="#">5678</a></div>
                                    <div> Vehicle owner Name: Kuddus</div>
                                    <div> Bidding (TK): 24000</div>
                                </div>

                                <div class="panel-body">

                                    <form>
                                        <div class="form-group">
                                            <div class="row right-btn">
                                                <div class="col-md-4">
                                                    <label class="counter-offer-text-area">Counter offer area:</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-md-3 count-off-padd">
                                                    <a href="#" class="btn btn-primary btn-group-sm" type="button">Counter
                                                        Offer</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="right-btn">
                                        <a href="#" class="btn btn-primary btn-group-sm" onclick="getNotifications()"
                                           type="button">Back</a>
                                        <a href="#" class="btn btn-danger btn-group-sm" type="button">Reject</a>
                                        <a href="#" class="btn btn-success btn-group-sm" type="button">Accept</a>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
            <!-- Negotiation area ends -->
            <!--------------------------------------------------------->


        </div>
    </div>
</div>
<!-- The main container section ends -->
<!--------------------------------------------------------->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-3.1.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<!-- Page js sheet link -->
<script src="js/importer_dashboard_behaviour.js"></script>
</body>
</html>
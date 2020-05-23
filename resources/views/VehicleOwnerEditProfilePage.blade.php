<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Vehicle owner edit profile page</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/navbar_style.css" rel="stylesheet">
    <link href="css/user_container_section_style.css" rel="stylesheet">
    <link href="css/user_info_section_style.css" rel="stylesheet">
    <link href="css/edit-profile-style.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!--------------------------------------------------------->
<!-- starts -->
<!-- ends -->
<!--------------------------------------------------------->


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
            <a href="/" class="navbar-brand">Amar Bahon</a>
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
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">DashBoard
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="/company">Importer</a></li>
                    <li><a href="/owner">Transporter</a></li>
                </ul>
            </div>
        </div>
        <!-- End navbar content area -->

    </div>
</nav>
<!-- End navbar section -->
<!--------------------------------------------------------->


<!--------------------------------------------------------->
<!-- starts -->
<div class="container-fluid job_noti_nego_section img-responsive">
    <div class="row">
        <div class="col-md-12">

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

                                <!--
                                <div class="up-btn-sec text-right">
                                    <a href="#" type="button" class="btn btn-info">Edit Profile</a>
                                </div>
                                -->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- user personal information ends -->

            </div>
            <!-- Importer information section ends -->
            <!--------------------------------------------------------->


            <!--------------------------------------------------------->
            <!-- vehicle owner edit profile section starts -->
            <div class="col-md-7" id="IEPS">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#changeInfo">Change Info</a></li>
                    <li><a data-toggle="tab" href="#bankDetail">Bank detail</a></li>
                    <li><a data-toggle="tab" href="#bKashDetail">bKash detail</a></li>
                </ul>
            </div>

            <div class="tab-content">

                <!-- vehicle owner Personal info edit section starts -->
                <div id="changeInfo" class="tab-pane fade in active">

                    <div class="row">
                        <div class="col-md-6 heading">
                            <h3>Edit profile</h3>
                        </div>

                        <div class="col-md-6 well">

                            {!! Form::open(['method'=>'PATCH','route'=>['vehicle_owner.update',$owner['id']]] )  !!}
                            {{ csrf_field() }}


                            <div class="form-group">
                                    <input type="Name" class="form-control" id="importer_name" name="name_of_owner" value={!! $owner['name_of_owner'] !!}>
                                </div>

                                <div class="form-group">
                                    <input type="Name" class="form-control" id="Union Membership number" name="union_membership_no" value={!! $owner['union_membership_no'] !!}>
                                </div>

                                <div class="form-group">
                                    <span><h5>Date of birth:</h5></span>
                                    <input type="date" class="form-control" id="importer_Date Of Birth" name="date_of_birth" value={!! $owner['date_of_birth'] !!}>
                                </div>

                                <div class="form-group">
                                    <input type="Name" class="form-control" id="importer_National ID Number" name="NIDno"
                                           value={!! $owner['NIDno'] !!}>
                                </div>

                                <div class="form-group">
                                    <input type="Name" class="form-control" id="importer_Address" name="address" value={!! $owner['address'] !!}>
                                </div>

                                <div class="form-group">
                                    <input type="Name" class="form-control" id="importer_Contact Number" name="phone" value={!! $owner['phone'] !!}>
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control" id="importer_Email ID" name="email" value={!! $owner['email'] !!}>
                                </div>

                                {{--<div class="form-group">--}}
                                    {{--<input type="password" class="form-control" id="importer_Password" placeholder="New password">--}}
                                {{--</div>--}}

                                {{--<div class="form-group">--}}
                                    {{--<input type="password" class="form-control" id="importer_Confirm Password"--}}
                                           {{--placeholder="Confirm Password">--}}
                                {{--</div>--}}

                                <div>
                                    <button class="submit-btn-style btn-success btn pull-right" type="submit">submit</button>
                                </div>

                            {!! Form::close() !!}

                        </div>
                    </div>

                </div>
                <!-- vehicle owner Personal info edit section ends -->

                <!-- vehicle owner Bank account edit section starts -->
                <div id="bankDetail" class="tab-pane fade">
                    <div class="row">

                        <div class="col-md-6 heading">
                            <h3>Bank account info</h3>
                        </div>

                    </div>
                </div>
                <!-- vehicle owner Bank account edit section ends -->

                <!-- vehicle owner bKash account edit section starts -->
                <div id="bKashDetail" class="tab-pane fade">
                    <div class="row">

                        <div class="col-md-6 heading">
                            <h3>bKash account info</h3>
                        </div>

                    </div>
                </div>
                <!-- vehicle owner bKash account edit section ends -->


            </div>

            <!-- vehicle owner edit profile section ends -->
            <!--------------------------------------------------------->




        </div>
    </div>
</div>
<!-- ends -->
<!--------------------------------------------------------->



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
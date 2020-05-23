<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Vehicle Owner Page</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Page style sheet link-->
    <link href="css/navbar_style.css" rel="stylesheet">
    <link href="css/user_info_section_style.css" rel="stylesheet">
    <link href="css/user_container_section_style.css" rel="stylesheet">
    <link href="css/vehicle_owner_style.css" rel="stylesheet">
    <link href="css/search-area-style.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

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

<!-- The main container section starts -->
<div class="container-fluid job_noti_nego_section img-responsive">
    <div class="row">
        <div class="col-md-12">

            <!--------------------------------------------------------->
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
                                    <a href="#" type="button" class="btn btn-info">Edit Profile</a>
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
            <!-- Confirm and requested work, vehicle and driver entry and also search section starts -->

            <div class="col-md-9" id="CARWS">

                <nav class="navbar navbar-default">

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target="#CARWS_Collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="#" class="navbar-brand">Menu..</a>
                        </div>

                        <div class="collapse navbar-collapse" id="CARWS_Collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a data-toggle="tab" href="#searchJobs">Search jobs</a></li>
                                <li><a data-toggle="tab" href="#confirmWork">Confirm Work</a></li>
                                <li><a data-toggle="tab" href="#requestedWork">Requested Work</a></li>
                                <li><a data-toggle="tab" href="#vehicleEntry">Vehicle entry</a></li>
                                <li><a data-toggle="tab" href="#driversEntry">Drivers entry</a></li>
                            </ul>
                        </div>

                </nav>

                <!-- old one
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#searchJobs">Search jobs</a></li>
                    <li><a data-toggle="tab" href="#confirmWork">Confirm Work</a></li>
                    <li><a data-toggle="tab" href="#requestedWork">Requested Work</a></li>
                    <li><a data-toggle="tab" href="#vehicleEntry">Vehicle entry</a></li>
                    <li><a data-toggle="tab" href="#driversEntry">Drivers entry</a></li>
                </ul>
                -->

                <div class="tab-content">
                    <!-- Confirmed works section starts -->
                    <div id="confirmWork" class="tab-pane fade">

                        <div class="panel-group text-center">

                            <div class="col-md-12 sec-heading">
                                <div class="panel panel-info panel-color">
                                    <div class="panel-heading-sub-job">
                                        <h3>Confirm Work</h3>
                                    </div>
                                </div>
                            </div>

                            <!-- Single confirmed job starts -->
                            <div class="col-md-12 single_post">
                                <div class="panel panel-info">
                                    <div class="panel-heading">Job ID: 123456</div>
                                    <div class="panel-body">
                                        <h4>Client ID: <a href="#">5678</a></h4>
                                        <h4>Client Name: Jobbar</h4>
                                        <h4>Submitted Date: 01/01/2017</h4>
                                        <h4>Root:</h4>
                                        <h5>Form: Daulatpur, Khulna</h5>
                                        <h5>To: Mouchak, Dhaka</h5>
                                        <h5>Contact number: 017........</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- Single confirmed job ends -->

                            <!-- Single confirmed job post -->
                            <div class="col-md-12 single_post">
                                <div class="panel panel-info">
                                    <div class="panel-heading">Job ID: 123456</div>
                                    <div class="panel-body">
                                        <h4>Client ID: <a href="#">5678</a></h4>
                                        <h4>Client Name: Jobbar</h4>
                                        <h4>Submitted Date: 01/01/2017</h4>
                                        <h4>Root:</h4>
                                        <h5>Form: Daulatpur, Khulna</h5>
                                        <h5>To: Mouchak, Dhaka</h5>
                                        <h5>Contact number: 017........</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- Single confirmed job ends -->

                        </div>

                    </div>
                    <!-- Confirmed works section ends -->


                    <!-- Requested work section starts -->
                    <div id="requestedWork" class="tab-pane fade">

                        <div class="panel-group text-center">

                            <div class="col-md-12 sec-heading">
                                <div class="panel panel-info panel-color">
                                    <div class="panel-heading-sub-job">
                                        <h3>Requested Work</h3>
                                    </div>
                                </div>
                            </div>

                            <!-- Single requested job starts -->
                            @foreach($req_job as $rq)
                                <div class="col-md-12 single_post">
                                <div class="panel panel-info">
                                    <div class="panel-heading">Job ID: 123456</div>
                                    <div class="panel-body">
                                        <div class="col-md-4">
                                            <h4>Client ID: <a href="#">5236</a></h4>
                                            <h4>Client Name: {!! $rq->name_of_importer !!}</h4>
                                            <h4>Submitted Date: {!! $rq->created_at !!}</h4>
                                        </div>
                                        <div class="col-md-4">
                                            <h4>Root:</h4>
                                            <h4>Form: {!! $rq->pick_up_zone !!}</h4>
                                            <h4>To: {!! $rq->destination !!}</h4>
                                        </div>
                                        <div class="col-md-4">
                                            <h4>My offer: {!! $rq->vehicle_owner_offer !!} BDT</h4>
                                            <h4>Client offer: {!! $rq->importer_offer !!} BDT</h4>

                                            {!! Form::open(['method'=>'PATCH','route'=>['bidding.update',$rq->job_id]]) !!}
                                            {{ csrf_field() }}

                                            <div class="form-group">

                                                    <input name="counter_offer" type="text" class="form-control">
                                                    <input type="hidden" name="action" id="action" value="">

                                                    <div class="padd-top">
                                                        <button id="counter" class="btn btn-primary btn-group-sm" type="submit">Counter
                                                                Offer</button>
                                                        <button id="reject" class="btn btn-danger btn-group-sm" type="submit">Reject</button>
                                                        <button id="accept" class="btn btn-success btn-group-sm" type="submit">Accept</button>
                                                    </div>


                                                </div>
                                            {!! Form::close() !!}
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Single requested job ends -->
                            @endforeach




                        </div>

                    </div>
                    <!-- Requested work section ends -->

                    <!-- Vehicle Entry section starts -->
                    <div id="vehicleEntry" class="tab-pane fade">

                        <div class="container-fluid">

                            <!-- Form heading -->
                            <div class="col-md-3 col-md-push-5 entry-heading">
                                <h3>Vehicle Entry</h3>
                            </div>

                            <!-- Vehicle entry form -->
                            {!! Form::open(['route'=>'vehicle.store']) !!}
                            <div class="row">
                                <div class="col-md-7 col-lg-offset-3">

                                    <div class="well">
                                        <!-- Number of vehicle entry -->
                                        <div class="form-group">
                                            <input type="number" class="form-control" id="vehicle_number"
                                                   name="size" placeholder="Number Of Vehicle">
                                        </div>

                                        <!-- Type of vehicle entry -->
                                        <div class="form-group">
                                            <select name="type_of_vehicle" class="form-control">
                                                <option value="" selected disabled>Type of vehicles</option>
                                                <option value="volvo">Volvo</option>
                                                <option value="saab">Saab</option>
                                                <option value="fiat">Fiat</option>
                                                <option value="audi">Audi</option>
                                            </select>
                                        </div>

                                        <!-- Registration number -->
                                        <div class="form-group">
                                            <input type="number" class="form-control"
                                                   id="vehicle_registration_number"
                                                   name="registration_no" placeholder="Registration number">
                                        </div>

                                        <!-- Chasis number -->
                                        <div class="form-group">
                                            <input type="number" class="form-control" id="vehicle_chasis_number"
                                                   name="chassis_no" placeholder="Chasis Number">
                                        </div>

                                        <!-- Log book number -->
                                        <div class="form-group">
                                            <input type="number" class="form-control" id="vehicle_log_book_Number"
                                                   name="logbook_no" placeholder="Log Book Number:">
                                        </div>

                                        <!-- Token number -->
                                        <div class="form-group">
                                            <input type="number" class="form-control" id="vehicle_token_number"
                                                   name="token_no" placeholder="Token Number">
                                        </div>

                                        <!-- Submit button -->
                                        <button style="height: 40px" type="submit"
                                                class="btn-success form-control">Add Vehicle
                                        </button>

                                    </div>

                                </div>

                            </div>
                            {!! Form::close() !!}

                        </div>

                    </div>
                    <!-- Vehicle Entry section ends -->

                    <!-- Drivers Entry section starts -->
                    <div id="driversEntry" class="tab-pane fade">


                        <div class="container-fluid">

                            <!-- Form heading -->
                            <div class="col-md-3 col-md-push-4 entry-heading">
                                <h3>Drivers Entry</h3>
                            </div>

                            <!-- driver entry form -->

                            {!! Form::open(['route'=>'driver.store']) !!}
                            <div class="row">
                                <div class="col-md-8 col-lg-offset-2">

                                    <div class="well">

                                        <div class="form-group">
                                            <input type="Name" class="form-control" id="driver_name" name="name" placeholder="Name">
                                        </div>

                                        <div class="form-group">
                                            <input type="number" class="form-control" id="driver_national_id_number"
                                                   name="NIDno" placeholder="National ID Number:">
                                        </div>

                                        <div class="form-group">
                                            <input type="date" class="form-control" id="driver_date_of_birth"
                                                   name="date_of_birth" placeholder="Date Of Birth">
                                        </div>

                                        <div class="form-group">
                                            <input type="number" class="form-control" id="driver_license_number"
                                                   name="license_no" placeholder="License Number:">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" id="driver_Address"
                                                   name="address" placeholder="Address">
                                        </div>

                                        <div class="form-group">
                                            <input type="number" class="form-control" id="driver_contact_number"
                                                   name="phone" placeholder="Contact Number">
                                        </div>

                                        <div class="form-group">
                                            <input type="Name" class="form-control" id="driver_guardian_name"
                                                   name="name_of_guardian" placeholder="Guardian Name">
                                        </div>

                                        <div class="form-group">
                                            <input type="number" class="form-control" id="driver_guardian_number"
                                                   name="guardian_phone" placeholder="Guardian's Contact Number">
                                        </div>


                                        <button style="height: 40px" type="submit" class="btn-success form-control">Add
                                            Driver
                                        </button>


                                    </div>

                                </div>

                            </div>
                            {!! Form::close() !!}

                        </div>


                    </div>
                    <!-- Drivers Entry section starts -->

                    <!-- Search jobs section starts. Here 'in active'
                    option show the search job option when the page is loaded -->
                    <div id="searchJobs" class="tab-pane fade in active padd-top">

                        <!-- Search area starts -->
                        <div class="col-md-offset-2 col-md-8">
                            <div id="custom-search-input">
                                <div class="input-group col-md-12">
                                    <input type="text" class="search-query form-control" placeholder="Search Your Jobs..."/>
                                        <span class="input-group-btn">
                                            <button class="btn btn-danger" type="button">
                                                <span class=" glyphicon glyphicon-search"></span>
                                            </button>
                                        </span>
                                </div>
                            </div>
                        </div>
                        <!-- Search area ends -->

                        <!-- Search result area starts -->
                        <div class="col-md-offset-2 col-md-8">

                            <!-- search result section starts -->
                            <div class="panel-group">

                                <!-- Heading section starts -->
                                <div class="col-md-12 sec-heading text-center">
                                    <div class="panel panel-info panel-color">
                                        <div class="panel-heading-sub-job">
                                            <h3>Job Available</h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- Heading section ends -->

                                @foreach($job as $j)

                                <!-- Single search result starts -->
                                <div class="col-md-12 single_post">
                                    <div class="panel panel-info">

                                        <div class="panel-heading">Job ID: <a href=""> 123456</a></div>

                                        <div class="panel-body">
                                            <h4>Company Name: {!! $j->company['name_of_companyp'] !!}</h4>
                                            <h4>Client ID: <a href="#">2589</a></h4>
                                            <h4>Submitted Date: {!! $j['created_at'] !!}</h4>
                                            <h4>Root:</h4>
                                            <h5>From: {!! $j['pick_up_zone'] !!} </h5>
                                            <h5>To: {!! $j['destination'] !!} </h5>
                                            <button class="btn btn-primary pull-right">Bid</button>

                                        </div>

                                        <div class="panel-footer">
                                            <p>This is where the detail section will go.
                                                All the journey information will be in
                                                this div. So Porichay give the detail of the
                                                journey in here.
                                                Here is the bidding option.
                                            </p>

                                            {!! Form::open(['route'=>'bidding.store']) !!}

                                            <div class="input-group">
                                                <input type="text" class="form-control" name = "vehicle_owner_offer" placeholder="Give Your Bid..">
                                                <input type="hidden" name="job_id" value="{!! $j['id'] !!}">
                                                <input type="hidden" name="status" value="2">


                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" type="submit">BID</button>
                                                  </span>
                                            </div>

                                            {!! Form::close() !!}
                                        </div>

                                    </div>
                                </div>
                                <!-- Single search result ends -->
                                @endforeach


                                <!-- Single search result starts -->
                                <!-- Single search result ends -->


                            </div>
                            <!-- search result section ends -->

                        </div>
                        <!-- Search result area ends -->

                    </div>
                    <!-- Search jobs section ends -->

                </div>

            </div>
            <!-- Confirm and requested work section ends -->
            <!--------------------------------------------------------->


        </div>
    </div>
</div>

<!-- The main container section ends -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<!-- Including the jQuery library -->
<script src="js/jquery-3.1.1.min.js"></script>
<!-- Including vehicle owner dashboard javascript file -->
<script src="js/vehicle_owner_dashboard_behaviour.js"></script>
</body>
</html>
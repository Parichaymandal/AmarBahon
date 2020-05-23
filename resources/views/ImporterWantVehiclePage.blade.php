<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Importer want vehicle</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/navbar_style.css" rel="stylesheet">
    <link href="css/user_container_section_style.css" rel="stylesheet">
    <link href="css/user_info_section_style.css" rel="stylesheet">
    <link href="css/importer_want_vehicle_style.css" rel="stylesheet">

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
        </div>
        <!-- End navbar content area -->
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">DashBoard
                <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="/company">Importer</a></li>
                <li><a href="/owner">Transporter</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- End navbar section -->
<!--------------------------------------------------------->



<!--------------------------------------------------------->
<!-- The main container section starts -->
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
            <!-- Want vehicle section starts -->
            <div class="col-md-7 col-md-offset-1" id="want-vehicle-section">

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-offset-1 col-md-10 want-vehicle-heading">
                            <h3> Want Vehicle ???? </h3>
                        </div>

                        {!! Form::open(['route'=>'job.store']) !!}


                        <div class="col-md-6 marg-top-8">
                            <div class="well">


                                <div class="form-group">
                                    <input type="Name" class="form-control" id="importer_name" name="name_of_importer" placeholder="name">
                                </div>
                                <div class="form-group">
                                    <input type="Name" class="form-control height-100" id="product_description" name="product" placeholder="Product Description">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" id="weights" name="amount_of_goods" placeholder="Weights of goods(in tons)">
                                </div>

                                <div class="form-group">
                                    <select name="type_of_vehicle"class="form-control">
                                        <option value="" selected disabled>Type of vehicles</option>
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="fiat">Fiat</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input type="number" class="form-control" id="number_of_vehicles" name="number_of_vehicle" placeholder="Number Of Vehicles"min="1"max="10">
                                </div>

                                <div class="form-group">
                                    <select name="pick_up_zone"class="form-control">
                                        <option value=""selected disabled>Pick Up Zone</option>
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Khulna">Khulna</option>
                                        <option value="Rajshahi">Rajshahi</option>
                                        <option value="Barishal">Barishal</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" id="pick_up_zone_address" name="pick_up_address" placeholder="Full Address:(Pick Up Zone)">
                                </div>

                            </div>

                        </div>

                        <div class="col-md-6 marg-top-8">

                            <div class="well">

                                <div class="form-group">
                                    <select name="destination"class="form-control">
                                        <option value=""selected disabled>Destination</option>
                                        <option value="volvo">Dhaka</option>
                                        <option value="saab">Khulna</option>
                                        <option value="fiat">Rajshahi</option>
                                        <option value="audi">Barishal</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" id="destination_address" name="address" placeholder="Full Address:(Destination)">
                                </div>

                                <div class="form-group">
                                    Date Of Transport:
                                    <input type="date" class="form-control" id="importer_Date Of transport" name="date_of_transport">
                                </div>

                                <div class="form-group">
                                    Pick Up Time:
                                    <input type="time" class="form-control" id="pick_up_time" name="pick_up_time" placeholder="name">
                                </div>

                                <div class="form-group">
                                    Reaching Time:
                                    <input type="time" class="form-control" id="reaching_time" name="reaching_time" placeholder="name">
                                </div>

                                <div>
                                    <button type="submit"class="sub-btn btn btn-success form-control">submit</button>
                                </div>


                            </div>

                        </div>

                        {!! Form::close() !!}

                    </div>

                </div>

            </div>
            <!-- Want vehicle section ends -->
            <!--------------------------------------------------------->


        </div>
    </div>
</div>
<!-- The main container section ends -->
<!--------------------------------------------------------->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
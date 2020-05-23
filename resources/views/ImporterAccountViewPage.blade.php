<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Importer account</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/navbar_style.css" rel="stylesheet">
    <link href="css/user_container_section_style.css" rel="stylesheet">
    <link href="css/account-view-style.css" rel="stylesheet">

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

        <div class="collapse navbar-collapse dropdown">
            <button class=" btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">DashBoard
                <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="/company">Importer</a></li>
                <li><a href="/owner">Transporter</a></li>
            </ul>
        </div>
        <!-- End navbar content area -->
    </div>

</nav>
<!-- End navbar section -->
<!--------------------------------------------------------->

<div class="container-fluid job_noti_nego_section img-responsive">
    <div class="row">

        <!-- Profile picture section starts -->
        <div class="col-md-offset-2 col-md-3">
            <div class="row">
                <div class="col-md-12 imp-im-sec">
                    <img class="img-responsive " src="images/proIm.jpg">
                </div>
            </div>
        </div>
        <!-- Profile picture section ends -->

        <!-- Profile info starts -->
        <div class="col-md-offset-1 col-md-4 well">

            <form action="/edit_importer">

                <div class="form-group">
                    <span><h5>Name:</h5></span>
                    <input type="Name" class="form-control" id="importer_name" value={!! $importer['name_of_owner'] !!} readonly>
                </div>

                <div class="form-group">
                    <span><h5>Date of birth:</h5></span>
                    <input type="date" class="form-control" id="importer_Date Of Birth" value={!! $importer['date_of_birth'] !!} readonly>
                </div>

                <div class="form-group">
                    <span><h5>National ID:</h5></span>
                    <input type="Name" class="form-control" id="importer_National ID Number"
                           value={!! $importer['NIDno'] !!} readonly>
                </div>

                <div class="form-group">
                    <span><h5>Address</h5></span>
                    <input type="Name" class="form-control" id="importer_Address" value={!! $importer['address'] !!} readonly>
                </div>

                <div class="form-group">
                    <span><h5>Phone number:</h5></span>
                    <input type="Name" class="form-control" id="importer_Contact Number" value={!! $importer['phone'] !!} readonly>
                </div>

                <div class="form-group">
                    <span><h5>Email address:</h5></span>
                    <input type="email" class="form-control" id="importer_Email ID" value={!! $importer['email'] !!} readonly>
                </div>

                <!-- Rating section starts -->
                <div class="rating">
                    <ul>
                        <li>Rating &nbsp;</li>
                        <li><span class="glyphicon glyphicon-star-empty"></span></li>
                        <li><span class="glyphicon glyphicon-star-empty"></span></li>
                        <li><span class="glyphicon glyphicon-star-empty"></span></li>
                        <li><span class="glyphicon glyphicon-star-empty"></span></li>
                        <li><span class="glyphicon glyphicon-star-empty"></span></li>
                    </ul>
                </div>
                <!-- Rating section ends -->

                <div>
                    <button class="submit-btn-style btn-success btn pull-right" type="submit" href="/edit_importer">Edit</button>
                </div>

            </form>



        </div>
        <!-- Profile info ends -->


    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
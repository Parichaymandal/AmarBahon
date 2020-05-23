<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registration portal</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Page style sheet link -->
    <link href="css/CommonRegistrationPortal.css" rel="stylesheet">

    <script src="js/commonRegistrationPageBehaviour.js" rel="script"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body onload="adjustHeight()">

<div class="container-fluid background" id="container_div">


    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h1>AMAR BAHON.COM</h1>
        </div>
        <div class="col-md-4"></div>

    </div>
    <!-- Amar bahon title -->

    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4 signInArea">
            <a href="#" class="btn btn-primary btn-lg" role="button">Log In</a>
        </div>
        <div class="col-md-4">

        </div>
    </div>
    <!-- Log in button area -->

    <div class="row">
        <div class="col-md-6 registrationArea">
            <a href="#" class="btn btn-lg btn-primary" role="button">Registration as an Importer</a>
        </div>
        <div class="col-md-6 registrationArea">
            <a href="#" class="btn btn-lg btn-primary" role="button">Registration as a Vehicle Owner</a>
        </div>
    </div>
    <!-- Importer and owner registration button area -->
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
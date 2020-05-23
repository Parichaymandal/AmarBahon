<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Success message</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/navbar_style.css" rel="stylesheet">
    <link href="css/success-message-style.css" rel="stylesheet">

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

<div class="container-fluid background">
    <div class="row message-1">
        <div class="col-md-12">
            <h1>Congratulation...You have successfully provided the requirement</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 message-2">
            <h2>Your job reference number is: <span id="job_id">1234</span></h2>
        </div>
    </div>

    <div class="row message-3">
        <div class="col-md-12">
            <h1>Thank you for your Co-operation</h1>
        </div>
    </div>

    <div class="row home-button">
        <div class="col-md-12">
            <a href="#" class="btn btn-success btn-lg">Home</a>
        </div>
    </div>

    <div class="row message-4">
        <div class="col-md-12">
            <h3>For more query: 01000000000</h3>
        </div>
    </div>

</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
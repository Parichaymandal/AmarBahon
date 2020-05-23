<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Importer Registration</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- This page style sheets -->
    <link href="css/navbar_style.css" rel="stylesheet">
    <link href="css/Importer-reg-style.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

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
                <li><a href="#logIn">Log in</a></li>
                <li><a href="#signin">Sing in</a></li>
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

<!-- Importer Registration form -->
<div class="container-fluid">

    <div class="col-md-5 col-md-push-5 marg-top marg-left">
        <h3>Importer Registration</h3>
    </div>

    <div class="row">

        <div class="col-md-6 col-lg-offset-3" style="">

            {!! Form::open(['route'=>'importer.store']) !!}

                <div class="form-group">
                    <input type="Name" class="form-control" id="importer_name" name="name_of_owner" placeholder="name">
                </div>

                <div class="form-group">
                    <input type="date" class="form-control" id="importer_Date Of Birth" name="date_of_birth" placeholder="Date Of Birth">
                </div>

                <div class="form-group">
                    <input type="Name" class="form-control" id="importer_National ID Number" name="NIDno"
                           placeholder="National ID Number:">
                </div>

                <div class="form-group">
                    <input type="Name" class="form-control" id="importer_Address" name="address" placeholder="Address">
                </div>

                <div class="form-group">
                    <input type="Name" class="form-control" id="importer_phone Number" name="phone" placeholder="Phone Number">
                </div>

                <div class="form-group">
                    <input type="email" class="form-control" id="importer_Email ID" name="email" placeholder="Email ID">
                </div>

                {{--<div class="form-group">--}}
                    {{--<input type="password" class="form-control" id="importer_Password" placeholder="Password">--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--<input type="password" class="form-control" id="importer_Confirm Password"--}}
                           {{--placeholder="Confirm Password">--}}
                {{--</div>--}}

                <div>
                    <button class="submit-btn-style btn-success btn" type="submit">submit</button>
                </div>

            {!! Form::close() !!}

        </div>
    </div>

</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
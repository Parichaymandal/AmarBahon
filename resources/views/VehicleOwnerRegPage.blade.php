<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Vehicle Owner Registration Page</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/navbar_style.css" rel="stylesheet">
    <link href="css/vehicle-owner-reg-style.css" rel="stylesheet">

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
        </div><!-- End nav header -->
        <div class="collapse navbar-collapse" id="comNavCollapse">
            <ul class="nav navbar-nav">
                <li><a href="#HIW">How it works</a></li>
                <li><a href="#gallery">Gallery</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#feedback">Feedback</a></li>
                <li><a href="#logIn">Log in</a></li>
                <li><a href="#signUp">Sign up</a></li>
            </ul>
        </div><!-- End navbar content area -->
    </div>
</nav>
<!-- End navbar section -->

<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">DashBoard
        <span class="caret"></span></button>
    <ul class="dropdown-menu">
        <li><a href="/company">Importer</a></li>
        <li><a href="/owner">Transporter</a></li>
    </ul>
</div>


<!-- Vehicle owner registration form -->
<div class="container-fluid">

    <div class="col-md-5 col-md-push-4 marg-top marg-left">
        <h3>Vehicle Owner Registration</h3>
    </div>

    {!! Form::open(['route'=>'vehicle_owner.store']) !!}
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <div class="form-group">
                <input type="Name" class="form-control" id="name" name="name_of_owner" placeholder="name">
            </div>

            <div class="form-group">
                <input type="Name" class="form-control" id="Union Membership number" name="union_membership_no" placeholder="Union Membership number">
            </div>

            <div class="form-group">
                <input type="date" class="form-control" id="Date Of Birth" name="date_of_birth" placeholder="Date Of Birth" >
            </div>

            <div class="form-group">
                <input type="Name" class="form-control" id="National ID Number" name="NIDno" placeholder="National ID Number:">
            </div>

            <div class="form-group">
                <input type="Name" class="form-control" id="Address" name="address" placeholder="Address">
            </div>

            <div class="form-group">
                <input type="Name" class="form-control" id="Phone Number" name="phone" placeholder="Phone Number">
            </div>

            <div class="form-group">
                <input type="email" class="form-control" id="Email ID" name="email" placeholder="Email ID">
            </div>

            {{--<div class="form-group">--}}
                {{--<input type="email" class="form-control" id="Confirm Email ID" placeholder="Confirm Email ID">--}}
            {{--</div>--}}

            {{--<div class="form-group">--}}
                {{--<input type="password" class="form-control" id="Password" placeholder="Password">--}}
            {{--</div>--}}

            {{--<div class="form-group">--}}
                {{--<input type="password" class="form-control" id="Confirm Password" placeholder="Confirm Password">--}}
            {{--</div>--}}

            <button type="SUBMIT"class="btn btn-success submit-btn">submit</button>

        </div>
    </div>

    {!! Form::close() !!}

</div>
















<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
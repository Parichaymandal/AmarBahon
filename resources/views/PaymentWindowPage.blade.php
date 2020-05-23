<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Payment window</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/navbar_style.css" rel="stylesheet">
    <link href="css/payment-window-style.css" rel="stylesheet">

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

    <div class="row">

        <div class="col-md-offset-3 col-md-6">

            <ul class="nav nav-tabs">
                <li><a data-toggle="tab" href="#bankToBank">Bank to Bank</a></li>
                <li><a data-toggle="tab" href="#bKashToBKash">bKash to bKash</a></li>
            </ul>

        </div>
        <div class="tab-content col-md-offset-3 col-md-6">
            <!-- Bank to bank transfer section starts -->
            <div id="bankToBank" class="tab-pane fade in active">

                    <div class="well">

                        <form>

                            <div class="form-group">
                                <label>Job reference number:</label>
                                <input name="jrn" type="number" class="form-control" id="job_ref_num" value="0">
                            </div>

                            <div class="form-group">
                                <label>Amount to be paid:</label>
                                <input name="amount" type="number" class="form-control" id="amount" value="0">
                            </div>

                            <div class="form-group">
                                <label for="selectBank">Select Bank</label>
                                <select class="form-control" id="selectBank">
                                    <option>Islami Bank</option>
                                    <option>DBBL Bank</option>
                                    <option>Agrani Bank</option>
                                    <option>BRACK Bank</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="selectBranch">Select Branch</label>
                                <select class="form-control" id="selectBranch">
                                    <option>Dhaka</option>
                                    <option>Khulna</option>
                                    <option>Rajshahi</option>
                                    <option>Sylhet</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="selectBranch">Account No.</label>
                                <input name="accNo" type="number" class="form-control" id="accountNo" value="0">
                            </div>

                            <div class="form-group">
                                <label for="selectBranch">Account type</label>
                                <input name="accType" type="text" class="form-control" id="accountType" value="">
                            </div>

                            <div class="submit-area">
                                <button class="btn-success btn pull-right" type="button">submit</button>
                            </div>

                        </form>

                    </div>

            </div>
            <!-- Bank to bank transfer section ends -->

            <!-- Bkash to Bkash transfer section starts -->
            <div id="bKashToBKash" class="tab-pane fade">
                <div class="well">

                    <form>

                        <div class="page-header">
                            <h1>Under construction</h1>
                        </div>

                    </form>

                </div>
            </div>
            <!-- Bkash to Bkash transfer section ends -->
        </div>

    </div>

</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
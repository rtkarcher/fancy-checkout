<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">   
    <title>Check Out</title>

    <!-- Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
  <div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-4">
            <div class="panel-heading">
              <h3 class="panel-title">Payment Details</h3>
            </div> <!-- .panel-heading -->
                <div class="panel-body">
                    <form role="form">
                      <div class="form-group">
                        <label for="cardNumber">Card Number</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="cardNumber" placeholder="Valid Card Number" required autofocus />
                            <span class="input-group-addon">
                              <span class="glyphicon glyphicon-lock"></span>
                            </span>
                          </div> <!-- .input-group -->
                      </div> <!-- .form-group -->
                    <div class="row">
                        <div class="col-xs-7 col-md-7">
                            <div class="form-group">
                                <label for="expiryMonth">Card Expiry Date</label>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" id="expityMonth" placeholder="MM" required />
                                </div> <!-- .col-xs-6 .col-lg-6 .pl-ziro -->
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" id="expityYear" placeholder="YY" required />
                                </div> <!-- .col-xs-6 .col-lg-6 .pl-ziro -->
                            </div> <!-- .form-group -->
                        </div> <!-- .col-xs-7 .col-md-7 -->
                        <div class="col-xs-5 col-md-5 pull-right">
                            <div class="form-group">
                                <label for="cvCode">CV Code</label>
                                <input type="password" class="form-control" id="cvCode" placeholder="CV" required />
                            </div> <!-- .form-group -->
                        </div> <!-- .col-xs-5 .col-md-5 .pull-right -->
                    </div> <!-- .row -->
                    </form>
                </div> <!-- .panel-body -->            
            
            
        </div> <!-- .col-xs-12 .col-md-4 end -->
    </div> <!-- .row end -->
  </div> <!-- .container end -->
</body>
</html>
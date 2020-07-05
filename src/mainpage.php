<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

?>
<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <script src="../js/jquery-1.9.1.js"></script>
    <script src="../js/jquery-ui.js"></script>
    <script>
      $(function () {
                    $( "#datepicker" ).datepicker({
                      changeMonth: true,//this option for allowing user to select month
                      changeYear: true, //this option for allowing user to select from year range
					  dateFormat: "yy-mm-dd"
                    });
                  });
    </script>
  </head><body>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul class="nav nav-pills">
              <li class="active">
                <a href="#">Home</a>
              </li>
              <li>
                <a href="reports.php">Reports</a>
              </li>
            </ul>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-8"></div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-12">
                <h2 class="text-primary text-right">Money in Wallet
                  <br>Rs. <?php include('money_in_wallet.php');?></h2>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12">
            <form class="form-horizontal" role="form" method="POST" action="wallet_add.php">
              <div class="row">
                <p>Add Money to your Wallet (Amount in Rs.) :
                  <input type="number" class="form-control" name="wallet_money">
                </p>
              </div>
              <div class="row text-center">
                <input class="btn btn-sm btn-success" type="submit" value="Add it...">
              </div>
            </form>
          </div>
        </div>
        <br>
        <br>
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center text-warning">---------------------------------------- &nbsp;OR &nbsp;--------------------------------------</h1>
          </div>
        </div>
        <br>
        <br>
        <div class="row">
          <div class="col-md-12">
            <p class="h4">Deduct money for expense :</p>
            <form class="form-horizontal" role="form" method="POST" action="exp_deduct.php">
              <div class="form-group">
                <div class="col-sm-2">
                  <p>Expense Name :</p>
                </div>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="exp_name">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <p>Money spent (in Rs.) :</p>
                </div>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="exp_amount" oninput="javascript: if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxLength="4">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <p>Date :</p>
                </div>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="datepicker" name="exp_date">
                </div>
              </div>
              <div class="row text-center">
                <input class="btn btn-danger btn-sm" type="submit" value="Deduct">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  

</body></html>
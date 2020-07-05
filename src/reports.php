<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
	
	<!--Load the AJAX API-->
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript">
            // Load the Visualization API and the piechart package.
	google.load('visualization', '1', {packages: ['corechart']});
      google.setOnLoadCallback(drawChart);

      function drawChart() {

        var jsonData = $.ajax({
                          url: "fetch.php",
                          dataType: "json",
                          async: false
                          }).responseText;
						  
		var data = new google.visualization.DataTable(jsonData);
        
        var options = {
          title: 'Expense Track',
          width: 1000,
          height: 500
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

        chart.draw(data, options);
		}
        </script>

  </head><body>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul class="nav nav-pills">
              <li>
                <a href="mainpage.php">Home</a>
              </li>
              <li class="active">
                <a href="#">Reports</a>
              </li>
            </ul>
          </div>
        </div>
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
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <h2 class="text-success">Expense Timeline :</h2>
              </div>
            </div>
            <div class="row">
				<div class="col-md-12">
					<!--Div that will hold the pie chart-->
                    <div id="chart_div"></div>
				</div>
			</div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
              	<h2 class="text-success">Expense Report :</h2>
              </div>
            </div>
            <div class="row">
				<div class="col-md-12">
					<?php include("exp_table.php"); ?>
				</div>
			</div>
          </div>
        </div>
      </div>
    </div>
  

</body></html>
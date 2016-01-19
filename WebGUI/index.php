<!DOCTYPE HTML>
<html>
<head>
<script src="../Chart.js-master/Chart.min.js"></script>
<script src="../jquery/jquery-1.11.3.js"></script>
<!-- Loads all the required PHP scripts -->
    <?php include 'sqlopen.php';?>
    <?php include 'popup.php';?>
    <?php include 'snort.php';?>
    <?php include 'graphs.php';?>
    <?php include 'profile.php';?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>HomeIPS</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		<!-- Displays the IP address of the device -->
          <p><a class="navbar-brand" href="#">This HomeIPS system IP address is: <?php echo $_SERVER["SERVER_ADDR"] ;?></a></p>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
		<!-- Displays the selection box for profiles -->
		<form name='profilebox' method="post">
		<select name="profilebox" id="profilebox">
		<option value = '' selected> None </option>
		<!-- This PHP script loads all the selection options into the selection box -->
		<?php echo $profileOptions ;?>
		</select>
		<!-- Displays the two buttons ¨Enable¨ and ¨User manual¨ -->
		<input type="submit" name="enable" value="enable" onclick="enable()" />
		<button type="submit" onclick="funcGuidePopup()" class="btn btn-success">Help</button>
		</form>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->

    <div class="jumbotron">
      <div class="container">
	<p></p>
	<!-- This code will display the Snort alerts chart -->
	<div id="canvas-holder2" class="pull-left">
	<label for = "chart-area2">
	Snort alerts total:<br />
	<canvas id="chart-area2" width="325" height="300"/>
	</label>
	</div>
	<!-- This code will display the password detection chart -->
	<div id="canvas-holder1" class="pull-left">
	<label for = "chart-area">
	Password detection:<br />
	<canvas id="chart-area" width="325" height="300"/>
	</label>
	</div>
	<?php include 'ports.php';?>
 	<!-- This is the table wich will contain all the Snort alerts -->	
	<div id="canvas-holder3" class="pull-left">
	<h2 class="sub-header">Alerts</h2>
        <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Alert</th>
		  <th>Time</th>
	          <th>Source</th>
	   	  <th>Destination</th>
		  <th>Definition</th>
                </tr>
              </thead>
              <tbody>
  		 <?php echo $snortvalues; ?>
              </tbody>
            </table>
          </div>
	</div>
	<p></p>
      </div>
    </div>
      <hr>
      <footer>

      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>


  </body>
  <?php include 'sqlclose.php';?>
</html>


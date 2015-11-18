<!DOCTYPE HTML>
<html>
  <head>
<script src="../Chart.js-master/Chart.min.js"></script>
<script src="../jquery/jquery-1.11.3.js"></script>

<?php include 'popup.php';?>
<?php include 'graphs.php';?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Security@Home</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
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
          <p><a class="navbar-brand" href="#">Security@Home kastje IP: <?php echo $_SERVER["SERVER_ADDR"] ;?></a></p>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
<button type="submit" onclick="funcLokaalBeheerPopup()" class="btn btn-success">Lokaal beheer</button>
<button type="submit" onclick="funcHandleidingPopup()" class="btn btn-success">Handleiding</button>
<button type="submit" onclick="funcContactPopup()" class="btn btn-success">Contact</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->

    <div class="jumbotron">
      <div class="container">
	<p></p>
	<div id="canvas-holder2" class="pull-left">
	<label for = "chart-area2">
	Netwerk veiligheid totaal:<br />
	<canvas id="chart-area2" width="325" height="300"/>
	</label>
	</div>
	<div id="canvas-holder1" class="pull-left">
	<label for = "chart-area">
	Wachtwoord detectie:<br />
	<canvas id="chart-area" width="325" height="300"/>
	</label>
	</div>
	<?php include 'ports.php';?>
	<?php include 'snort.php';?>
<p></p>
      </div>
    </div>
      <hr>
      <footer>
    <!-- <p>&copy; Project groep B 2014</p> -->
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
</html>


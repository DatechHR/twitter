<!DOCTYPE html>
<html>
<head>
	<title>Datech // Grafieken</title>
	<link rel="stylesheet" type="text/css" href="css/style.reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.base.css">
	<!-- start alleen bij de pagina grafieken -->
	<link rel="stylesheet" type="text/css" href="css/style.loadingbar.css">
	<!-- end: alleen bij de pagina grafieken -->
</head>
<body>
<div id="loadingbar-frame"></div>
<div class="wrapper">
	<div class="menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="grafieken.php">Grafieken</a></li>
			<li><a href="over-datechhr.php">Over Datech</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
	</div>

	<h1>Grafieken</h1>
	<p>Dit moeten minimaal 3 zijn</p>
	<ul>
		<li><a href="grafieken.php" id="reloadPage">grafieken 1</a></li>
		<li><a href="grafieken.php" id="reloadPage">grafieken 2</a></li>
		<li><a href="grafieken.php" id="reloadPage">grafieken 3</a></li>
	</ul>
</div>

<!-- start: alleen bij de pagina grafieken -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.loadingbar.js"></script>
<script type="text/javascript">
    $("#reloadPage").loadingbar({
      direction: "left",
      done: function(data) {
        $.each( data.items, function( i, item ) {
          $( "<img/>" ).attr( "src", item.media.m ).prependTo( $("#frame") );
          if ( i === 2 ) {
            return false;
          }
        });
      }
    });
	</script>
<!-- end: alleen bij de pagina grafieken -->
</body>
</html>
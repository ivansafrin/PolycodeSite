<!DOCTYPE html>
<html lang="en">
<head>
<title>Polycode</title>
<link rel="shortcut icon" href="/favicon.ico">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="/css/main.css">
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-309912-5']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<? if($gray == true) {
	echo "<body class=\"gray_container\">";
	} else {
	echo "<body class=\"blue_container\">";
	}
?>
<div class="navbar navbar-inverse navbar-static-top" role="navigation">
	  <div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" style="padding: 5px" href="/"><img style="height: 40px;" src="/images/logo.svg"/></a>
		</div>
		<div class="collapse navbar-collapse">
		  <ul class="nav navbar-nav">
			<li><a href="/features">Features</a></li>
			<li><a href="/gallery">Gallery</a></li>
			<li><a href="/download">Download</a></li>
			<li><a href="/learn">Learn</a></li>
			<li><a href="/docs">Docs</a></li>
			<li><a href="/community">Community</a></li>
		  </ul>
		</div><!--/.nav-collapse -->
	  </div>
	</div>
	<div class="container">

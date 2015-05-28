<?php
// Copyright 2011 Toby Zerner, Simon Zerner
// This file is part of esoTalk. Please see the included license file for usage information.

if (!defined("IN_ESOTALK")) exit;

/**
 * Default master view. Displays a HTML template with a header and footer.
 *
 * @package esoTalk
 */
?>
<!DOCTYPE html>
<html>
<head>
<meta charset='<?php echo T("charset", "utf-8"); ?>'>
<title><?php echo sanitizeHTML($data["pageTitle"]); ?></title>
<?php echo $data["head"]; ?>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="/css/main_forum.css">
</head>

<body class='<?php echo $data["bodyClass"]; ?> gray_container'>
<?php $this->trigger("pageStart"); ?>

<div class="navbar navbar-inverse navbar-static-top" role="navigation">
	  <div class="container">
		<div class="navbar-header">
		  <a class="navbar-brand" style="padding: 5px" href="/"><img style="height: 40px;" src="/images/logo.svg"/></a>
		</div>
		<div class="collapse navbar-collapse">
		  <ul class="nav navbar-nav">
			<li><a href="/features">Features</a></li>
			<li><a href="/gallery">Gallery</a></li>
			<li><a href="/download">Download</a></li>
			<li><a href="/learn">Learn</a></li>
			<li><a href="/community">Community</a></li>
		  </ul>
		</div><!--/.nav-collapse -->
	  </div>
	</div>
	<div class="container">

	<div style="margin-top: 20px" class="whitepage">
<div id='messages'>
<?php foreach ($data["messages"] as $message): ?>
<div class='messageWrapper'>
<div class='message <?php echo $message["className"]; ?>' data-id='<?php echo @$message["id"]; ?>'><?php echo $message["message"]; ?></div>
</div>
<?php endforeach; ?>
</div>

<div id='wrapper'>

<!-- HEADER -->
<div id='hdr'>
<div id='hdr-content'>

<div id='hdr-inner'>

<?php if ($data["backButton"]): ?>
<a href='<?php echo $data["backButton"]["url"]; ?>' id='backButton' title='<?php echo T("Back to {$data["backButton"]["type"]}"); ?>'><i class="icon-circle-arrow-left"></i></a>
<?php endif; ?>

<h1 style="font-family: 'Open Sans'" id='forumTitle'><a href='<?php echo URL(""); ?>'><?php echo $data["forumTitle"]; ?></a></h1>

<ul id='mainMenu' class='menu'>
<?php if (!empty($data["mainMenuItems"])) echo $data["mainMenuItems"]; ?>
</ul>

<ul id='userMenu' class='menu'>
<?php echo $data["userMenuItems"]; ?>
<li><a href='<?php echo URL("conversation/start"); ?>' class='link-newConversation button'><?php echo T("New Conversation"); ?></a></li>
<li> &nbsp;</li>
</ul>
</div>
</div>
</div>

<!-- BODY -->
<div id='body'>
<div id='body-content'>
<?php echo $data["content"]; ?>
</div>
</div>

<!-- FOOTER -->
<div id='ftr'>
<div id='ftr-content'>
<ul class='menu'>
<li id='goToTop'><a href='#'><?php echo T("Go to top"); ?></a></li>
<?php echo $data["metaMenuItems"]; ?>
<?php if (!empty($data["statisticsMenuItems"])) echo $data["statisticsMenuItems"]; ?>
</ul>
</div>
</div>
<?php $this->trigger("pageEnd"); ?>

</div>
</div>
	<div class="footer">
        	<p>&copy; <a target="_blank" href="https://twitter.com/ivansafrin">Ivan Safrin</a>, <a target="_blank" href="https://github.com/ivansafrin/Polycode/graphs/contributors">Polycode team</a> 2015</p>
	</div>
</div>

</body>
</html>

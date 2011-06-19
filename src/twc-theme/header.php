<?php
/*
 *	TwitCrusader - Wordpress Theme
 *		Copyright (C) 2011  TwitCrusader Team
 *
 *  	This program is free software: you can redistribute it and/or modify
 *  	it under the terms of the GNU Affero General Public License as published by
 * 		the Free Software Foundation, either version 3 of the License, or
 *  	(at your option) any later version.
 *  	
 * 		This program is distributed in the hope that it will be useful,
 * 		but WITHOUT ANY WARRANTY; without even the implied warranty of
 * 		MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * 		GNU Affero General Public License for more details.
 *  
 *  	You should have received a copy of the GNU Affero General Public License
 *  	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 *
 *		WebSite: http://www.twitcrusader.org/
 * 		Development Guidelines: http://dev.twitcrusader.org/
 *		Follow on Twitter: @teamtwc
 * 		IRC: chat.freenode.net at #teamtwc
 * 		E-mail: teamtwc@twitcrusader.org
 * 
 */
?>

<!DOCTYPE html> 
<html dir="ltr" lang="it-IT"> 
<head> 
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title(''); ?> <?php if(wp_title(' ', false)) { echo '&laquo;'; } ?> <?php bloginfo('name'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<meta name="generator" content="Geany IDE" />
	
	<meta name="author" content="TwitCrusader Team" />
	<meta name="author-mail" content="teamtwc[at]twitcrusader[dot]org" />
	<meta name="author-twitter" content="@teamtwc" />
	<meta name="author-irc" content="chat.freenode.net #teamtwc" />
	
	<meta name="copyright" content="GNU Affero General Public License" />
	<meta name="source-code" content="https://github.com/PTKDev/WordpressTheme-TwitCrusader" />
	
	<meta name="distribution" content="global" />
	<meta name="robots" content="index,follow" />
	<meta name="revisit-after" content="3 days" />
	<meta name="rating" content="general" />
	<meta name="language" content="it" />
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> - Feed RSS" href="http://feeds.feedburner.com/TwitCrusader" />
	<link rel="shortcut icon" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/favicon.ico" />
	
	<link rel="icon" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/favicon.png" type="image/png" />
	<link rel="icon" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/favicon.ico" type="image/ico" />
	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/layout.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/header.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/body.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/footer.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/link.css" />
	
	<link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/wp-content/plugins/lightbox/css/lightbox.css" rel="stylesheet" type="text/css" media="screen" /> 
	<script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/wp-content/plugins/lightbox/js/prototype.js" type="text/javascript"></script> 
	<script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/wp-content/plugins/lightbox/js/scriptaculous.js?load=effects,builder" type="text/javascript"></script> 
	<script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/wp-content/plugins/lightbox/js/lightbox.js" type="text/javascript"></script>
	<!--[if lt IE 7.]>
	<script defer type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/pngfix.js"></script>
	<![endif]-->
	<?php
		wp_head();
	?>
</head>

<body>
<div id="container">
	<div id="separator_header"></div>
		
	<div id="container_all">
		<div id="header">
			<img class="logo" src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="TwitCrusader" title="TwitCrusader">
			<div id="title"><span class="color1">Twit</span><span class="color2">Crusader</span></div>
			<div id="subtitle"><span class="color2">Client Twitter per Linux</span></div>
		</div>
		<div id="menu">
			<a href="http://it.twitcrusader.org/" class="menu-link">HOME</a>
			 ~ 
			<a href="http://it.twitcrusader.org/features/" class="menu-link">FEATURES</a>
			 ~ 
			<a href="http://it.twitcrusader.org/download/source/" class="menu-link">SOURCE</a>
			 ~ 
			<a href="http://it.twitcrusader.org/download/" class="menu-link">DOWNLOAD</a>
			 ~ 
			<a href="http://dev.twitcrusader.org/" class="menu-link">DEVELOPERS</a>
			 ~ 
			<a href="http://dev.twitcrusader.org/about/" class="menu-link">ABOUT</a>
		</div>
		<div class="clear"></div>

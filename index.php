<?php
    require 'includes/pages.php';

    $page = 'index';
    if (isset($_GET['v'])) {
        $page = sanitize($_GET['v']);
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="/css/main.css" type="text/css" />
    <?php
        printTitle($page);
        printScripts($page);
    ?>
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-32180470-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</head>
<body>
	<div class="content">
		<h1 class="title">AnthonySottile.com</h1>
        <div class="bar"></div>
        <?php
            printNavigation($page);
        ?>

		<div class="blurb">
			<p>
                <?php
                    printBlurb($page);
                ?>
            </p>
		</div>

		<div class="left">
            <?php
                require getBodyPath($page);
            ?>
		</div>

		<div class="right">

			<h3 class="right-header">Popular Stuff</h3>
			<a href="<?=url('android_kenken')?>"><img class="right-image" src="/images/kenken-small.png" alt="KenSquared - KenKen for Android" /></a>
			<a href="#"><img class="right-image" src="/images/site.gif" alt="site" /></a>
			<a href="#"><img class="right-image" src="/images/site.gif" alt="site" /></a>
			<br /><br />
			<h3 class="right-header">Latest Things</h3>
			<ul>
				<li><a href="<?=url('android_kenken')?>">KenSquared - KenKen for Android</a></li>
			</ul>

		</div>

		<div class="footer">
			<p>&copy; 2012 | Anthony Sottile</p>
		</div>
	</div>
</body>
</html>

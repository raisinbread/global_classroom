<!doctype html>
<html>
<head>
  <?php echo $this->html->charset();?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Global Classroom &gt; <?php echo $this->title(); ?></title>
  <meta name="description" content="The Kenya Keys Global Classroom.">

  <meta name="viewport" content="width=device-width">
  <?php echo $this->html->style(array('reset')); ?>
  <link rel="stylesheet" type="text/css" href="/css/style.less" />

  <script src="/js/libs/modernizr-2.5.3.min.js"></script>
  <?php echo $this->scripts(); ?>
  <?php echo $this->html->link('Icon', null, array('type' => 'icon')); ?>
</head>
<body class="app">
	<div id="container">
		<?php echo $this->content(); ?>
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script type="text/javascript">
	  window.jQuery || document.write('<script src="/js/libs/jquery-1.7.1.min.js"><\/script>');
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-32736605-1']);
	  _gaq.push(['_trackPageview']);
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</body>
</html>
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
		<div id="nav">
			<?= $this->html->link($this->html->image('global-classroom-small.png'), '/pages/landing', array('escape' => false)); ?>
			<ul>
				<li><?= $this->html->link('How It Works', '/pages/how-it-works') ?></li>
				<li><?= $this->html->link('How To Begin', '/pages/how-to-begin') ?></li>
        <li><?= $this->html->link('Where It\'s Working', '/pages/where-its-working') ?></li>
			</ul>
			<div class="gallery">
				<?= $this->gallery->show(); ?>
			</div>
		</div>
		<div id="content">
			<?php echo $this->content(); ?>
		</div>
		<footer>
			<a href="http://www.kenyakeys.org"><?= $this->html->image('kenya-keys.png', array('class' => 'kenya-keys')); ?></a>
			<p>The Global Classroom is the education outreach program
		of the partnership of <a href="http://kenyakeys.org">Kenya Keys</a> and <a href="http://ussynthetic.com">US Synthetic</a>.<br /><br />
		Proudly powered by <a href="http://www.engineyard.com/products/orchestra">Engine Yard</a> and <a href="http://lithify.me">Lithium</a>.</p>
			<a href="http://ussynthetic.com"><?= $this->html->image('us-synthetic.png', array('class' => 'us-synthetic')); ?></a>
		</footer>
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

<?php $this->title('Home'); ?>
<div id="nav">
	<?= $this->html->image('global-classroom-small.png'); ?>
	<ul>
		<li><a href="">How It Works</a></li>
		<li><a href="">How To Begin</a></li>
		<li><a href="">Where It's Working</a></li>
	</ul>
	<div class="gallery">
		<?= $this->gallery->show(); ?>
	</div>
</div>
<div id="content">
	<h1>Here is a heading!</h1>
	<p>TESTING Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum <a href="#">dolore eu fugiat nulla pariatur</a>. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<h2>Here is a Subheading!</h2>
	<p>TESTING Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<footer>
	<a href="http://www.kenyakeys.org"><?= $this->html->image('kenya-keys.png', array('class' => 'kenya-keys')); ?></a>
	<p>The Global Classroom is the education outreach program
of the partnership of <a href="http://kenyakeys.org">Kenya Keys</a> and <a href="http://ussynthetic.com">US Synthetic</a>.<br /><br />
Proudly powered by <a href="http://www.engineyard.com/products/orchestra">Engine Yard</a> and <a href="http://lithify.me">Lithium</a>.</p>
	<a href="http://ussynthetic.com"><?= $this->html->image('us-synthetic.png', array('class' => 'us-synthetic')); ?></a>
</footer>
<nav class="subnav">
	<ol class="nav nav-list container-fluid nav-collapse collapse in">
		<li<?php echo (isset($page) && $page=='home') ? ' class="active"' : ''; ?>><a href="<?php echo $path;?>index.php" title="">Home</a></li>
		<li<?php echo (isset($page) && $page=='people') ? ' class="active"' : ''; ?>><a href="<?php echo $path;?>people/index.php" title="">Our People</a></li>
		<li<?php echo (isset($page) && $page=='tour') ? ' class="active"' : ''; ?>><a href="<?php echo $path;?>tour/index.php" title="">Tour</a></li>
        <li<?php echo (isset($page) && $page=='bass') ? ' class="active"' : ''; ?>><a href="<?php echo $path;?>bass/index.php" title="">Bass</a></li>
        <li<?php echo (isset($page) && $page=='Pike') ? ' class="active"' : ''; ?>><a href="<?php echo $path;?>pike/index.php" title="">Pike</a></li>
	</ol>
</nav>	
<!--nav-->

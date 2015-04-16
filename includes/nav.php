		<nav>
			<div id="logo">
				<a href="index.php" ><img src="images/logo.png" alt="3-2-1 Battle! Wrestling" /></a>			
			</div> <!--End logo div-->
			<ul class="nav-d">
				<li<?php if ($page == 'about.php') {echo ' class="current"';} ?>><a href="about.php">About Us</a></li>
				<li<?php if ($page == 'news.php') {echo ' class="current"';} ?>><a href="news.php">News</a></li>
				<li<?php if ($page == 'roster.php' || $page == 'wrestler1.php' || $page == 'wrestler2.php' || $page == 'wrestler3.php' || $page == 'wrestler4.php') {echo ' class="current"';} ?>><a href="roster.php">Roster</a></li>
				<li<?php if ($page == 'events.php') {echo ' class="current"';} ?>><a href="events.php">Events</a></li>				
			</ul>

			<ul class="nav-collapse">
				<li<?php if ($page == 'events.php') {echo ' class="current"';} ?>><a href="events.php">Events</a></li>
				<li<?php if ($page == 'roster.php' || $page == 'wrestler1.php') {echo ' class="current"';} ?>><a href="roster.php">Roster</a></li>
				<li<?php if ($page == 'news.php') {echo ' class="current"';} ?>><a href="news.php">News</a></li>
				<li<?php if ($page == 'about.php') {echo ' class="current"';} ?>><a href="about.php">About</a></li>				
			</ul>
		</nav> <!--End nav div-->
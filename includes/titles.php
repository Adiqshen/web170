<?php

$page = basename($_SERVER['SCRIPT_NAME']);

if ($page == 'index.php') { print '3-2-1 Home'; }
if ($page == 'events.php') { print '3-2-1 Past Events'; }
if ($page == 'roster.php') { print '3-2-1 Roster'; }
if ($page == 'wrestler1.php') { print 'Wrestler Name'; }
if ($page == 'wrestler2.php') { print 'Wrestler Name'; }
if ($page == 'wrestler3.php') { print 'Wrestler Name'; }
if ($page == 'wrestler4.php') { print 'Wrestler Name'; }
if ($page == 'news.php') { print '3-2-1 News'; }
if ($page == 'about.php') { print 'About 3-2-1'; }


?>
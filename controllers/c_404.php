<?php

if(isset($_GET['page']))
{
	$page = htmlspecialchars ($_GET['page']);
}

require_once(PATH_VIEWS.'404.php'); 



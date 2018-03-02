<?php
/*
 * TP PHP
 * Vue alert
 *
 * Copyright 2016, Eric Dufour
 * http://techfacile.fr
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 *
 * alerts: http://www.w3schools.com/bootstrap/bootstrap_alerts.asp
 */

if(isset($alert))
{
?>
	<div class="alert alert-<?= isset($alert['classeAlert']) ? $alert['classAlert'] : 'danger' ?>">
		<strong><?= $alert['messageAlert'] ?></strong>
	</div>
<?php
}

if(isset($cpt))
{
?>
	<div class="alert alert-<?= isset($alert['classeAlert']) ? $alert['classAlert'] : 'success' ?>">
		<strong><?=$cpt?> film(s) sélectionné(s)</strong>
	</div>
<?php
}






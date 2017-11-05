<?php
try
{
	$bdd = new PDO('mysql:host=mysql-user-master.stanford.edu;dbname=g_canvas_ilios_lti_calendar;charset=utf8', 'gcanvasilioslt2', 'nVf7vtStrFQ47JVZ');
}
catch(Exception $e)
{
        die('Error : '.$e->getMessage());
}

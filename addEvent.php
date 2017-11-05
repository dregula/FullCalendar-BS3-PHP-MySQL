<?php

require_once('bdd.php');
//echo $_POST['title'];
if (isset($_POST['title']) && isset($_POST['start']) && isset($_POST['end']) && isset($_POST['$backgroundColor'])){
	
	$title = $_POST['title'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$backgroundColor = $_POST['$backgroundColor'];

	$sql = <<<SQL
INSERT INTO events(title, start, end, backgroundColor) values ('$title', '$start', '$end', '$backgroundColor')
SQL;
	//$req = $bdd->prepare($sql);
	//$req->execute();
	
	echo $sql;
	
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Error prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('Error execute');
	}

}
header('Location: '.$_SERVER['HTTP_REFERER']);
	
?>

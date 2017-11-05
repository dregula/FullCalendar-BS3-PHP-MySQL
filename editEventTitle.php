<?php

require_once('bdd.php');
if (isset($_POST['delete']) && isset($_POST['id'])){

	$id = $_POST['id'];
	
	$sql = "DELETE FROM events WHERE id = $id";
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Error prepare');
	}
	$res = $query->execute();
	if ($res == false) {
	 print_r($query->errorInfo());
	 die ('Error execute');
	}
	
}elseif (isset($_POST['title']) && isset($_POST['backgroundColor']) && isset($_POST['id'])){
	
	$id = $_POST['id'];
	$title = $_POST['title'];
    $backgroundColor = $_POST['backgroundColor'];

    $sql = <<<SQL
UPDATE events SET  title = '$title', backgroundColor = '$backgroundColor' WHERE id = $id 
SQL;

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
header('Location: index.php');

?>

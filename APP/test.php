<?php 
	require "./controllers/prodController.php";

	// try {
	// 	$d = new daoMysql($pdo);
		
	// 	$d->geraJSON();
	// } catch (Exception $e) {
	// 	die("erro: ".$e->getMessage());
	// }


	try {
		$d = new daoMysql($pdo);
		
		$dados = $d->listar();

		foreach ($dados as $p){
			echo "<p>".$p->getId()."</p>";
			echo "<p>".$p->getNome()."</p>";
			echo "<p>".$p->getImg()."</p>";

		}

	} catch (Exception $e) {
		die("erro: ".$e->getMessage());
	}
?>
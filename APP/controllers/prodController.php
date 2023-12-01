<?php
require "./models/produtos.php";

class daoMysql implements ProdutoDAO
{
	private $pdo;
	public function __construct(PDO $drive)
	{
		$this->pdo = $drive;
	}

	public function listar()
	{
		$lista = [];

		$sql = $this->pdo->query("SELECT * from produto");

		if ($sql->rowCount() > 0) {
			$dados = $sql->fetchAll();

			foreach ($dados as $item) {
				$p = new Produto();
				$p->setId($item['id']);
				$p->setNome($item['nome']);
				$p->setPreco($item['preco']);
				$p->setImg($item['img']);
				$lista[] = $p;
			}
		}
		return $lista;

	}

	// função de test
	public function geraJSON()
	{
		$sql = $this->pdo->query("SELECT * FROM produto");
		if ($sql->rowCount() > 0) {
			$dados = $sql->fetchAll(PDO::FETCH_ASSOC);
			print json_encode($dados);
		}

	}
}

?>
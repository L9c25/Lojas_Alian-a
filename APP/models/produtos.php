<?php

require "./config/connect.php";

class Produto
{
   private $id;
   private $nome;
   private $preco;
   private $img;

      // ----------ID
   public function setId($i)
   {
      $this->id = $i;
   }
   public function getId()
   {
      return $this->id;
   }


      // ----------NOME
   public function setNome($n)
   {
      $this->nome = $n;
   }
   public function getNome()
   {
      return $this->nome;
   }


      // ----------PRECO
   public function setPreco($p)
   {
      $this->preco = $p;
   }
   public function getPreco()
   {
      return $this->preco;
   }

      // ----------IMG
   public function setImg($img)
   {
      $this->img = $img;
   }

   public function getImg()
   {
      return $this->img;
   }

}

interface ProdutoDAO{
   public function listar();
}  



?>
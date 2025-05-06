<?php

class Produto
{
    public $nome;
    public $preco;
    public $quantidade;

    public function exibirInformacoes()
    {
        echo " Nome: {$this->nome}, Preço: R$ {$this->preco}, Quantidade: {$this->quantidade} .<br>";

    } 



}
$produto1 = new Produto();
$produto1 -> nome = "Caneta";
$produto1 -> preco = 2.5;
$produto1 -> quantidade = 10;

$produto2 = new Produto();
$produto2 -> nome = "Caderno";
$produto2 -> preco = 59.90;
$produto2 -> quantidade = 50;

$produto3 = new Produto();
$produto3 -> nome = "Borracha";
$produto3 -> preco = 5.10;
$produto3 -> quantidade = 6;

$produto1 -> exibirInformacoes();
$produto2 -> exibirInformacoes();
$produto3 -> exibirinformacoes();



function mostrarMediaPrecos($produto1, $produto2, $produto3)
{
    $media = ($produto1->preco + $produto2->preco + $produto3->preco) / 3;
    echo "A média dos preços dos produtos é: R$ " . number_format($media, 3, ',', '.') . "<br>";
}



mostrarMediaPrecos($produto1, $produto2, $produto3);



?>
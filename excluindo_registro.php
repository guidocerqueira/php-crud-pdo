<?php

include __DIR__ . "/Config/autoload.php";

//Cria um novo objeto da classe Delete
$excluir = new Delete;

//Exclui um item da tabela selecionada
$excluir->ExeDelete('nome_da_tabela', "WHERE id = :id", "id=1");

//Altera o ParseString informado na exclusão anterior e exclui os dados relacionados
$excluir->setPlaces("id=2");

//Retorna true se ocorreu a exclusão
$excluir->getResult();

//Retorna a quantidade de linhas excluidas
$excluir->getRowCount();
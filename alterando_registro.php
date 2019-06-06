<?php

include __DIR__ . "/Config/autoload.php";

//Cria um novo objeto da classe Update
$editar = new Update;

//Altera registros na tabela selecionada passando array associativo
$editar->ExeUpdate('nome_da_tabela', ["nome" => "Alterado Santana"], "WHERE id = :id", "id=3");

//Altera o ParseString informado na edição anterior e altera os dados relacionados
$editar->setPlaces("id=2");

//Retorna true se alterou o registro
$editar->getResult();

//Retorna a quantidade de linhas alteradas
$editar->getRowCount();

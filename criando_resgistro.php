<?php

include __DIR__ . "/Config/autoload.php";

//Cria um novo objeto da classe Create
$criar = new Create;

//Adiciona um registro no banco, na tabela informada
$criar->ExeCreate('nome_da_tabela', ["nome" => "João Santos", "status" => 1]);

//Adiciona vários registros no banco, na tabela informada
$criar->ExeCreateMulti('nome_da_tabela', [["nome" => "Maria Joana", "status" => 1], ["nome" => "José Santos", "status" => 0]]);

//Retorna o último ID criado
$criar->getResult();
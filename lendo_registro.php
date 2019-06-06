<?php

include __DIR__ . "/Config/autoload.php";

//Cria um novo objeto da classe Read
$ler = new Read;

//Faz uma leitura simplificada na tabela informada
$ler->ExeRead('nome_da_tabela');

//Faz uma leitura simplificada informando os termos na tabela informada
$ler->ExeRead('nome_da_tabela', "WHERE id = :id", "id=1");

//Faz uma leitura com a query completa manualmente
$ler->FullRead("SELECT * FROM nome_da_tabela WHERE nome = :nm", "nm=José Santos");

//altera o ParseString informado na consulta anterior e retorna os dados relacionados
$ler->setPlaces("nm=Ana Maria");

//Retorna um array com os dados encontrados
$ler->getResult(); //array de retorno

//Quantidade de linhas retornadas
$ler->getRowCount();
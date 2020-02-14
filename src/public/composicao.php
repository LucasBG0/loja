<?php
	require_once 'classes/Produto.php';
	require_once 'classes/Caracteristica.php';

	//criacao de objetos
	$p1 = new Produto('Colchão', 10, 3);

	//composicao
	$p1->addCaracteristica('Cor', 'Verde');
	$p1->addCaracteristica('Tamanho', 'King size');
	$p1->addCaracteristica('Tipo', 'Molas ensacadas');

	echo 'Produto: ' . $p1->getDescricao() . '<br>';
	foreach ($p1->getCaracteristicas() as $key => $c) {
		echo 'Caracteristica ' . ++$key . ': ' . $c->getNome() . ' - ' . $c->getValor() . '<br>';
	}
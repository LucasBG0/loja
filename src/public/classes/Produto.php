<?php

/**
 * 
 */
class Produto
{
	private $descricao;
	private $estoque;
	private $preco;
	private $fabricante;
	private $caracteristicas;
	
	function __construct($descricao, $estoque, $preco)
	{
		$this->descricao = $descricao;
		$this->estoque = $estoque;
		$this->preco = $preco;
	}

	function getDescricao()
	{
		return $this->descricao;
	}

	function setFabricante(Fabricante $f)
	{
		$this->fabricante = $f;
	}

	function getFabricante()
	{
		return $this->fabricante; 
	}

	function addCaracteristica($nome, $valor)
	{
		if (!array_map('is_string', array($nome,$valor))) {
			return false;
		}

		$this->caracteristicas[] = new Caracteristica($nome, $valor);
	}

	function getCaracteristicas()
	{
		return $this->caracteristicas;
	}
}
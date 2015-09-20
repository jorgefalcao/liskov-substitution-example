<?php
	
	require_once("retangulo.class.php");
	require_once("retanguloArea.class.php");
	require_once("quadrado.class.php");
	require_once("testRetanguloArea.php");

	$r = new Retangulo();
	$q = new Quadrado();


	# Sucesso
	$t = new TestRetanguloArea();
	$t->RetanguloArea($r);

	# Fracasso
	$t->RetanguloArea($q);

	# fazer funcionar
	$q->setAltura(3);
	$q->setLargura(4);

	$t->RetanguloArea($q);

?>
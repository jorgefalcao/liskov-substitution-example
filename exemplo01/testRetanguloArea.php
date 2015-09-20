<?php

	require_once("retangulo.class.php");
	require_once("retanguloArea.class.php");

	class TestRetanguloArea {

		public function RetanguloArea(Retangulo $r) {

			$altura = 10;
			$largura = 5;

			$r->setAltura($altura);
			$r->setLargura($largura);

			$area = new retanguloArea();

			try {
				if ($area->calcularArea($r) == ($altura * $largura)) {
					echo $area->calcularArea($r);
					echo "<br/>";
				} else {
					throw new Exception("VOCÊ VIOLOU LISKOV");
				}
			} catch(Exception $e) {
				echo $e->getMessage();
			}


		}

	}


?>
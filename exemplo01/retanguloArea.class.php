<?php
	
	require_once("retangulo.class.php");

	class RetanguloArea {

		public function calcularArea(Retangulo $r) {
			return $r->getAltura() * $r->getLargura();
		}

	}


?>
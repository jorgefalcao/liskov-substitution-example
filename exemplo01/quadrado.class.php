<?php

	require_once("retangulo.class.php");

	class Quadrado extends Retangulo {

		# Todo poligono de quatro lados é um retangulo
		# Quadrado tem quatro lados, logo o quadrado É UM retângulo.

		public function setAltura($altura) {
			parent::setAltura($altura);
			parent::setLargura($altura);
		}

		public function setLargura($largura) {
			parent::setLargura($largura);
			parent::setAltura($largura);
		}


	}	



?>
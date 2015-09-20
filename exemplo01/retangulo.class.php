<?php

	class Retangulo {

		private $altura;
		private $largura;

		public function setAltura($altura) {
			$this->altura = (float) $altura;
		}

		public function setLargura($largura) {
			$this->largura = (float) $largura;
		}

		public function getAltura() {
			return (float) $this->altura;
		}

		public function getLargura() {
			return (float) $this->largura;
		}

	}


?>
<?php

	// Princípio de Substituição de Liskov
	// por: Jorge Roberto

	abstract class Passaro {

			public function voar() {
				// Método voar
			}

			public function comer() {
				// Método comer
			}

	}

	class Corvo extends Passaro {
		# Corvo pode voar e comer
	}		

	class Avestruz extends Passaro		 {
		public function voar() {
			try {
				throw new Exception("avestruz nao voa", 1);
			} catch(Exception $e) {
				echo $e->getMessage();
				echo $e->getCode();
			}
			
		}
	}

	$avestruz = new Avestruz();
	$avestruz->voar();





?>
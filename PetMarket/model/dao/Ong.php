<?php
	class Ong{
		private $idOng;
		private $idUser;
		private $cnpj;
		private $quantAnimais;
		private $dadosComplementares;
		private $sintese;

		public function getIdOng(){
			return $this->idOng;
		}
		public function setIdOng($idOng){
			$this->idOng = $idOng;
			return $this;
		}
		
		public function getIdUser(){
			return $this->idUser;
		}
		public function setIdUser($idUser){
			$this->idUser = $idUser;
			return $this;
		}
		
		public function getCnpj(){
			return $this->cnpj;
		}
		public function setCnpj($cnpj){
			$this->cnpj = $cnpj;
			return $this;
		}
		
		public function getQuantAnimais(){
			return $this->quantAnimais;
		}
		public function setQuantAnimais($quantAnimais){
			$this->quantAnimais = $quantAnimais;
			return $this;
		}
		
		public function getDadosComplementares(){
			return $this->dadosComplementares;
		}
		public function setDadosComplementares($dadosComplementares){
			$this->dadosComplementares = $dadosComplementares;
			return $this;
		}
		
		public function getSintese(){
			return $this->sintese;
		}
		public function setSintese($sintese){
			$this->sintese = $sintese;
			return $this;
		}
		
	}
?>

<?php
	class Animal{
		private $idAnimal;
		private $nome;
		private $raca;
		private $porte;
		private $dataNascimento;
		private $sexo;
		private $tipo;//?
		private $motivoAdoçao;
		private $dadosMedicos;
		private $situacao;
		private $foto;
		
		public function getIdAnimal(){
			return $this->idAnimal;
		}
		public function setIdAnimal($idAnimal){
			$this->idAnimal = $idAnimal;
			return $this;
		}
		public function getNome(){
			return $this->nome;
		}
		public function setNome($nome){
			$this->nome = $nome;
			return $this;
		}
		public function getRaca(){
			return $this->raca;
		}
		public function setRaca($raca){
			$this->raca = $raca;
			return $this;
		}
		public function getPorte(){
			return $this->porte;
		}
		public function setPorte($porte){
			$this->porte = $porte;
			return $this;
		}
		public function getDataNascimento(){
			return $this->dataNascimento;
		}
		public function setDataNascimento($dataNascimento){
			$this->dataNascimento = $dataNascimento;
			return $this;
		}
		public function getSexo(){
			return $this->sexo;
		}
		public function setSexo($sexo){
			$this->sexo = $sexo;
			return $this;
		}
		public function getTipo(){
			return $this->tipo;
		}
		public function setTipo($tipo){
			$this->tipo = $tipo;
			return $this;
		}
		public function getMotivoAdocao(){
			return $this->motivoAdoçao;
		}
		public function setMotivoAdocao($motivoAdoçao){
			$this->motivoAdoçao= $motivoAdoçao;
			return $this;
		}
		public function getDadosMedicos(){
			return $this->dadosMedicos;
		}
		public function setDadosMedicos($dadosMedicos){
			$this->dadosMedicos = $dadosMedicos;
			return $this;
		}
		public function getSituacao(){
			return $this->situacao;
		}
		public function setSituacao($situacao){
			$this->situacao= $situacao;
			return $this;
		}
		public function getFoto(){
			return $this->foto;
		}
		public function setFoto($foto){
			$this->foto = $foto;
			return $this;
		}


	}
?>

<?php

	class Avaliador{
		private $idAvaliador;
		private $nome;
		private $tipoUsuario;
		private $login;
		private $senha;
		
		public function getIdAvaliador(){
			return $this->idAvaliador;
		}
		public function setIdAvaliador($idAvaliador){
			$this->idAvaliador = $idAvaliador;
			return $this;
		}
		public function getNome(){
			return $this->nome;
		}
		public function setNome($nome){
			$this->nome = $nome;
			return $this;
		}
		public function getTipoUsuario(){
			return $this->tipoUsuario;
		}
		public function setTipoUsuario($tipoUsuario){
			$this->tipoUsuario = $tipoUsuario;
			return $this;
		}
		public function getLogin(){
			return $this->login;
		}
		public function setLogin($login){
			$this->login = $login;
			return $this;
		}
		public function getSenha(){
			return $this->senha;
		}
		public function setSenha($senha){
			$this->senha = $senha;
			return $this;
		}
	}
?>
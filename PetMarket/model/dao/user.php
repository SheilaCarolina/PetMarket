<?php
	class user{
		private $id;
		private $nome;
		private $contato;
		private	$login;
		private $senha;
		private $endereco;
		private $tipoUser;
		
		public function getId(){
			return $this -> id;
		}
		
		public function setId($id){
				$this -> id = $id;
				return $this;
		}
		
		public function getNome(){
			return $this -> nome;
		}
		
		public function setnome($nome){
				$this -> nome = $nome;
				return $this;
		}
		
		public function getContato(){
			return $this -> contato;
		}
		
		public function setContato($contato){
				$this -> contato = $contato;
				return $this;
		}
		
		public function getLogin(){
			return $this -> login;
		}
		
		public function setLogin($login){
				$this -> login = $login;
				return $this;
		}
		
		public function getSenha(){
			return $this -> senha;
		}
		
		public function setSenha($senha){
				$this -> senha = $senha;
				return $this;
		}
		
		public function getEndereco(){
			return $this -> endereco;
		}
		
		public function setEndereco($endereco){
				$this -> endereco = $endereco;
				return $this;
		}
		
		public function getTipoUser(){
			return $this -> tipoUser;
		}
		
		public function setTipoUser($tipoUser){
				$this -> tipoUser = $tipoUser;
				return $this;
		}
	}
?>

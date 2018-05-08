<?php
	class Ong{
		private $idOng;
		private $cnpj;
		private $nome;
		private $email;
		private $telefone;
		private $endereco;
		private $quantAnimais;
		private $dadosComplementares;
		private $sintese;
		private $login;
		private $senha;

		public function getIdOng(){
			return $this->idOng;
		}
		public function setIdOng($idOng){
			$this->idOng = $idOng;
			return $this;
		}
		public function getCnpj(){
			return $this->cnpj;
		}
		public function setCnpj($cnpj){
			$this->cnpj = $cnpj;
			return $this;
		}
		public function getNome(){
			return $this->nome;
		}
		public function setNome($nome){
			$this->nome = $nome;
			return $this;
		}
		public function getEmail(){
			return $this->email;
		}
		public function setEmail($email){
			$this->email = $email;
			return $this;
		}
		public function getTelefone(){
			return $this->telefone;
		}
		public function setTelefone($telefone){
			$this->telefone = $telefone;
			return $this;
		}
		public function getEndereco(){
			return $this->endereco;
		}
		public function setEndereco($endereco){
			$this->endereco = $endereco;
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
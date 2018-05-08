<?php
	class Padrinho{
		private $idPadrinho;
		private $nome;
		private $dataNascimento;
		private $nacionalidade;
		private $email;
		private $telefone;
		private $endereco;
		private $tipoUsuario;
		private $login;
		private $senha;

		public function getIdPadrinho(){
			return $this->idPadrinho;
		}
		public function setIdPadrinho($idPadrinho){
			$this->idPadrinho = $idPadrinho;
			return $this;
		}
		public function getNome(){
			return $this->nome;
		}
		public function setNome($nome){
			$this->nome = $nome;
			return $this;
		}
		public function getDataNascimento(){
			return $this->dataNascimento;
		}
		public function setDataNascimento($dataNascimento){
			$this->dataNascimento = $dataNascimento;
			return $this;
		}
		public function getNacionalidade(){
			return $this->nacionalidade;
		}
		public function setNacionalidade($nacionalidade){
			$this->nacionalidade = $nacionalidade;
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
<?php
class usuariosVO{
	/*M�todo construtor da classe*/
	public function __construct(){}
	
	/*Evita que a classe seja clonada*/
	private function __clone(){}
	
	/*M�todo destrutor da classe*/
	public function __destruct() {
		foreach ($this as $key => $value) { 
			unset($this->$key); 
        }
		foreach(array_keys(get_defined_vars()) as $var) {
			unset(${"$var"});
		}
		unset($var);
	}
	
	/*Vari�veis privadas que receber�o os dados*/
	private $id = 0;
	private $nome = "";
	private $login = "";
	private $senha = "";
	
	/*Metodos get e set que trazem o conteudo da vari�vel privada desejada*/
	public function getId(){
		return $this->id;
	}
	public function setId($id){
		$this->id = intval($id);
	}
	
	public function getNome(){
		return $this->nome;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}
	
	public function getLogin(){
		return $this->login;
	}
	public function setLogin($login){
		$this->login = $login;
	}
	
	public function getSenha(){
		return $this->senha;
	}
	public function setSenha($senha){
		$this->senha = $senha;
	}
}
?>
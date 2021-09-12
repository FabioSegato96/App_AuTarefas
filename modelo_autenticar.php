<?php
class Usuario{


	private $usuario_autenticado = false;
	private $usuario_id = null;
	private $usuario_nome = null;
	private $usuario_email = null;
	private $usuario_senha= null;	

	public function __get($atributo) {
			return $this->$atributo;
		}
	public function __set($atributo, $valor) {
			$this->$atributo = $valor;
		}		
}

?>
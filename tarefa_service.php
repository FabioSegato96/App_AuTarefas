<?php




class TarefaService{

	private $conexao;
	private $tarefa;

	public function __construct(Conexao $conexao, Tarefa $tarefa) {

		$this->conexao = $conexao->conectar();
		$this->tarefa = $tarefa;
	}

	public function inserir() {
		$query = 'insert into tb_tarefas(id_user, tarefa)values(:id_user, :tarefa)';
		$stmt = $this->conexao->prepare($query);		
		$stmt->bindValue(':id_user', $this->tarefa->__get('id_user'));
		$stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));		
		$stmt->execute();
	}
	public function recuperar() {
		$query = 'select id, id_status, id_user, data_cadastrado, tarefa from tb_tarefas';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	public function atualizar() {
		$query = 'update tb_tarefas set tarefa = :tarefa where id = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
		$stmt->bindValue(':id', $this->tarefa->__get('id'));
		return $stmt->execute();
	}
	public function remover() {
		$query = 'delete from tb_tarefas where id = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', $this->tarefa->__get('id'));
		$stmt->execute();
	}
	public function marcarRealizada() {
		$query = 'update tb_tarefas set id_status = :id_status where id = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id_status', $this->tarefa->__get('id_status'));
		$stmt->bindValue(':id', $this->tarefa->__get('id'));
		return $stmt->execute();
	}
	public function recuperarTarefasPendentes(){
		$query = 'select id, id_status, id_user, tarefa from tb_tarefas where id_status = :id_status';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id_status', $this->tarefa->__get('id_status'));		
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	public function recuperarUsuario() {
		$query = "select id, nome, email, senha from tb_usuarios where email = '$email_login' AND senha = '$senha_login'";
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}

?>
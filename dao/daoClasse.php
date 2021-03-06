<?php
class DaoClasse extends Dados{

	//construtor
	public function __construct(){}

	//destruidor
	public function __destruct(){}

	
	public function listarClasse($id = null){
		try {	
			$retorno = array();
			$conexao = $this->conectarBanco();
			$sql = "SELECT c.id,c.nome,c.id_perfil,c.controlador,c.funcao,c.status,c.secao,
					       c.id_modulo, m.nome as nome_modulo, m.status as status_modulo
					FROM tb_agenteweb_classe c
					INNER JOIN tb_agenteweb_modulo m ON (c.id_modulo = m.id)
					WHERE c.status = '1'";
			$sql .= ($id != null)?" AND c.id = ".$id:"";
			$query = mysqli_query($conexao,$sql) or die ('Erro na execução  do listar!');
			while($objetoClasse =  mysqli_fetch_object($query)){
				$classe = new Classe();
				$classe->setId($objetoClasse->id);
				$classe->setNome($objetoClasse->nome);
				$classe->setPerfil($objetoClasse->id_perfil);
				$classe->setControlador($objetoClasse->controlador);
				$classe->setFuncao($objetoClasse->funcao);				
                                $classe->setSecao($objetoClasse->secao);				
				$classe->setStatus($objetoClasse->status);
				
					$modulo = new Modulo();
					$modulo->setId($objetoClasse->id_modulo);
					$modulo->setNome($objetoClasse->nome_modulo);
					$modulo->setStatus($objetoClasse->status_modulo);
				$classe->setModulo($modulo);
				
				$retorno[] = $classe; 
			}
				$this->FecharBanco($conexao);
				return $retorno;
		} catch (Exception $e) {
			return $e;
		}
	}

	public function incluirClasse($classe){
		try {	
			$conexao = $this->conectarBanco();
			$sql = "INSERT INTO tb_agenteweb_classe(nome,id_perfil,controlador,funcao,secao,id_modulo,status) VALUES ('".$classe->getNome()."',2,'".$classe->getControlador()."','".$classe->getFuncao()."','".$classe->getSecao()."','".$classe->getModulo()."','".$classe->getStatus()."')";
			
			$retorno = mysqli_query($conexao,$sql) or die ('Erro na execução  do insert!');
			$this->FecharBanco($conexao);
			return $retorno;
		} catch (Exception $e) {
			return $e;
		}
	}

	public function alterarClasse($classe){
		try {	
			
			$conexao = $this->conectarBanco();
			$sql = "UPDATE tb_agenteweb_classe SET nome = '".$classe->getNome()."', secao = '".$classe->getSecao()."', funcao = '".$classe->getFuncao()."', id_perfil = 2, controlador = '".$classe->getControlador()."', id_modulo = '".$classe->getModulo()."', status = '".$classe->getStatus()."' WHERE id =".$classe->getId()."";
			$retorno = mysqli_query($conexao,$sql) or die ('Erro na execução  do update!');
			$this->FecharBanco($conexao);
			return $retorno;
		} catch (Exception $e) {
			return $e;
		}
	}

	public function excluirClasse($id){
		try {
			$conexao = $this->conectarBanco();
			
			$sql = "UPDATE tb_agenteweb_classe SET status = '0' WHERE id = ".$id."";
			$retorno = mysqli_query($conexao,$sql) or die ('Erro na execução  do delet!');
			
			$sql = "UPDATE tb_agenteweb_acao_usuario SET status = '0' WHERE id_classe = ".$id."";
			$retorno = mysqli_query($conexao,$sql) or die ('Erro na execução  do delet!');
			
			
			$this->FecharBanco($conexao);
			return $retorno;
		} catch (Exception $e) {
			return $e;
		}

	}




}

?>
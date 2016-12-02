<?php
require '../persistencia/conexaobanco.class.php';
class PacienteDAO {
     private $conexao = null;

	public function __construct(){
		$this->conexao = conexaobanco::getInstancia();
	}
        public function __destruct(){}
        public function cadastrarPaciente($p){
            try {
                $stat = $this->conexao->prepare(
                        "insert into paciente(idPaciente, nome, anoNasc, telefone1, telefone2,email, altura, peso, meta, obs, idade, imc, vImc) values(null,?,?,?,?,?,?,?,?,?,?,?,?);");
                
                $stat->bindValue(1,$p->nome);
                $stat->bindValue(2,$p->anoNasc);
                $stat->bindValue(3,$p->telefone1);
                $stat->bindValue(4,$p->telefone2);
                $stat->bindValue(5,$p->email);
                $stat->bindValue(6,$p->altura);
                $stat->bindValue(7,$p->peso);
                $stat->bindValue(8,$p->meta);
                $stat->bindValue(9,$p->obs);
                $stat->bindValue(10,$p->idade);
                $stat->bindValue(11,$p->imc);
                $stat->bindValue(12,$p->vImc);
                $stat->execute();
                $this->conexao = null;
            } catch (PDOException $exc) {
                echo "Erro ao cadastrar!".$exc;
            }// catch
        }//cadastrar 
        public function buscarPacientes(){
            try{
                $stat = $this->conexao->query("select * from paciente ");
                $array = $stat->fetchAll(PDO::FETCH_CLASS,'Paciente'); 
                return $array;
            } catch (Exception $ex) {
                    echo "Erro ao buscar paciente!".$ex;
            }//fecha catch2
        }//fecha buscarPacientes

        public function deletarPaciente($id){
        try{
            $stat = $this->conexao->prepare("delete from paciente where idPaciente = ?");
            $stat->bindValue(1, $id);
            $stat->execute();
            
        }catch (PDOException $exc){
                echo "Erro ao excluir paciente".$exc;
        }//fecha catch 
       
    }//fecha deletar

        public function filtrar($query){
            try{
                $stat = $this->conexao->query("select * from paciente ".$query);
                $array = $stat->fetchAll(PDO::FETCH_CLASS,'Paciente');
                return $array;
            }catch (Exception $exc){
                echo "Erro ao filtrar paciente".$exc;
            }
        }//fecha método filtrar
        public function alterarPaciente($p){
            try {
                $stat = $this->conexao->prepare(
                        "update paciente
                         set nome=?, anoNasc=?, telefone1=?, telefone2=?, email=?, altura=?, 
                         peso=?, meta=?, obs=?
                         where idPaciente = ?");
            
            $stat->bindValue(1,$p->nome);
            $stat->bindValue(2,$p->anoNasc);
            $stat->bindValue(3,$p->telefone1);
            $stat->bindValue(4,$p->telefone2);
            $stat->bindValue(5,$p->email);
            $stat->bindValue(6,$p->altura);
            $stat->bindValue(7,$p->peso);
            $stat->bindValue(8,$p->meta);
            $stat->bindValue(9,$p->obs);
            $stat->bindValue(10,$p->idPaciente);
            
            $stat->execute();
            } catch (PDOException $exc) {
                echo "Erro ao alterar paciente".$exc;
            }
        }
        public function gerarJson(){
        try {
            $stat = $this->conexao->query("select * from paciente");
            return json_encode($stat->fetchAll(PDO::FETCH_ASSOC));            
        } catch (PDOException $exc) {
            echo "Erro ao gerar json!".$exc;
        }
    }//fecha método filtrar    
}//fecha classe

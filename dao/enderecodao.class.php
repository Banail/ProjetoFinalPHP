<?php
require '../persistencia/conexaobanco.class.php';

class EnderecoDAO {

    private $conexao = null;

    public function __construct() {
        $this->conexao = conexaobanco::getInstancia();
    }

    public function __destruct() {
        
    }

    public function cadastrarEndereco($r) {
        try {
            $stat = $this->conexao->prepare(
                    "insert into endereco(idEndereco, rua, bairro, cidade, numero, uf) values(null,?,?,?,?,?);");

            $stat->bindValue(1, $r->rua);
            $stat->bindValue(2, $r->bairro);
            $stat->bindValue(3, $r->cidade);
            $stat->bindValue(4, $r->numero);
            $stat->bindValue(5, $r->uf);
            $stat->execute();
            $this->conexao = null;
        } catch (PDOException $exc) {
            echo "Erro ao cadastrar!" . $exc;
        }// catch
    }

//cadastrar 

    public function buscarEnderecos() {
        try {
            $stat = $this->conexao->query("select * from endereco ");
            $array = $stat->fetchAll(PDO::FETCH_CLASS, 'Endereco');
            return $array;
        } catch (Exception $exc) {
            echo "Erro ao buscar Endereço!" . $exc;
        }//fecha catch2
    }

//fecha buscarPacientes

    public function deletarEndereco($id) {
        try {
            $stat = $this->conexao->prepare("delete from endereco where idEndereco = ?");
            $stat->bindValue(1, $id);
            $stat->execute();
        } catch (PDOException $exc) {
            echo "Erro ao excluir Endereço" . $exc;
        }//fecha catch 
    }

//fecha deletar

    public function filtrar($query) {
        try {
            $stat = $this->conexao->query("select * from endereco " . $query);
            $array = $stat->fetchAll(PDO::FETCH_CLASS, 'Endereco');
            return $array;
        } catch (Exception $exc) {
            echo "Erro ao filtrar endereço" . $exc;
        }
    }

//fecha método filtrar

    public function alterarEndereco($r) {
        try {
            $stat = $this->conexao->prepare(
                    "update endereco
                         set rua=?, bairro=?, cidade=?, numero=?, uf=?
                         where idendereco = ?");

            $stat->bindValue(1,$r->rua);
            $stat->bindValue(2,$r->bairro);
            $stat->bindValue(3,$r->cidade);
            $stat->bindValue(4,$r->numero);
            $stat->bindValue(5,$r->uf);
            $stat->bindValue(6,$r->idEndereco);

            $stat->execute();
        } catch (PDOException $exc) {
            echo "Erro ao alterar endereço" . $exc;
        }
    }
    public function gerarJson(){
        try {
            $stat = $this->conexao->query("select * from endereco");
            return json_encode($stat->fetchAll(PDO::FETCH_ASSOC));

        
        } catch (PDOException $exc) {
            echo "Erro ao gerar json!".$exc;
        }
    }//fecha método filtrar    

}//fecha classe



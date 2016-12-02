<?php
session_start();
include '../modelo/paciente.class.php';
include '../util/padronizacao.class.php';
include '../util/validacao.class.php';
include '../dao/pacientedao.class.php';

/* if(isset($_POST['nome']) &&
  isset($_POST['sobrenome']) &&
  isset($_POST['anoNasc']) &&
  isset($_POST['telefone1']) &&
  isset($_POST['telefone2']) &&
  isset($_POST['email']) &&
  isset($_POST['altura']) &&
  isset($_POST['peso']) &&
  isset($_POST['meta']) &&
  isset($_POST['rua']) &&
  isset($_POST['bairro']) &&
  isset($_POST['cidade']) &&
  isset($_POST['uf']) &&
  isset($_POST['numero']) &&
  isset($_POST['obs'])){ */
if (isset($_GET['op'])) {
    switch ($_GET['op']) {
        case 'cadastrar':

            $erros = array();

            if (!Validacao::testarNome($_POST['nome'])) {
                $erros[] = 'Nome Invalido';
            }
            if (!Validacao::testarNome($_POST['sobrenome'])) {
                $erros[] = 'Sobrenome Invalido';
            }
            if (!Validacao::testarAnoNasc($_POST['anoNasc'])) {
                $erros[] = 'Ano de Nascimento Invalido';
            }
            if (!Validacao::testarTelefone1($_POST['telefone1'])) {
                $erros[] = 'Telefone 1 Invalido';
            }
            if (!Validacao::testarTelefone2($_POST['telefone2'])) {
                $erros[] = 'Telefone 2 Invalido';
            }
            if (!Validacao::testarAltura($_POST['altura'])) {
                $erros[] = 'Altura Invalida';
            }
            if (!Validacao::testarPeso($_POST['peso'])) {
                $erros[] = 'Peso Invalido';
            }
            if (!Validacao::testarMeta($_POST['meta'])) {
                $erros[] = 'Meta Invalida';
            }
            if (!Validacao::testarObs($_POST['obs'])) {
                $erros[] = 'Obs Invalida';
            }
            if (count($erros) == 0) {
                $p = new Paciente();
                $p->nome = Padronizacao::padronizarNome(Padronizacao::juntarNome($_POST['nome'], $_POST['sobrenome']));
                $p->anoNasc = $_POST['anoNasc'];
                $p->telefone1 = $_POST['telefone1'];
                $p->telefone2 = $_POST['telefone2'];
                $p->email = Padronizacao::padronizarEmail($_POST['email']);
                $p->altura = $_POST['altura'];
                $p->peso = $_POST['peso'];
                $p->meta = $_POST['meta'];
                $p->obs = Padronizacao::padronizarObs($_POST['obs']);

                //$idade = $p->calcularIdade();
                //$imc = $p->calcularImc();
                //$vImc = $p->verificarImc();


                $pDAO = new PacienteDAO();
                echo $p;
                var_dump($pDAO->cadastrarPaciente($p));

                $_SESSION['msg'] = "Cadastro Concluído com Sucesso";
                $_SESSION['p'] = serialize($p);
                header("location:../resposta.php");
            } else {
                foreach ($erros as $e) {
                    echo '<br>' . $e;
                }//fecha foreach
            }//fecha else

            break;
        case 'consultar':
            $pDAO = new PacienteDAO();
            $array = $pDAO->buscarPacientes();

            $_SESSION['pacientes'] = serialize($array);
            header("location:../consulta-paciente.php");
            break;

        case 'deletar':
            $pDAO = new PacienteDAO();
            $pDAO->deletarPaciente($_GET['id']);

            header("location:../consulta-paciente.php?op=deletar");

            break;

        case 'filtrar':
            $query = "";
            if ($_POST['rdfiltro'] == 'idPaciente') {
                $query = "where idPaciente = " . $_POST['filtro'];
            } else if ($_POST['rdfiltro'] == 'nome') {
                $query = "where nome like '%" . $_POST['filtro'] . "%'";
            } else if ($_POST['rdfiltro'] == 'anoNasc') {
                $query = "where anoNasc like '%" . $_POST['filtro'] . "%'";
            } else if ($_POST['rdfiltro'] == 'telefone1') {
                $query = "where telefone1 like '%" . $_POST['filtro'] . "%'";
            } else if ($_POST['rdfiltro'] == 'telefone2') {
                $query = "where telefone2 like '%" . $_POST['filtro'] . "%'";
            } else if ($_POST['rdfiltro'] == 'email') {
                $query = "where email like '%" . $_POST['filtro'] . "%'";
            } else if ($_POST['rdfiltro'] == 'altura') {
                $query = "where altura like '%" . $_POST['filtro'] . "%'";
            } else if ($_POST['rdfiltro'] == 'peso') {
                $query = "where peso like '%" . $_POST['filtro'] . "%'";
            } else if ($_POST['rdfiltro'] == 'meta') {
                $query = "where meta like '%" . $_POST['filtro'] . "%'";
            } else if ($_POST['rdfiltro'] == 'obs') {
                $query = "where obs like '%" . $_POST['filtro'] . "%'";
            }//fecha else 


            $pDAO = new PacienteDAO();
            $array = $pDAO->filtrar($query);

            $_SESSION['pacientes'] = serialize($array);
            header("location:../consulta-paciente.php");

            break;
        case 'alterar':
            $query = "where idPaciente = " . $_GET['id'];
            $pDAO = new PacienteDAO();
            $array = $pDAO->filtrar($query);
            $_SESSION['paciente'] = serialize($array);
            header("location:../alterar-paciente.php");
            break;
        case 'confirmar-alteracao':
            $erros = array();

            if (!Validacao::testarNome($_POST['nome'])) {
                $erros[] = 'Nome Invalido';
            }
            if (!Validacao::testarAnoNasc($_POST['anoNasc'])) {
                $erros[] = 'Ano de Nascimento Invalido';
            }
            if (!Validacao::testarTelefone1($_POST['telefone1'])) {
                $erros[] = 'Telefone 1 Invalido';
            }
            if (!Validacao::testarTelefone2($_POST['telefone2'])) {
                $erros[] = 'Telefone 2 Invalido';
            }
            if (!Validacao::testarAltura($_POST['altura'])) {
                $erros[] = 'Altura Invalida';
            }
            if (!Validacao::testarPeso($_POST['peso'])) {
                $erros[] = 'Peso Invalido';
            }
            if (!Validacao::testarMeta($_POST['meta'])) {
                $erros[] = 'Meta Invalida';
            }
            if (!Validacao::testarObs($_POST['obs'])) {
                $erros[] = 'Obs Invalida';
            }
            if (count($erros) == 0) {
            $p = new Paciente();
            $p->nome = Padronizacao::padronizarNome($_POST['nome']);
            $p->anoNasc = $_POST['anoNasc'];
            $p->telefone1 = $_POST['telefone1'];
            $p->telefone2 = $_POST['telefone2'];
            $p->email = Padronizacao::padronizarEmail($_POST['email']);
            $p->altura = $_POST['altura'];
            $p->peso = $_POST['peso'];
            $p->meta = $_POST['meta'];
            $p->obs = Padronizacao::padronizarObs($_POST['obs']);
            $p->idPaciente = $_POST['id'];
            //$idade = $p->calcularIdade();
            //$imc = $p->calcularImc();
            //$vImc = $p->verificarImc();

            
            $pDAO = new PacienteDAO();
            $pDAO->alterarPaciente($p);
            header('location:paciente-controle.php?op=consultar');
            break;
            } else {
                foreach ($erros as $e) {
                    echo '<br>' . $e;
                }//fecha foreach
            }//fecha else
    
            case 'json':
            $pDAO = new PacienteDAO();
            echo $pDAO->gerarJson();
            break;
     }//fecha switch
} else {
    echo 'não existe op';
}//fecha else
   
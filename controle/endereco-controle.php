<?php
session_start();
include '../modelo/endereco.class.php';
include '../util/padronizacao.class.php';
include '../util/validacao.class.php';
include '../dao/enderecodao.class.php';
if (isset($_GET['op'])) {
    switch ($_GET['op']) {
        case 'cadastrar':
            $erros = array();
            if (!Validacao::testarRua(
                            $_POST['rua'])) {
                $erros[] = 'rua invalida';
            }
            if (!Validacao::testarBairro(
                            $_POST['bairro'])) {
                $erros[] = 'bairro invalido';
            }
            if (!Validacao::testarCidade(
                            $_POST['cidade'])) {
                $erros[] = 'cidade invalida';
            }
            if (!Validacao::testarNumero(
                            $_POST['numero'])) {
                $erros[] = 'numero invalido';
            }
            if (!Validacao::testarUf(
                            $_POST['uf'])) {
                $erros[] = 'uf invalida';
            }

            if (count($erros) == 0) {
                $r = new Endereco();
                $r->rua = Padronizacao::padronizarRua($_POST['rua']);
                $r->bairro = Padronizacao::padronizarBairro($_POST['bairro']);
                $r->cidade = Padronizacao::padronizarCidade($_POST['cidade']);
                $r->numero = $_POST['numero'];
                $r->uf = $_POST['uf'];


                $rDAO = new EnderecoDAO();
                //echo $r;
                $rDAO->cadastrarEndereco($r);
                $_SESSION['msg'] = "Endereço Cadastrado com Sucesso";
                $_SESSION['r'] = serialize($r);
                header("location:../resposta-endereco.php");
            } else {
                foreach ($erros as $e) {
                    echo '<br>' . $e;
                }//fecha foreach
            }//fecha else
            break;
        case 'consultar':
            $rDAO = new EnderecoDAO();
            $array = $rDAO->buscarEnderecos();

            $_SESSION['enderecos'] = serialize($array);
            header("location:../consulta-endereco.php");
            break;

        case 'deletar':
            $rDAO = new EnderecoDAO();
            $rDAO->deletarEndereco($_GET['id']);

            header("location:../consulta-endereco.php?op=consultar");

            break;

        case 'filtrar':
            $query = "";
            if ($_POST['rdfiltro'] == 'idEndereco') {
                $query = "where idEndereco = " . $_POST['filtro'];
            } else if ($_POST['rdfiltro'] == 'rua') {
                $query = "where rua like '%" . $_POST['filtro'] . "%'";
            } else if ($_POST['rdfiltro'] == 'bairro') {
                $query = "where bairro like '%" . $_POST['filtro'] . "%'";
            } else if ($_POST['rdfiltro'] == 'cidade') {
                $query = "where cidade like '%" . $_POST['filtro'] . "%'";
            } else if ($_POST['rdfiltro'] == 'numero') {
                $query = "where numero like '%" . $_POST['filtro'] . "%'";
            } else if ($_POST['rdfiltro'] == 'uf') {
                $query = "where uf like '%" . $_POST['filtro'] . "%'";
            }//fecha else 


            $rDAO = new EnderecoDAO();
            $array = $rDAO->filtrar($query);

            $_SESSION['enderecos'] = serialize($array);
            header("location:../consulta-endereco.php");

            break;
        case 'alterar':
            $query = "where idendereco = ".$_GET['id'];
            $rDAO = new EnderecoDAO();
            $array = $rDAO->filtrar($query);
            $_SESSION['endereco'] = serialize($array);
            header("location:../alterar-endereco.php");
            break;
        case 'confirmar-alteracao':
            $erros = array();
            if (!Validacao::testarRua(
                            $_POST['rua'])) {
                $erros[] = 'rua invalida';
            }
            if (!Validacao::testarBairro(
                            $_POST['bairro'])) {
                $erros[] = 'bairro invalido';
            }
            if (!Validacao::testarCidade(
                            $_POST['cidade'])) {
                $erros[] = 'cidade invalida';
            }
            if (!Validacao::testarNumero(
                            $_POST['numero'])) {
                $erros[] = 'numero invalido';
            }
            if (!Validacao::testarUf(
                            $_POST['uf'])) {
                $erros[] = 'uf invalida';
            }

            if (count($erros) == 0) {
            $r = new Endereco();
            $r->rua = Padronizacao::padronizarRua($_POST['rua']);
            $r->bairro = Padronizacao::padronizarBairro($_POST['bairro']);
            $r->cidade = Padronizacao::padronizarCidade($_POST['cidade']);
            $r->numero = $_POST['numero'];
            $r->uf = $_POST['uf'];
            $r->idEndereco = $_POST['id'];


            $rDAO = new EnderecoDAO();
            $rDAO->alterarEndereco($r);
            header('location:endereco-controle.php?op=consultar');
            break;
    
             } else {
                foreach ($erros as $e) {
                    echo '<br>' . $e;
                }//fecha foreach
            }//fecha else
            /*case 'json':
            $rDAO = new EnderecoDAO();
            echo $rDAO->gerarJson();
            break;*/
            
        }//fecha switch
} else {
    echo 'não existe op';
}//fecha else
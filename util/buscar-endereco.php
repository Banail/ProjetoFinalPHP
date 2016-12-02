<?php
include '../dao/enderecodao.class.php';

$rDAO = new EnderecoDAO();
//$rDAO->gerarJson();

var_dump($rDAO->gerarJson());
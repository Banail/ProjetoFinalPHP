<?php
include '../dao/pacientedao.class.php';

$pDAO = new PacienteDAO();
echo $pDAO->gerarJson();
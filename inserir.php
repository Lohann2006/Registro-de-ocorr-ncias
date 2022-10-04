<?php
//INSERT
$motivo = $_POST['motivo'];
$aula = $_POST['aula'];
$turma = $_POST['turma'];
$aluno = ($_POST['aluno']);
require("conexao.php");
$res = $pdo->prepare("INSERT INTO OCORRENCIA(MOTIVO, AULA, TURMA, ALUNO) VALUES (:motivo, :aula, :turma,:aluno)");
$res->bindparam(":motivo", $motivo);
$res->bindparam(":aula", $aula);
$res->bindparam(":turma", $turma);
$res->bindparam(":aluno", $aluno);
$res->execute();

?>
<?php
//INSERT
$professor = 1;
$aluno = $_POST['aluno'];
$turma = $_POST['turma'];
$aula = ($_POST['aula']);
require("conexao.php");
$res = $pdo->prepare("INSERT INTO USUARIO(PROFESSOR, ALUNO, TURMA, AULA) VALUES (:professor, :aluno, :turma,:aula)");
$res->bindparam(":professor", $professor);
$res->bindparam(":aluno", $nome);
$res->bindparam(":turma", $sobrenome);
$res->bindparam(":aula", $senha);
$res->execute();

?>
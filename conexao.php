<?php
try{
    $pdo = new PDO("mysql:dbname=ocorrencia;host=localhost","root","");
    //print("Conectado com sucesso!" . " <br/> ");
}
catch (PDOException $e){
echo "Erro com o banco de dados: ".$e->getMessage();
}
catch (Exception $e){
echo "Erro generico: ".$e->getMessage();
}
/*$res = $pdo->prepare("INSERT INTO usuario(nome professor,nome aluno,turma,aula) 
VALUES (:p, :e, :t, :a)");
$res->bindValue(":p", "israel");
$res->bindValue(":e", "fabin");
$res->bindValue(":t", "informatica");
$res->bindValue(":a", "3");
$res->execute();*/
?>
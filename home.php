<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de ocorrências</title>
    <link rel="shortcut icon" href="icon.png" type="image/x-icon" />
    <style>

        *{
            background-color: black;
        }
        footer{
            margin-top: 240px
        }
#tudo{
  margin-left: 630px;
    margin-top: 70px;
    width: 600px;
    height: 400px;
    border-width: 10px;
border-style: groove;
border-color: white;
}

.glow-on-hover {
    background: white;
    width: 220px;
    height: 50px;
    border: none;
    outline: none;
    color: white;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 10px;
    margin-top: 50px;
}


.glow-on-hover:active {
    color: rgb(99, 99, 99)
}

.glow-on-hover:hover:before {
    opacity: 1;
}

.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgb(17, 17, 17);
    left: 0;
    top: 0;
    border-radius: 10px;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}



    #h1{
       margin-left: 140px;
        color: white;
        margin-top: -20px;
    }
 

    
p{
  color: rgb(255, 255, 255); 
  font-family: "Courier";
  font-size: 20px;
  margin: 10px 0 0 10px;
  white-space: nowrap;
  overflow: hidden;
  width: 50em;
  animation: type 5s steps(60, end); 
}

p:nth-child(2){
  animation: type2 8s steps(60, end);
}

p a{
  color: lime;
  text-decoration: none;
}

span{
  animation: blink 1s infinite;
}

@keyframes type{ 
  from { width: 0; } 
} 

@keyframes type2{
  0%{width: 0;}
  50%{width: 0;}
  100%{ width: 100; } 
} 

@keyframes blink{
  to{opacity: .0;}
}
#ep{
    max-width: 90px;
    height: 90px;
    margin: 25px;
}
#ce{
    max-width: 90px;
    height: 90px;
    margin: 25px;
    float: right;
}
select{
    color: white;
    width: 150px;
    height: 30px;
    margin-top: 25px;
}

textarea{
    margin-top: 20px;
    color: white;
    border-style: double;
}

label{
  color: white;
}
    </style>
</head>
<body>


        <img id="ep" src="ep (1).png">
        
        <img id="ce" src="Ceará.png">
       
  
<center> <h1 id="h1">Registro de ocorrências:</h1></center>

<div id="tudo">

<center><form action="inserir.php" method="POST">

<label id="valor">0</label>
    
<select name="turma" id="turma" onChange="pegaTurma()">
        <option>Selecione a Turma</option>       

        <?php 
        require("conexao.php");
        $resultado = $pdo->query("SELECT CODIGO, DESCRICAO FROM TURMA");
    while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){?>
    <option value="<?php echo "{$linha['CODIGO']}";?>">   <?php echo "{$linha['DESCRICAO']}";?>    </option>       
    
  <?php  
}
?>
    </select><br>

    <select name="aluno" id="aluno">
        <option>Selecione o Aluno</option>       

        <?php 
        $v = 8;


 


        
        require("conexao.php");
        $resultado = $pdo->query("SELECT MATRICULA, NOME FROM ALUNO WHERE TURMA =  $v ");
    while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){?>
    <option value="<?php echo "{$linha['MATRICULA']}";?>">   <?php echo "{$linha['NOME']}";?>    </option>       
    
  <?php  
}
?>
    </select><br>
    
    <select name="aula" id="aula">
        <option>Selecione a Aula</option>       

        <?php 
        require("conexao.php");
        $resultado = $pdo->query("SELECT CODIGO, DESCRICAO FROM AULAS");
    while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){?>
    <option value="<?php echo "{$linha['CODIGO']}";?>">   <?php echo "{$linha['DESCRICAO']}";?>    </option>       
    
  <?php  
}
?>
    </select><br> <br>

    <center><textarea id="motivo" name="motivo" rows="5" cols="33" placeholder="Digite aqui o motivo da ocorrência"></textarea></center>

    <button class="glow-on-hover" type="submit">Registrar</button>
</form></center>

</div>

<center><footer>
    <p>Olá, professores! Esse site foi criado para o registro de ocorrências. </p>
    <p>Feito por:
      Afonso, Lohann, Iarley, Fabiano e Gabriel Alves 
 <span>|</span></p> 
</footer></center>
<script>
  function pegaTurma(){
    var turma = document.getElementById('turma').value;
    var v = document.getElementById('valor');
    v.innerHTML = turma;


  }
</script>

</body>
</html>
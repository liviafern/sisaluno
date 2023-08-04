<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    
    <title>Document</title>
</head>
<body>
  
  <div class="hedear">
  <nav>
             <strong> <a href="">ENTRAR </a>
            <a href="">NOVO CADASTRO </a>
            </strong>
        </nav>
  </div>

  <div class="contener">
        <strong><h1>CADASTRE DISCIPLINA</h1></strong>
          <form method="GET" action="crudD.php">
   
   <div class="linha1">

              <label for="">Nome da disciplina</label>
              <input type="text" name="nomedisciplina" placeholder="Disciplina">
        
     </div>

    <div class="linha2">
               <label for="">Carga Horária</label>
               <input type="text" name="ch" > 
     </div>

    <div class="linha3">

          <p> Semestre 
            <select name="semestre"  id="" required> 
            <option value="primeiroS">Primeiro Semestre</option>
            <option value="segundoS">Segundo Semestre</option>
        </select>
</p>
</div>
      
      <div class="linha4">
     <label for="">Id Professor</label>
     <input type="text" name="idprofessor" placeholder="Numero de id" required> 
     </div>


     <input type="submit" name="cadastrar" value="Cadastrar" id="btn">
     <button class="button" id="btn"><a href="index.php"> Voltar</a>
    </button>

     </form>
     </div>

     <div class="rodape">
      Feito por Livia Fernandes Teixeira
     </div>

</body>
</html>


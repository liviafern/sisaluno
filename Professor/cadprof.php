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
        <strong><h1>FORMULÁRIO DE CADASTRO</h1></strong>
          <form method="GET" action="crudprof.php">
   
   <div class="linha1">

              <label for="">Nome</label>
              <input type="text" name="nome" placeholder="Digite seu nome" required>
              <label for="">Endereço</label>
              <input type="text" name="endereco" placeholder="Digite seu endereço"> 
     </div>

    <div class="linha2">

               <label for="">Idade</label> <br>
             <input type="radio" name="idade" value="18_22" id="" >18 a 22 <br>
             <input type="radio" name="idade" value="23_30" id="" >23 a 30 <br>
             <input type="radio" name="idade" value="mais31" id="">acima de 31 <br>
            </div>

               <label for="">Data de nascimento</label>
               <input type="date" name="datadenascimento"> 
    

    <div class="linha3">

          <p> Status 
            <select name="estatus"  id="" required> 
            <option value="matriculado">Matriculado</option>
            <option value="trancado">Trancado</option>
        </select>
</p>
</div>
      
      <div class="linha4">
     <label for="">Cpf</label>
     <input type="password" name="cpf" placeholder="Numero do cpf" required> 
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


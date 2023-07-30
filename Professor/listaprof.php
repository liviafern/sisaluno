

<?php 

  require_once('conexao.php');
   
  $retorno = $conexao->prepare('SELECT * FROM Professor');
  $retorno->execute();

?>      
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="lista.css">


</head> 
        <table> 

            <thead>

            <div class="topo"> Lista de Professores </div>
               
       
                <tr> 
                    <h1>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>IDADE</th>
                    <th>ENDERECO</th>
                    <th>STATUS</th>
                    <th>CPF</th>
                    </h1>
                </tr>
              
            </thead>
          
            <tbody>
                <tr>
               
                    <?php foreach($retorno->fetchall() as $value) { ?>
                        <tr>

                            <td> <?php echo $value['id']?> </td> 
                            <td> <?php echo $value['nome']?>  </td> 
                            <td> <?php echo $value['idade']?> </td> 
                            <td> <?php echo $value['endereco']?>  </td> 
                            <td> <?php echo $value['estatus']?>    </td> 
                            <td> <?php echo $value['cpf']?> </td> 

                            <td>
                               <form method="POST" action="altprof.php">
                                  
                              
                                        <input name="id" type="hidden" value=" <?php echo $value['id'];?>"/>
                                        <input name="nome" type="hidden" value=" <?php echo $value['nome'];?>"/>
                                        <input name="idade" type="hidden" value=" <?php echo $value['idade'];?>"/>
                                        <input name="endereco" type="hidden" value=" <?php echo $value['endereco'];?>"/>
                                        <input name="estatus" type="hidden" value=" <?php echo $value['estatus'];?>"/>
                                        <input name="cpf" type="hidden" value=" <?php echo $value['cpf'];?>"/>

                                        <button name="alterar"  type="submit"  id="btn">Alterar</button>
                                </form>

                             </td> 

                             <td>
                                
                               <form method="GET" action="crudprof.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                      
                                        <button name="excluir"  type="submit"  id="btn">Excluir</button>
                                </form>
                                

                    </td>
                       
                      </tr>

                    
                      
                    <?php  }  ?> 

                 </tr>
            </tbody>
        </table>
        </div>

        <div class="rodape"> Feito por Livia Fernandes Teixeira</div>
        
<?php         
   echo "<button class=button button3'><a href='index.php'>voltar</a></button>";
?>


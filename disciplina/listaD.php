

<?php 

  require_once('conexao.php');
   
  $retorno = $conexao->prepare('SELECT * FROM disciplina');
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

            <div class="topo"> DISCIPLINAS </div>
               
       
                <tr> 
                    <h1>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>CARGA HORÁRIA</th>
                    <th>SEMESTRE</th>
                    <th>ID PROFESSOR</th>
                    
                    </h1>
                </tr>
              
            </thead>
          
            <tbody>
                <tr>
               
                    <?php foreach($retorno->fetchall() as $value) { ?>
                        <tr>

                            <td> <?php echo $value['id']?>         </td> 
                            <td> <?php echo $value['nomedisciplina']?>      </td> 
                            <td> <?php echo $value['ch']?>        </td> 
                            <td> <?php echo $value['semestre']?>             </td> 
                            <td> <?php echo $value['idprofessor']?>    </td> 
                          

                            <td>
                               <form method="POST" action="altD.php">
                                  
                              
                                        <input name="id" type="hidden" value=" <?php echo $value['id'];?>"/>
                                        <input name="nomedisciplina" type="hidden" value=" <?php echo $value['nomedisciplina'];?>"/>
                                        <input name="ch" type="hidden" value=" <?php echo $value['ch'];?>"/>
                                        <input name="semestre" type="hidden" value=" <?php echo $value['semestre'];?>"/>
                                        <input name="idprofessor" type="hidden" value=" <?php echo $value['idprofessor'];?>"/>
                                      
                                        <button name="alterar"  type="submit"  id="btn">Alterar</button>
                                </form>

                             </td> 

                             <td>
                                
                               <form method="GET" action="crudD.php">
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


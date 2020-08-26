<!doctype HTML>
<html>
  
  <head>
    <title> Pontos de Encontro </title>  
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">      
  </head>

  <body bgcolor="#EFEFEF">
    <center>
  	<h2> Excluir Ponto de Encontro </h2> 
    
    <form action="excluir.php" method="get">
       Informe o Código que deseja excluir: <input type="text" name="codigo" size="5"> <br><br> 
       <input type="submit" name="Excluir" value="Excluir">
    </form>
    
    <?php   
	if (!empty($_GET['Inserir']))
	{
		    $codigo = $_GET['codigo'];
			
      		$conexao = mysqli_connect("localhost", "root", "") or die ("Não conectou ao servidor!");
	  		$bd = mysqli_select_db($conexao, "bikes") or die("Não conectou ao Banco de Dados");	  
							  
		    $comandoSQL = "delete codigo from pontos where codigo='".$codigo."'";
			
	if (mysqli_query($conexao, $comandoSQL)) 
	{
	    echo "<br>Novo Ponto Excluído";	
	}
			
	else
	{
		echo "Erro";	
	}
	}
	else
	{
		echo "erro";
	}
	
	
	?>
    </center>
  </body>
</html>
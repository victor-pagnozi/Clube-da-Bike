<!doctype HTML>
<html>
  
  <head>
    <title> Pontos de Encontro </title>  
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">      
  </head>

  <body bgcolor="#EFEFEF">
    <center>
  	<h2> Inserir Novo Ponto de Encontro </h2>
    
    <form action="inserir.php" method="get">
       Código: <input type="text" name="codigo" size="5"> <br><br> 
       Descrição: <input type="text" name="descricao" size="50"> <br><br> 
       Endereço: <input type="text" name="endereco" size="30"> <br><br>   
       Número: <input type="text" name="numero" size="30"> <br><br>
       <input type="submit" name="Inserir" value="Inserir">
       
     </form>
     
     <?php
	   if (!empty($_GET['Inserir']))
	   {
		   $codigo = $_GET['codigo'];
		   $descricao = $_GET['descricao'];
		   $endereco = $_GET['endereco'];
		   $numero = $_GET['numero'];		   
		   
		    $conexao = mysqli_connect("localhost","root","") or die("Não Conectou ao banco");  
			$bd = mysqli_select_db($conexao, "bikes") or die("Não conectou ao Banco de Dados");			
				  
		    $comandoSQL = "insert into pontos values(".$codigo.", '".$descricao."', '".$endereco."', '".$numero."')";			
			
			if (mysqli_query($conexao, $comandoSQL)) 
			{
			  echo "<br>Novo Ponto Criado";	
			}
			
			else
			{
			  echo "Erro";	
			}
	   }
	   ?>
</html>
<!doctype HTML>
<html>
  
  <head>
    <title> Pontos de Encontro </title>  
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">      
  </head>

  <body bgcolor="#EFEFEF">
    <center>
  	<h2> Alterar Pontos de Encontro </h2> 
    <?php   
      $conexao = mysqli_connect("localhost", "root", "") or die ("Não conectou ao servidor!");
	  $bd = mysqli_select_db($conexao, "bikes") or die("Não conectou ao Banco de Dados");
	  
	  echo "Codigo: ".$codigo;
	  //$comandoSQL = "select * from pontos";
	  //$rs = mysqli_query($conexao, "update codigo from pontos where codigo='".$codigo."'") or die("Não foi possível executar o SQL");
 	?>
    </center>
  </body>
</html>
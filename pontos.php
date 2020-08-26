<!doctype HTML>
<html>
  
  <head>
    <title> Pontos de Encontro </title>  
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">      
  </head>

  <body bgcolor="#EFEFEF">
    <center>
  	<h2> Pontos de Encontro </h2>
    
    <?php
	  $conexao = mysqli_connect("localhost", "root", "") or die ("Não conectou ao servidor!");
	  $bd = mysqli_select_db($conexao, "bikes") or die("Não conectou ao Banco de Dados");
	  $comandoSQL = "select * from pontos";
	  $rs = mysqli_query($conexao, "select * from pontos") or die("Não foi possível executar o SQL");
	  
	  while($linha = mysqli_fetch_array($rs, MYSQLI_BOTH))
	  {
		  $codigo = $linha['codigo'];
		  $descricao = $linha['descricao'];
		  $endereco = $linha['endereco'];
		  $numero = $linha['numero'];
		  
		  echo "<table border=1>";
		  echo "<tr>";	  
		  echo "<td width='400px' align=center >Descrição</td>";
		  echo "<td width='200px' align=center >Endereço</td>";
		  echo "<td width='150px' align=center >Número</td>";
		  
		  echo "<tr>";	  
		  echo "<td width='400px' align=center >".$descricao."</td>";
		  echo "<td width='200px' align=center >".$endereco."</td>";
		  echo "<td width='150px' align=center >".$numero."</td>";
		  echo "</tr>";
	  }
    ?>   
    <a link href="index.php"> Voltar </a> 
    </body>
 
</html>
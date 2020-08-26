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
	  
	  echo "<table border=1>";
		  echo "<tr>";		  
		  echo "<td width='100px' align=center >Codigo</td>";	  
		  echo "<td width='400px' align=center >Descrição</td>";
		  echo "<td width='200px' align=center >Endereço</td>";
		  echo "<td width='150px' align=center >Número</td>";
		  echo "<td width='100px' align=center >Alterar</td>";
		  echo "<td width='100px' align=center >Excluir</td>";
	  
	  while($linha = mysqli_fetch_array($rs, MYSQLI_BOTH))
	  {
		  $codigo = $linha['codigo'];
		  $descricao = $linha['descricao'];
		  $endereco = $linha['endereco'];
		  $numero = $linha['numero'];
		  
		  
		  
		  echo "<tr><td width='100px' align=center>".$codigo."</td>";	  
		  echo "<td width='400px' align=center >".$descricao."</td>";
		  echo "<td width='200px' align=center >".$endereco."</td>";
		  echo "<td width='150px' align=center >".$numero."</td>";
		  echo "<td width='100px' align=center >"."<a link href=alterar.php> <img src=Imagens/alterar.jpg width=40 height=40></a></td>";
		  echo "<td width='100px' align=center >"."<a link href=excluir.php> <img src=Imagens/excluir.jpg width=40 height=40></a></td>";
	  }
    ?>   
   <a link href="inserir.php"> <img src="Imagens/inserir.png" width="150" height="80"> </a>
  </body>
 
</html>
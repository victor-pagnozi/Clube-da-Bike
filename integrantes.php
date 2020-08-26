<HTML>

  <head>
	<title> Integrantes do Clube </title>    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  </head>
  
	<body>
    <center>
    <h2> Integrantes do Clube </h2>
	<?php
	
		$conexao = mysqli_connect("localhost","root","") or die("Não conectou ao servidor");
	    $bd = mysqli_select_db($conexao, "bikes") or die("Não conectou ao Banco de Dados");
		$comandoSQL = "select * from integrantes";
		$rs = mysqli_query($conexao, "select * from integrantes") or die("Não foi possível executar o SQL");
		
		
		while ($linha = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
			echo "<tr><td>";
			$foto = $linha['foto_pessoa'];
			echo "<br><img src='".$foto."'width='200px' ><br>";
			echo "</td><td>";
			
			echo "Integrante: "."<strong>".$linha ['nome'];
			echo "<br>";
			
			$foto1 = $linha['foto1_bike'];
			if ($foto1 != "")
			{
				echo "<img src='".$foto1."'width='150px' ><br>";
			}
			
			$foto2 = $linha['foto2_bike'];
			if ($foto2 != "")
			{
				echo "<img src='".$foto2."'width='150px' ><br>";
			}
			
			$foto3 = $linha['foto3_bike'];
			if ($foto3 != "")
			{
				echo "<img src='".$foto3."'width='150px' ><br>";
			}
			
			echo "</td><td>";
		}
		   
    ?>
	
    </center>
    <a link href="index.php"> Voltar </a> 
	</body>

</HTML>
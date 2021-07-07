<?php
  include_once 'css/header.php'; 
  include_once 'banco/banco.php'; 
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body  background="img/lista.jpg">

<div class="row">
	<div class="col">
		<h3 class="light"> Usuario </h3>
		<table class="striped">
			<thead>
				<tr>
					<th>Nome:</th>
					<th>Sobrenome:</th>
                    <th>celular:</th>
					<th>Email:</th>
					<th>Idade:</th>
				</tr>
			</thead>

			<tbody>
				<?php
				$sql = "SELECT * FROM agenda";
				$resultado = mysqli_query($connect, $sql);
               
                if(mysqli_num_rows($resultado) > 0):

				while($dados = mysqli_fetch_array($resultado)):
				?>
				<tr>
					<td><?php echo $dados['nome']; ?></td>
					<td><?php echo $dados['sobre']; ?></td>
                    <td><?php echo $dados['celular']; ?></td>
					<td><?php echo $dados['email']; ?></td>
					<td><?php echo $dados['dataAni']; ?></td>
					<td><a href="editar.php?id=<?php echo $dados['cod']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

					<td><a href="#modal<?php echo $dados['cod']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

					<!-- Modal Structure -->
					  <div id="modal<?php echo $dados['cod']; ?>" class="modal">
					    <div class="modal-content">
					      <h4>Opa!</h4>
					      <p>Tem certeza que deseja excluir esse Usuario?</p>
					    </div>
					    <div class="modal-footer">					     

					      <form action="banco/delete.php" method="POST">
					      	<input type="hidden" name="id" value="<?php echo $dados['cod']; ?>">
					      	<button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>

					      	 <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>

					      </form>

					    </div>
					  </div>


				</tr>
			   <?php 
				endwhile;
				else: ?>

				<tr>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>

			   <?php 
				endif;
			   ?>

			</tbody>
		</table>
		<br>
		<a href="cadastro.php" class="btn">Adicionar Usuario</a>
	</div>
</div>
	
</body>
</html>
<?php
  include_once 'css/footer.php'; 
?>
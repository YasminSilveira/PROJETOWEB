<?php
// Conexão
include_once 'banco/banco.php';
// Header
include_once 'css/header.php';
// Select
if(isset($_GET['id'])):
	$cod = mysqli_escape_string($connect, $_GET['id']);

	$sql = "SELECT * FROM agenda WHERE cod = '$cod'";
	$resultado = mysqli_query($connect, $sql);//executou o script e conectou
	$dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Editar Usuario </h3>
		<form action="banco/update.php" method="POST">
			<input type="hidden" name="cod" value="<?php echo $dados['cod'];?>">
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome" value="<?php echo $dados['nome'];?>">
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="sobre" value="<?php echo $dados['sobre'];?>" id="sobre">
				<label for="sobre">Sobrenome</label>
			</div>
			
			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['celular'];?>" name="celular" id="celular">
				<label for="celular">celular</label>
			</div>


			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['email'];?>" name="email" id="email">
				<label for="email">Email</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['data'];?>" name="data" id="data">
				<label for="data">Data de Aniversário</label>
			</div>

			<button type="submit" name="btn-editar" class="btn"> Atualizar</button>
			<a href="lista.php" class="btn green"> Lista de Usuarios </a>
		</form>
		
	</div>
</div>
<?php
// Footer
include_once 'css/footer.php';
?>

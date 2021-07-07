<?php
include_once 'css/header.php'; 
?>


    <div class="row">
		<div class="col">
		<h3 class="light"> Cadastro </h3>
		<form action="banco/create.php" method="POST">
			<div class="input-field col s12">
			<i class="material-icons prefix">account_circle</i>
				<input type="text" name="nome" id="nome" >
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
			<i class="material-icons prefix">sports_score</i>
				<input type="text" name="sobre" id="sobre">
				<label for="sobre">Sobrenome</label>
			</div>
             	
                 <div class="input-field col s12">
			<i class="material-icons prefix">phone_iphone</i>
				<input type="text" name="celular" id="celular">
				<label for="celular">celular</label>
			</div>

			<div class="input-field col s12">
			<i class="material-icons prefix">email</i>
				<input type="text" name="email" id="email">
				<label for="email">Email</label>
			</div>

			<div class="input-field col s12">
			<i class="material-icons prefix">4g_mobiledata</i>
				<input type="date" name="data" id="data">
				<label for="dataAni">Data de Aniversário</label>
			</div>

			<button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
			<a href="lista.php" class="btn green"> Lista de Usuarios </a>
		</form>
		
	</div>
    </div>

<?php
include_once 'css/footer.php'; 
?>

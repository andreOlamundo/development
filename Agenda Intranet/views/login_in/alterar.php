<div class="container-fluid">
	<div class="row">
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<h2>Alterar</h2>
			<hr class="featurette-divider">

		<form method="post" name="alterar" action="alterar_db.php">

			<select class="form-control" type="text" name="user_id" required>
				<option value>---Selecione---</option>
				<?php

				@include("conec.php");

				$sql = "SELECT user_id, user_name FROM users ORDER BY user_name ASC";
				$resultado = mysql_query($sql) or die("Não foi desta vez");
				?>


				<?php while($linha = mysql_fetch_array($resultado)){ 
					$user_id = $linha["user_id"];
					$user_name = $linha["user_name"];

					?>

					<option value="<?=$user_id;?>"><?=$user_name;?><br></option>
					<?php
				}
				?>
			</select>

		<input type="submit" name="Editar">


	

</form>

		

		</div>
	</div>
</div>


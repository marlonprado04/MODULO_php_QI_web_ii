<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Meu projeto</title>
	<link rel="stylesheet" href="style.css">
	</link>
</head>

<body>

	<!-- Criando formulário -->
	<div class="form__container">
		<form method="POST" action="index.php">

			<!-- Criando inputs para receber dados -->
			<div class="input__container">

				<div class="input__value">
					<label name="nome">Nome: </label>
					<input type="text" name="nome" placeholder="Ex: Joaquim">
				</div>

				<div class="input__value">
					<label name="peso">Peso: </label>
					<input type="text" name="peso" placeholder="Ex: 75.6">
				</div>

				<div class="input__value">
					<label name="altura">Altura: </label>
					<input type="text" name="altura" placeholder="Ex: 1.80">
				</div>

			</div>

			<!-- Criando checkbox com opções de gênero -->
			<div class="radio__container">
				<label>
					<input type="radio" name="sexo" value="masculino"> Masculino
				</label>
				<label>
					<input type="radio" name="sexo" value="feminino"> Feminino
				</label>

				<button type="submit">Calcular IMC</button>
			</div>

	</div>

	</form>

	<!-- Bloco de código PHP -->
	<?php

	if (!empty($_POST)) {
		// Armazenando valores dos inputs
		$sexo = $_POST["sexo"];
		$nome = $_POST["nome"];
		$peso = (float) $_POST["peso"];
		$altura = (float) $_POST["altura"];

		// Calculando o IMC e formatando para só duas casas decimais
		$imc = $peso / ($altura * $altura);
		$imc = number_format($imc, 2);

		if ($sexo == "masculino") {
			// Verificando faixas de IMC para homens
			if ($imc <= 20.00) {
				$mensagem = "abaixo do esperado";
			} elseif ($imc <= 20.01) {
				$mensagem = "dentro do normal";
			} elseif ($imc <= 24.91) {
				$mensagem = "com obesidade leve";
			} elseif ($imc <= 29.91) {
				$mensagem = "com obesidade moderada";
			} else {
				$mensagem = "com obesidade mórbida";
			}
		} else {
			// Verificando faixas de IMC para mulheres
			if ($imc <= 19.00) {
				$mensagem = "abaixo do esperado";
			} elseif ($imc <= 23.90) {
				$mensagem = "dentro do normal";
			} elseif ($imc <= 28.90) {
				$mensagem = "com obesidade leve";
			} elseif ($imc <= 38.90) {
				$mensagem = "com obesidade moderada";
			} else {
				$mensagem = "com obesidade mórbida";
			}
		}

		// Exibindo a mensagem para o usuário
		print "<h3>$nome seu IMC é de $imc e está <strong> $mensagem !
		</strong></h3>";
	}
	?>


</body>

</html>
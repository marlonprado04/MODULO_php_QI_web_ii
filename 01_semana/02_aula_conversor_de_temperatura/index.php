<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Conversor de temperatura</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<!-- Criando formulário como POST (que é o método que faz o envio via requisição)-->
	<form method="POST" action="index.php">

		<!-- Criando label (descrição para usuário saber o que ele vai digitar)-->
		<label name="input_celsius">Digite um valor em Celsius: </label>

		<!-- Criando input (onde usuário vai informar os graus em celsius)-->
		<input type="number" id="input_celsius" name="input_celsius" required>

		<!-- Criando button (onde usuário vai clicar para enviar o que foi digitado)-->
		<button type="submit">Converter</button>
	</form>

	<!-- Criando tag para lógica em PHP-->
	<?php

		// Verificando se o POST não está vazio (via operador lógico de esclamação e função nativa do PHP).
		// Se estiver, não imprime a variável em tela.
		if(!empty($_POST)){
			// Criando variável para armazenar o valor do input
			$grau_celcius = $_POST["input_celsius"];

			// Criando variáveis para armazenar os graus convertidos 
			$grau_farenheit = $grau_celcius * 9/5 + 32;
			$grau_kelvin = $grau_celcius + 273.15;
			$grau_rankine = $grau_celcius * 1.8 + 491.67;

			// Imprimindo os valores na tela
			print "<p> $grau_celcius °C é igual a $grau_farenheit °F. </p>";
			print "<p> $grau_celcius °C é igual a $grau_kelvin K. </p>";
			print "<p> $grau_celcius °C é igual a $grau_rankine °Ra. </p>";
		}
		
	?>

</body>

</html>
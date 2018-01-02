 <form method="POST" action="acao.php">
	<h1>Formulario de Dados</h1>
		<fieldset>
			<legend>Dados</legend>
				Nome:<input type="text" size="24" maxlength="12" name="nome"><br />
				Sobrenome:<input type="text" size="19" maxlength="12" name="sobrenome"><br />
				RG:<input type="text" size="26" maxlength="12" name="rg"><br />
				CPF<input type="text" size="26" maxlength="12" name="cpf"><br /><br />
				Nacionalidade<br />
				Brasileiro:<input type="checkbox" value="c_op1" name="check[]"><br />
				Estrangeiro:<input type="checkbox" value="c_op2" name="check[]"><br /><br />
				Masculino:<input type="radio" value="Male" name="gender"><br />
				Feminino:<input type="radio" value="Female" name="gender"><br />
		</fieldset>	
		<br>
		<fieldset>
			<legend>Endereço</legend>
				Rua:<input type="text" size="24" maxlength="12" name="rua"><br />
				Nº:<input type="text" size="19" maxlength="12" name="numero"><br />
				Bairro:<input type="text" size="26" maxlength="12" name="bairro"><br />
				Complemento<input type="text" size="26" maxlength="12" name="complemento"><br />
				Cidade<input type="text" size="17" maxlength="12" name="cidade"><br />
		</fieldset>
		<br>
		<fieldset>
			<legend>Contatos</legend>
				Telefone<input type="text" size="24" maxlength="12" name="tel"><br />
				E-mail:<input type="text" size="19" maxlength="12" name="e-mail"><br />
		</fieldset>
		<br>
		<br>
			<input type="submit" value="Envia">
		
</form>
<?php
	$pc = 2500.59;
	$salbase = 1100.00;
	$nome = 'Alexandre'; 
	$tp = 0;
	$sb = 0;
	$sl =0;
?>

<table border="3" class="ta" class="responsivo"a>
	<caption>
		Tabela de Preco de um Computador
	</caption>
	<tr bgcolor="#E667AF">
		<td>
			Preco de Compra
		</td>
		<td>
			Acrescimo
		</td>
		<td>
			Preco de Venda
		</td>
	</tr>
		<tr rowspan="5" bgcolor="#33CCCC">
		<td>
			<?php print($pc) ?>
		</td>
		<td>
			45%
		</td>
		<td>
			<?php print ($tp=($pc+($pc*0.45))) ?>
		</td>
	</tr>
</table>
<br>
<br>
<table border="3" class="ta" class="responsivo"a>
	<caption>
		Tabela de Salario do Funcionario
	</caption>
	<tr bgcolor="#E667AF">
		<td>
			Nome do Funcionario
		</td>
		<td>
			Total do Valor das Vendas
		</td>
		<td>
			Salario Bruto
		</td>
		<td>
			Salario Liquido
		</td>
	</tr>
		<tr rowspan="5" bgcolor="#33CCCC">
		<td>
			<?php print($nome) ?>
		</td>
		<td>
			<?php print ($tp) ?>
		</td>
		<td>
			<?php print ($sb=($salbase)+($tp*0.2)) ?>
		</td>
		<td>
			<?php print ($sl=($sb)-($sb*0.08)) ?>
		</td>
	</tr>
</table>
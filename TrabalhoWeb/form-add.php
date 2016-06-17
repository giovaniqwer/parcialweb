<!--Tudo isso será carregado pelo AJAX-->
<div class="conteudo">
	
	<!---------------PHP--------------------->
	<?php
		//*************require_once 'init.php';
	?>
	<!------------FIM DO PHP----------------->
	
	<h1>Cadastro de clientes</h1>
	<table width="50%" align="center">
		<tr>
			<th width="18%"> Nome do cliente: </th>
			<td width="82%"><input type="text" name="txtNome"></td>
		</tr>
		<tr>
			<th> Email: </th>
			<td ><input type="text" name="txtEmail"></td>
		</tr>
		<tr>
			<th> Data do cadastro: </th>
			<td ><input type="text" id="calendario"></td>
			<script>
				$(function(){
				$("#calendario").datepicker({
					showOn: "button",
					buttonImage:"assets/img/calendario.png",
					buttonImageOnly: true
					});
				});
			</script >
		</tr>
	</table>
	<br><br>
</div>


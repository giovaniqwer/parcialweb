$(document).ready(function(e){
	$("#menutopo a").click(function(e){	
		e.preventDefault();
		var href = $(this).attr('href');
		$(".conteudo").load(href + " .conteudo");
 	});
 });

function chamaajax(botao) {
	var href = $(botao).attr('href');
	$(".conteudo").load(href + " .conteudo");
}

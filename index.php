<html>
<head>
	<title>Teste de array - Pessoa</title>
<script>
$(document).ready(function () {
	$.ajax( 
                    {
		url: 'http://localhost/teste.php',
		content/type: 'application/json',
		method: GET,
		success: function (data) {
		      let retorna_valores = data;
		      let resultado_html = "";
		      $.each(data, function(index, usuario)
			 {
			  resultado_html = "<li><div>Nome do usuário : " + usuario.nome  + " <br /> Idade do usuário : "  + usuario.idade + " <br /> Cidade do usuário : " + usuario.cidade  + "</div></li>";
			  $('#mostra_resultados ul').html(resultado_html);   
			 }
		       );
		 },
		error: {
		   console.log('Não foi possível realizar a solicitação');
		 }
	   }
	);

 });

</script>
</head>
<body>
	<header>Teste de array</header>
	<section>
		<div id="mostra_resultados">
			<ul></ul>
		</div>
	</section>
	<footer>
		<div>Todos os direitos reservados</div>
	</footer>
</body>
</html>

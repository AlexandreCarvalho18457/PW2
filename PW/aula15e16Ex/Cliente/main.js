$(document).ready(function(){

$("form").on("submit", function(e){

	e.preventDefault();

	var anoNascimento = $("#anoNascimento").val();
	console.log("Ano de nascimento inserido: "+ anoNascimento);

	var serverObj = {"anoNascimento" : anoNascimento};
	var serverJSON = JSON.strimgify(serverObj);

	console.log(serverJSON);

	$.ajax([{
		type: "GET",
		url: "../../servidor/api.php",
		data: {dataNasciemnto:serverJSON},
		cache: false,
		success: function(data){

			var obj = JSON.parse(data);
			$("#idade").html(data.idade);
			console.log(data);
		}
	}])
});

});
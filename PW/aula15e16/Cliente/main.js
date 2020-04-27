$(document).ready(function(){

$("form").on("submit", function(e){

	e.preventDefault();

	var dataNascimento = $("#anoNascimento").val();

	var serverObj = {"dataNascimento" : dataNascimento};
	var serverJSON = JSON.stringify(serverObj);

	console.log(serverJSON);

	$.ajax({
		type: "POST",
		url: " ../Servidor/api.php",
		data: {dataNasciemnto: serverJSON},
		cache: false,
		success: function(data){

			var obj = JSON.parse(data);
			$("#idade").text(obj.idade);

			console.log(obj);
		}
	});
})

});
$(function(){
	$('#formAjout').submit(function(e){
		let date=$("#dateReservation").val();
		if (Date.parse(date) < new Date()) {
			alert("La date saisie n'est pas valide.");
			e.preventDefault();
		}
	});
});
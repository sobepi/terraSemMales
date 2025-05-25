function verificacao(){
	if(document.getElementById("nome").value == "" || document.getElementById("email").value == "" || document.getElementById("testemunho").value == ""){
		alert("Por favor, preencha todos os campos");
	}else{
		alert("Obrigado pela sua colaboração");
	}
}
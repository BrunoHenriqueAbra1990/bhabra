

window.onload = function() {
    /*console.log('Oi, eu sou o javascript');*/
};

function goHome() {
    location.href="./";
}


function Mudarestado(el) {
	console.log(el);
	
	var display = document.getElementById(el).style.display;

	if(display == "none"){
		document.getElementById(el).style.display = 'block';
		
		if(el == 'divCadastros'){
			console.log('Clicou em divCadastros');
		}

	}
	else{
		document.getElementById(el).style.display = 'none';
	}
}
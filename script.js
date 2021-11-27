const form = document.getElementById('form');
const nome = document.getElementById('nome');
const matricula = document.getElementById('matricula');
const pri_nota = document.getElementById('pri_nota');
const seg_nota = document.getElementById('seg_nota');

form.addEventListener('submit', function checkInputs(event){ /* function que checa todos os campos */
	const nomeValue = nome.value.trim();
	const matriculaValue = matricula.value.trim();
	const pri_notaValue = pri_nota.value.trim();
	const seg_notaValue = seg_nota.value.trim();
	
	if(nomeValue == '') {
		event.preventDefault();
		setErrorFor(nome, 'Preencha o campo em branco!');
	} else {
		setSuccessFor(nome);
	}
	
	if(matriculaValue == '') {
		event.preventDefault();
		setErrorFor(matricula, 'Preencha o campo em branco!');
	} else {
		setSuccessFor(matricula);
	}
	
	if(pri_notaValue == '') {
		event.preventDefault();
		setErrorFor(pri_nota, 'Preencha o campo em branco!');
	} else {
		setSuccessFor(pri_nota);
	}
	
	if(seg_notaValue == '') {
		event.preventDefault();
		setErrorFor(seg_nota, 'Preencha o campo em branco!');
	} else {
		setSuccessFor(seg_nota);
	}
	if(isNaN(pri_notaValue)){
		event.preventDefault();
		setErrorFor(pri_nota, 'Digite um numero válido!');
	} else {
		setSuccessFor(pri_nota);
	}
	if(isNaN(seg_notaValue)){
		event.preventDefault();
		setErrorFor(seg_nota, 'Digite um numero válido!');
	} else {
		setSuccessFor(seg_nota);
	}

});

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}
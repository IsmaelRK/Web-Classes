nomeS = document.getElementById('nome')
emailS = document.getElementById('email')
assuntoS = document.getElementById('assunto')

function ver()
{


    if (nomeS.value.trim() === "" || emailS.value.trim() === "" || assuntoS.value.trim() === "") {
        window.alert("Preencha todos os dados");
    }


}
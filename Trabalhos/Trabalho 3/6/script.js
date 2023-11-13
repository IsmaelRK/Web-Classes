function fcalorias()
{
    let peso = document.getElementById('peso').value
    let atividade = document.querySelector('input[name="atividades"]:checked').value
    let tempo = document.querySelector('#tempo').value


    let r = 0.0
    r = peso * tempo * (atividade) * 0.0175



    let msg = document.getElementById('mensagem')

    msg.innerText = "Resultado: " + r.toFixed(2)

}
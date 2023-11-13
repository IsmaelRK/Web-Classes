$(document).ready(function (){

    let data = new Date()

    let dia = data.getDate()
    let mes = data.getMonth()
    let ano = data.getFullYear()
    let hora = data.getHours()



    let h1 = document.getElementById('h1')

    let saud = ''

    if (hora >= 6 && hora <= 12)
    {
        saud = "Bom Dia"
    }
    else if (hora >= 12 && hora <= 18)
    {
        saud = "Boa Tarde"
    }
    else
    {
        saud = "Boa Noite"
    }

    h1.innerText = dia + '/' + mes + '/' + ano + " - " + saud



})
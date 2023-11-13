let smD = document.getElementById('smD')


function fn(elem)
{

    smD.innerText = ""

    console.log(elem)
    let data = new Date(elem)
    data.setDate(data.getDate() + 1)
    console.log(data)

    let m = data.getMonth()

    switch (m)
    {
        case 0:

            smD.innerText = "Janeiro"
            break

        case 1:

            smD.innerText = "Fevereiro"
            break

        case 2:

            smD.innerText = "Março"
            break

        case 3:

            smD.innerText = "Abril"
            break

        case 4:

            smD.innerText = "Maio"
            break

        case 5:

            smD.innerText = "Junho"
            break

        case 6:

            smD.innerText = "Julho"
            break

        case 7:

            smD.innerText = "Agosto"
            break

        case 8:

            smD.innerText = "Setembro"
            break

        case 9:

            smD.innerText = "Outubro"
            break

        case 10:

            smD.innerText = "Novembro"
            break

        case 11:

            smD.innerText = "Dezembro"
            break

    }

}
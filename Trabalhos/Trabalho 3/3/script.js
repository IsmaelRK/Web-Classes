let smD = document.getElementById('smD')


function fn(elem)
{

    smD.innerText = ""

    console.log(elem)
    let data = new Date(elem)
    data.setDate(data.getDate() + 1)
    console.log(data)

    let d = data.getDay()

    switch (d)
    {
        case 0:

            smD.innerText = "Domingo"
            break

        case 1:

            smD.innerText = "Segunda"
            break

        case 2:

            smD.innerText = "Terça"
            break

        case 3:

            smD.innerText = "Quarta"
            break

        case 4:

            smD.innerText = "Quinta"
            break

        case 5:

            smD.innerText = "Sexta"
            break

        case 6:

            smD.innerText = "Sexta"
            break

    }

}
function eml(elem)
{
    let erro = document.getElementById('erro')
    let erro2 = document.getElementById('erro2')


    if (elem.value.length < 6)
    {

        erro.innerText = "Minimo 6 Caracteres"

    }
    else
    {
        erro.innerText = ''
    }


    let c1 = 1
    let c2 = 1
    for (let letter of elem.value) {


        if (letter === '@')
        {
            c1 = 0
        }
        if (letter === '.')
        {
            c2 = 0
        }

    }

    if (c1 === 1 || c2 === 1)
    {

        erro2.innerText = "Precisa conter '@' e '.'"

    }
    else
    {
        erro2.innerText = ''
    }

    if (erro.textContent === '' && erro2.textContent === '')
    {
        let btn = document.getElementById('btn')

        btn.style.display = 'flex'

    }
    else
    {
        btn.style.display = 'none'
    }


}
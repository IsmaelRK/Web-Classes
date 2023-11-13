let nomeP = document.getElementById('nomeP')
let senhaP = document.getElementById('senhaP')
let senhaconfP = document.getElementById('senhaconfP')

let c1 = 1
let c2 = 1
let c3 = 1

function cnf1(elem)
{
    if (elem.value.length < 8)
    {
        nomeP.innerText = 'Minimo 8 caracteres, possui (' + elem.value.length + ')'
        c1 = 1
    }
    else
    {
        // nomeP.remove()
        nomeP.innerText = ''
        c1 = 0
    }
    btnConf()
}

function cnf2(elem)
{
    if (elem.value.length < 6)
    {
        senhaP.innerText = 'Minimo 6 caracteres, possui (' + elem.value.length + ')'
        cnf3()
        c2 = 1
    }
    else
    {
        senhaP.innerText = ''
        cnf3()
        c2 = 0
    }
    btnConf()

}

function cnf3()
{

    let senha = document.getElementById('senha').value
    let elem = document.getElementById('senhaconf')

    if (elem.value !== senha)
    {
        senhaconfP.innerText = "Senhas não batem"
        c3 = 1
    }
    else
    {
        senhaconfP.innerText = ""
        c3 = 0
    }
    btnConf()

}

function btnConf()
{
    if (c1 === 0 && c2 === 0 && c3 === 0)
    {
        btn = document.getElementById('Enviar')

        btn.style.display = 'flex'
    }
}


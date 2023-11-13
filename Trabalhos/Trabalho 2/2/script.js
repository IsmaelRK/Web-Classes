function fnc(elem)
{

    let gravidade = document.getElementById('grv')
    let res = document.getElementById('res')
    
    let gravidadeV = gravidade.value
    let elemV = elem.value

    let resultado = elemV / (10 * gravidadeV)




    let parg = document.createElement('p')
    parg.innerText = resultado
    parg.id = "par"

    let par = document.getElementById('par')


    try {
        res.removeChild(par)
    }
    catch (err)
    {
        console.log(err)
    }

    res.appendChild(parg)

}
function prc()
{
    let cv = document.getElementById('cv').value
    let ag = document.getElementById('ag').value
    let cm = document.getElementById('cm').value
    let nm = document.getElementById('nm').value

    let nota = document.getElementById('nota')



    let cvF = parseInt(cv)
    let agF = parseInt(ag)
    let cmF = parseInt(cm)

    let total = (cmF * 20) + (cvF * 12) + (agF * 4)



    let parg = document.createElement('p')
    parg.innerText ="Total: R$ " + total
    parg.id = 'par'
    let par = document.getElementById('par')



    let parg2 = document.createElement('p')
    parg2.innerText = "Cliente: " + nm
    parg2.id = 'par2'
    let par2 = document.getElementById('par')




    try {
        nota.removeChild(par)
    }
    catch (err)
    {
        console.log(err)
    }

    nota.appendChild(parg2)
    nota.appendChild(parg)


}
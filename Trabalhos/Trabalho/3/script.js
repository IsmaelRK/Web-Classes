let p1 = document.getElementById('p1')
let p2 = document.getElementById('p2')
let p3 = document.getElementById('p3')

let lvl = document.getElementById('cargo')

function cnf()
{

    let med = (p1.value * 3 + p2.value * 3 + p3.value * 3) / 10
    window.alert(med)

    if (lvl.value === 'g')
    {

        if (med > 7)
        {
            window.alert("Aprovado")
        }
        else
        {
            window.alert("Reprovado")
        }
    }


    if (lvl.value === 'd')
    {

        if (med > 8)
        {
            window.alert("Aprovado")
        }
        else
        {
            window.alert("Reprovado")
        }
    }

}
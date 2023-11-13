// num = document.getElementById('num')


function cnf(elem)
{
    let ans = document.getElementById('ans')
    let parg = document.createElement('p')
    parg.id = "par"
    let par = document.getElementById('par')
    let n = 0

    num = elem.value


    for(let i = 1; i < 9; i++)
    {

        if (num % i === 0 && num !== i)
        {
            n++
        }

    }

    if (n  === 2)
    {
        parg.innerText = "É primo"
    }
    else
    {
        parg.innerText = "Não é primo"
    }


    try {
        ans.removeChild(par)
    }
    catch (err)
    {
        console.log(err)
    }

    ans.appendChild(parg)


}
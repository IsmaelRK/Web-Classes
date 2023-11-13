
function clc()
{
    let n1 = document.getElementById('n1')
    let n2 = document.getElementById('n2')

    n1 = parseFloat(n1.value)
    n2 = parseFloat(n2.value)



    let t = document.querySelector('input[name="r"]:checked')

    if (t.value === "s")
    {
        let v = n1 + n2
        window.alert(v)
    }
    else if (t.value === "sb")
    {
        let v = n1 - n2
        window.alert(v)
    }
    else if (t.value === "m")
    {
        let v = n1 * n2
        window.alert(v)
    }
    else if (t.value === "d")
    {
        let v = n1 / n2
        window.alert(v)
    }

}
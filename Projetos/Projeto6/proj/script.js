var bta = document.getElementById('add')
var btd = document.getElementsByName('del')
var cmps = document.getElementById('id')
let frm = document.getElementsByName('form')



var vlr = "        <input type=\"text\" placeholder=\"Digite o Curso:\" name=\"curso\">\n" +
    "        <input type=\"text\" placeholder=\"Digite o Ano:\" name=\"ano\">\n" +
    "        <input type=\"number\" placeholder=\"Digite as Cotas Disponiveis:\" name=\"cotas\">\n" +
    "\n" +
    "        <button type=\"button\" id=\"add\" onclick=\"addf()\" name=\"add\">ADD</button>\n" +
    "        <button type=\"button\" name=\"del\" onclick=\"remf()\">DEL</button>"


function addf()
{
    var ncamp = document.createElement("div")
    ncamp.className = "tst"
    ncamp.innerHTML = vlr

    frm[0].appendChild(ncamp)

    // document.body.appendChild(ncamp)
}


function remf(obj)
{
    console.log(obj)
    obj.parentElement.remove();

}










/* bta.addEventListener('click', function(){


    var ncamp = document.createElement("div")
    ncamp.id = "tst"
    ncamp.innerHTML = "<h1>Hello Sun</h1>"
        
    document.body.appendChild(ncamp)
    
    
    

}) */


// btd.addEventListener('click', del)
// function del()
// {

//     const rm = btd.parentElement;
//     rm.remove()

// }

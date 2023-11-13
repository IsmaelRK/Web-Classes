document.addEventListener('DOMContentLoaded', function(){

    localStorage.setItem('theme', 'theme1')
    const thm = localStorage.getItem('theme')
    const btn = document.getElementById('btn');


    if (thm === 'theme1')
    {
        document.body.classList.add("theme1")
    }

    btn.addEventListener('click', changeTheme)
    function changeTheme()
    {
        if (localStorage.getItem('theme') === 'theme1')
        {
            document.body.classList.remove("theme1")
            document.body.classList.add("theme2")

            localStorage.setItem('theme', 'theme2')
        }
        else
        {
            document.body.classList.remove("theme2")
            document.body.classList.add("theme1")
            localStorage.setItem('theme', 'theme1')
        }
    }
    
    


})





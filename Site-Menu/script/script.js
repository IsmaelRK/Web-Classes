document.addEventListener('DOMContentLoaded', function(){



    const itens = document.getElementById('usr-Menu')
    const clk = document.getElementById('usr-Account')

    clk.addEventListener('click', showhide)

    function showhide()
    {
        if (itens.style.display == 'none')
        {
            itens.style.display = 'grid'
        }
        else
        {
            itens.style.display = 'none'
        }

        
    }



})



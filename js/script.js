$(()=>{

    let isMenuOpen = false

    $(".menu__ui-icon").click(()=>{

        if( isMenuOpen ) {
            $(".menu").removeClass("--opened")
            console.log("adicionou")
            isMenuOpen = false
        } else {
            $(".menu").addClass("--opened")
            isMenuOpen = true
        }
    })

    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
	
        let id = $(this).attr('href'),
    
        targetOffset = $(id).offset().top;
			
	    $('html, body').animate({ 
		    scrollTop: targetOffset - 100
	    }, 500);
    });

    $('input[name="chekin"]').mask('99/99/9999', {'placeholder': 'ENTRADA'})
    $('input[name="chekout"]').mask('99/99/9999', {'placeholder': 'SAÍDA'})
    $('input[name="action]').click(()=>{
        
    })
})
//Slider

$(document).ready(function(){
    
    $('.next').click(function(){
        const now_img = $('.show');
        const next_img = now_img.next();
        
        if(next_img.length){
            now_img.fadeOut('fast').removeClass('show');
            next_img.fadeIn('fast').addClass('show')
        }
    });
    
    
    $('.prev').click(function(){
        const now_img = $('.show');
        const prev_img = now_img.prev();
    if(prev_img.length){
            now_img.fadeOut('fast').removeClass('show')
            prev_img.fadeIn('fast').addClass('show')  
        }
    });
    
});

//Menu
var MenuItems = document.getElementById("MenuItems");
        
        MenuItems.style.maxHeight = "0px";
        
        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
                {
                    MenuItems.style.maxHeight = "600px";
                }
            else 
            {
                    MenuItems.style.maxHeight = "0px";   
            }
        }
let i;
document.addEventListener("DOMContentLoaded", () => {
    document.addEventListener("click", function(e){
        i=e.target.getAttribute("data-id");
        i=parseInt(i);
        document.getElementsByClassName("qty-up")[i].onclick=function(){
            if(document.getElementsByClassName("qty_input")[i].value<10){
                let input=document.getElementsByClassName("qty_input")[i].value++;
            }
        }
        document.getElementsByClassName("qty-down")[i].onclick=function(){
        
            if(document.getElementsByClassName("qty_input")[i].value>1){
                let input=document.getElementsByClassName("qty_input")[i].value--;
            }        
        }
    })
    
})



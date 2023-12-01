$(document).ready(function(){
    $(".add-cart").on("click", function(){
       
        if(JSON.parse(localStorage.getItem("logInAcc")))
        {
            const itemId = $(this).parent().parent().parent().attr("id");
            const itemName = $(this).parent().parent().find(".name-js").text();
            const tempPrice = $(this).parent().parent().find(".price").text();
            const itemPrice = parseFloat(tempPrice.replace('$', '').replace('.00', ''));
            const itemSrc = $(this).parent().parent().parent().find(".img-con img").attr("src");
            const qnty = $(this).parent().find(".qnty-input").val();

            $.ajax({
                url: "../backend/cartSolo.php",
                method: "post",
                data:{
                    itemId,
                    itemName,
                    itemPrice,
                    itemSrc,
                    qnty
                },
                success: function(response)
                {
                   if(response === "existed"){
                    Swal.fire({
                        title: "Item already in cart!",
                        text: "Item Quantity Added!",
                        icon: "info"
                      });
                   }else{
                    const count = document.querySelector(".count");
                    count.innerText = response;
                   }
                   
                },
                error: function()
                {
                    alert("Connection Error!");
                }
            })
        }else{
            Swal.fire({
                title: "You need to log in first!",
                text: "",
                icon: "warning"
              });
        }
    })
})
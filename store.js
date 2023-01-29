
if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready() {

    updateCart(); 
    var addToCartButtons = document.getElementsByClassName('shop-item-button')
    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i]
        button.addEventListener('click', addToCartClicked)
    }

}

function addToCartClicked(event) {
    var button = event.target
    var shopItem = button.parentElement.parentElement
    var title = shopItem.getElementsByClassName('shop-item-title')[0].innerText
    var price = shopItem.getElementsByClassName('shop-item-price')[0].innerText
    var pid = shopItem.getElementsByClassName('productid')[0].innerText
    var imageSrc = shopItem.getElementsByClassName('shop-item-image')[0].src

    let cart = localStorage.getItem("cart");

    if (cart == null) {
        let products = [];
        let product = { productimage: imageSrc, piid : pid , productName: title, productQuantity: 1, productPrice: price }
        products.push(product);
        localStorage.setItem("cart", JSON.stringify(products));
        // console.log("product is added first time")
        showToast('Product Added To Cart')
        
    }
    else {
        let pcart = JSON.parse(cart);
        let oldproduct = pcart.find((item) => item.productimage == imageSrc)
        if (oldproduct) {
            
            oldproduct.productQuantity = oldproduct.productQuantity + 1
            pcart.map((item) => {
                if (item.productimage == oldproduct.productimage) {
                    item.productQuantity=oldproduct.productQuantity;
                }
                
            })
            localStorage.setItem("cart", JSON.stringify(pcart));
            // console.log("product quantity ")
            showToast(' Product Quantity Increased '+oldproduct.productQuantity)
            
        } else {
            let product = { productimage: imageSrc, piid : pid , productName: title, productQuantity: 1, productPrice: price }
            pcart.push(product)
            localStorage.setItem("cart", JSON.stringify(pcart));
            
            // console.log("another product added")
            showToast('Product Added To Cart');
            

        }

    }
    updateCart();
}

function updateCart()
{
    let cartString=localStorage.getItem("cart");
    let cart = JSON.parse(cartString);
    if(cart==null || cart.length==0)
    {
        console.log("cart is empty !!")
        $(".cart-count").html("(0)");
        $(".cart-items").html("<h3>Cart Does Not Have Any Items..!</h3>")
        // $(".btn-purchase").addClass('disabled');
         $(".btn-purchase").attr('disabled' , true)

    }else
    {
        
        // there is something in cart to show
        console.log(cart)
        $(".cart-count").html(`${cart.length}`);
        
        
        let table = `
        <table class="table">
  <thead>
    <tr>
      <th scope="col" style='color:red;'>Item Selected</th>
      <th scope="col" style='color:red;'>Item Name</th>
      <th scope="col" style='color:red;'>Item Price</th>
      <th scope="col" style='color:red;'>Item Quantity</th>
      <th scope="col" style='color:red;'>Total Price</th>
      <th scope="col" style='color:red;'>Action </th>
    </tr>
  </thead>
     `;
        let totalPrice = 0;

        cart.map((item ) => {

            table +=`
            <tbody class="table-group-divider">

         <tr>
          <td><img src="${item.productimage}" class='img-fluid' style='width:200px;'></td>
            <td>${item.productName}</td>
            <td><svg
            xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
            class="bi bi-currency-rupee" viewBox="0 0 16 16">
            <path
                d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4v1.06Z" />
                </svg>${item.productPrice}</td>
            <td>${item.productQuantity}</td>
            <td><svg
            xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
            class="bi bi-currency-rupee" viewBox="0 0 16 16">
            <path
                d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4v1.06Z" />
        </svg>${item.productQuantity * item.productPrice}</td>
            <td><button onclick = 'deleteItemsFromCart(${item.piid})'  class='btn btn-light'><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
          </svg></button></td>
           </tbody>`
            
    
            totalPrice+=item.productPrice*item.productQuantity;    
        
        })
        

        $(".total-price").html(`${totalPrice}`);
        
            table = table  + `</table>`
            $(".btn-purchase").attr('disabled' , false)

           $(".cart-items").html(table)
 
    }
};

function deleteItemsFromCart(pid)
{
let cart = JSON.parse(localStorage.getItem('cart'));
let newhcart =cart.filter((item) => item.piid != pid); 
localStorage.setItem('cart' , JSON.stringify(newhcart));

updateCart();
showToast('Product Removed From Cart')

}

function showToast(content){
    $("#toast").addClass("display");
    $("#toast").html(content);
    setTimeout(() => {
$("#toast").removeClass("display");}, 2000);
}



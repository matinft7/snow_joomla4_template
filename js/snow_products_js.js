var orderC = document.getElementById("order-count");
var orderP = document.getElementById("cart-plus");
var orderM = document.getElementById("cart-minus");
orderP.onclick = function(){
    orderC.value++;
};
orderM.onclick = function(){
    if(orderC.value > 0){
        orderC.value--;
    }
};
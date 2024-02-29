var orderC = document.getElementById("order-count");
var orderP = document.getElementById("cart-plus");
var orderM = document.getElementById("cart-minus");
var orderPC = document.getElementsByClassName("pcount")[0];
var orderPCValue = orderPC.getElementsByClassName("field-value")[0];

orderP.onclick = function(){
    var count = parseInt(orderPCValue.innerHTML);
    if(orderPCValue.innerHTML == 'نامحدود'){
        count = 10000000;
    }
    if(orderC.value < count){
        orderC.value++;
    }
};
orderM.onclick = function(){
    if(orderC.value > 1){
        orderC.value--;
    }
};
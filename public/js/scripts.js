var basket;
$(document).ready(function(){

    basket = new Basket();
});

var Basket = function(){
    this.info = [];
    this._basket = document.getElementById('basket_items_container');
    this.addBtn = document.querySelectorAll('.add-to-basket');
    this.init();
};

Basket.prototype.init = function(){
    var btnLength = this.addBtn.length;
    for(var i = 0; i < btnLength; i++){
        this.createListener(this.addBtn[i], this.addToBasket);
    }
console.log(this.addBtn);
};


Basket.prototype.createListener = function(obj, f){
    var self = this;
    if(obj.addEventListener){
        obj.addEventListener('click', f, false);
    } else {
        obj.attachEvent('onclick', f);
    }
};


Basket.prototype.addToBasket = function(e){
    var purchase, item, count, price, btn;
    var self = this;
    btn = e.target;
    purchase = document.createElement('div');
    purchase.className = 'row';

    item = document.createElement('div');
    item.className = 'col-md-5 title';
    item.innerText = btn.getAttribute('data-title');

    price = document.createElement('div');
    price.className = 'col-md-3 price';
    price.innerText = btn.getAttribute('data-price');

    count = document.createElement('div');
    count.className = 'col-md-3 count';
    count.innerHTML = '<input type="number" range="1" class="item-count" value="1"/>';

    purchase.appendChild(item);
    purchase.appendChild(price);
    purchase.appendChild(count);
    console.log(this);
    basket._basket.appendChild(purchase);
}
const $cost = document.querySelectorAll('[class$="-cost"]');
const $slider = document.querySelectorAll('[class$="-ammount"]');
const $number = document.querySelectorAll('[class$="-number"]');
const $product = document.querySelectorAll('.item');
const $pairs = [];
const $basket = [];
const $inBasket = [];

const $cart = document.querySelector('#list');
const $total = document.querySelector('#total')

function notInArray(needle, haystack) {
    let $count = haystack.length;
    for(let i = 0; i<$count; i++){
        if(haystack[i]===needle){
            return false;
        }
    }
    return true;
}

function arrayCount(array) {
    let $count = array.length;
    for(let i = 0; i<$count; i++){
        return i;
    }
}

class cartItem {
    constructor($name, $quantity, $ammount){
        this.name = $name;
        this.quantity = $quantity;
        this.totalAmmount = $ammount;
        this.outPut = '' ;
    }
}

class product {
    constructor(number, slider, product, value) {

        this.number = number;
        this.slider = slider;
        this.value = value;
        this.product = product;
        this.cart = $basket.push(new cartItem(this.product.innerHTML, this.slider.value, this.number.innerText * this.value.innerText));
        this.index = $pairs.length;
        this.number.innerText = this.slider.value;

        this.slider.addEventListener('change', () => {
            this.number.innerText = this.slider.value;
            $basket[this.index].quantity = this.slider.value;
            $basket[this.index].totalAmmount = this.number.innerText * this.value.innerText;
            $basket[this.index].outPut = '<div><h3>'+ $basket[this.index].name +'</h3><p class="'+ this.product.innerHTML.replace(/\s/g,'') +'-Quantity">Quantity: '+ $basket[this.index].quantity +'</p><p>'+ $basket[this.index].totalAmmount.toFixed(2) +'</p></div>'
            
            let $currentQuantity = '';
            $basket[this.index].currentQuantity = $currentQuantity;

            if($basket[this.index].quantity > 0) {
                $currentQuantity = this.slider.value;
                $inBasket.push($basket[this.index].outPut);
            }
            if($basket[this.index].quantity < 1) {
                $inBasket.pop($basket[this.index].outPut);
            } 
            // if($basket[this.index].currentQuantity === $currentQuantity) {
            //     if
            // }
            $cart.innerHTML = $inBasket.toString();
        })
    }
}

$slider.forEach(() => {
    $pairs.push(new product($number[($pairs.length)], $slider[($pairs.length)], $product[($pairs.length)], $cost[($pairs.length)]))
});
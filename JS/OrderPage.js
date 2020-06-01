const $cost = document.querySelectorAll('[class$="-cost"]');
const $slider = document.querySelectorAll('[class$="-ammount"]');
const $number = document.querySelectorAll('[class$="-number"]');
const $product = document.querySelectorAll(".item");
const $Products = [];
const $inCart = [];

const $cart = document.querySelector("#list");
const $total = document.querySelector("#total");

function notInArray(needle, haystack) {
  let $count = haystack.length;
  for (let i = 0; i < $count; i++) {
    if (haystack[i] === needle) {
      return false;
    }
  }
  return true;
}

class product {
  constructor(number, slider, product, value) {
    this.quantity = number;
    this.currentOutput = "";
    this.slider = slider;
    this.price = value;
    this.name = product;
    this.total = "£" + this.price * this.quantity.innerText;
    this.quantity.innerText = this.slider.value;
    this.outPut =
      "<div><h3>" +
      this.name +
      '</h3><p class="' +
      this.name.replace(/\s/g, "") +
      '-Quantity">Quantity: ' +
      this.slider.value +
      "</p><p>" +
      this.total +
      "</p></div>";

    this.slider.addEventListener("change", () => {
      this.quantity.innerText = this.slider.value;
      this.total = "£" + (this.price * this.quantity.innerText).toFixed(2);
      this.cartIndex = $inCart.indexOf(this.outPut);
      this.outPut =
        "<div><h3>" +
        this.name +
        '</h3><p class="' +
        this.name.replace(/\s/g, "") +
        '-Quantity">Quantity: ' +
        this.slider.value +
        "</p><p>" +
        this.total +
        "</p></div>";

      if (
        this.slider.value > 0 &&
        notInArray(this.currentOutput, $inCart) &&
        this.currentOutput !== this.outPut
      ) {
        this.currentOutput = this.outPut;
        $inCart.push(this.outPut);
      } else {
        this.currentOutput = this.outPut;
        $inCart.splice(this.cartIndex, 1, this.outPut);
      }

      if (this.slider.value < 1) {
        $inCart.splice(this.cartIndex, 1);
        this.currentOutput = "";
      }

      $cart.innerHTML = $inCart.toString();
    });
  }
}

let count = $product.length;
for (i = 0; i < count; i++) {
  $Products.push(
    new product(
      $number[i],
      $slider[i],
      $product[i].innerHTML,
      $cost[i].innerHTML
    )
  );
}

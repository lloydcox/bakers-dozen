const $cost = document.querySelectorAll('[class$="-cost"]');
const $slider = document.querySelectorAll('[class$="-ammount"]');
const $number = document.querySelectorAll('[class$="-number"]');
const $product = document.querySelectorAll(".item");
const $Products = [];
const $inCart = [];
const $finalTotal = [];

const $cart = document.querySelector("#list");
const $total = document.querySelector("#total");

// Check if item is not in an array ---------------------------

function notInArray(needle, haystack) {
  let $count = haystack.length;
  for (let i = 0; i < $count; i++) {
    if (haystack[i] === needle) {
      return false;
    }
  }
  return true;
}

function sumArray(array) {
  let $count = array.length;
  let sum = 0;
  for (let i = 0; i < $count; i++) {
    sum += parseFloat(array[i]);
  }
  return sum.toFixed(2);
}

// Product class --------------------------------------------------

$total.innerText = "Cart Total:";

class product {
  constructor(number, slider, product, value) {
    this.quantity = number;
    this.currentOutput = "";
    this.slider = slider;
    this.price = value;
    this.name = product;
    this.total = (this.price * this.quantity.innerText).toFixed(2);
    this.currentTotal = "";
    this.quantity.innerText = this.slider.value;
    this.outPut =
      "<div><h3>" +
      this.name +
      '</h3><p class="' +
      this.name.replace(/\s/g, "") +
      '-Quantity">Quantity: ' +
      this.slider.value +
      '</p><p class="' +
      this.name.replace(/\s/g, "") +
      '-total">£' +
      this.total +
      "</p></div>";

    this.slider.addEventListener("change", () => {
      // Update Objects ----------------------------------------------

      let $BasketTotal = $finalTotal.reduce((a, b) => {
        return a + b;
      }, 0);

      this.quantity.innerText = this.slider.value;
      this.total = (this.price * this.quantity.innerText).toFixed(2);
      this.cartIndex = $inCart.indexOf(this.outPut);
      this.totalIndex = $finalTotal.indexOf(this.total);
      this.outPut =
        "<div><h3>" +
        this.name +
        '</h3><p class="' +
        this.name.replace(/\s/g, "") +
        '-Quantity">Quantity: ' +
        this.slider.value +
        '</p><p class="' +
        this.name.replace(/\s/g, "") +
        '-total">£' +
        this.total +
        "</p></div>";

      // CartItem ------------------------------------

      if (
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

      //   Total ----------------------------------------------

      if (
        this.slider.value > 0 &&
        notInArray(this.currentTotal, $finalTotal) &&
        this.currentTotal !== this.total
      ) {
        this.currentTotal = this.total;
        $finalTotal.push(this.total);
      } else {
        this.currentTotal = this.total;
        $finalTotal.splice(this.totalIndex, 1, this.total);
      }

      if (this.slider.value < 1) {
        $finalTotal.splice(this.totalIndex, 1);
        this.currentTotal = "";
      }

      //   Update output ----------------------------------------------

      $cart.innerHTML = $inCart.toString().replace(/\,/g, "");

      $total.innerText = "Cart Total: £" + sumArray($finalTotal);
    });
  }
}

// Create product Array ---------------------------

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

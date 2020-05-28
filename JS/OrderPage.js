const $slider = document.querySelectorAll('[class$="-ammount"]');
const $number = document.querySelectorAll('[class$="-number"]');
const $pairs = [];

class sliderPair {
    constructor(number, slider) {
        this.number = number;
        this.slider = slider;
        this.number.innerText = this.slider.value;
        this.slider.addEventListener('change', () => {this.number.innerText = this.slider.value;})
    }
}

$slider.forEach(() => {
    $pairs.push(new sliderPair($number[($pairs.length)], $slider[($pairs.length)]))
});
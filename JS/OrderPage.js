const $slider = document.querySelectorAll('.ammount');
const $number = document.querySelectorAll('.number');
const $pairs = [];

// $number.innerText = $slider.value;

// $slider.addEventListener('change', () => {$number.innerText = $slider.value;})

class sliderPair {

    constructor(number, slider) {
        this.number = number;
        this.slider = slider;
    }
    
}

$slider.forEach($pair => {
    $pairs = (new sliderPair($pair[$slider],$pair[$number]));
    console.log($pairs);
});


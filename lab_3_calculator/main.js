
const output = document.getElementById('output');
const buttons = document.querySelectorAll('button');
const sect = document.getElementById('section');
console.log(buttons);
buttons.forEach(button => {
    button.addEventListener('click', function () {
        if (button.textContent.includes('Очистить')) {
            output.value = '';
        } else if (button.textContent.includes('Вычислить')) {
            calculator()
        } else {
        output.value = (`${output.value}${this.textContent}`)
        }
    });
    });

console.log(buttons[0]);
output.addEventListener('keydown', function(event){
    if(event.code === 'Enter'){
        calculator();
    } else if (event.code === 'Digit1') {
        one.classList.add('btn_active');
    } else if (event.code === 'Digit2') {
        two.classList.add('btn_active');
    } else if (event.code === 'Digit3') {
        three.classList.add('btn_active');
    } else if (event.code === 'Digit4') {
        four.classList.add('btn_active');
    } else if (event.code === 'Digit5') {
        five.classList.add('btn_active');
    } else if (event.code === 'Digit6') {
        six.classList.add('btn_active');
    } else if (event.code === 'Digit7') {
        seven.classList.add('btn_active');
    } else if (event.code === 'Digit8') {
        eight.classList.add('btn_active');
    } else if (event.code === 'Digit9') {
        nine.classList.add('btn_active');
    } else if (event.code === 'Digit0') {
        zero.classList.add('btn_active');
    }
});
output.addEventListener('keyup', function(event){
    if (event.code === 'Digit1') {
        one.classList.remove('btn_active');
    } else if (event.code === 'Digit2') {
        two.classList.remove('btn_active');
    } else if (event.code === 'Digit3') {
        three.classList.remove('btn_active');
    } else if (event.code === 'Digit4') {
        four.classList.remove('btn_active');
    } else if (event.code === 'Digit5') {
        five.classList.remove('btn_active');
    } else if (event.code === 'Digit6') {
        six.classList.remove('btn_active');
    } else if (event.code === 'Digit7') {
        seven.classList.remove('btn_active');
    } else if (event.code === 'Digit8') {
        eight.classList.remove('btn_active');
    } else if (event.code === 'Digit9') {
        nine.classList.remove('btn_active');
    } else if (event.code === 'Digit0') {
        zero.classList.remove('btn_active');
    }
});
const allkeys = document.getElementsByClassName('btn_active');
output.addEventListener('keyup', function(event){
    if (event.code) {
        allkeys.classList.remove('btn_active');
    };
})



function calculator(){
    fetch('calculator.php', {
    method: 'POST',
    body: new URLSearchParams({ expression: output.value })
})
.then(response => response.text())
.then(result => output.value = result);
}



const output = document.getElementById('output');
const buttons = document.querySelectorAll('button');

buttons.forEach(button => {
    button.addEventListener('click', function () {
        if (button.textContent.includes('Очистить')) {
            output.value = '';
        } else if (button.textContent.includes('Вычислить')) {
            calculator()
        } else {
        output.value = (`${output.value} ${this.textContent}`)
        }
    });
}); 

function calculator(){
    fetch('calculator.php', {
    method: 'POST',
    body: new URLSearchParams({ expression: output.value })
})
.then(response => response.text())
.then(result => output.value = result);
}


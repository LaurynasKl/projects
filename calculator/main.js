const numbers = document.querySelectorAll('.number-btn');
const answer = document.getElementById('answer');

numbers.forEach(function(number) {
    number.addEventListener('click', function(){
        const num = number.value;

        
        if (answer.textContent === "0") {
            answer.textContent = num;
        } else {
            answer.textContent += num;
        }
    })
})
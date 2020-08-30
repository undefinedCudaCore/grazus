const button = document.querySelector('#button');

console.log(button);

button.addEventListener('click', () => {

    let answer;
    document.querySelectorAll('[name="briedis"]').forEach((radio)=> {
        if(radio.checked) {
            answer = radio.value;
        }
   });
   console.log(radio);
   

});

axios.post( 'http://localhost/grazus/briedis.js"', {
    answer: answer
}
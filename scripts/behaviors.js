// code for responsive nav menu
const hamButton = document.querySelector('#menu');
const navigation = document.querySelector('.navigation');

hamButton.addEventListener('click', () => {
	navigation.classList.toggle('open');
	hamButton.classList.toggle('open');
});

// display the current date to the page
const options = {
    year: "numeric"
};
const today = document.querySelector('#date').innerHTML = new Date().toLocaleDateString("en-US", options);


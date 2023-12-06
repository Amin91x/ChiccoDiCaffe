// validation.js

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('myForm'); // Replace with your actual form ID

    form.addEventListener('submit', function (event) {
        if (!validateForm()) {
            event.preventDefault();
        }
    });

    function validateForm() {
        let isValid = true;

        const nameInput = document.getElementById('name');
        const emailInput = document.getElementById('email');

        if (!validateInput(nameInput, 'text')) {
            isValid = false;
        }

        if (!validateInput(emailInput, 'email')) {
            isValid = false;
        }

        return isValid;
    }

    function validateInput(inputElement, type) {
        const value = inputElement.value.trim();
        const errorMessageElement = document.getElementById(inputElement.id + '-error');

        if (type === 'email' && !isValidEmail(value)) {
            errorMessageElement.textContent = 'Invalid email format.';
            return false;
        }

        if (value === '') {
            errorMessageElement.textContent = 'This field is mandatory.';
            return false;
        }

        errorMessageElement.textContent = '';
        return true;
    }

    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
});

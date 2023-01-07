'use strict';

let see = false;
const seePass = document.querySelector('#seePass');
const password = document.querySelector('[name="password"]');

seePass.addEventListener('click', () => {
    if (see) {
        seePass.textContent = '🙈';
        password.type = 'password';
        see = false;
    } else if (!see) {
        seePass.textContent = '🐵';
        password.type = 'text';
        see = true;
    }
});

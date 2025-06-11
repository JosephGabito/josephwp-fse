document.addEventListener("DOMContentLoaded", () => {
    'use strict';

    const contactButton = document.querySelector('.contact-button');

    contactButton.addEventListener('click', (e) => {
        e.preventDefault();
        const name = 'joseph';
        const domain = 'josephwp.com';
        window.location.href = `mailto:${name}@${domain}`;
    });

});

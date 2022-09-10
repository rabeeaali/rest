// Set inputs width based on text placeholder width
// let input = document.getElementById('search-input');
// if (input) {
//     input.setAttribute('size', input.getAttribute('placeholder').length);
// }

/* Modal: open */
Array.from(document.getElementsByClassName('--jb-modal')).forEach(el => {
    el.addEventListener('click', e => {
        const modalTarget = e.currentTarget.getAttribute('data-target')

        document.getElementById(modalTarget).classList.add('active')
        document.documentElement.classList.add('clipped')
    })
});

/* Modal: close */
Array.from(document.getElementsByClassName('--jb-modal-close')).forEach(el => {
    el.addEventListener('click', e => {
        e.currentTarget.closest('.modal').classList.remove('active')
        document.documentElement.classList.remove('is-clipped')
    })
})
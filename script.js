window.addEventListener('scroll', () => {
    let content = document.querySelector('.row');
    let contentPosition = content.getBoundingClientRect().top;
    let screenPostion = window.innerHeight/1.7;
    if (contentPosition < screenPostion) {
        content.classList.add('active');
    }
    else {
        content.classList.remove('active');
    }
})
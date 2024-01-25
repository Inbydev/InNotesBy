window.onload = function() {
    const loader = document.querySelector('.icon-load');
    loader.style.opacity = 0;

    setTimeout(function() {
        loader.style.display = 'none';
    }, 300);
};
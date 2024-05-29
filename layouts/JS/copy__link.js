function copyLink() {
    const tempInput = document.createElement('input');
    // Obtiene la URL actual
    tempInput.value = window.location.href;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand('copy');
    document.body.removeChild(tempInput);
    showNotification();
}

function showNotification() {
    const notification = document.getElementById('notification');
    notification.classList.add('show__notification');

    setTimeout(() => {
        notification.classList.remove('show__notification');
    }, 3000);
}
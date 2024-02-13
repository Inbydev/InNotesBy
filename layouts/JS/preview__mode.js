document.addEventListener("DOMContentLoaded", function () {
    let modoPreview = false;
    let paragraph = document.getElementById('vistaPreviaContainer');
    let btnPreview = document.getElementById("btnPreview");

    function alternarModo() {
        if (modoPreview) {
            volverAEscribir();
        } else {
            mostrarVistaPrevia();
        }

        modoPreview = !modoPreview;
    }

    function mostrarVistaPrevia() {
        const contenidoNota = document.getElementById("contenido").value;
        document.getElementById("contenido").style.display = "none";
        document.getElementById("popup").style.overflowY = "scroll";
        
        var convertedText = convertirTexto(contenidoNota);

        paragraph.innerHTML = convertedText;
        btnPreview.innerHTML = `<svg class="svg__edit" viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'><g id='SVGRepo_bgCarrier' stroke-width='0'></g><g id='SVGRepo_tracerCarrier' stroke-linecap='round' stroke-linejoin='round'></g><g id='SVGRepo_iconCarrier'> <path d='M20.1497 7.93997L8.27971 19.81C7.21971 20.88 4.04971 21.3699 3.27971 20.6599C2.50971 19.9499 3.06969 16.78 4.12969 15.71L15.9997 3.84C16.5478 3.31801 17.2783 3.03097 18.0351 3.04019C18.7919 3.04942 19.5151 3.35418 20.0503 3.88938C20.5855 4.42457 20.8903 5.14781 20.8995 5.90463C20.9088 6.66146 20.6217 7.39189 20.0997 7.93997H20.1497Z' stroke='#FFFFFF' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'></path> <path d='M21 21H12' stroke='#FFFFFF' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'></path> </g></svg> Volver a escribir`;
    }

    function volverAEscribir() {
        const contenido = document.getElementById("contenido");
        contenido.style.display = "block";
        document.getElementById("popup").style.overflowY = "hidden";

        if (paragraph) {
            paragraph.innerHTML = '';
        }

        btnPreview.innerHTML = `<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#FFFFFF" d="M28 21.155c-.02-.07-.05-.14-.09-.2.03.04.05.09.07.13.01.02.02.05.02.07zM27.82 20.835c-.02-.03-.05-.06-.08-.09.01.01.02.01.03.02.02.02.04.04.05.07z"></path> <path fill="#FFFFFF" d="M28 21.155c-.02-.07-.05-.14-.09-.2.03.04.05.09.07.13.01.02.02.05.02.07zM27.77 20.765c.02.02.04.04.05.07-.02-.03-.05-.06-.08-.09.01.01.02.01.03.02zM6.5 15H5c-.55 0-1 .45-1 1s.45 1 1 1h2.81c1.18 1.23 2.85 2 4.69 2 1.44 0 2.76-.46 3.832-1.25l.91.91c-.17.67 0 1.4.52 1.93l2.83 2.83c.78.77 2.05.77 2.83 0 .77-.78.77-2.05 0-2.83l-2.83-2.83c-.39-.39-.9-.59-1.42-.58-.17-.01-.34.02-.51.06l-.91-.91c.79-1.07 1.25-2.39 1.25-3.83 0-3.59-2.91-6.5-6.5-6.5-1.28 0-2.47.37-3.47 1H5c-.55 0-1 .45-1 1s.45 1 1 1h2.02c-.39.6-.68 1.28-.84 2H5c-.55 0-1 .45-1 1s.45 1 1 1h1.02c-.01-.17.22 1.38.48 2zm1.76-1h4.742c1.1 0 2-.9 2-2s-.9-2-2-2h-4.24c.81-1.21 2.19-2 3.74-2 2.48 0 4.5 2.02 4.5 4.502s-2.02 4.5-4.5 4.5c-1.95 0-3.62-1.25-4.24-3z"></path> <path fill="#FFFFFF" d="M18 3v1c-.01.54-.46.98-1 .98s-.99-.44-1-.98V3c0-.54-.46-1-1-1H3c-.54 0-1 .46-1 1v18c0 .54.46 1 1 1h11c.55 0 1 .45 1 1s-.45 1-1 1H3c-1.65 0-3-1.35-3-3V3c0-1.65 1.35-3 3-3h12c1.65 0 3 1.35 3 3z"></path> </g></svg> Vista previa`;
    }

    function convertirTexto(contenidoNota) {

        let htmlTexto = contenidoNota.replace(/</g, '&lt;').replace(/>/g, '&gt;');

        htmlTexto = htmlTexto.replace(/\n/g, ' <br>\n');   
        htmlTexto = htmlTexto.replace(/###### (.*?)(\n|$)/g, '<h6>$1</h6>');
        htmlTexto = htmlTexto.replace(/##### (.*?)(\n|$)/g, '<h5>$1</h5>');
        htmlTexto = htmlTexto.replace(/#### (.*?)(\n|$)/g, '<h4>$1</h4>');
        htmlTexto = htmlTexto.replace(/### (.*?)(\n|$)/g, '<h3>$1</h3>');
        htmlTexto = htmlTexto.replace(/## (.*?)(\n|$)/g, '<h2>$1</h2>');
        htmlTexto = htmlTexto.replace(/```([\s\S]+?)```/g, function(match, p1) {
            p1 = p1.replace(/\/\*([^*]|[\r\n]|(\*+([^*/]|[\r\n])))*\*+\//g, '<span class="code__comment">$&</span>');
            return '<pre><code>' + p1 + '</code></pre>';
        });
        htmlTexto = htmlTexto.replace(/\*\*\*(.+?)\*\*\*/g, '<i><b>$1</b></i>');
        htmlTexto = htmlTexto.replace(/\*\*(.+?)\*\*/g, '<b>$1</b>');
        htmlTexto = htmlTexto.replace(/\*(.+?)\*/g, '<i>$1</i>');
        htmlTexto = htmlTexto.replace(/~~(.+?)~~/g, '<s>$1</s>');
        htmlTexto = htmlTexto.replace(/\[(.*?)\]\((.*?)\)/g, '<a href="$2" target="_blank">$1</a>');

        return htmlTexto;
    }

    btnPreview.addEventListener("click", () => alternarModo());
});
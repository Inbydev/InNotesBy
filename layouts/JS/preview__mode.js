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
        
        var convertedText = convertirTexto(contenidoNota);

        paragraph.innerHTML = convertedText;
        btnPreview.textContent = "Volver a escribir";
    }

    function volverAEscribir() {
        const contenido = document.getElementById("contenido");
        contenido.style.display = "block";

        if (paragraph) {
            paragraph.innerHTML = '';
        }

        btnPreview.textContent = "Vista previa";
    }

    function convertirTexto(contenidoNota) {

        let htmlTexto = contenidoNota.replace(/\n/g, ' <br>\n');
    
        htmlTexto = htmlTexto.replace(/###### (.*?)(\n|$)/g, '<h6>$1</h6>');
        htmlTexto = htmlTexto.replace(/##### (.*?)(\n|$)/g, '<h5>$1</h5>');
        htmlTexto = htmlTexto.replace(/#### (.*?)(\n|$)/g, '<h4>$1</h4>');
        htmlTexto = htmlTexto.replace(/### (.*?)(\n|$)/g, '<h3>$1</h3>');
        htmlTexto = htmlTexto.replace(/## (.*?)(\n|$)/g, '<h2>$1</h2>');
    
        htmlTexto = htmlTexto.replace(/```(.+?)```/g, '<pre><code>$1</code></pre>');
    
        htmlTexto = htmlTexto.replace(/\*\*\*(.+?)\*\*\*/g, '<i><b>$1</b></i>');
    
        htmlTexto = htmlTexto.replace(/\*\*(.+?)\*\*/g, '<b>$1</b>');
    
        htmlTexto = htmlTexto.replace(/\*(.+?)\*/g, '<i>$1</i>');
    
        htmlTexto = htmlTexto.replace(/~~(.+?)~~/g, '<strike>$1</strike>');

        return htmlTexto;
    }

    btnPreview.addEventListener("click", () => alternarModo());
});
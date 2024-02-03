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
        return contenidoNota
            .replace(/\n/g, '<br>')
            .replace(/_([^_]+)_/g, '<p><i>$1</i></p>')
            .replace(/\*\*([^*]+)\*\*/g, '<p><b>$1</b></p>')
            .replace(/--([^--]+)--/g, '<p><strike>$1</strike></p>')
            .replace(/```([^`]+)```/g, '<pre><code>$1</code></pre>')
            .replace(/###([^#]+)###/g, '<h4>$1</h4>')
            .replace(/##([^#]+)##/g, '<h3>$1</h3>')
            .replace(/#([^#\n]+)#/g, '<h2>$1</h2>')
            .replace(/([^_<>*#\n]+)(?:(?:(?!\n$)\n)|(?:(?![^<]*>|[^<>]*<\/)(?![^`]*`[^`]*`)))/g, '<p>$1</p>');
    }

    btnPreview.addEventListener("click", () => alternarModo());
});
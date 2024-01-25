const textarea = document.getElementById("contenido");
const btnItalic = document.getElementById("btnItalic");
const btnBold = document.getElementById("btnBold");
const btnStrikethrough = document.getElementById("btnStrikethrough");
const btnBlockcode = document.getElementById("btnBlockcode");
const btnBigHeader = document.getElementById("btnBigHeader");
const btnNormalHeader = document.getElementById("btnNormalHeader");
const btnSmallHeader = document.getElementById("btnSmallHeader");

function getSelectedHeader() {
  const start = textarea.selectionStart;
  const end = textarea.selectionEnd;
  const text = textarea.value;

  const headers = ["#", "##", "###"];

  for (const header of headers) {
    if (text.startsWith(header + " ", start) && text.endsWith(" " + header, end)) {
      return header;
    }
  }

  return null;
}

let isHeaderFormat = false;

function removeHeaderFormat(header) {
  const start = textarea.selectionStart;
  const end = textarea.selectionEnd;
  const text = textarea.value;

  const formattedHeader = header + " ";
  const headerStart = text.lastIndexOf(formattedHeader, start);
  const headerEnd = text.indexOf(" " + header, end);

  if (headerStart !== -1 && headerEnd !== -1 && headerStart < headerEnd) {
    textarea.value =
      text.substring(0, headerStart) +
      text.substring(headerStart + formattedHeader.length, headerEnd) +
      text.substring(headerEnd + header.length + 1);
    textarea.setSelectionRange(headerStart, headerStart + end - start - (header.length + 1));
  }
}

function removeCurrentHeaderFormat() {
  const selectedHeader = getSelectedHeader();
  if (selectedHeader) {
    const headerType = getHeaderType(selectedHeader);
    const markerLength = headerType === "big" ? 1 : headerType === "normal" ? 2 : 3;
    const start = textarea.selectionStart - markerLength;
    const end = textarea.selectionEnd + markerLength;
    textarea.setSelectionRange(start, end);
    removeHeaderFormat(selectedHeader);
  }
}

function insertText(marker) {
  const start = textarea.selectionStart;
  const end = textarea.selectionEnd;
  const selectedText = textarea.value.substring(start, end);

  const selectedHeader = getSelectedHeader();

  if (isHeaderFormat) {
    // Si ya hay un formato de encabezado, eliminarlo
    removeHeaderFormat(selectedHeader);
    isHeaderFormat = false;
  } else if (selectedHeader && selectedHeader === marker && selectedText.trim() === "") {
    // Eliminar el formato si ya existe y no hay texto seleccionado
    removeHeaderFormat(selectedHeader);
    isHeaderFormat = false;
  } else {
    // Eliminar el formato del encabezado actual, si hay uno
    removeCurrentHeaderFormat();
    // Agregar el formato
    textarea.value = textarea.value.substring(0, start) + `${marker}${selectedText}${marker}` + textarea.value.substring(end);
    const newEnd = end + marker.length * 2;
    textarea.setSelectionRange(start + marker.length, newEnd);
    isHeaderFormat = marker.startsWith("#"); // Actualizar el estado del formato de encabezado
  }

  // Recargar el estado de los botones
  updateButtonStates();
  // Enfocar el textarea para que el cursor siga seleccionando el texto
  textarea.focus();
}

function isOnlySpaces(text) {
  return text.trim().length === 0;
}

function updateButtonStates() {
  const selectedText = textarea.value.substring(textarea.selectionStart, textarea.selectionEnd);
  const isAllSpaces = isOnlySpaces(selectedText);

  const buttons = [btnItalic, btnBold, btnStrikethrough, btnBlockcode, btnBigHeader, btnNormalHeader, btnSmallHeader];

  buttons.forEach((btn) => {
    btn.disabled = selectedText.length === 0 || isAllSpaces;
  });
}

btnItalic.addEventListener("click", () => {
  insertText("_");
});

btnBold.addEventListener("click", () => {
  insertText("**");
});

btnStrikethrough.addEventListener("click", () => {
  insertText("--");
});

btnBlockcode.addEventListener("click", () => {
  insertText("```");
});

btnBigHeader.addEventListener("click", () => {
  insertText("#");
});

btnNormalHeader.addEventListener("click", () => {
  insertText("##");
});

btnSmallHeader.addEventListener("click", () => {
  insertText("###");
});

textarea.addEventListener("select", () => {
  updateButtonStates();
});

textarea.addEventListener("input", () => {
  updateButtonStates();
});



const inputs = document.querySelectorAll('.form__group__data input');
const mensajeErrores = document.querySelectorAll('.form__input__error');
const BtnCreatePage = document.getElementById('CreatePage');


function contieneCaracteresEspeciales(texto) {
    return texto.includes('<') || texto.includes('>');
}

inputs.forEach((campo, index) => {
    campo.addEventListener('input', function() {
        const valorCampo = campo.value;
        
        if (contieneCaracteresEspeciales(valorCampo)) {
            mensajeErrores[index].style.opacity = '1';
            BtnCreatePage.disabled = true;
        } else {
            mensajeErrores[index].style.opacity = '0';
            BtnCreatePage.disabled = [...inputs].some(input => contieneCaracteresEspeciales(input.value));
        }
    });
});

const boton__select = document.querySelectorAll(".text__edit__button");

boton__select.forEach((boton, index) => {
    boton.addEventListener("click", () => {
        boton__select.forEach((b, i) => {
            const isActive = i === index;
            b.classList.toggle("active", isActive);
            if (isActive) {
                localStorage.setItem("activeButtonIndex", index);
            }
        });
    });
  
    const activeButtonIndex = localStorage.getItem("activeButtonIndex");
    if (activeButtonIndex !== null && parseInt(activeButtonIndex) === index) {
      boton.classList.add("active");
    }
});

const background__boton__select = document.querySelectorAll(".form__group__background button");

background__boton__select.forEach((background__boton, index) => {
    background__boton.addEventListener("click", () => {
        background__boton__select.forEach((j, i) => {
            const isActive = i === index;
            j.classList.toggle("active", isActive);
        });
    });
});
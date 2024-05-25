var text = document.getElementById("contenido");

text.addEventListener("input", function () {
    this.style.height = "auto";
    this.style.height = this.scrollHeight > 38 * 16 ? "38rem" : this.scrollHeight + "px";
    this.style.overflowY = this.scrollHeight > 38 * 16 ? "auto" : "hidden";
});

const spanElement = document.querySelector('.size-span');

function updateChange(event) {
    const value = event.target.value;
    spanElement.innerText = value;
}

function bodyAddHidden() {
    document.body.classList.add("hidden");
}

function bodyRemoveHidden() {
    document.body.classList.remove("hidden");
}

document.addEventListener("keydown", function (event) {
    if (event.key === "Escape") {
        bodyRemoveHidden();
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const textarea = document.getElementById("contenido");
    const buttons = document.querySelectorAll(".markdown__button");

    textarea.addEventListener("mouseup", () => {
        buttons.forEach((button) => {
            const id = button.id;
            const selection = textarea.value.substring(textarea.selectionStart, textarea.selectionEnd);
            let active = false;

            switch (id) {
                case "btnItalic":
                    active = containsItalic(selection);
                    break;
                case "btnBold":
                    active = containsBold(selection);
                    break;
                case "btnStrikethrough":
                    active = containsStrikethrough(selection);
                    break;
                case "btnBlockcode":
                    active = isBlockcode(selection);
                    break;
                case "btnLink":
                    active = isLink(selection);
                    break;
                case "headerH2":
                    active = isHeader(selection, "## ");
                    break;
                case "headerH3":
                    active = isHeader(selection, "### ");
                    break;
                case "headerH4":
                    active = isHeader(selection, "#### ");
                    break;
                case "headerH5":
                    active = isHeader(selection, "##### ");
                    break;
                case "headerH6":
                    active = isHeader(selection, "###### ");
                    break;
                default:
                    break;
            }

            button.classList.toggle("active", active);
        });
    });

    function containsItalic(text) {
        return text.includes("*");
    }

    function containsBold(text) {
        return text.includes("**");
    }

    function containsStrikethrough(text) {
        return text.includes("~~");
    }

    function isBlockcode(text) {
        return text.startsWith("```") && text.endsWith("```") && text.indexOf("```", 3) === text.length - 3;
    }

    function isLink(text) {
        return text.startsWith("[") && text.endsWith(")");
    }

    function isHeader(text, headerPrefix) {
        return text.startsWith(headerPrefix) && !text.includes("#", headerPrefix.length);
    }

    buttons.forEach((button) => {
        button.addEventListener("click", () => {
            const selection = textarea.value.substring(textarea.selectionStart, textarea.selectionEnd);
            const id = button.id;

            let newText = "";

            switch (id) {
                case "btnItalic":
                    newText = toggleItalic(selection);
                    break;
                case "btnBold":
                    newText = toggleBold(selection);
                    break;
                case "btnStrikethrough":
                    newText = toggleStrikethrough(selection);
                    break;
                case "btnBlockcode":
                    newText = toggleBlockcode(selection);
                    break;
                case "btnLink":
                    newText = toggleLink(selection);
                    break;
                case "headerH2":
                    newText = toggleHeader(selection, "## ");
                    break;
                case "headerH3":
                    newText = toggleHeader(selection, "### ");
                    break;
                case "headerH4":
                    newText = toggleHeader(selection, "#### ");
                    break;
                case "headerH5":
                    newText = toggleHeader(selection, "##### ");
                    break;
                case "headerH6":
                    newText = toggleHeader(selection, "###### ");
                    break;
                default:
                    break;
            }

            insertMarkdown(newText);
        });
    });

    function insertMarkdown(text) {
        const startPos = textarea.selectionStart;
        const endPos = textarea.selectionEnd;
        const scrollTop = textarea.scrollTop;
        const prefix = textarea.value.substring(0, startPos);
        const suffix = textarea.value.substring(endPos);
        textarea.value = prefix + text + suffix;
        textarea.focus();
        textarea.selectionStart = startPos + text.length;
        textarea.selectionEnd = startPos + text.length;
        textarea.scrollTop = scrollTop;
    }

    function toggleItalic(text) {
        if (text.startsWith("*") && text.endsWith("*")) {
            return text.slice(1, -1);
        } else {
            return "*" + text + "*";
        }
    }

    function toggleBold(text) {
        if (text.startsWith("**") && text.endsWith("**")) {
            return text.slice(2, -2);
        } else {
            return "**" + text + "**";
        }
    }

    function toggleStrikethrough(text) {
        if (text.startsWith("~~") && text.endsWith("~~")) {
            return text.slice(2, -2);
        } else {
            return "~~" + text + "~~";
        }
    }

    function toggleBlockcode(text) {
        if (isBlockcode(text)) {
            return text.slice(3, -3);
        } else {
            return "```" + text + "```";
        }
    }

    function toggleLink(text) {
        if (isLink(text)) {
            const tituloStart = text.indexOf("[");
            const tituloEnd = text.indexOf("]");
            const enlaceStart = text.indexOf("(");
            const enlaceEnd = text.indexOf(")");
            
            if (tituloStart !== -1 && tituloEnd !== -1 && enlaceStart !== -1 && enlaceEnd !== -1) {
                return text.substring(enlaceStart + 1, enlaceEnd);
            } else {
                return text;
            }
        } else if (text.startsWith("https://")) {
            return "[Titulo](" + text + ")";
        } else {
            return "[Titulo](link)";
        }
    }

    function toggleHeader(text, headerPrefix) {
        if (isHeader(text, headerPrefix)) {
            return text.substring(headerPrefix.length);
        } else {
            let newText = text.replace(/^#{1,6}\s*/, "");
            return headerPrefix + newText.trim();
        }
    }
});
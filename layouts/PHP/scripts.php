    <footer>
        <p>© 2022 - 2023 Inby</p>
    </footer>
    
    <script src="../layouts/JS/loader.js"></script>
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
	<script>
		document.addEventListener('DOMContentLoaded', function () {
    		const paragraph = document.getElementById('markdownParagraph');
    		const inputText = paragraph.innerHTML;
    		const convertedText = inputText
    			.replace(/_([^_]+)_/g, '<i>$1</i>')
    			.replace(/\*\*([^*]+)\*\*/g, '<b>$1</b>')
    			.replace(/--([^--]+)--/g, '<strike>$1</strike>')
    			.replace(/```([^`]+)```/g, '<code>$1</code>')
    			.replace(/###([^#]+)###/g, '<h4>$1</h4>')
    			.replace(/##([^#]+)##/g, '<h3>$1</h3>')
    			.replace(/#([^#\n]+)#/g, '<h2>$1</h2>');
    
    		paragraph.innerHTML = convertedText;
		});
	</script>
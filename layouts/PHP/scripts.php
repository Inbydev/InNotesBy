	<footer>
		<p>
			<a href="https://github.com/Inbydev/Inby.dev">InNotesBy</a> © 2023 - 2024
			by
			<a href="https://github.com/Inbydev">Inbydev</a>
			is licensed under
			<a href="https://creativecommons.org/licenses/by/4.0/?ref=chooser-v1" target="_blank" style="display:inline-block;">CC BY 4.0
			</a>
		</p>
	</footer>
    
    <script src="/layouts/JS/loader.js"></script>
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
	<script>
		document.addEventListener('DOMContentLoaded', function () {
			const paragraph = document.querySelector('.markdown__container');

				let inputText = paragraph.innerHTML;

				inputText.replace(/</g, '&lt;').replace(/>/g, '&gt;');
				
				inputText = inputText.replace(/\n/g, ' <br>\n');   
				inputText = inputText.replace(/###### (.*?)(\n|$)/g, '<h6>$1</h6>');
				inputText = inputText.replace(/##### (.*?)(\n|$)/g, '<h5>$1</h5>');
				inputText = inputText.replace(/#### (.*?)(\n|$)/g, '<h4>$1</h4>');
				inputText = inputText.replace(/### (.*?)(\n|$)/g, '<h3>$1</h3>');
				inputText = inputText.replace(/## (.*?)(\n|$)/g, '<h2>$1</h2>');
				inputText = inputText.replace(/```([\s\S]+?)```/g, function(match, p1) {
					p1 = p1.replace(/\/\*([^*]|[\r\n]|(\*+([^*/]|[\r\n])))*\*+\//g, '<span class="code__comment">$&</span>');
					return '<pre><code>' + p1 + '</code></pre>';
				});
				inputText = inputText.replace(/\*\*\*(.+?)\*\*\*/g, '<i><b>$1</b></i>');
				inputText = inputText.replace(/\*\*(.+?)\*\*/g, '<b>$1</b>');
				inputText = inputText.replace(/\*(.+?)\*/g, '<i>$1</i>');
				inputText = inputText.replace(/~~(.+?)~~/g, '<s>$1</s>');
				inputText = inputText.replace(/\[(.*?)\]\((.*?)\)/g, '<a href="$2" target="_blank">$1</a>');

				paragraph.innerHTML = inputText;
		});
	</script>

	<footer>
		<p>
			<a href="https://github.com/Inbydev/Inby.dev">InNotesBy</a> © 2023 - 2024
			by
			<a href="https://github.com/Inbydev">Inbydev</a>
			is licensed under
			<a href="http://creativecommons.org/licenses/by-sa/4.0/?ref=chooser-v1" target="_blank" style="display:inline-block;">CC BY-SA 4.0
			</a>
		</p>
	</footer>
    
    <script src="/layouts/JS/loader.js"></script>
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
	<script>
		document.addEventListener('DOMContentLoaded', function () {
			const paragraphs = document.querySelectorAll('.markdown__container');

			paragraphs.forEach(paragraph => {
				const inputText = paragraph.innerHTML;

				let htmlTexto = inputText.replace(/</g, '&lt;').replace(/>/g, '&gt;');

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

				htmlTexto = htmlTexto.replace(/~~(.+?)~~/g, '<strike>$1</strike>');

				paragraph.innerHTML = htmlTexto;
			});
		});
	</script>
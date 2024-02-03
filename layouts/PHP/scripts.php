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
				const convertedText = inputText
					.replace(/_([^_]+)_/g, '<p><i>$1</i></p>')
					.replace(/\*\*([^*]+)\*\*/g, '<p><b>$1</b></p>')
					.replace(/--([^--]+)--/g, '<p><strike>$1</strike></p>')
					.replace(/```([^`]+)```/g, '<pre><code>$1</code></pre>')
					.replace(/###([^#]+)###/g, '<h4>$1</h4>')
					.replace(/##([^#]+)##/g, '<h3>$1</h3>')
					.replace(/#([^#\n]+)#/g, '<h2>$1</h2>')
					.replace(/([^_<>*#\n]+)(?:(?:(?!\n$)\n)|(?:(?![^<]*>|[^<>]*<\/)(?![^`]*`[^`]*`)))/g, '<p>$1</p>');

				paragraph.innerHTML = convertedText;
			});
		});
	</script>
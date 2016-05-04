<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<title>reveal.js</title>

		<link rel="stylesheet" href="css/reveal.css">
		<link rel="stylesheet" href="css/theme/black.css">

		<!-- Theme used for syntax highlighting of code -->
		<link rel="stylesheet" href="lib/css/zenburn.css">

		<!-- Printing and PDF exports -->
		<script>
			var link = document.createElement( 'link' );
			link.rel = 'stylesheet';
			link.type = 'text/css';
			link.href = window.location.search.match( /print-pdf/gi ) ? 'css/print/pdf.css' : 'css/print/paper.css';
			document.getElementsByTagName( 'head' )[0].appendChild( link );
		</script>
		<style type="text/css">
			/*Primera mayuscula en las secciones*/
			section{text-transform: capitalize;}
		</style>
	</head>
	<body>
		<div class="reveal">
			<div class="slides">
			<?php
			$directories = glob('../apps/*' , GLOB_ONLYDIR);
			foreach ($directories as $key => $value) {
				# code...
				#limpiamos arreglo
				$name=explode("/", $value);
				echo "<section>".$name[2]."<br>";

				#buscamos carpetas internas por cada directorio
				$internas = glob($value."/*" , GLOB_ONLYDIR);
				echo "<ul>";
				for ($i=0; $i < sizeof($internas); $i++) { 
					#limpiamos arreglo
					$url_name=explode("/", $internas[$i]);
					echo "<li><a href='".$internas[$i]."'>".$url_name[3]."</a></li>";
				}
				echo "</ul></section>";
			}
			?>
			</div>
		</div>

		<script src="lib/js/head.min.js"></script>
		<script src="js/reveal.js"></script>

		<script>
			// More info https://github.com/hakimel/reveal.js#configuration
			Reveal.initialize({
				history: true,

				// More info https://github.com/hakimel/reveal.js#dependencies
				dependencies: [
					{ src: 'plugin/markdown/marked.js' },
					{ src: 'plugin/markdown/markdown.js' },
					{ src: 'plugin/notes/notes.js', async: true },
					{ src: 'plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } }
				]
			});
		</script>
	</body>
</html>

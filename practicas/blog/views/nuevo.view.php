<?php require 'header.php'; ?>

<div class="contenedor">	
	<div class="post">
		<article>
			<h2 class="titulo">Nuevo Artículo</h2>
			<!--sirve para trabajar con archivos, no olvides escribirlo bien, 
			porque jode todo-->
			<form class="formulario" enctype="multipart/form-data" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
				<input type="text" name="titulo" placeholder="Titulo del artículo">
				<input type="text" name="extracto" placeholder="Extracto del Artículo">
				<textarea name="texto" placeholder="Texto del artículo"></textarea>
				<input type="file" name="thumb">

				<input type="submit" value="Crear Articulo">
			</form>
		</article>
	</div>		
</div>
<?php require 'footer.php'; ?>
<?php require 'header.php'; ?>

<div class="contenedor">	
	<div class="post">
		<article>
			<h2 class="titulo">Editar Artículo</h2>
			<!--sirve para trabajar con archivos, no olvides escribirlo bien, 
			porque jode todo-->
			<form class="formulario" enctype="multipart/form-data" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
				<!--hidden sive para saber cual va a ser el id del artículo que estamos trabajando-->
				<input type="hidden" value="<?php echo $post['id'];?>" name="id">
				<input type="text" name="titulo" value="<?php echo $post['titulo'];?>">
				<input type="text" name="extracto" value="<?php echo $post['extracto'];?>">
				<textarea name="texto"> <?php echo $post['texto'];?> </textarea>
				<input type="file" name="thumb">
				<!--Se va a encargar de guardar el valor de la thumb que tengamos en la BD-->
				<!--El input hidden no se muestra, solo guarda datos temporalmente de esta forma-->
				<input type="hidden" name="thumb-guardada" value="<?php echo $post['thumb']; ?>">
				
				<input type="submit" value="Modificar Articulo">
			</form>
		</article>
	</div>		
</div>
<?php require 'footer.php'; ?>
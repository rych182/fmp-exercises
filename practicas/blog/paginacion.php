<?php 
//la función recibe los post por página y la conexión
$numero_paginas = numero_paginas($blog_config['post_por_pagina'], $conexion); ?>
<section class="paginacion">
	<ul>
		<?php if (pagina_actual() === 1): ?>
		<!--Flechitas hacia la izquierda-->
			<li class="disabled">&laquo;</li>	
		<?php else: ?>
			<li><a href="index.php?p=<?php echo pagina_actual() - 1 ?>">&laquo;</a></li>
		<?php endif; ?>

		<?php for ($i=1; $i <= $numero_paginas ; $i++): ?> 
			<?php if (pagina_actual() === $i): ?>
				<!--Pagina_actual === $i significa que nos encontramos en esa página-->
				<li class="active">
					<?php echo $i; ?>
				</li>
			<?php else: ?>
				<li><a href="index.php?p=<?php echo $i;?>"> <?php echo $i; ?></a></li>	
			<?php endif; ?>
				
		<?php endfor; ?>
		<!--Para el boton con las flechitas de la derecha-->
		<?php if (pagina_actual() == $numero_paginas): ?>
			<li class="disabled">&raquo;</li>	
		<?php else: ?>
			<li><a href="index.php?p=<?php echo pagina_actual() + 1;?>">&raquo;</a></li>
		<?php endif; ?>

		<!--
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		
-->
	</ul>
</section>
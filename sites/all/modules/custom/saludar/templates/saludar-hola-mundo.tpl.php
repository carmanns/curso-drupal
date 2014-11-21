<div class='saludar'>
	<div class="saludo"><h1><?php print render($saludo); ?></h1></div>
	<?php print render($fecha); ?>
	<div class="username">
		<b>
			<?php
			if (isset($usuario->field_nombre)) {
				print "Hasta pronto, " . render($usuario->field_nombre['und'][0]['value']) . "!";
			}
			?>
		</b>
	</div>
</div>



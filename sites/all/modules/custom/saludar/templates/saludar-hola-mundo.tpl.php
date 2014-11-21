<div class='saludar'>
	<div class="saludo"><em><?php print render($saludo); ?></em></div>
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



<div class='saludar'>
	<div class="saludo"><h1><?php print render($saludo); ?></h1></div>
	<?php print render($fecha); ?>
	<div class="username">
		<b>
			<?php
			$saludar = "¿qué tal";
			if (!empty($usuario->field_nombre['und'][0]['value'])) {
				$saludar.= ", " . render($usuario->field_nombre['und'][0]['value']);
			}
			$saludar .= "?";
			print $saludar;
			?>
		</b>
	</div>
</div>



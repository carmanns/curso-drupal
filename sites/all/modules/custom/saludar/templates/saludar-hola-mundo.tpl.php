<div class='saludar'>
	<div class="saludo"><em><?php print render($saludo); ?></em></div>
	<?php print render($fecha); ?>
	<div class="username">
		<b>
			<?php
			if (isset($user->mail)) {
				print "Hasta pronto, " . render($user->mail) . "!";
			}
			?>
		</b>
	</div>
</div>



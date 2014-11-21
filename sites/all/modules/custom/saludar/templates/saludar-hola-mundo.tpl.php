<div class='saludar'>
	<div class="saludo"><h1><?php print render($saludo); ?></h1></div>
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



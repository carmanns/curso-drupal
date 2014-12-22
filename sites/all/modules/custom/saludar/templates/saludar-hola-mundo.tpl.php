<?php
drupal_add_css(drupal_get_path('module', 'saludar') . '/css/saludar.css', array('group' => CSS_DEFAULT, 'every_page' => FALSE));
?>
<div class='saludar'>
	<h1 class="rtecenter">
		<div class="saludo">
			<span class="cajaCentrada">
				<span class="interiorCajaCentrada">
					<span class="textoCajaCentrada"><?php print render($saludo); ?></span>
				</span>
			</span>
		</div>
		<div class="fechaSaludo">
			<span class="cajaCentrada">
				<span class="interiorCajaCentrada">
					<span class="textoCajaCentrada"><?php print render($fecha); ?></span>
				</span>
			</span>
		</div>
		<div class="username">
			<span class="cajaCentrada">
				<span class="interiorCajaCentrada">
					<span class="textoCajaCentrada">
						<?php
						if (!empty($usuario->picture->uri)) {
							print $foto;
						}
						?>
					</span>
				</span>
			</span>
		</div>
	</h1>
</div>



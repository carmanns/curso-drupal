<?php
drupal_add_css(drupal_get_path('module', 'saludar') . '/css/saludar.css', array('group' => CSS_DEFAULT, 'every_page' => FALSE));
?>
<div class='saludar'>
	<h1 class="rtecenter">
		<div class="saludo">
			<span class="cajaCentradaBloque">
				<span class="interiorCajaCentradaBloque">
					<span class="textoCajaCentradaBloque"><?php print render($saludo); ?></span>
				</span>
			</span>
		</div>
		<div class="username">
			<span class="cajaCentradaBloque">
				<span class="interiorCajaCentradaBloque">
					<span class="textoCajaCentradaBloque">
						<!--<img alt="" src="/sites/default/files/styles/mini-thumbnail/public/pictures/picture-5-1416173537.png"/>-->
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



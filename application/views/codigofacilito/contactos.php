<h1> Formulario de Contactos </h1>

<br><br>

<?php if (empty($lista)) { ?>

	<h1><b> Sin Contactos </b></h1>

<?php } else { ?>

	 Tienes <?php echo count($lista) ?> Contactos(s)
	 <br><br>
	 <?php 
	 foreach ($lista as $contactos) {
	 	echo $contactos->nombre.'<br/>';
	 }

	  ?>

 <?php } ?>

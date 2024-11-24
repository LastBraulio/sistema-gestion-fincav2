
<h1>Nuevo Empleado  Llamado a Formulario </h1>
<?php
		//echo validation_errors(); 
        echo form_open('');
        echo form_label('Nombre', 'nombre');
        echo form_input('nombre');echo form_error('nombre').'<br><br>';
        echo form_label('Sueldo', 'sueldo');
        echo form_input('sueldo');echo form_error('sueldo').'<br><br>';      
        echo form_submit('botonSubmit', 'Enviar');
        echo form_close();
        
 ?>

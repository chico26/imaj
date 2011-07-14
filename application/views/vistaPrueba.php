<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
	<?php 
		echo form_open('prueba/index');
		$data['x'] = array ( 
              'name' => 'username', 
              'id' => 'username', 
              'value' => 'Nombre', 
              'maxlength' => '100 ', 
              'size' => '50 ', 
              'estilo' => 'width: 50%' 
		); 
		$data['y'] = array ( 
              'name' => 'username', 
              'id' => 'username', 
              'value' => 'juanperez', 
              'maxlength' => '100 ', 
              'size' => '50 ', 
              'estilo' => 'width: 50%' 
		); 
		$options = array(
				'small'  => 'Small Shirt',
				'med' => 'Medium Shirt',
				'large' => 'Large Shirt',
				'xlarge' => 'Extra Large Shirt'
				);
		$shirts_on_sale = array('small', 'large'); 
		echo form_dropdown('shirts', $options, 'large'); 
		echo form_dropdown('shirts', $options, $shirts_on_sale);
		$js = 'id="shirts" onChange="some_function();"'; 
		echo form_dropdown('shirts', $options, 'large', $js);
		
		$string = "</div></div>";
		echo form_fieldset('Address Information'); 
		echo "<p>Hola chisco</p>\n";
		echo form_fieldset_close($string); // Produces <fieldset> <legend>Address Information</legend> <p>form content here</p> </fieldset>
		
		echo 'Bicicleta';
		echo form_checkbox('checkbox','accept',TRUE);
		echo form_radio('radio','accept',FALSE);
		
		echo form_submit('mysubmit', 'Enviar mensaje');
		
		foreach($data as $d)
		{
			echo form_input($d);
			echo '<br />';
		}
		echo form_password($data); 
		echo form_upload();
		echo form_close();
	?>
</body>
</html>
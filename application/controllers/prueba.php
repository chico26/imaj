
<?php 
/*class Formulario extends CI_Controller
{
	function index()
	{
		$this->load->view('miformulario');
	}
}*/
?>

<?php

class Formulario extends CI_Controller 
{
	function index()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		$config = array(
			array(
				'field'=>'usuario',
				'label'=>'Username', 
				'rules'=>'trim|required|min_length[5]|max_length[12]|alpha_numeric'              
				),
			array(
				'field'=>'contrasena',
				'label'=>'Password',
				'rules'=>'trim|required|matches[conf_contrasena]|md5'                   
				),               
			array(                      
				'field'=>'conf_contrasena',                      
				'label'=>'Password Confirmation',                      
				'rules'=>'trim|required|md5'                   
				),                   
			array(                     
				'field'=>'email',                      
				'label'=>'Email',                      
				'rules'=>'trim|required|valid_email'                   
				)             
			); 
		$this->form_validation->set_rules($config);


		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('miformulario');
		}
		else
		{
			$this->load->view('formulario_exito');
		}
	}
}
?>
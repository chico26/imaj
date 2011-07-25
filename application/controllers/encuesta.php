<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of encuesta
 *
 * @author steven
 */


class Encuesta extends CI_Controller{

	public $data;
	
    public function index(){
	session_start();
		$this->load->library('form_validation');
		
		$config = array(
			array(
				'field'=>'txtEncuestador',
				'label'=>'Encuestador', 
				'rules'=>'trim|required|alpha'              
				),
			array(
				'field'=>'txtEdad',
				'label'=>'Edad', 
				'rules'=>'trim|required|numeric'              
				),
			array(
				'field'=>'selGenero',
				'label'=>'Genero',         
				),
			array(
				'field'=>'selEstadoCivil',
				'label'=>'Estado Civil',         
				),
			array(
				'field'=>'selEscolaridad',
				'label'=>'Escolaridad',         
				),
			array(
				'field'=>'selOcupacion',
				'label'=>'Ocupacion',  
				),
			array(
				'field'=>'txtPartidoPolitico',
				'label'=>'Partido Politico', 
				'rules'=>'trim|required|alpha'              
				),
			array(
				'field'=>'txtPresidenteMunicipal',
				'label'=>'Presidente Municipal', 
				'rules'=>'trim|required|alpha'              
				),
			array(
				'field'=>'txtDistrito',
				'label'=>'Distrito', 
				'rules'=>'trim|required|numeric'              
				),
			array(
				'field'=>'sortProblemas',
				'label'=>'Problemas de la comunidad',              
				),
			array(
				'field'=>'selSeguro',
				'label'=>'Seguro',             
				),
			array(
				'field'=>'selActividades',
				'label'=>'Actividades',              
				),
			array(
				'field'=>'selDesempeno',
				'label'=>'Desempeno',              
				),
			array(
				'field'=>'selMotiva',
				'label'=>'Motiva',               
				),
			array(
				'field'=>'selPoliticanecesaria',
				'label'=>'Politica necesaria',             
				),
			array(
				'field'=>'selParticiparias',
				'label'=>'Participarias?',             
				),
			array(
				'field'=>'selTrabaja',
				'label'=>'Trabaja',               
				),
			array(
				'field'=>'selLapsoTrabajo',
				'label'=>'Lapso de trabajo',              
				),
			array(
				'field'=>'selBeneficiario',
				'label'=>'Beneficiario1',            
				),
			array(
				'field'=>'txtBeneficiario',
				'label'=>'Beneficiario2', 
				'rules'=>'trim|required|alpha'              
				)     
			); 
			
		$this->form_validation->set_rules($config);
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('view_encuesta');
		}
		else
		{
			//$this->load->view('view_encuesta');
			$this->load->database();
			$data = array(
				'Edad'=>$_POST['txtEdad'],
				'Genero'=>$_POST['selGenero'],
				'EstadoCivil'=>$_POST['selEstadoCivil'],
				'Escolaridad'=>$_POST['selEscolaridad'],
				'Ocupacion'=>$_POST['selOcupacion'],
				'PartidoPolitico'=>$_POST['txtPartidoPolitico'],
				'PresidenteMunicipal'=>$_POST['txtPresidenteMunicipal'],
				'Distrito'=>$_POST['txtDistrito'],
				'Desempeno'=>$_POST['selDesempeno'],
				'Motiva'=>$_POST['selMotiva'],
				'PoliticaNecesaria'=>$_POST['selPoliticaNecesaria'],
				'Participarias'=>$_POST['selParticiparias'],
				'TrabajoMunicipio'=>$_POST['selTrabaja'],
				'LapsoTrabajo'=>$_POST['selLapsoTrabajo'],
				'ProgramaGobierno'=>$_POST['txtBeneficiario'],
				'IDUsuario'=>$this->session->userdata('id'),
				'Encuestador'=>$_POST['txtEncuestador'],
            );
            $this->db->insert('encuesta', $data);
			$this->load->view('view_encuesta');
		}
		
	}
}

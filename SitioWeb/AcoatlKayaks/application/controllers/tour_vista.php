<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour_vista extends CI_Controller {

function __construct(){
    parent:: __construct();
    $this->load->model('Tours_Mdl');
    $this->load->model('Usuario_Mdl');
    $this->load->model('MetodoPago_Mdl');
}
    function header_footer(){  
			  $this->load->library('mydompdf');
				$data["numero"] = 250;
				$html= $this->load->view('pdf/contrato_inscripcion', $data, true);
			  $this->mydompdf->load_html($html);
			  $this->mydompdf->render();
				$this->mydompdf->set_base_path('./site/template/css/dompdf.css'); //agregar de nuevo el css
              $this->mydompdf->stream("welcome.pdf", array("Attachment" => false));
              redirect('control/index');
		 }
 
    public function listar(){
        $data['tours'] = $this->Tours_Mdl->listar();
        $this->load->view('template/header2'); 
        $this->load->view('front/index_vw',$data);
        $this->load->view('template/footer'); 
    }
    public function inscripciones(){
      $privilegios= $this->session->userdata('user_privileges');
      if($privilegios != 1){
        $id= $this->session->userdata('user_id');
        if($id){
            $data['email'] = $this->session->userdata('user_email');
            $data['id'] = $this->session->userdata('user_id');
            $data['name'] = $this->session->userdata('user_name');
            $data['lastname'] = $this->session->userdata('user_lastname');
            $data['id_tour'] = $this->input->post('tour');
            $data['tour_name'] = $this->input->post('tour_name');
            $data['precio'] = $this->input->post('precio');
            $data['tours'] = $this->Tours_Mdl->listar();
            $data['usuarios'] = $this->Usuario_Mdl->listar();
            $data['metodo_pago'] = $this->MetodoPago_Mdl->listar();
            $this->load->view('template/header2'); 
            $this->load->view('front/inscripciones_vw',$data);
            $this->load->view('template/footer');
        }else{

            

                ?>
                <script type="text/javascript" src="<?=base_url();?>sweetalert2/dist/sweetalert2.min.js"></script>
                <script type="text/javascript" src="<?=base_url();?>sweetalert2/jquery.js"></script>
                <link rel="stylesheet" type="text/css" href="<?=base_url();?>sweetalert2/dist/sweetalert2.css">
              
                <script>
              
                $(document).ready(function(){
                  swal({
                    title: 'Inicia Sesión...',
                    text: "Necesita iniciar sesión primero!",
                    type: 'success',
                    showCancelButton: false,
                    confirmButtonColor: '#f7952c',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Aceptar!'
                  }).then(function(){
                    window.location.href = '<?=base_url();?>index.php/Control/login';
              
                  });
                });
              </script>
              <?php
            
        }
          
    }else{
      ?>
      <script type="text/javascript" src="<?=base_url();?>sweetalert2/dist/sweetalert2.min.js"></script>
      <script type="text/javascript" src="<?=base_url();?>sweetalert2/jquery.js"></script>
      <link rel="stylesheet" type="text/css" href="<?=base_url();?>sweetalert2/dist/sweetalert2.css">
    
      <script>
    
      $(document).ready(function(){
        swal({
          title: 'Eres un Administrador...',
          text: "No puedes inscribirte!",
          type: 'success',
          showCancelButton: false,
          confirmButtonColor: '#f7952c',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Aceptar!'
        }).then(function(){
          window.location.href = '<?=base_url();?>index.php/Control/index';
    
        });
      });
    </script>
    <?php
    }
  }

} 
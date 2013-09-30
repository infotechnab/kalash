<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class kalash extends CI_Controller {
 public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('viewmodel');
        $this->load->model('dbmodel');
    }
public function index()
    {
     
      $id=1;
      $data['logo'] = $this->viewmodel->get_logo();
       $data['event'] = $this->viewmodel->get_event();
     $data['query']= $this->viewmodel->get_menu();
     $data['slider'] = $this->viewmodel->get_slider();
     $data['page'] =$this->viewmodel->get_page($id);
        $this->load->view('templates/header',$data);
        $this->load->view('templates/body',$data);
        $this->load->view('templates/footer');
        
    }
    
    function page($id)
    {   
        $data['logo'] = $this->viewmodel->get_logo();
         $data['slider'] = $this->viewmodel->get_slider();
         $data['query']= $this->viewmodel->get_menu();
               // $data['gadget'] = $this->viewmodel->get_gadgets();
           $data['event'] = $this->viewmodel->get_event();
           $data['page'] =$this->viewmodel->get_page($id);
                $this->load->view('templates/header',$data);
                $this->load->view('templates/body', $data);
                $this->load->view('templates/footer');
    }
    
    public function activities()
        {
            
            $data['event'] = $this->viewmodel->get_event();
            //$data['notices']=  $this->viewmodel->get_notices();
            //$data['events']= $this->viewmodel->get_events();
           // $data['gadgets']=  $this->viewmodel->get_gadgets();
             $this->load->view('templates/header',$data);
                $this->load->view('templates/body', $data);
                $this->load->view('templates/footer');
        }
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class kalash extends CI_Controller {
 public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('viewmodel');
        $this->load->model('dbmodel');
        $this->load->helper(array('form', 'url'));
        $this->load->library("pagination");
        $this->load->library('email');
    }
public function index()
    {
     
      $id=1;
      $data['logo'] = $this->viewmodel->get_logo();
       $data['event'] = $this->viewmodel->get_event();
     $data['query']= $this->viewmodel->get_menu();
     $data['slider'] = $this->viewmodel->get_slider();
     $data['gadget']=  $this->viewmodel->gadget();
     $data['page'] =$this->viewmodel->get_page($id);
        $this->load->view('templates/header',$data);
        $this->load->view('templates/slider',$data);
        $this->load->view('templates/body',$data);
        $this->load->view('templates/footer',$data);
        
    }
    
    function page($id)
    {   
        $data['logo'] = $this->viewmodel->get_logo();
         $data['slider'] = $this->viewmodel->get_slider();
         $data['query']= $this->viewmodel->get_menu();
               // $data['gadget'] = $this->viewmodel->get_gadgets();
         $data['gadget']=  $this->viewmodel->gadget();
           $data['event'] = $this->viewmodel->get_event();
           $data['page'] =$this->viewmodel->get_page($id);
                $this->load->view('templates/header',$data);
                if($id==1){
                     $this->load->view('templates/slider',$data);
                }
                $this->load->view('templates/body', $data);
                $this->load->view('templates/footer',$data);
    }
    
    public function activities()
        {
            
            $data['event'] = $this->viewmodel->get_event();
            //$data['notices']=  $this->viewmodel->get_notices();
            //$data['events']= $this->viewmodel->get_events();
            $data['gadget']=  $this->viewmodel->gadget();
             $this->load->view('templates/header',$data);
                $this->load->view('templates/body', $data);
                $this->load->view('templates/footer',$data);
        }
        
        function event($id)
    {   
        $data['logo'] = $this->viewmodel->get_logo();
         $data['slider'] = $this->viewmodel->get_slider();
         $data['query']= $this->viewmodel->get_menu();
                $data['gadget']=  $this->viewmodel->gadget();
           $data['event'] = $this->viewmodel->get_event();
           $data['page'] =$this->viewmodel->get_event_id($id);
                $this->load->view('templates/header',$data);
                $this->load->view('event/index', $data);
                $this->load->view('templates/footer',$data);
    }
    
    public function menu(){
         $data['logo'] = $this->viewmodel->get_logo();
         $data['slider'] = $this->viewmodel->get_slider();
         $data['query']= $this->viewmodel->get_menu();
                $data['gadget']=  $this->viewmodel->gadget();
           $data['event'] = $this->viewmodel->get_event();
          // $data['page'] =$this->viewmodel->get_event_id($id);
           $data['menuItem'] = $this->viewmodel->get_menuItem_count();
           $config = array();
            $config["base_url"] = base_url() . "index.php/kalash/menu/";
            $config["total_rows"] =count($data['menuItem']);
            $config["per_page"] = 9;
            //$config["uri_segment"] = 3;

            $this->pagination->initialize($config);

            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            
            $data["menuItem"] = $this->viewmodel->get_menuItem($config["per_page"], $page);
            $data["links"] = $this->pagination->create_links();
           //$data['menuItem'] = $this->viewmodel->get_menuItem();
                $this->load->view('templates/header',$data);
                $this->load->view('kalash/index', $data);
                $this->load->view('templates/footer',$data);
    }
    
    function reservation(){
        $data['logo'] = $this->viewmodel->get_logo();
         $data['slider'] = $this->viewmodel->get_slider();
         $data['query']= $this->viewmodel->get_menu();
                $data['gadget']=  $this->viewmodel->gadget();
           $data['event'] = $this->viewmodel->get_event();
           $this->load->view('templates/header',$data);
          // $this->load->view('kalash/recaptchalib');
                $this->load->view('kalash/reservation', $data);
                $this->load->view('templates/footer',$data); 
                
                }
                
                function mail(){
                    $name = $this->input->post('name');
                    $email = $this->input->post('email');
                    $address = $this->input->post('address');
                    $date = $this->input->post('date');
                    $hr = $this->input->post('hr');
                    $min = $this->input->post('min');
                    $am = $this->input->post('am');
                    $time = $hr.':'.$min." ".$am;
                    $contact = $this->input->post('contact');
                    $message = $this->input->post('message');
                    
                    $this->email->from($email,$name);
                    $this->email->to('rsubedi@salyani.com.np');
                    $this->email->subject('');
                    $this->email->message('Reservation Item
                        =====================================================
                       Name ='.$name.'<br/>'.' Date ='.$date.'<br/>'.'Time ='.$time.'<br/>'.'Address = '.$address.'<br/>'
                            .'Contact = '.$contact.'<br/>'.'Message = '.$message);
                    $this->email->send();
                                     
                }
}
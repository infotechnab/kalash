<?php

class Dbmodel extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    // This model is to user verified 
    function validate() {
        $this->db->where('login', $this->input->post('username'));
        $this->db->where('passwd', md5($this->input->post('password')));
        $query = $this->db->get('members');

        if ($query->num_rows == 1) {
            return true;
        } else {
            return FALSE;
        }
    }

    // this is another method to get user verified 
    function login($username, $password) {
        $this->db->select('member_id, login, passwd');
        $this->db->from('members');
        $this->db->where('login = ' . "'" . $username . "'");
        $this->db->where('passwd = ' . "'" . MD5($password) . "'");
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
    
    
     public function get_album()
    {
        $query = $this->db->get('album');
        return $query->result();
    }
    
    
    
    public function add_album($name)
    {
        $data = Array(
            'a_name' => $name);
        $this->db->insert('album', $data);
           
    }
    
     public function delete_album($aid) {

        
        $this->db->delete('album', array('aid' => $aid));
    }
    
    public function get_gallery($aid)
    {  
        $this->db->where('aid',$aid);
        $query = $this->db->get('gallery');
        return $query->result();  
       
       if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
        
    }
        
        function get_gallery_image($aid)
        {
            $this->db->select('image');            
            $this->db->where('aid',$aid);
            $this->db->order_by('eid','DESC');
            $this->db->limit(1);
                    $query = $this->db->get('gallery');
           if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
        }
         public function delete_gallery($eid) {

        
        $this->db->delete('gallery', array('eid' => $eid));
    }
    
    
       
//pages -----------------------------------------------
    public function record_count_page() {
        return $this->db->count_all("page_event");
    }
    
    public function get_all_pages($limit, $start) {
           $this->db->limit($limit, $start); 
        $this->db->where('type','page');
        $query = $this->db->get('page_event');
        return $query->result();
    }
    public function get_pages() {
            
        $this->db->where('type','page');
        $query = $this->db->get('page_event');
        return $query->result();
    }

    public function add_new_page($title, $body, $image, $status,$type) {
        $data = Array(
            'title' => $title,
            'body' => $body,
            'image' => $image,
            'status' => $status,
            'type'=> $type);
        $this->db->insert('page_event', $data);
    }

    public function findpage($id) {
        $this->db->select('id, title, body, image, status');
        $this->db->from('page_event');
        $this->db->where('id = ' . "'" . $id . "'");
        $query = $this->db->get();
        return $query->result();
    }
    
    public function find_page_id($name)
    {   
        
        $this->db->select('id');
        $this->db->where('title',$name);
        $this->db->limit(1);
        $this->db->order_by('id','DESC');
        $page = $this->db->get('page_event');
        return $page->result();
    }
    public function update_page($id, $title, $body, $image, $status) {
        $this->load->database();
         if (!isset($image)) {
            $data = array(
                'title' => $title,
                'body' => $body,
                'status' => $status);
        } else {
           $data = array(
            'title' => $title,
            'body' => $body,
            'image'=> $image,
            'status' => $status);
        }
        
        $this->db->where('id', $id);
        $this->db->update('page_event', $data);
    }

    public function delete_page($id) {

        $this->db->delete('page_event', array('id' => $id));
    }
     public function delete_menu($id) {

        $this->db->delete('menu', array('id' => $id));
    }
    
    public function delete_page_image($id)
    {
            $data = Array(
            'image' => ""
           );
        
            $this->db->where('id', $id);
            
            $this->db->update('page_event',$data);
    }

    
// ==========================================Activities ----------------------------------------------------------
   
    public function record_count_activities() {
        return $this->db->count_all("page_event");
    }
    
    public function get_all_activities($limit,$start) {
        $this->db->limit($limit, $start);
        $this->db->where('type','event');
        $query = $this->db->get('page_event');
        return $query->result();
    }

    public function add_new_activities($title, $body, $image, $status,$type) {
        $data = Array(
            'title' => $title,
            'body' => $body,
            'image' => $image,
            'status' => $status,
            'type'=>$type);
        $this->db->insert('page_event', $data);
    }

    public function findactivities($id) {
        $this->db->select('id, title, body, status, image');
        $this->db->from('page_event');
        $this->db->where('id = ' . "'" . $id . "'");
        $query = $this->db->get('');
        return $query->result();
    }

    public function deleteactivities($id) {
        $this->db->delete('page_event', array('id' => $id));
    }

    public function update_activities($id, $title, $body, $image, $status) {
        $this->load->database();

        if (!isset($image)) {
            $data = array(
                'title' => $title,
                'body' => $body,
                'status' => $status);
        } else {
            $data = array(
                'title' => $title,
                'body' => $body,
                'image' => $image,
                'status' => $status);
        }

        $this->db->where('id', $id);
        $this->db->update('page_event', $data);
    }

    //gadgets --------------------------------------------------------------------------------
    
    public function record_count_gadget() {
        return $this->db->count_all("page_event");
    } 
    function get_gadgets($limit,$start) {
        $this->db->limit($limit, $start);
        $this->db->select('id, title, body, status');
        $this->db->where('type','gadgets');
        $this->db->from('notice_gadget');
        $query = $this->db->get();
        return $query->result();
    }

    function add_new_gadget($title, $body, $status,$type) {
        $data = Array(
            'type'=>$type,
            'title' => $title,
            'body' => $body,
            'status' => $status);
        $this->db->insert('notice_gadget', $data);
    }

    function findgadget($id) {
        $this->db->select('id, title, body, status');
        $this->db->from('notice_gadget');
        $this->db->where('id = ' . "'" . $id . "'");
        $query = $this->db->get();
        return $query->result();
    }

    function update_gadget($id, $title, $body, $status,$type) {
        $this->load->database();
        $data = array(
            'type' => $type,
            'title' => $title,
            'body' => $body,
            'status' => $status);
        $this->db->where('id', $id);
        $this->db->update('notice_gadget', $data);
    }

    function delete_gadget($id) {
        $this->db->delete('notice_gadget', array('id' => $id));
    }
    //===============================notice====================================//
     public function record_count_notice() {
        return $this->db->count_all("notice_gadget");
    }
    
    function get_all_notices($limit, $start) {
         $this->db->limit($limit, $start);
        $this->db->select('id, title, body, status');
        $this->db->where('type','notice');
        $this->db->from('notice_gadget');
        $query = $this->db->get();
        return $query->result();
    }
    function add_new_notices($title, $body, $status,$type) {
        $data = Array(
            'type' => $type,
            'title' => $title,
            'body' => $body,
            'status' => $status);
        $this->db->insert('notice_gadget', $data);
    }
    
    function findnotice($id) {
        $this->db->select('id, title, body, status');
        $this->db->from('notice_gadget');
        $this->db->where('id = ' . "'" . $id . "'");
        $query = $this->db->get();
        return $query->result();
    }
    
    //=============================metadata  --------------------------------------------------------------------------------

    function get_meta_data()
    {
                $this->db->from('meta_data');
                $query = $this->db->get();
                return $query->result();
    }
    
    function update_meta_data($url, $title, $keyword, $description)
    {
        $data = Array( array('value'=>$url), array('value'=>$title), array('value'=>$keyword), array('value'=>$description));
        $i= 1;
              
        foreach ($data as $value)
        {
          
            $this->db->where('id',$i);
            $this->db->update('meta_data', $value);        
            $i++;
        }
    }
    



    //======================others 
   public function record_count_slider() {
        return $this->db->count_all("slider");
    }
    
    public function get_slider($limit,$start)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get('slider');
        return $query->result();
    }
    
    public function add_new_slider($name,$image)
                    {
        $this->load->database();
        $data = array(
            'title' => $name,
            'image' => $image);
        $this->db->insert('slider', $data);
    }
    
    function findslider($sid) {
        $this->db->select('sid,image,title');

        //$this -> db -> from('gallery');
        $this->db->where('sid = ' . "'" . $sid . "'");
        $query = $this->db->get('slider');
        return $query->result();
    }
        
     public function update_slider($sid, $title,$image) {
        $this->load->database();
        $data = array(
            'title' => $title,
            'image'=> $image);
        $this->db->where('sid', $sid);
        $this->db->update('slider', $data);
    }
    
    function delete_slider($sid) {
        $this->db->delete('slider', array('sid' => $sid));
    }
    
    
    // =========================== menu =================//
    
     public function record_count_menu() {
        return $this->db->count_all("page_event");
    }
        
    public function get_menu($limit,$start)
    {
        $this->db->limit($limit,$start);
        $query = $this->db->get('menu');
        return $query->result();
    }
    
    
    function findmenu($id) {
        $this->db->select('id,title,parmalink,listing,order,link');

        //$this -> db -> from('menu');
        $this->db->where('id = ' . "'" . $id . "'");
        $query = $this->db->get('menu');
        return $query->result();
    }    
    
     public function update_menu($id,$title,$parmalink,$listing,$order,$link) {
        $this->load->database();
        $data = array(
            'title' => $title,
            'parmalink'=> $parmalink,
            'listing'=> $listing,
            'order'=> $order,
            'link'=> $link);
        $this->db->where('id', $id);
        $this->db->update('menu', $data);
    }    
    public function add_new_menu($tital,$listing, $order , $id )
    {  
       // die($id);
        $this->load->database();        
        $data = array(
            'p_id'=>$id,
            'title'=> $tital,
            
            'listing' => $listing,
            'order'=> $order  );
         $this->db->insert('menu', $data);        
    }
    
    function get_logo() {
        $query = $this->db->get('logo_image');
        return $query->result();
    }
    
    function upload_logo($name,$image) {
        $data = Array(
            'title' => $name,
            'image' => $image,
           // 'status' => $status
           );
        $this->db->insert('logo_image', $data);
    }
    function deletelogo($id) {
        $this->db->delete('logo_image', array('id' => $id));
    } 
    }
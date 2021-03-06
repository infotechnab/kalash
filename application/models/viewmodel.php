<?php 
class Viewmodel extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
     public function get_menu()
    {
         $this->db->order_by('order','ASC');
        $query = $this->db->get('menu');
        return $query->result();
    }
    
    public function listing($id)
    {      $this->db->where('listing',$id); 
           $menu = $this->db->get('menu');
           return $menu->result();
}

function get_sublist_title($title)
{
    $this->db->select('p_id');
    $this->db->where('title',$title);
    $list = $this->db->get('menu');
    return $list->result();
}

function get_sublist($id)
{   
    
            $this->db->order_by('order','ASC');
            $this->db->where('listing',$id); 
           $menu = $this->db->get('menu');
           return $menu->result();
    
}
function get_sub_sublist($id)
{
            $this->db->where('listing',$id); 
           $menu = $this->db->get('menu');
           return $menu->result();
    
}

function  get_event()
{
     $this->db->where('type','event');
    $this->db->order_by('id','DESC');
    $event = $this->db->get('page_event',3);
    return $event->result();
}
function  get_menuItem_count()
{
     $this->db->where('type','event');
     $menuItem = $this->db->get('page_event');
    return $menuItem->result();
}
function  get_menuItem($limit,$start)
{   
    $this->db->limit($limit, $start); 
     $this->db->where('type','event');
    
    $menuItem = $this->db->get('page_event');
    return $menuItem->result();
}
function  get_event_id($id)
{
     $this->db->where('type','event');
    $this->db->where('id',$id);
    $page = $this->db->get('page_event');
    return $page->result();
}

function  get_slider()
{
     
    $slider = $this->db->get('slider');
    return $slider->result();
}


function get_logo(){
    $logo = $this->db->get('logo_image');
    return $logo->result();
}

function get_page($id){
    $this->db->where('id',$id);
    $page = $this->db->get('page_event');
    return $page->result();
}

function gadget(){
    
    $this->db->order_by('id','DESc');
    $gadget = $this->db->get('notice_gadget',3);
    return $gadget->result();
}

}
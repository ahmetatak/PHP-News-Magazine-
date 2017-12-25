<?php

class Haber extends Controller {
 
 
    function __construct($controller, $method, $data) {
        parent::__construct();
//echo "kontroller".$controller."<br>";
//echo "method".$method."<br>";
//echo "data".$data."<br>"; 
 }
    
    function detay($controller, $method, $id){
        
        
 //the data is checking   
 if(!is_numeric($id))       
  return false;      
      
 $index_model = $this->load->model("haber");
        $data["detay"] = $index_model->haberoku($id);
        if (!$data["detay"] )
            return false;

   if(is_array($data["detay"] )){
foreach ($data["detay"]  as $key => $ikra) {
    
$title= $ikra["title"]; 
$haberid = $ikra["id"];


}}

$data["yorum"] = $index_model->yorumlar($haberid);
$data["same"] = $index_model->benzerhaber("kadın");
      //controller (class) name ,viewfile name,title, data, layout type
        $this->load->view("haber/detay",$title, $data,"layout");
    }
    
    
     
}


<?php
   abstract class Controller{
       public function load_model($name_model){
           require_once MODELSPATH.$name_model.".php";
           $model=new $name_model();      
           return $model;
       }

       public function load_view($name_view,$data=null){
           if (!empty($data)){
               extract($data);
           }           
           Templates::print_header();
           include_once VIEWSPATH.$name_view.".php";
       }
   } 
?>
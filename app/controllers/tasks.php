<?php
    class Tasks extends Controller{
        public function action_index(){
            $model = $this->load_model("tasks_model");
            $array=$model->array_results($model->select());
            $data = compact(
                'array'
            );
            if(!isset($_SESSION["login"]))
                    header("Location:".DOMAINSERVER);
            $this->load_view("tasks",$data);  
        }
        public function action_sort_by_field(){
            $name_field=$_POST["name_field"];
            $value_sort=$_POST["value"];
            $model = $this->load_model("tasks_model");
            $array=$model->array_results($model->sort($name_field,$value_sort));
            $data = compact(
                'array'
            );
            $this->load_view("tasks",$data); 
        }
    }
?>
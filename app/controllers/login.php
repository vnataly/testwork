<?php
    class Login extends Controller{
        public function action_index(){
             if(isset($_SESSION["login"])||(!empty($_SESSION["login"])))
                    header("Location:".DOMAINSERVER."/tasks");
            $this->load_view("login");  
        }
        public function action_login(){
            
        }
        public function action_check_login(){
            $login = $_POST['login'];
            $password = $_POST['password'];
            if($this->action_check_login_in_database($login)==0){
                echo 0;
                die;
            }
            echo $this->action_check_login_password($login,$password);
        }
        public function action_check_login_in_database($login){
           
            $model = $this->load_model("users_model");
            $count = $model->get_count_in_table($model->select_where_login($login));
            return $count;
        }
        public function action_check_login_password($login,$password){
           
            $model = $this->load_model("users_model");
            $array=$model->array_results($model->select_where_login($login));
            if($array[0]["password"]==md5($password)){
                $_SESSION["login"]=$login;
                return 1;
            }
                
            else{
                
                return 2;
            }
        }
        public function action_logout(){
            unset($_SESSION['login']);
             header("Location:".DOMAINSERVER);
        }
        
    }
?>
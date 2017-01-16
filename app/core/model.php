<?php
  abstract class Model{
       public $connection;
        function __construct(){
           $this->connection=new PDO(DBTYPE.":host=".DBHOST.";dbname=".DBNAME.";charset=utf8", DBLOGIN,DBPASSWORD);
            $this->connection->exec('SET NAMES utf8');
       }
       public function array_results($query){
           $array_results=array();
           while($row = $query->fetch(PDO::FETCH_ASSOC)) {
            array_push($array_results,$row);
           }
           return $array_results;
       }
       public function select(){
           $query="SELECT * FROM ".$this->get_name_model();
           return $this->connection->query($query);
       }
       public function select_where_login($login){
           $query="SELECT * FROM ".$this->get_name_model()." WHERE login='$login'";
           return $this->connection->query($query);
       }
       public function get_name_model(){
           $name=get_class($this);
           $name=substr_replace($name,"",5);
           return $name;
       }
       public function get_count_in_table($query){
           return $query->rowCount();
       }
       public function crud_in_table($query){
           $this->connection->exec($query);
       }
       public function sort($field_name,$sort_value){          
           $query="SELECT * FROM {$this->get_name_model()} ORDER BY $field_name $sort_value";
            return $this->connection->query($query);
       }
   }
?>
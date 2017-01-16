<?php
    class Task extends Controller{
        public function action_index(){
            $array1 = array(1,2,3,4);
            $array_model = array("table_results"=>$array);
            $model = $this->load_model("users_model");
            $array=$model->array_results($model->select());
            $data = compact(
                'array',
                'array1'
            );
            $this->load_view("task",$data);  
        }
        public function action_add_task(){
            
            if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])){
                $tmp = $_FILES['image']['tmp_name'];
                if (@file_exists($tmp)) {  //итак, если файл на месте, то
                    $info = @getimagesize($tmp); //берем информацию о файле
                    //убеждаемся что файл есть ни что иное как изображение
                    if (preg_match('{image/(.*)}is', $info['mime'], $p)) {
                        //в данную переменную мы помещаем желаемую ширину файла
                        $newwidth = 240;
                        $filetype = substr($_FILES['image']['name'], strlen($_FILES['image']['name']) - 3); 
                        $filename=md5(microtime() . rand(0, 9999));
                        $newname = "img/tasks/".$filename.".".$filetype;
                        if ($info[0] <= $newwidth){ // если ширина загужаемого изображения

                            if(!move_uploaded_file( $_FILES['imgage']['tmp_name'], $newname )){
                                $error = true;
                            }

                        } else {
                            if($this->resize($tmp, $newwidth, $newname)){
                                
                            } else {
                                $error = true;
                            }
                        }
                    }
                }
            }
            if(!empty($_POST['name'])&&!empty($_POST['email'])&&!empty($_POST['text'])&&!empty($_FILES['image'])){
                $name=$_POST['name'];
                $email=$_POST['email'];
                $text=$_POST['text'];
                $image=$newname;
                $status=0;
                $model = $this->load_model("tasks_model");
                $model->crud_in_table("INSERT INTO tasks (`id`,`name`,`email` ,`text` ,`image` ,`status`) VALUES ('NULL','$name', '$email', '$text', '$image', $status);
            ");
                header("Location:".DOMAINSERVER."/task");
            }
            return;
            
        }
        public function action_update_task(){
            $id=$_POST['id'];
            $text=$_POST['text'];
            $model = $this->load_model("tasks_model");
            $model->crud_in_table("UPDATE tasks SET text='".$text."' WHERE id={$id}");
            $array=$model->array_results($model->select());
            $data = compact(
                'array'
            );
            $this->load_view("tasks",$data); 
        }
        public function action_edit_task_status(){
            $id=$_POST['id'];
            $model = $this->load_model("tasks_model");
            $model->crud_in_table("UPDATE tasks SET status='1' WHERE id={$id}");
            $array=$model->array_results($model->select());
            $data = compact(
                'array'
            );
            $this->load_view("tasks",$data); 
        }
        public function resize($photo_src, $width, $name){
            $parametr = getimagesize($photo_src);
            list($width_orig, $height_orig) = getimagesize($photo_src);
            $ratio_orig = $width_orig/$height_orig;
            $new_width = $width;
            $new_height = $width / $ratio_orig;
            $newpic = imagecreatetruecolor($new_width, $new_height);
            $image = '';
            switch ( $parametr[2] ) {
                case 1: $image = imagecreatefromgif($photo_src);
                break;
                case 2: $image = imagecreatefromjpeg($photo_src);
                break;
                case 3: $image = imagecreatefrompng($photo_src);
                break;
            }
            if(!empty($image)){
                imagecopyresampled($newpic, $image, 0, 0, 0, 0, $new_width, $new_height, $width_orig, $height_orig);
                imagejpeg($newpic, $name, 100);
                return true;
            } else {
                return false;
            }
        }
        
        
    }
?>
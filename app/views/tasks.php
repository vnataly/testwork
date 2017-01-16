
<table class="table ">
     <thead style="cursor:pointer;">
         <tr>
         <th id="name" class='sort_field'>Имя</th>
         <th id="email" class='sort_field'>E-mail</th>
         <th id="text">Текст задачи</th>
         <th id="image">Изображение</th>
         <th id="status" class='sort_field'>Статус выполнения</th>
         </tr>
     </thead>
     <tbody>
     <?php
        foreach ($array as &$value){
            $status="";
            if($value['status']==0){
                $status="<span style='cursor:pointer;' class='glyphicon glyphicon-remove status_n ".$value['id']."'></span>";
            }
         else  if($value['status']==1){
                $status="<span class='glyphicon glyphicon-ok status_y'></span>";
            }
            echo "
                <tr>
                    <td id='name' >".$value['name']."</td>
                    <td id='email' >".$value['email']."</td>
                    <td style='max-width:300px;' id='task_text_".$value['id']."'>".$value['text']."</td>
                    <td id='image' ><img style='width:50px;' src='".$value['image']."'></img></td>
                    <td id='status' >".$status."</td>
                    <td class='edit_row' id='id_row_".$value['id']."' style='cursor:pointer;'>"."<span class='glyphicon glyphicon-pencil'></span>"."</td>
                    
                </tr>
            ";
        }
      ?>
     </tbody>
 </table>

<div class="modal" id="editModal" style="background:white;width:600px;margin:0 auto;height:500px;">
    <form role="form" id="edit_task" action="<?php echo DOMAINSERVER."/task/update_task";?>">
      <div class="modal-header">
        <button class="close" data-dismiss="modal">×</button>
      </div>
        <table class="table">
            <p style='text-align:center;'>Редактирование задачи</p>
      
      <div class="modal-body">
         <tbody>
             <tr>
                 <td class="col-xs-6 col-sm-6 col-md-6 col-lg-3">Описание задачи</td>
                 <td class="col-xs-6 col-sm-6 col-md-6 col-lg-9"><textarea  class="col-xs-6 col-sm-6 col-md-6 col-lg-12" id="task_value" value=''></textarea></td>
             
                    
             </tr>
             
         </tbody>
          </table>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-offset-3">
                <button type="submit" class="btn btn-labeled btn-success">
                <span class="btn-label"><i class="glyphicon glyphicon-pencil"></i></span>Редактировать</button>
            </div>
      </div>
        
    </form>
</div>

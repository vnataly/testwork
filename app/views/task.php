<div class="container col-lg-offset-4">
     <div class="row">
         <div class="col-xs-12 col-sm-12 col-lg-5">
             <div class="panel panel-primary">
                 <div class="panel-heading">
                     <h3 class="panel-title">
                     Новая задача</h3>
                 </div>
                 <div class="panel-body">
                     <div class="row">
                         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-10 login-box">
                             <form role="form" enctype="multipart/form-data" method="post" action='<?php echo DOMAINSERVER."/task/add_task";?>'>
                                 <div class="input-group">
                                     <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                     <input type="text" name="name" id="name" class="form-control" placeholder="Имя пользователя" value="" required autofocus />
                                 </div>
                                 <div class="input-group">
                                     <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                     <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="" required autofocus />
                                 </div>
                                  <div class="form-group">
                                    <label for="exampleTextarea">Текст задачи</label>
                                    <textarea class="form-control text"  id="text exampleTextarea"  value="" name="text" rows="3"></textarea>
                                  </div>
                                   <div class="form-group">
                                        <label for="exampleInputFile">Выбрать файл</label>
                                        <input type="file" accept="image/jpeg, image/png,image/gif" value="" class="form-control-file image" name="image" id="exampleInputFile" required aria-describedby="fileHelp">
                                       
                                   </div>
                                 <div class="row">
                                     <div class="col-xs-6 col-sm-6 col-md-6">
                                         <button type="submit" class="btn btn-labeled btn-success">
                                            <span class="btn-label"><i class="glyphicon glyphicon-plus"></i></span>Добавить задачу</button>
                                     </div>
                                     
                        
                                </div>
                                 <div class="row">
                                 <div class="col-xs-6 col-sm-6 col-md-6">
                                    <button type="submit" class="btn btn-labeled btn-success preview">
                                    <span class="btn-label"><i class="glyphicon glyphicon-search"></i></span>Предварительный просмотр</button>
                                </div>
                            </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
</div>
    <div class="modal" id="previewModal" style="background:white;width:600px;margin:0 auto;height:500px;">
      <div class="modal-header">
        <button class="close" data-dismiss="modal">×</button>
      </div>
        <table class="table">
        <thead>
             <tr>
                 <th>Имя</th>
                 <th>E-mail</th>
                 <th>Текст задачи</th>
                 <th>Изображение</th>
                 <th>Статус выполнения</th>
             </tr>
       </thead>
      
      <div class="modal-body">
         <tbody>
             <tr>
                 <td id="task_name"></td>
                 <td id="task_email"></td>
                 <td id="task_text"></td>
                 <td id="task_image"></td>
                 <td id="task_status"></td>
             </tr>
         </tbody>
      </div>
    </div>
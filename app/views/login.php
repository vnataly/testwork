<div class="container col-lg-offset-4">
     <div class="row">
         <div class="col-xs-12 col-sm-12 col-lg-5">
             <div class="panel panel-primary">
                 <div class="panel-heading">
                     <h3 class="panel-title">
                     Авторизация на сайте</h3>
                 </div>
                 <div class="panel-body">
                     <div class="row">
                         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 login-box">
                             <form role="form" method="post" id="login_form" action='<?php echo DOMAINSERVER."/login/check_login";?>'>
                                 <div class="input-group">
                                     <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                     <input type="text" name="login" id="login" class="form-control" placeholder="Имя пользователя" required autofocus />
                                 </div>
                                 <div class="input-group">
                                     <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                     <input type="password" id="password" name="password" class="form-control" placeholder="Ваш пароль" required />
                                 </div>
                                 <div class="row">
                                     <div class="col-xs-6 col-sm-6 col-md-6">
                                         <button type="submit" class="btn btn-labeled btn-success">
                                            <span class="btn-label"><i class=""></i></span>Войти</button>
                                     </div>
                                </div>
                             </form>
                         </div>
                     </div>
                 </div>
                 <div class="panel-footer">
                     
                 </div>
             </div>
         </div>
     </div>
</div>
<?php

  //  session_start();
//compact($array);
/*echo "<pre>";
    var_dump($array);
    var_dump($array1);
echo "</pre>";*/
?>
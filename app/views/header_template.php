<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>First</title>
        <meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="<?php echo CSSPATH."bootstrap.min.css"?>"/>
		<script  src="<?php echo JSPATH."jquery-1.11.3.min.js"?>" type="text/javascript"></script>
		<script  src="<?php echo JSPATH."functions.js"?>" type="text/javascript"></script>
		<script  src="<?php echo JSPATH."bootstrap.js"?>" type="text/javascript"></script>
		<script  src="<?php echo JSPATH."modal.js"?>" type="text/javascript"></script>
	</head>
	<body>
        <div class="row">
        <?php if(isset($_SESSION['login'])) echo'
        <form role="form" method="post"  class="text-right" action='. DOMAINSERVER."/login/logout".'>
       
                                     <div class="col-xs-6 col-sm-6 col-md-1   ">
                                         <button type="submit" class="btn btn-labeled btn-success">
                                            <span class="btn-label"><i class=""></i></span>Выйти</button>
                                     </div>
                                
        </form>';
            else echo'
        <form role="form" method="post"  class="text-right" action='. DOMAINSERVER."/login".'>
       
                                     <div class="col-xs-6 col-sm-6 col-md-1   ">
                                         <button type="submit" class="btn btn-labeled btn-success">
                                            <span class="btn-label"><i class=""></i></span>Войти</button>
                                     </div>
                                
        </form>';
            ?>
    <form role="form" method="post" class="text-right" action=<?php echo DOMAINSERVER."/task";?>>
        
                <div class="col-xs-6 col-sm-6 col-md-6  col-lg-11 ">
                    <button type="submit" class="btn btn-labeled btn-success">
                    <span class="btn-label"><i class=""></i></span>Добавить задачу</button>
                </div>
        
    </form>
        </div>
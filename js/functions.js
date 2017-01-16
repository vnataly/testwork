var name_sort='ASC';
var email_sort='ASC';
var status_sort='ASC';
$(document).ready(function(){
    $('#login_form').on('submit',function(){
        var data_login = new Object();
        data_login.login=$("#login").val();
        data_login.password=$("#password").val();
     $.ajax({
        type: 'POST',
        url: '/login/check_login',
        data: data_login,
        dataType: 'text',
        success: function (response){
            if(response==0){
                alert("Такой пользователь не зарегистрированный");
            }
            if(response==2){
                alert("Неверный логин или пароль");
            }
            if(response==1){
                window.location="/tasks";
            }
           
            }
        }
    );   
        return false;
    });
    
    //Preview
     $('.preview').on('click',function(){
        var data_task=new Object();
          data_task.name=$("#name").val();
          data_task.email=$("#email").val();
          data_task.text=$(".text").val();
          data_task.image=$(".image").val();
        if(data_task.name!=""&&data_task.email!=""&&data_task.text!=""&&data_task.image!=""){
            $("#task_name").html(data_task.name);
            $("#task_email").html(data_task.email);
            $("#task_text").html(data_task.text);
            $("#task_image").html(data_task.image);
            $("#task_status").html(0);
            $('#previewModal').modal('show');
            return false;
           
        }
        else{
            alert("Заполните все поля");
            return false;
        }
        
        
    });
    
    //Sort
    $('.sort_field').on('click',function(){
       // var name_field=$(this).attr('id');
        var data_sort=new Object();
        data_sort.name_field=$(this).attr('id');
        data_sort.value='ASC';
        $.ajax({
            type: 'POST',
            url: '/tasks/sort_by_field',
            data: data_sort,
            dataType: 'text',
            success: function (response){
                $('body').html(response);
            }
        });
    });
    //EditRow
    $('.edit_row').on('click',function(){
        var id=$(this).attr('id');       
        id=id.substr(7);
        $('#task_value').val($("#task_text_"+id).html());
        $('#editModal').modal('show');
            $("#edit_task").on('submit',function(){
                var data_update=new Object();
                data_update.text=$('#task_value').val();
                data_update.id=id;
                $.ajax({
                    type: 'POST',
                    url: '/task/update_task',
                    data: data_update,
                    dataType: 'text',
                    success: function (response){
                        //alert(response);
                        $('body').html(response);
                    }
        });

               return false; 
           });
    
    });
    
  //Put a tick
    $(".status_n").on('click',function(){
        id=$(this).attr('class');
        id=id.substr(36);
        var data_status=new Object();
        data_status.id=id;
        $(this).attr('class',"glyphicon glyphicon-ok status_y");
        $.ajax({
                    type: 'POST',
                    url: '/task/edit_task_status',
                    data: data_status,
                    dataType: 'text',
                    success: function (response){
                        $('body').html(response);
                    }
        });
    })
});
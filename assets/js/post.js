$(document).ready(function(){
     $("#post").click(function(e){
        
           var send_post = $("#send_post").val();
           if(send_post.length != ''){
               $.ajax({
                    type : 'POST',
                    url  :  'ajax/send_post.php',
                    data :  {send_post:send_post},
                    dataType : 'JSON',
                    success  : function(feedback){
                        if(feedback.status == "success"){
                            $(".post-form").trigger("reset");
                          show_posts();
                        }
                    }

               })
           }
        
     })


// Upload Images & Files
     $('#upload-files').change(function(){
        var file_name = Date.now() + $("#upload-files").val();
        if(file_name.length != ""){
            $.ajax({
                type    : 'POST',
                url     : 'ajax/send_files.php',
                data    : new FormData($(".chat-form")[0]),
                contentType  : false,
                processData  : false,
                success  : function(feedback){
                    if(feedback == 'error'){
                        $(".files-error").addClass("show-file-error");
                        $(".files-error").html("<span class='files-cross-icon'>&#x2715;</span>"+"Please Choose Valid Image/File")
                        setTimeout(function(){
                            $(".files-error").removeClass("show-file-error");
                        },2000)
                    } else if(feedback == "success"){
                        show_posts();
                    }
                }
            })
        }
    })


    


})





// show Posts
function show_posts(){

        var pst = true;

    $.ajax({
        type  : 'GET',
        url   : 'ajax/show_posts.php',
        data  :  {'post' : pst},

        success : function(feedback){
         $(".posts").html(feedback);
        }

    })

}

show_posts();
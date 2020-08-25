$(document).ready(function(){
    $(".messages").animate({scrollTop: $(".messages")[0].scrollHeight},2000)
    $('.chat-form').keypress(function(e){

        var toid = $(".toid").val();

        if(e.keyCode == 13){
         var send_message = $("#send_message").val();
         if(send_message.length != ""){
             $.ajax({
                 type: 'POST',
                 url : 'personal_messages/send_message.php',
                 data: {send_message:send_message, toid : toid },
                 dataType : 'JSON',
                 success : function(feedback){
                     if(feedback.status == "success"){
                         $(".chat-form").trigger("reset");
                         show_messages();
                     }
                 }
             })
         }
        }
    })


    // Upload Images & Files
$('#upload-files').change(function(){
    var file_name = $("#upload-files").val();
    if(file_name.length != ""){
        $.ajax({
            type    : 'POST',
            url     : 'personal_messages/send_files.php',
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
                    show_messages();
                }
            }
        })
    }
})

// Sending Enmojies
$(".emoji-same").click(function(){
    var emoji = $(this).attr("src");
    $.ajax({
        type : 'POST',
        url  :  'personal_messages/send_emoji.php',
        data :  {'send_emoji':emoji},
        dataType : 'JSON',
        success  : function(feedback){
            if(feedback.status == "success"){
                show_messages();
            }
        }
    })
})

})




function show_messages(){
    var toid = $(".toid").val();
    var msg = true;
    $.ajax({
        type : 'GET',
        url  : 'personal_messages/show_messages.php',
        data : {toid:toid, message:msg},
        success : function(feedback){
                $(".messages").html(feedback);
        },
        error: function(xhr){
            $(".messages").html(xhr);
        }
    })

    $(".messages").animate({scrollTop: $(".messages")[0].scrollHeight},2000)

}

show_messages();
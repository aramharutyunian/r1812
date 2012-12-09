$(function() {
    var btnUpload = $('#upload');
    //   get base  url  value
    var base_url = $('#base_url').val();
    new AjaxUpload(btnUpload, {
        action: base_url+'private/service/news',
        //Name of the file input box
        name: 'uploadfile',
        // responseType:'json',
        onSubmit: function(file, ext ) {
            if (! (ext && /^(jpg|jpeg|JPG|JPEG|png|PNG|gif|GIF)$/.test(ext))) {
                // check for valid file extension
                $("#status").text('Only JPG,PNG,GIF files are allowed');
                return false;
            }
            else{
                $("#status").text('Uploading.......');
                return true;
            }
        },
        onComplete: function(file , data) {

            $("#status").text("");
            var curr_url = $('#base_url').val();
            var index = data .indexOf("}");
            var vdata = data.substring(0,index+1);
            var data1 = eval("(" + vdata + ")");
            if(data1.state==0){
                var src = curr_url+"media/temp/"+data1.session_id+"/"+data1.message;
                $content = $('body').find('#content');
                var current_content = $content.html();
                var image = "<img src='"+src+"' class='main_img'/>";
                var content = image+current_content;
                $content.html(content);
                $form= $('#form_elements');
                $form.append("<input  type='hidden'  name='images[]'  value='"+data1.message+"'>");
            }
            else{
                alert(data1.message);
            }

        }
    });
});

var url = 'http://localhost/CakeCafe-B2C';

/* BIR TURLU BECEREMEDIM PROJE BITIMI BAKARIZ VIDEO 10-11-12 */
/* function sendmessage(){

    $("#sendbutton").prop('disabled',true);

    var data = $("#contact-form").serialize();
    $.ajax({
        type : "POST",
        data : data,
        url  : url + "/pages/sendmessage",
        success : function(result){
            var obj = JSON.parse(result);
            swal.fire({
                title : obj.title,
                text  : obj.text,
                icon  : obj.icon
            });

            if(obj.icon == "success"){
                $("input[name=name]").val('');
                $("input[name=subject]").val('');
                $("input[name=email]").val('');
                $("textarea[name=message]").val('');
            }else{
                $("#sendbutton").prop('disabled',false);
            }

        }
    })

} */
$(function(){
    $("#linkUpdate").click(function(event){
        event.preventDefault();

        $value = 0;
        $(".btn_radio").each(function (){
            if($(this).is(":checked")){
                $value = $(this).val();
            }
        });

        $link = "http://localhost/ci_login/adminController/updateUser/"+$value;
        //$("#linkUpdate").attr('href',$link);
        document.location.href = $link;
    });

    $("#linkDelete").click(function(event){
        event.preventDefault();

        $value = 0;
        $(".btn_radio").each(function (){
            if($(this).is(":checked")){
                $value = $(this).val();
            }
        });

        $link = "http://localhost/ci_login/adminController/deleteUser/"+$value;
        //$("#linkUpdate").attr('href',$link);
        document.location.href = $link;
    });
    
    $("#txt_confirm_pass").keyup(function () {
        var val1 = $("#txt_pass").val();
        var val2 = $("#txt_confirm_pass").val();
        
        if(val1 === val2){
            $("#ok_pass_glyph").show();
            $("#ko_pass_glyph").hide();
        }else{
            $("#ok_pass_glyph").hide();
            $("#ko_pass_glyph").show();
        }
    });
});

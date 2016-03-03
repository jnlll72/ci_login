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
        $("#linkUpdate").attr('href',$link);
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
        $("#linkUpdate").attr('href',$link);
        document.location.href = $link;
    });
});

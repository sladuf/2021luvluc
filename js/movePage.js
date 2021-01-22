    $(document).on("touchstart", function(){ });

    function acyncMovePage(url){
        // ajax option
        var ajaxOption = {
                url : url,
                async : true,
                type : "POST",
                dataType : "html",
                cache : false
        };

        $.ajax(ajaxOption).done(function(data){

            if($('#q9').length){
                $('#send').removeAttr('target');
            }
            // Contents 영역 삭제
            $('#bodyContents').children().remove();
            // Contents 영역 교체

            $('#bodyContents').hide().html(data).fadeIn('fast');

        });
    }
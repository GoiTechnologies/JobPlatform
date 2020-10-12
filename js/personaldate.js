$('#validar').click(function(){
    $.ajax({
        url: 'datospersonales.php',
        type: 'POST',
        data: $('#form1').serialize(),
        success: function(res){
            $('#estadodoc').html(res);
        }
    })
});
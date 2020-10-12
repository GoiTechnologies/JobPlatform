$(function() {
    load(1);
});
function load(page){
    var query=$("#q").val();
    var per_page=10;
    var parametros = {"action":"ajax","page":page,'query':query,'per_page':per_page};
    $("#loader").fadeIn('slow');
    $.ajax({
        url:'ajax/enovalidada.php',
        data: parametros,
         beforeSend: function(objeto){
        $("#loader").html("Cargando...");
      },
        success:function(data){
            $(".outer_div").html(data).fadeIn('slow');
            $("#loader").html("");
        }
    })
}



$('#editEmpresaModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var id = button.data('id')
    $('#id').val(id)
    var estado = button.data('estado') 
    $('#estado').val(estado)
  })
  


$( "#editEmpresa" ).submit(function( event ) {
    var parametros = $(this).serialize();
      $.ajax({
              type: "POST",
              url: "ajax/editar_Empresa.php",
              data: parametros,
               beforeSend: function(objeto){
                  $("#resultados").html("Enviando...");
                },
              success: function(datos){
              $("#resultados").html(datos);
              load(1);
              $('#editEmpresaModal').modal('hide');
            }
      });
    event.preventDefault();
  });
  

  
  $(function() {
    load(1);
});
function load(page){
    var query=$("#q").val();
    var per_page=10;
    var parametros = {"action":"ajax","page":page,'query':query,'per_page':per_page};
    $("#loader").fadeIn('slow');
    $.ajax({
        url:'ajax/enovalidada.php',
        data: parametros,
         beforeSend: function(objeto){
        $("#loader").html("Cargando...");
      },
        success:function(data){
            $(".outer_div").html(data).fadeIn('slow');
            $("#loader").html("");
        }
    })
}

 
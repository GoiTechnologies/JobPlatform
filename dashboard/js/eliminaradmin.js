$(function() {
    load(1);
});
function load(page){
    var query=$("#q").val();
    var per_page=10;
    var parametros = {"action":"ajax","page":page,'query':query,'per_page':per_page};
    $("#loader").fadeIn('slow');
    $.ajax({
        url:'ajax/listar_admin.php',
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

$('#deleteProductModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var id = button.data('id') 
    $('#delete_id').val(id)
  })


  
  
  $( "#delete_product" ).submit(function( event ) {
    var parametros = $(this).serialize();
      $.ajax({
              type: "POST",
              url: "ajax/eliminar_producto.php",
              data: parametros,
               beforeSend: function(objeto){
                  $("#resultados").html("Enviando...");
                },
              success: function(datos){
              $("#resultados").html(datos);
              load(1);
              $('#deleteProductModal').modal('hide');
            }
      });
    event.preventDefault();
  });
  


  
/* HERE START SCRIPT PHP CODE */

$(function() {
    load(1);
});
function load(page){
    var query=$("#q").val();
    var per_page=10;
    var parametros = {"action":"ajax","page":page,'query':query,'per_page':per_page};
    $("#loader").fadeIn('slow');
    $.ajax({
        url:'ajax/listar_admin.php',
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


$( "#delete_product" ).submit(function( event ) {
  var parametros = $(this).serialize();
    $.ajax({
            type: "POST",
            url: "ajax/eliminar_producto.php",
            data: parametros,
             beforeSend: function(objeto){
                $("#resultados").html("Enviando...");
              },
            success: function(datos){
            $("#resultados").html(datos);
            load(1);
            $('#deleteProductModal').modal('hide');
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
      url:'ajax/listar_admin.php',
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



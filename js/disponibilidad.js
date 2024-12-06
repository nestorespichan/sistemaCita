$("#especialista_id").change(function() {
    let id = $("#especialista_id").val();
    let datos = new FormData();
    datos.append("idConsultar", id);
    $.ajax({
        url: "ajax/disponibilidad.php",
        type: "POST",
        data: datos,
        processData: false,
        contentType: false,
        dataType: "json",
        success: function (respuesta) {
          console.log(respuesta);
        },
        error: function (xhr, textStatus, errorThrown) {
            //console.error("Error AJAX:", textStatus, errorThrown);
            console.log("Respuesta del servidor:", xhr.responseText); 
        }
    });
});



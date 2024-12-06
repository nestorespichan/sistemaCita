$(".tablas").on("click", ".btnEditar", function () {
    let id = $(this).attr("id");
    let datos = new FormData();
    datos.append("id", id);
    $.ajax({
        url: "ajax/especialista.php",
        type: "POST",
        data: datos,
        processData: false,
        contentType: false,
        dataType: "json",
        success: function (respuesta) {
          console.log(respuesta);
            if (respuesta.status === "success") {
                console.log("Datos del servidor:", respuesta.data);
            } else {
                console.error("Error del servidor:", respuesta.message);
            }
        },
        error: function (xhr, textStatus, errorThrown) {
            //console.error("Error AJAX:", textStatus, errorThrown);
            console.log("Respuesta del servidor:", xhr.responseText); 
        }
    });
});



$(".tablas").on("click", ".btnEliminar", function () {
    let id = $(this).attr("id");
    let datos = new FormData();
    datos.append("idBorrar", id);
    $.ajax({
        url: "ajax/especialista.php",
        type: "POST",
        data: datos,
        processData: false,
        contentType: false,
        dataType: "json",
        success: function (respuesta) {
            if (respuesta.status === "success") {
                alert("Especialista eliminado correctamente.");
                window.location = "especialista";
            } else {
                console.error("Error del servidor:", respuesta.message);
                alert("No se pudo eliminar el especialista.");
            }
        },
        error: function (xhr, textStatus, errorThrown) {
            console.error("Error AJAX:", textStatus, errorThrown);
            console.error("Respuesta del servidor:", xhr.responseText);
            alert("Ocurrió un error al intentar eliminar el especialista.");
        }
    });
});



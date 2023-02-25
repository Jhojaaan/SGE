
console.log(`${urlPagina}a-profesores`);
if (window.location.href == `${urlPagina}/a-profesores/` ||
    window.location.href == `${urlPagina}a-profesores`) {
    /*============================================
        CARGAR TABLA DE PROFESORES
    ==============================================*/
    
    const TablaProfesores = () => {
        // Quitar datatable
        $(`#tablaProfesores`).dataTable().fnDestroy();
        // Borrar datos
        $(`#tbodyProfesores`).html("");
    
        let datos = new FormData();
        datos.append(`TablaProfesores`, "ok");
    
        $.ajax({
            type: "POST",
            url: `${urlPagina}ajax/administracion.ajax.php`,
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            // dataType: "json",
            success: function (response) {

                if (response != "" && response != null) {
                    $(`#tbodyProfesores`).html(response);
                } else {
                    $(`#tbodyProfesores`).html("");
                }
    
                /* ===================================================
                                                INICIALIZAR DATATABLE PUESTO QUE ESTO CARGA POR AJAX
                                                ===================================================*/
                var buttons = [
                    {
                        extend: "excel",
                        className: "btn-success",
                        text: '<i class="far fa-file-excel"></i> Exportar',
                    },
                ];
                var table = dataTableCustom(`#tablaProfesores`, buttons);
            },
        });
    };
    TablaProfesores();
    
    /*============================================
        ENVIO DEL FORMULARIO DE PROFESOR
    ==============================================*/
    $("#profesores_form").submit(function (e) {
        e.preventDefault();
    
        let datosFrm = $(this).serializeArray();
    
        var datos = new FormData();
    
        datos.append("GuardarEditarProfesor", "ok");
    
        datosFrm.forEach((element) => {
            datos.append(element.name, element.value);
        });
    
        $.ajax({
            type: "POST",
            url: `${urlPagina}ajax/administracion.ajax.php`,
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            // dataType: "json",
            success: function (response) {
                if (response == "ok") {
                    //Borrar formulario
                    // $(this).trigger('reset');
                    $("#profesores_form").trigger("reset");

                    //Cerrarse el modal
                    $('#modal-nuevoprofesor').modal('hide');
                    
                    //ALERTA DE EXITO
                    Swal.fire({
                        icon: 'success',
                        showConfirmButton: true,
                        title: "Datos agregados correctamente",
                        confirmButtonText: "¡Cerrar!"
                    });
                    
                    //Recargarse la tabla
                    TablaProfesores();
                } else {
                    //ALERTA DE ERROR
                    Swal.fire({
                        icon: 'error',
                        showConfirmButton: true,
                        title: "Los datos no puedieron ser guardados correctamente, por favor intente de nuevo más tarde.",
                        confirmButtonText: "¡Cerrar!"
                    });
                }
            },
        });
    });

    /*============================================
        Click al editar profesor
    ==============================================*/
    $(document).on('click','.btn-editarProfesor',function(){
        let idProfesor = $(this).attr('idProfesor');
        
        var datos = new FormData();
        datos.append('DatosProfesorxId', "ok");
        datos.append('idProfesor', idProfesor);

        $.ajax({
            type: "POST",
            url: `${urlPagina}ajax/administracion.ajax.php`,
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function (response) {
                
                $("#idProfesor").val(response.idProfesor);
                $("#nombre").val(response.nombre);
                $("#documento").val(response.documento);
                $("#especialidad").val(response.especialidad);
                $("#experiencia").val(response.experiencia);
                $("#institucion").val(response.institucion);
                $("#salario").val(response.salario);


            },
        });

    });
}

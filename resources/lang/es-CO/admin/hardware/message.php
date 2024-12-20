<?php

return [

<<<<<<< HEAD
    'undeployable' 		=> 'ADVERTENCI<strong>ADVERTENCI </strong> Este activo ha sido marcado como actualmente no desplegable.
                        Si este estado ha cambiado, por favor actualice el estado del activo.',
    'does_not_exist' 	=> 'El recurso no existe.',
    'does_not_exist_or_not_requestable' => 'Ese activo no existe o no es solicitable.',
    'assoc_users'	 	=> 'Este activo está actualmente reservado a un usuario y no puede ser eliminado. Por favor, compruebe el activo primero y vuelva a intentarlo. ',

    'create' => [
        'error'   		=> 'El recurso no fue creado, por favor inténtalo de nuevo. :(',
        'success' 		=> 'Equipo creado con éxito. :)',
        'success_linked' => 'Activo con etiqueta :tag creado con éxito. <strong><a href=":link" style="color: white;">Haga clic aquí para ver</a></strong>.',
    ],

    'update' => [
        'error'   			=> 'Equipo no actualizado, por favor inténtalo de nuevo',
        'success' 			=> 'Equipo actualizado correctamente.',
        'nothing_updated'	=>  'No se seleccionaron campos, por lo que no se actualizó nada.',
        'no_assets_selected'  =>  'Ningún recurso fue seleccionado, por lo que no se actualizó nada.',
    ],

    'restore' => [
        'error'   		=> 'Equipo no restaurado, por favor inténtalo de nuevo',
        'success' 		=> 'Equipo restaurado con éxito.',
        'bulk_success' 		=> 'Equipo restaurado con éxito.',
=======
    'undeployable' 		 => '<strong>Advertencia:</strong> Este activo actualmente está marcado como no utilizable. Si este estado ha cambiado, por favor, actualice el estado del activo.',
    'does_not_exist' 	 => 'El recurso no existe.',
    'does_not_exist_var' => 'Activo con placa :asset_tag no encontrado.',
    'no_tag' 	         => 'No se ha proporcionado ninguna placa de activo.',
    'does_not_exist_or_not_requestable' => 'Ese activo no existe o no puede ser solicitado.',
    'assoc_users'	 	 => 'Actualmente este activo está asignado a un usuario y no puede ser eliminado. Por favor, primero ingrese el activo y vuelva a intentarlo. ',
    'warning_audit_date_mismatch' 	=> 'La próxima fecha de auditoría de este activo (:next_audit_date) es anterior a la última fecha de auditoría (:last_audit_date). Por favor, actualice la próxima fecha de auditoría.',
    'labels_generated'   => 'Las etiquetas fueron generadas exitosamente.',
    'error_generating_labels' => 'Error en la generación de etiquetas.',
    'no_assets_selected' => 'No se han seleccionado activos.',

    'create' => [
        'error'   		=> 'El activo no fue creado, por favor, inténtelo de nuevo. :(',
        'success' 		=> 'Activo creado con éxito. :)',
        'success_linked' => 'Activo con placa :tag creado con éxito. <strong><a href=":link" style="color: white;">Haga clic aquí para ver</a></strong>.',
        'multi_success_linked' => 'Activo con etiqueta :links fue creado exitosamente.|:count activos fueron creados correctamente. :links.',
        'partial_failure' => 'No se ha podido crear un activo: Motivo: :failures|No se pudieron crear :count activos. Motivos: :faiulres',
    ],

    'update' => [
        'error'   			=> 'El activo no pudo ser actualizado, por favor inténtelo de nuevo',
        'success' 			=> 'Equipo actualizado correctamente.',
        'encrypted_warning' => 'El activo se actualizó correctamente, pero los campos personalizados cifrados no lo hicieron debido a los permisos',
        'nothing_updated'	=>  'Ningún campo fue seleccionado, por lo que no se actualizó nada.',
        'no_assets_selected'  =>  'Ningún activo fue seleccionado, por lo que no se actualizó nada.',
        'assets_do_not_exist_or_are_invalid' => 'Los activos seleccionados no se pueden actualizar.',
    ],

    'restore' => [
        'error'   		=> 'El activo no fue restaurado, por favor inténtelo nuevamente',
        'success' 		=> 'Activo restaurado exitosamente.',
        'bulk_success' 		=> 'Activo restaurado exitosamente.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
        'nothing_updated'   => 'No se seleccionaron activos, por lo que no se restauró nada.', 
    ],

    'audit' => [
<<<<<<< HEAD
        'error'   		=> 'La auditoría de activos no tuvo éxito. Por favor, inténtalo de nuevo.',
        'success' 		=> 'Auditoría de activos registrada con éxito.',
=======
        'error'   		=> 'Auditoría de activos fallida: :error ',
        'success' 		=> 'Auditoría de activos registrada correctamente.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    ],


    'deletefile' => [
<<<<<<< HEAD
        'error'   => 'Archivo no eliminado. Vuelve a intentarlo.',
=======
        'error'   => 'Archivo no eliminado. Por favor inténtelo nuevamente.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
        'success' => 'Archivo eliminado correctamente.',
    ],

    'upload' => [
<<<<<<< HEAD
        'error'   => 'Archivo(s) no cargados. Por favor, inténtelo de nuevo.',
        'success' => 'Archivo(s) cargados correctamente.',
        'nofiles' => 'No has seleccionado ningún archivo para subir, o el archivo que estás intentando subir es demasiado grande',
        'invalidfiles' => 'Uno o más de sus archivos es demasiado grande o es un tipo de archivo que no está permitido. Los tipos de archivo permitidos son png, gif, jpg, doc, docx, pdf y txt.',
    ],

    'import' => [
        'error'                 => 'Algunos artículos no importaron correctamente.',
        'errorDetail'           => 'Los siguientes artículos no fueron importados debido a errores.',
        'success'               => 'Tu archivo ha sido importado',
        'file_delete_success'   => 'Su archivo se ha eliminado correctamente',
        'file_delete_error'      => 'El archivo no pudo ser eliminado',
        'file_missing' => 'Falta el archivo seleccionado',
        'header_row_has_malformed_characters' => 'Uno o más atributos en la fila del encabezado contienen caracteres UTF-8 mal formados',
        'content_row_has_malformed_characters' => 'Uno o más atributos en la primera fila de contenido contienen caracteres UTF-8 mal formados',
=======
        'error'   => 'Archivo(s) no cargado(s). Por favor, inténtelo nuevamente.',
        'success' => 'Archivo(s) cargado(s) exitosamente.',
        'nofiles' => 'No seleccionó ningún archivo para ser cargado, o el archivo que está tratando de cargar es demasiado grande',
        'invalidfiles' => 'Uno o más de sus archivos son demasiado grandes o son de un tipo de archivo que no está permitido. Los tipos de archivo permitidos son png, gif, jpg, doc, docx, pdf y txt.',
    ],

    'import' => [
        'import_button'         => 'Importar',
        'error'                 => 'Algunos elementos no se pudieron importar correctamente.',
        'errorDetail'           => 'Los siguientes elementos no fueron importados debido a errores.',
        'success'               => 'Su archivo ha sido importado',
        'file_delete_success'   => 'Su archivo se ha eliminado correctamente',
        'file_delete_error'      => 'El archivo no se pudo eliminar',
        'file_missing' => 'Falta el archivo seleccionado',
        'file_already_deleted' => 'El archivo seleccionado ya fue eliminado',
        'header_row_has_malformed_characters' => 'Uno o más atributos en la fila del encabezado contienen caracteres UTF-8 mal formados',
        'content_row_has_malformed_characters' => 'Uno o más atributos en la primera fila contienen caracteres UTF-8 mal formados',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    ],


    'delete' => [
<<<<<<< HEAD
        'confirm'   	=> '¿Está seguro que desea eliminar este recurso?',
        'error'   		=> 'Hubo un problema al eliminar el activo. Por favor, inténtelo de nuevo.',
        'nothing_updated'   => 'No se seleccionaron activos, por lo que no se eliminó nada.',
        'success' 		=> 'El recurso se ha eliminado correctamente.',
    ],

    'checkout' => [
        'error'   		=> 'El recurso no fue retirado, por favor inténtalo de nuevo',
        'success' 		=> 'Equipo retirado con éxito.',
        'user_does_not_exist' => 'Este usuario es inválido. Por favor, inténtalo de nuevo.',
        'not_available' => '¡Ese equipo no está disponible para asignar!',
        'no_assets_selected' => 'Debes seleccionar al menos un equipo de la lista',
=======
        'confirm'   	=> '¿Está seguro de que desea eliminar este activo?',
        'error'   		=> 'Hubo un problema al eliminar el activo. Por favor, inténtelo de nuevo.',
        'nothing_updated'   => 'No se seleccionaron activos, por lo que no se eliminó nada.',
        'success' 		=> 'El activo se ha eliminado correctamente.',
    ],

    'checkout' => [
        'error'   		=> 'El activo no fue asignado, por favor inténtelo de nuevo',
        'success' 		=> 'Equipo asignado correctamente.',
        'user_does_not_exist' => 'Este usuario no es correcto. Por favor, inténtelo de nuevo.',
        'not_available' => '¡Ese equipo no está disponible para ser asignado!',
        'no_assets_selected' => 'Debe seleccionar al menos un activo de la lista',
    ],

    'multi-checkout' => [
        'error'   => 'El activo no fue asignado, por favor, intente nuevamente|Los activos no fueron asignados, por favor, intente nuevamente',
        'success' => 'El activo fue asignado correctamente|Los activos fueron asignados correctamente.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    ],

    'checkin' => [
        'error'   		=> 'El activo no se pudo ingresar, por favor inténtelo de nuevo',
        'success' 		=> 'El activo fue ingresado exitosamente.',
        'user_does_not_exist' => 'Este usuario no es correcto. Por favor, inténtelo de nuevo.',
        'already_checked_in'  => 'El equipo ya ha sido recibido.',

    ],

    'requests' => [
        'error'   		=> 'El activo no pudo ser solicitado, por favor inténtelo de nuevo',
        'success' 		=> 'Activo solicitado correctamente.',
        'canceled'      => 'La solicitud de asignación fue cancelada de forma exitosa',
    ],

];

<?php

return [
    'about_assets_title'           => 'Acerca de los activos',
    'about_assets_text'            => 'Los activos son artículos rastreados por número de serie o placa de activo.  Suelen ser artículos de alto valor en los que es importante identificar un elemento específico.',
    'archived'  				=> 'Archivado',
    'asset'  					=> 'Activo',
    'bulk_checkout'             => 'Asignar activos',
    'bulk_checkin'              => 'Ingresar activos',
    'checkin'  					=> 'Ingresar activo',
    'checkout'  				=> 'Asignar activo',
    'clone'  					=> 'Clonar activo',
    'deployable'  				=> 'Utilizable',
    'deleted'  					=> 'Este activo fue eliminado.',
<<<<<<< HEAD
    'delete_confirm'            => '¿Está seguro de que desea eliminar este recurso?',
    'edit'  					=> 'Editar Equipo',
    'model_deleted'  			=> 'Este Modelo de activo fue eliminado. Debes restaurar este modelo antes de poder restaurar el Activo.',
    'model_invalid'             => 'El modelo de este activo no es válido.',
    'model_invalid_fix'         => 'El Activo debe ser editado para corregir esto antes de intentar retirarlo o asignarlo.',
    'requestable'               => 'Requerible',
=======
    'delete_confirm'            => '¿Está seguro de que desea eliminar este activo?',
    'edit'  					=> 'Editar activo',
    'model_deleted'  			=> 'Este modelo de activo ha sido eliminado. Debe restaurar este modelo antes de poder restaurar el activo.',
    'model_invalid'             => 'Este modelo para este activo es inválido.',
    'model_invalid_fix'         => 'El activo debe ser actualizado, use un modelo de activo válido antes de intentar ingresarlo, asignarlo o auditarlo.',
    'requestable'               => 'Puede solicitarse',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'requested'				    => 'Solicitado',
    'not_requestable'           => 'No puede solicitarse',
    'requestable_status_warning' => 'No cambiar el estado solicitable',
    'restore'  					=> 'Restaurar activo',
    'pending'  					=> 'Pendiente',
<<<<<<< HEAD
    'undeployable'  			=> 'No desplegable',
    'undeployable_tooltip'  	=> 'Este activo tiene una etiqueta de estado que no es desplegable y no puede ser revisado en este momento.',
    'view'  					=> 'Ver Equipo',
=======
    'undeployable'  			=> 'No utilizable',
    'undeployable_tooltip'  	=> 'Este activo tiene una etiqueta de estado que es no utilizable y no puede ser asignado en este momento.',
    'view'  					=> 'Ver activo',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'csv_error' => 'Tiene un error en su archivo CSV:',
    'import_text' => '<p>Cargue un archivo CSV que contenga el historial de los activos. Los activos y los usuarios DEBEN existir ya en el sistema, o serán omitidos. La comparación de activos para importar el historial se realiza con la placa del activo. Intentaremos encontrar un usuario usando el nombre del usuario que proporcione y los criterios que seleccione a continuación. Si no selecciona ningún criterio, el sistema simplemente intentará usar el formato de nombre de usuario configurado en <code>Administrador &gt; Configuración General</code>.</p><p>Los campos incluidos en el CSV deben coincidir con los encabezados: <strong>Asset Tag, Name, Checkout Date, Checkin Date</strong>. Cualquier campo adicional será ignorado.</p><p>Checkin Date(Fecha de recepción): dejar en blanco o usar fechas futuras asignará los elementos al usuario asociado. Excluir la columna Checkin Date creará una fecha de recepción con la fecha de hoy.</p>    ',
    'csv_import_match_f-l' => 'Intente asociar usuarios usando el formato <strong>nombre.apellido</strong> (<code>jane.smith</code>)',
    'csv_import_match_initial_last' => 'Intente asociar los usuarios usando el formato <strong>inicial del nombre y apellido</strong> (<code>jsmith</code>)',
    'csv_import_match_first' => 'Intentar asociar los usuarios usando el formato <strong>primer nombre</strong> (<code>jane</code>)',
    'csv_import_match_email' => 'Intente asociar los usuarios usando <strong>correo electrónico</strong> como nombre de usuario',
    'csv_import_match_username' => 'Intente asociar los usuarios usando <strong>nombre de usuario</strong>',
    'error_messages' => 'Mensajes de error:',
    'success_messages' => 'Mensajes de éxito:',
    'alert_details' => 'Por favor vea abajo para más detalles.',
    'custom_export' => 'Personalizar exportación',
<<<<<<< HEAD
    'mfg_warranty_lookup' => 'Búsqueda del estado de Garantía para :manufacturer',
    'user_department' => 'Departamento de Usuario',
=======
    'mfg_warranty_lookup' => 'Búsqueda del estado de garantía para :manufacturer',
    'user_department' => 'Departamento del usuario',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
];

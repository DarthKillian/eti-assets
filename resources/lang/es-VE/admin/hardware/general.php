<?php

return [
    'about_assets_title'           => 'Acerca de los activos',
    'about_assets_text'            => 'Los activos son artículos rastreados por número de serie o placa de activo.  Suelen ser artículos de alto valor en los que es importante identificar un elemento específico.',
    'archived'  				=> 'Archivado',
    'asset'  					=> 'Activo',
<<<<<<< HEAD
    'bulk_checkout'             => 'Activos de pago',
    'bulk_checkin'              => 'Checkin Assets',
    'checkin'  					=> 'Ingresar Activo',
    'checkout'  				=> 'Retirar Activo',
    'clone'  					=> 'Clonar Activo',
    'deployable'  				=> 'Enviable',
    'deleted'  					=> 'Este activo fue eliminado.',
    'delete_confirm'            => '¿Está seguro de que desea eliminar este recurso?',
    'edit'  					=> 'Editar Activo',
    'model_deleted'  			=> 'Este modelo de activos ha sido eliminado. Debe restaurar el modelo antes de poder restaurar el activo.',
    'model_invalid'             => 'El modelo de este activo no es válido.',
    'model_invalid_fix'         => 'El Activo debe ser editado para corregir esto antes de intentar comprobarlo dentro o fuera.',
    'requestable'               => 'Solicitable',
=======
    'bulk_checkout'             => 'Asignar activos',
    'bulk_checkin'              => 'Ingresar activos',
    'checkin'  					=> 'Ingresar activo',
    'checkout'  				=> 'Asignar activo',
    'clone'  					=> 'Clonar activo',
    'deployable'  				=> 'Utilizable',
    'deleted'  					=> 'Este activo fue eliminado.',
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
    'undeployable'  			=> 'No enviable',
    'undeployable_tooltip'  	=> 'Este activo tiene una etiqueta de estado que no es desplegable y no puede ser revisado en este momento.',
    'view'  					=> 'Ver Activo',
    'csv_error' => 'Tiene un error en su archivo CSV:',
    'import_text' => '
    <p>
    Sube un CSV que contiene historial de activos. Los activos y los usuarios DEBEN existir en el sistema, o se omitirán. Los activos coincidentes para importar el historial ocurren contra la etiqueta de activos. Intentaremos encontrar un usuario que coincida con el nombre del usuario que proporciones, y los criterios que seleccionas a continuación. Si no selecciona ningún criterio a continuación, simplemente tratará de coincidir con el formato de nombre de usuario que configuraste en la Configuración General de Admin &gt; .
    </p>

    <p>Los campos incluidos en el CSV deben coincidir con los encabezados: <strong>Etiqueta de activos, Nombre, Fecha de salida, Fecha de comprobación</strong>. Cualquier campo adicional será ignorado. </p>

    <p>Fecha de Checkin: las fechas de check-in en blanco o futuro se encargarán de los elementos al usuario asociado. Excluyendo la columna Fecha de Checkin creará una fecha de check-in con la fecha de hoy.</p>
    ',
    'csv_import_match_f-l' => 'Intentar coincidir con los usuarios por el formato firstname.lastname (jane.smith)',
    'csv_import_match_initial_last' => 'Intentar coincidir los usuarios con la inicial del primer apellido (jsmith) formato',
    'csv_import_match_first' => 'Intentar coincidir con los usuarios por nombre de usuario (jane) formato',
    'csv_import_match_email' => 'Intentar coincidir con los usuarios por correo electrónico como nombre de usuario',
    'csv_import_match_username' => 'Intentar coincidir usuarios por nombre de usuario',
=======
    'undeployable'  			=> 'No utilizable',
    'undeployable_tooltip'  	=> 'Este activo tiene una etiqueta de estado que es no utilizable y no puede ser asignado en este momento.',
    'view'  					=> 'Ver activo',
    'csv_error' => 'Tiene un error en su archivo CSV:',
    'import_text' => '<p>Cargue un archivo CSV que contenga el historial de los activos. Los activos y los usuarios DEBEN existir ya en el sistema, o serán omitidos. La comparación de activos para importar el historial se realiza con la placa del activo. Intentaremos encontrar un usuario usando el nombre del usuario que proporcione y los criterios que seleccione a continuación. Si no selecciona ningún criterio, el sistema simplemente intentará usar el formato de nombre de usuario configurado en <code>Administrador &gt; Configuración General</code>.</p><p>Los campos incluidos en el CSV deben coincidir con los encabezados: <strong>Asset Tag, Name, Checkout Date, Checkin Date</strong>. Cualquier campo adicional será ignorado.</p><p>Checkin Date(Fecha de recepción): dejar en blanco o usar fechas futuras asignará los elementos al usuario asociado. Excluir la columna Checkin Date creará una fecha de recepción con la fecha de hoy.</p>    ',
    'csv_import_match_f-l' => 'Intente asociar usuarios usando el formato <strong>nombre.apellido</strong> (<code>jane.smith</code>)',
    'csv_import_match_initial_last' => 'Intente asociar los usuarios usando el formato <strong>inicial del nombre y apellido</strong> (<code>jsmith</code>)',
    'csv_import_match_first' => 'Intentar asociar los usuarios usando el formato <strong>primer nombre</strong> (<code>jane</code>)',
    'csv_import_match_email' => 'Intente asociar los usuarios usando <strong>correo electrónico</strong> como nombre de usuario',
    'csv_import_match_username' => 'Intente asociar los usuarios usando <strong>nombre de usuario</strong>',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'error_messages' => 'Mensajes de error:',
    'success_messages' => 'Mensajes de éxito:',
    'alert_details' => 'Por favor vea abajo para más detalles.',
    'custom_export' => 'Personalizar exportación',
<<<<<<< HEAD
    'mfg_warranty_lookup' => ':fabricante Garantía Estado Búsqueda',
    'user_department' => 'Departamento de Usuario',
=======
    'mfg_warranty_lookup' => 'Búsqueda del estado de garantía para :manufacturer',
    'user_department' => 'Departamento del usuario',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
];

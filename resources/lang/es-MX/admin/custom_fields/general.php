<?php

return [
    'custom_fields'		        => 'Campos personalizados',
    'manage'                    => 'Administrar',
    'field'		                => 'Campo',
<<<<<<< HEAD
    'about_fieldsets_title'		=> 'Acerca de los campos personalizados',
    'about_fieldsets_text'		=> 'Los conjuntos de campos permiten crear grupos de campos personalizados que son frecuentemente reutilizados para tipos específicos de modelos de activos.',
=======
    'about_fieldsets_title'		=> 'Acerca de los grupos de campos',
    'about_fieldsets_text'		=> 'Los grupos de campos le permiten agrupar campos personalizados que se reutilizan frecuentemente para determinados modelos de activos.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'custom_format'             => 'Expresión regular personalizada...',
    'encrypt_field'      	        => 'Cifrar el valor de este campo en la base de datos',
    'encrypt_field_help'      => 'ADVERTENCIA: Cifrar un campo hace que no se pueda buscar.',
    'encrypted'      	        => 'Cifrado',
    'fieldset'      	        => 'Grupo de campos',
    'qty_fields'      	      => 'Campos de cantidad',
    'fieldsets'      	        => 'Grupos de campos',
    'fieldset_name'           => 'Nombre del grupo de campos',
    'field_name'              => 'Nombre del campo',
    'field_values'            => 'Valores de los campos',
    'field_values_help'       => 'Agregue opciones seleccionables, una por línea. Se ignorarán las líneas en blanco que no sean la primera.',
    'field_element'           => 'Elemento de formulario',
    'field_element_short'     => 'Elemento',
    'field_format'            => 'Formato',
    'field_custom_format'     => 'Expresión regular personalizada',
    'field_custom_format_help'     => 'Este campo le permite usar una expresión regular para la validación. Debería empezar con "regex:" - por ejemplo, para validar que un valor de campo personalizado contiene un IMEI válido (15 dígitos numéricos), podría usar <code>regex:/^[0-9]{15}$/</code>.',
    'required'   		          => 'Obligatorio',
    'req'   		              => 'Obl.',
    'used_by_models'   		    => 'Usado por los modelos',
    'order'   		            => 'Orden',
    'create_fieldset'         => 'Nuevo grupo de campos',
<<<<<<< HEAD
    'update_fieldset'         => 'Actualizar Grupo de Campos Personalizados',
    'fieldset_does_not_exist'   => 'El Grupo de Campos :id no existe',
    'fieldset_updated'         => 'Se ha actualizado el Grupo de Campos',
    'create_fieldset_title' => 'Crear un nuevo conjunto de campos',
    'create_field'            => 'Nuevo campo personalizado',
    'create_field_title' => 'Crear un nuevo campo personalizado',
    'value_encrypted'      	        => 'El valor de este campo está encriptado en la base de datos. Solo los administradores pueden ver el valor desencriptado',
    'show_in_email'     => 'Include the value of this field in checkout emails sent to the user? Encrypted fields cannot be included in emails',
    'show_in_email_short'     => 'Incluye en correos electrónicos.',
=======
    'update_fieldset'         => 'Actualizar grupo de campos',
    'fieldset_does_not_exist'   => 'El grupo de campos :id no existe',
    'fieldset_updated'         => 'Se actualizó el grupo de campos',
    'create_fieldset_title' => 'Crear un nuevo grupo de campos',
    'create_field'            => 'Nuevo campo personalizado',
    'create_field_title' => 'Crear un nuevo campo personalizado',
    'value_encrypted'      	        => 'El valor de este campo está cifrado en la base de datos. Solo los administradores pueden ver el valor descifrado',
    'show_in_email'     => '¿Incluir el valor de este campo en los correos de asignación enviados al usuario? Los campos cifrados no se pueden incluir en los correos electrónicos',
    'show_in_email_short'     => 'Incluir en los correos electrónicos.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'help_text' => 'Texto de ayuda',
    'help_text_description' => 'Este es un texto opcional que aparecerá debajo de los campos del formulario cuando se edite un activo para proporcionar contexto adicional.',
    'about_custom_fields_title' => 'Acerca de los campos personalizados',
    'about_custom_fields_text' => 'Los campos personalizados te permiten agregar atributos arbritarios a los activos.',
<<<<<<< HEAD
    'add_field_to_fieldset' => 'Añadir campo al conjunto de campos',
    'make_optional' => 'Requerido - haz clic para hacerlo opcional',
    'make_required' => 'Opcional - haz clic para hacerlo requerido',
    'reorder' => 'Reordenar',
    'db_field' => 'Campo de Base de Datos',
    'db_convert_warning' => 'ADVERTENCIA. Este campo está en la tabla de campos personalizados como <code>:db_column</code> pero debe ser <code>:expected</code>.',
    'is_unique' => 'Este valor debe ser único a través de todos los activos',
    'unique' => 'Único',
    'display_in_user_view' => 'Permitir al usuario asignado ver estos valores en su página Ver Recursos asignados',
    'display_in_user_view_table' => 'Visible al Usuario',
    'auto_add_to_fieldsets' => 'Añadir automáticamente a cada nuevo conjunto de campos',
    'add_to_preexisting_fieldsets' => 'Añadir a cualquier conjunto de campos existente',
    'show_in_listview' => 'Mostrar por defecto en las vistas de lista. Los usuarios autorizados aún podrán mostrar/ocultar a través del selector de columnas',
    'show_in_listview_short' => 'Mostrar en listas',
    'show_in_requestable_list_short' => 'Mostrar en la lista de activos solicitables',
    'show_in_requestable_list' => 'Mostrar el valor en la lista de activos solicitables. Los campos cifrados no se mostrarán',
=======
    'add_field_to_fieldset' => 'Añadir campo al grupo de campos',
    'make_optional' => 'Obligatorio - haga clic para hacerlo opcional',
    'make_required' => 'Opcional - haga clic para que sea obligatorio',
    'reorder' => 'Reordenar',
    'db_field' => 'Campo en base de datos',
    'db_convert_warning' => 'ADVERTENCIA. Este campo está en la tabla de campos personalizados como <code>:db_column</code> pero debe ser <code>:expected</code>.',
    'is_unique' => 'Este valor debe ser único para todos los activos',
    'unique' => 'Único',
    'display_in_user_view' => 'Permitir al usuario ver estos valores en la página "Ver activos asignados"',
    'display_in_user_view_table' => 'Visible para el usuario',
    'auto_add_to_fieldsets' => 'Añadir automáticamente a cada nuevo grupo de campos',
    'add_to_preexisting_fieldsets' => 'Añadir a cualquier grupo de campos existente',
    'show_in_listview' => 'Mostrar por defecto en las consultas. Los usuarios autorizados podrán mostrar/ocultar a través del selector de columnas',
    'show_in_listview_short' => 'Mostrar en las listas',
    'show_in_requestable_list_short' => 'Mostrar en la lista de activos que se pueden solicitar',
    'show_in_requestable_list' => 'Mostrar el valor en la lista de activos que se pueden solicitar. Los campos cifrados no se mostrarán',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'encrypted_options' => 'Este campo está cifrado, por lo que algunas opciones de visualización no estarán disponibles.',

];

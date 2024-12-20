<?php

return array(

<<<<<<< HEAD
    'deleted' => 'Modelo de recurso eliminado',
    'does_not_exist' => 'Modelo inexistente.',
    'no_association' => '¡ATENCIÓN! ¡El modelo de activo para este artículo no es válido o falta!',
    'no_association_fix' => 'Esto romperá cosas de formas extrañas y horribles. Edite este activo ahora para asignarle un modelo.',
    'assoc_users'	 => 'Este modelo está asociado a uno o más equipos actualmente, por lo que no puede ser eliminado. Por favor elimina los equipos asociados, e inténtalo de nuevo. ',

=======
    'deleted' => 'Se eliminó el modelo del activo',
    'does_not_exist' => 'Modelo inexistente.',
    'no_association' => '¡ADVERTENCIA! ¡El modelo de activo para este artículo no es válido o no existe!',
    'no_association_fix' => 'Esto causará problemas raros y horribles. Edite este activo ahora para asignarle un modelo.',
    'assoc_users'	 => 'Este modelo está asociado a uno o más activos y no puede ser eliminado. Por favor, elimine los activos y vuelva a intentarlo. ',
    'invalid_category_type' => 'El tipo de esta categoría debe ser categoría de activos.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65

    'create' => array(
        'error'   => 'El modelo no fue creado, por favor inténtelo de nuevo.',
        'success' => 'El modelo fue creado exitosamente.',
        'duplicate_set' => 'Ya existe un modelo de activo con el mismo nombre, fabricante y número de modelo.',
    ),

    'update' => array(
<<<<<<< HEAD
        'error'   => 'El modelo no pudo ser actualizado, por favor inténtalo de nuevo',
=======
        'error'   => 'El modelo no pudo ser actualizado, por favor inténtelo de nuevo',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
        'success' => 'El modelo fue actualizado exitosamente.',
    ),

    'delete' => array(
        'confirm'   => '¿Está seguro de que desea eliminar este modelo de activo?',
        'error'   => 'Hubo un problema eliminando el modelo. Por favor, inténtelo de nuevo.',
        'success' => 'El modelo fue eliminado exitosamente.'
    ),

    'restore' => array(
        'error'   		=> 'El modelo no fue restaurado, por favor intente nuevamente',
        'success' 		=> 'El modelo fue restaurado exitosamente.'
    ),

    'bulkedit' => array(
<<<<<<< HEAD
        'error'   		=> 'Ningún campo ha cambiado, no hay nada que actualizar.',
        'success' 		=> 'Modelo actualizado correctamente. |:model_count modelos actualizados correctamente.',
        'warn'          => 'Está a punto de actualizar las propiedades del siguiente modelo: |Está a punto de editar las propiedades de los siguientes :model_count modelos:',
=======
        'error'   		=> 'Ningún cambio fue cambiado, así que nada se actualizó.',
        'success' 		=> 'Modelo actualizado correctamente. |:model_count modelos actualizados correctamente.',
        'warn'          => 'Está a punto de actualizar las propiedades del siguiente modelo:|Está a punto de editar las propiedades de los siguientes :model_count modelos:',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65

    ),

    'bulkdelete' => array(
        'error'   		    => 'Ningún modelo fue seleccionado, no se eliminó nada.',
        'success' 		    => 'Modelo eliminado!|:success_count modelos eliminados!',
<<<<<<< HEAD
        'success_partial' 	=> ':success_count modelos fueron eliminados, sin embargo, :fail_count no pudieron ser eliminados debido a que aún tienen equipos asociados a ellos.'
=======
        'success_partial' 	=> ':success_count modelo(s) fueron eliminados, sin embargo, :fail_count no pudieron ser eliminados debido a que aún tienen activos asociados a ellos.'
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    ),

);

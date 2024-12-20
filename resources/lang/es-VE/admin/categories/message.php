<?php

return array(

    'does_not_exist' => 'La categoría no existe.',
    'assoc_models'	 => 'Esta categoría está asociada actualmente con al menos un modelo y no puede ser eliminada. Actualice los modelos para que ya no hagan referencia a esta categoría e inténtelo de nuevo. ',
    'assoc_items'	 => 'Esta categoría está asociada actualmente con al menos un: asset_type y no puede ser eliminada. Actualice su :asset_type para que ya no haga referencia a esta categoría e inténtelo de nuevo. ',

    'create' => array(
        'error'   => 'La categoría no fue creada, por favor inténtelo de nuevo.',
        'success' => 'Categoría creada exitosamente.'
    ),

    'update' => array(
<<<<<<< HEAD
        'error'   => 'La categoría no fue actualizada, por favor inténtalo de nuevo',
        'success' => 'Categoría actualizada correctamente.',
        'cannot_change_category_type'   => 'No se puede cambiar el tipo de categoría una vez que se ha creado',
=======
        'error'   => 'La categoría no se actualizó, por favor, inténtelo de nuevo',
        'success' => 'Categoría actualizada exitosamente.',
        'cannot_change_category_type'   => 'No puede cambiar el tipo de categoría una vez que se ha creado',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    ),

    'delete' => array(
        'confirm'   => '¿Está seguro de que desea eliminar esta categoría?',
        'error'   => 'Hubo un problema eliminando la categoría. Inténtelo de nuevo.',
        'success' => 'La categoría fue eliminada exitosamente.'
    )

);

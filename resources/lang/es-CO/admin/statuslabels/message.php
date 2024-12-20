<?php

return [

<<<<<<< HEAD
    'does_not_exist' => 'Etiqueta de Estado inexistente.',
    'deleted_label' => 'Etiqueta de estado borrado',
    'assoc_assets'	 => 'Esta etiqueta de estado está asociada con al menos un equipo actualmente, por lo que no puede ser eliminada. Por favor actualiza tus equipos para que no hagan uso de esta etiqueta, e inténtalo de nuevo. ',
=======
    'does_not_exist' => 'Etiqueta de estado no existe.',
    'deleted_label' => 'Etiqueta de estado borrado',
    'assoc_assets'	 => 'Esta etiqueta de estado está actualmente asociada con al menos un activo y no se puede eliminar. Por favor actualice sus activos para que ya no hagan referencia a este estado e inténtelo de nuevo. ',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65

    'create' => [
        'error'   => 'La etiqueta de estado no pudo ser creada, por favor inténtelo de nuevo.',
        'success' => 'La etiqueta de estado fue creada exitosamente.',
    ],

    'update' => [
        'error'   => 'La etiqueta de estado no se actualizó, por favor inténtelo de nuevo',
        'success' => 'La etiqueta de estado fue actualizada exitosamente.',
    ],

    'delete' => [
        'confirm'   => '¿Está seguro de que desea eliminar esta etiqueta de estado?',
        'error'   => 'Hubo un problema borrando la etiqueta de estado. Por favor, inténtelo de nuevo.',
        'success' => 'La etiqueta de estado fue eliminada de forma exitosa.',
    ],

    'help' => [
<<<<<<< HEAD
        'undeployable'   => 'Estos equipos no pueden ser asignados.',
        'deployable'   => 'Estos equipos pueden ser asignados. Una vez estén asignados, asumirán el meta estado de <i class="fas fa-circle text-blue"></i> <strong>Asignado</strong>.',
        'archived'   => 'Estos equipos no pueden ser asignados, y solo se mostrarán en la vista de Archivados. Esto es útil para retener información sobre equipos por razones de presupuesto/revisión histórica, mientras están fuera de la lista de equipos del día a día.',
        'pending'   => 'Estos equipos no pueden ser asignados, suele usarse para ítems que están en reparación, o que se espera que regresen a circulación eventualmente.',
=======
        'undeployable'   => 'Estos activos no pueden ser asignados.',
        'deployable'   => 'Estos activos pueden ser asignados. Una vez estén asignados, asumirán el meta estado de <i class="fas fa-circle text-blue"></i> <strong>Asignado</strong>.',
        'archived'   => 'Estos activos no pueden ser asignados y solo se mostrarán en la vista de Archivados. Esto es útil para mantener información de activos por razones de presupuesto o de revisión histórica y al mismo tiempo se excluyen de los activos que se pueden usar en el día a día.',
        'pending'   => 'Estos activos aún no pueden asignarse, y suelen utilizarse para elementos que están en reparación, pero que se espera que regresen a circulación.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    ],

];

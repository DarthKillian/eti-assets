<?php

return [

    'does_not_exist' => 'Etiqueta de estado no existe.',
    'deleted_label' => 'Etiqueta de estado borrado',
<<<<<<< HEAD
    'assoc_assets'	 => 'Esta etiqueta de estado está actualmente asociado con al menos un Activo y no puede ser borrada. Por favor, actualiza tus activos para no referenciar más este estado e inténtalo de nuevo. ',
=======
    'assoc_assets'	 => 'Esta etiqueta de estado está actualmente asociada con al menos un activo y no se puede eliminar. Por favor actualice sus activos para que ya no hagan referencia a este estado e inténtelo de nuevo. ',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65

    'create' => [
        'error'   => 'La etiqueta de estado no pudo ser creada, por favor inténtelo de nuevo.',
        'success' => 'La etiqueta de estado fue creada con éxito.',
    ],

    'update' => [
        'error'   => 'La etiqueta de estado no se actualizó, por favor inténtelo de nuevo',
        'success' => 'La etiqueta de estado fue actualizada exitosamente.',
    ],

    'delete' => [
        'confirm'   => '¿Está seguro de que desea eliminar esta etiqueta de estado?',
        'error'   => 'Hubo un problema borrando la etiqueta de estado. Por favor, inténtelo de nuevo.',
        'success' => 'La etiqueta de estado se ha eliminado con éxito.',
    ],

    'help' => [
<<<<<<< HEAD
        'undeployable'   => 'Estos activos no pueden asignarse a nadie.',
        'deployable'   => 'Estos activos pueden ser retirados. Una vez hayan sido asignados, asumirán el metaestado de <i class="fas fa-circle text-blue"></i><strong>Desplegados</strong>.',
        'archived'   => 'Estos activos no pueden ser asignados, y sólo se mostrarán en la vista archivada. Esto es útil para retener información acerca de activos para propósitos históricos o de presupuesto, pero manteniéndolos fuera de la lista de activos del día a día.',
        'pending'   => 'Estos activos no pueden ser asignados a nadie aún, usados a menudo para artículos que son para reparar pero se espera que vuelvan a circulación.',
=======
        'undeployable'   => 'Estos activos no pueden ser asignados.',
        'deployable'   => 'Estos activos pueden ser asignados. Una vez estén asignados, asumirán el meta estado de <i class="fas fa-circle text-blue"></i> <strong>Asignado</strong>.',
        'archived'   => 'Estos activos no pueden ser asignados y solo se mostrarán en la vista de Archivados. Esto es útil para mantener información de activos por razones de presupuesto o de revisión histórica y al mismo tiempo se excluyen de los activos que se pueden usar en el día a día.',
        'pending'   => 'Estos activos aún no pueden asignarse, y suelen utilizarse para elementos que están en reparación, pero que se espera que regresen a circulación.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    ],

];

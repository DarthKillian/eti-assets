<?php

return [

    'does_not_exist' => 'Etiqueta de estado no existe.',
    'deleted_label' => 'Etiqueta de estado borrado',
<<<<<<< HEAD
    'assoc_assets'	 => 'Esta etiqueta de estado esta actualmente asociado con al menos un activo y no se puede eliminar. Por favor actualice sus activos para ya no hacer referencia a este estado y vuelva a intentarlo. ',
=======
    'assoc_assets'	 => 'Esta etiqueta de estado está actualmente asociada con al menos un activo y no se puede eliminar. Por favor actualice sus activos para que ya no hagan referencia a este estado e inténtelo de nuevo. ',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65

    'create' => [
        'error'   => 'La etiqueta de estado no pudo ser creada, por favor inténtelo de nuevo.',
        'success' => 'Etiqueta de estado fue creada exitosamente.',
    ],

    'update' => [
        'error'   => 'La etiqueta de estado no se actualizó, por favor inténtelo de nuevo',
        'success' => 'La etiqueta de estado fue actualizada exitosamente.',
    ],

    'delete' => [
        'confirm'   => '¿Está seguro de que desea eliminar esta etiqueta de estado?',
        'error'   => 'Hubo un problema borrando la etiqueta de estado. Por favor, inténtelo de nuevo.',
        'success' => 'La etiqueta de estado se ha eliminado exitosamente.',
    ],

    'help' => [
        'undeployable'   => 'Estos activos no pueden ser asignados.',
        'deployable'   => 'Estos activos pueden ser asignados. Una vez estén asignados, asumirán el meta estado de <i class="fas fa-circle text-blue"></i> <strong>Asignado</strong>.',
        'archived'   => 'Estos activos no pueden ser asignados y solo se mostrarán en la vista de Archivados. Esto es útil para mantener información de activos por razones de presupuesto o de revisión histórica y al mismo tiempo se excluyen de los activos que se pueden usar en el día a día.',
        'pending'   => 'Estos activos aún no pueden asignarse, y suelen utilizarse para elementos que están en reparación, pero que se espera que regresen a circulación.',
    ],

];

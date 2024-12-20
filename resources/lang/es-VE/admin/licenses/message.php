<?php

return array(

    'does_not_exist' => 'La licencia no existe o no tiene permiso para verla.',
<<<<<<< HEAD
    'user_does_not_exist' => 'El usuario no existe.',
    'asset_does_not_exist' 	=> 'El activo que intentas asociar con esta licencia no existe.',
    'owner_doesnt_match_asset' => 'El activo al que estás intentando asociar con esta licencia está asignado a un usuario diferente al de la persona seleccionada para retirar.',
    'assoc_users'	 => 'Esta licencia está actualmente asignada a un usuario y no puede ser borrada. Por favor, revisa la licencia primero y luego intenta borrarla. ',
    'select_asset_or_person' => 'Debes seleccionar un activo o un usuario, pero no ambos.',
    'not_found' => 'Licencia no encontrada',
    'seats_available' => ':seat_count plazas disponibles',
=======
    'user_does_not_exist' => 'El usuario no existe o no tiene permiso para verlos.',
    'asset_does_not_exist' 	=> 'El activo que intenta asociar con esta licencia no existe.',
    'owner_doesnt_match_asset' => 'El activo que está intentando asignar con esta licencia está asignado a un usuario diferente al de la persona seleccionada de la lista.',
    'assoc_users'	 => 'Esta licencia está actualmente asignada a un usuario y no puede ser eliminada. Por favor, reciba primero la licencia y vuelva a intentarlo. ',
    'select_asset_or_person' => 'Debe seleccionar un activo o un usuario, pero no ambos.',
    'not_found' => 'Licencia no encontrada',
    'seats_available' => ':seat_count disponibles',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65


    'create' => array(
        'error'   => 'La licencia no fue creada, por favor inténtelo de nuevo.',
        'success' => 'Categoría creada correctamente.'
    ),

    'deletefile' => array(
        'error'   => 'Archivo no eliminado. Por favor, vuelva a intentarlo.',
        'success' => 'Archivo eliminado correctamente.',
    ),

    'upload' => array(
        'error'   => 'Archivo(s) no cargado(s). Por favor, inténtelo de nuevo.',
        'success' => 'Archivo(s) cargado correctamente.',
        'nofiles' => 'No seleccionó ningún archivo para ser cargado, o el archivo que seleccionó es demasiado grande',
        'invalidfiles' => 'Uno o más de sus archivos es demasiado grande o es un tipo de archivo que no está permitido. Los tipos de archivo permitidos son png, gif, jpg, jpeg, doc, docx, pdf, txt, zip, rar, rtf, xml y lic.',
    ),

    'update' => array(
        'error'   => 'La licencia no fue actualizada, por favor inténtelo de nuevo',
        'success' => 'Categoría actualizada correctamente.'
    ),

    'delete' => array(
        'confirm'   => '¿Está seguro de que desea eliminar esta licencia?',
        'error'   => 'Hubo un problema al eliminar la licencia. Por favor, inténtelo de nuevo.',
        'success' => 'La licencia se ha eliminado correctamente.'
    ),

    'checkout' => array(
        'error'   => 'Hubo un problema asignando la licencia. Por favor, inténtelo de nuevo.',
        'success' => 'La licencia fue asignada con éxito',
<<<<<<< HEAD
        'not_enough_seats' => 'No hay suficientes asientos de licencia disponibles para la compra',
=======
        'not_enough_seats' => 'No hay suficientes licencias disponibles para asignar',
        'mismatch' => 'La licencia proporcionada no coincide con la licencia seleccionada',
        'unavailable' => 'Esta licencia no está disponible para ser asignada.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    ),

    'checkin' => array(
        'error'   => 'Hubo un problema ingresando la licencia. Por favor, inténtelo de nuevo.',
        'success' => 'La licencia fue ingresada correctamente'
    ),

);

<?php

return array(

    'does_not_exist' => 'El accesorio [:id] no existe.',
    'not_found' => 'Ese accesorio no fue encontrado.',
<<<<<<< HEAD
    'assoc_users'	 => 'El accesorio actual tiene :count elementos entregados a usuarios. Por favor ingresa los accesorios e intenta de nuevo. ',
=======
    'assoc_users'	 => 'Este accesorio actualmente tiene :count elemento(s) asignado(s) a usuarios. Por favor realice el ingreso de los accesorios y vuelva a intentar. ',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65

    'create' => array(
        'error'   => 'El accesorio no fue creado, por favor inténtelo de nuevo.',
        'success' => 'Accesorio creado correctamente.'
    ),

    'update' => array(
        'error'   => 'El accesorio no fue actualizado, por favor, inténtelo de nuevo',
        'success' => 'El accesorio fue actualizado con éxito.'
    ),

    'delete' => array(
        'confirm'   => '¿Está seguro de que desea eliminar este accesorio?',
        'error'   => 'Hubo un problema eliminando el accesorio. Por favor, inténtelo de nuevo.',
        'success' => 'El accesorio se ha borrado con éxito.'
    ),

     'checkout' => array(
<<<<<<< HEAD
        'error'   		=> 'Equipo no ha sido retirado, inténtalo de nuevo',
        'success' 		=> 'El accesorio se ha retirado exitosamente.',
        'unavailable'   => 'El accesorio no está disponible para la compra. Compruebe la cantidad disponible',
        'user_does_not_exist' => 'Este usuario es inválido. Por favor, inténtalo de nuevo.'
=======
        'error'   		=> 'El accesorio no fue asignado, por favor vuelva a intentarlo',
        'success' 		=> 'Accesorio asignado correctamente.',
        'unavailable'   => 'El accesorio no está disponible para ser asignado. Compruebe la cantidad disponible',
        'user_does_not_exist' => 'Este usuario no es válido. Por favor, inténtelo de nuevo.',
         'checkout_qty' => array(
            'lte'  => 'En este momento solo existe un accesorio disponible de este tipo y está tratando de asignar :checkout_qty. Por favor, ajuste la cantidad asignada o el total de existencias de este accesorio e intente nuevamente.|Existen en total :number_currently_remaining accesorios disponibles y está tratando de asignar :checkout_qty. Por favor, ajuste la cantidad asignada o el total de existencias de este accesorio e intente nuevamente.',
            ),
           
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    ),

    'checkin' => array(
        'error'   		=> 'El accesorio no fue recibido, por favor vuelva a intentarlo',
        'success' 		=> 'El accesorio ha sido ingresado correctamente.',
        'user_does_not_exist' => 'Ese usuario no es válido. Por favor, inténtelo de nuevo.'
    )


);

<?php

return array(
    'about_licenses_title'      => 'Acerca de las Licencias',
<<<<<<< HEAD
    'about_licenses'            => 'Las licencias son usadas para rastrear el software. Tienen un número específico de puestos que pueden ser asignados a individuos',
    'checkin'  					=> 'Registrar Puestos de Licencia',
    'checkout_history'  		=> 'Historial de Asignaciones',
    'checkout'  				=> 'Registrar Puesto de Licencia',
    'edit'  					=> 'Editar Licencia',
=======
    'about_licenses'            => 'Las licencias se utilizan para hacer un seguimiento del software.  Tienen una cantidad determinada que puede ser asignada a individuos',
    'checkin'  					=> 'Ingresar licencia',
    'checkout_history'  		=> 'Historial de asignaciones',
    'checkout'  				=> 'Asignar licencia',
    'edit'  					=> 'Editar licencia',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'filetype_info'				=> 'Los tipos de archivo permitidos son png, gif, jpg, jpeg, doc, docx, pdf, txt, zip, y rar.',
    'clone'  					=> 'Clonar licencia',
    'history_for'  				=> 'Historial de ',
    'in_out'  					=> 'Registrado / Asignado',
    'info'  					=> 'Información de licencia',
    'license_seats'  			=> 'Total de licencias',
    'seat'  					=> 'Licencia',
    'seat_count'  				=> 'Licencia :count',
    'seats'  					=> 'Total de licencias',
    'software_licenses'  		=> 'Licencias de software',
    'user'  					=> 'Usuario',
<<<<<<< HEAD
    'view'  					=> 'Ver Licencia',
    'delete_disabled'           => 'Esta licencia no se puede eliminar aún porque algunos asientos todavía están retirados.',
    'bulk'                      =>
        [
            'checkin_all'           => [
                'button'            => 'Comprobar todos los asientos',
                'modal'             => 'Esto activará el checkin de un asiento. | Esta acción registrará todos los asientos :checkedout_seats_count para esta licencia.',
                'enabled_tooltip'   => 'Checkin TODOS los asientos para esta licencia tanto de usuarios como de activos',
                'disabled_tooltip'  => 'Esto está deshabilitado porque no hay asientos seleccionados actualmente',
                'disabled_tooltip_reassignable'  => 'Esto está desactivado porque la licencia no es reasignable',
                'success'           => '¡Licencia registrada con éxito! | ¡Todas las licencias fueron registradas con éxito!',
                'log_msg'           => 'Check-in a través de pago de licencia en licencia GUI',
            ],

            'checkout_all'              => [
                'button'                => 'Salir todos los asientos',
                'modal'                 => 'Esta acción comprobará un asiento para el primer usuario disponible. | Esta acción verificará todos los asientos :available_seats_count para los primeros usuarios disponibles. Se considera que un usuario está disponible para este asiento si aún no tiene esta licencia revisada para ellos, y la propiedad Auto-Asignación de Licencia está habilitada en su cuenta de usuario.',
                'enabled_tooltip'   => 'Checkout TODOS los asientos (o tantos como estén disponibles) para TODOS los usuarios',
                'disabled_tooltip'  => 'Esto está deshabilitado porque no hay asientos disponibles actualmente',
                'success'           => '¡Licencia retirada con éxito! | ¡Licencias :count fueron retiradas con éxito!',
                'error_no_seats'    => 'No quedan plazas restantes para esta licencia.',
                'warn_not_enough_seats'    => ':count usuarios fueron asignados a esta licencia, pero nos quedamos sin plazas de licencia disponibles.',
                'warn_no_avail_users'    => 'Nada que hacer. No hay usuarios que no tengan esta licencia asignada.',
                'log_msg'           => 'Checado mediante pago masivo de licencia en GUI licencia',
=======
    'view'  					=> 'Ver licencia',
    'delete_disabled'           => 'Esta licencia no se puede eliminar porque todavía está asignada.',
    'bulk'                      =>
        [
            'checkin_all'           => [
                'button'            => 'Ingresar todas las licencias',
                'modal'             => 'Esta acción ingresará una licencia. | Esta acción ingresará todas las :checkedout_seats_count licencias.',
                'enabled_tooltip'   => 'Recibir TODAS las licencias tanto de usuarios como de activos',
                'disabled_tooltip'  => 'Esto está deshabilitado porque no hay licencias asignadas actualmente',
                'disabled_tooltip_reassignable'  => 'Esto está desactivado porque la licencia no es reasignable',
                'success'           => '¡Licencia recibida correctamente! | ¡Todas las licencias fueron recibidas correctamente!',
                'log_msg'           => 'Ingresada mediante ingreso masivo en página de licencias',
            ],

            'checkout_all'              => [
                'button'                => 'Asignar todas las licencias',
                'modal'                 => 'Esta acción asignará una licencia para el primer usuario disponible. | Esta acción asignará todas las :available_seats_count licencias a los primeros usuarios disponibles. Se considera que un usuario está disponible si aún no tiene esta licencia asignada y la propiedad "Autoasignación de licencia" está habilitada en su cuenta de usuario.',
                'enabled_tooltip'   => 'Asignar TODAS las licencias (o tantas como estén disponibles) para TODOS los usuarios',
                'disabled_tooltip'  => 'Esto está deshabilitado porque actualmente no hay licencias disponibles',
                'success'           => '¡Licencia asignada exitosamente! | ¡Licencias :count asignadas exitosamente!',
                'error_no_seats'    => 'No quedan licencias disponibles.',
                'warn_not_enough_seats'    => 'Se asignaron :count usuarios a esta licencia, y se agotaron las licencias disponibles.',
                'warn_no_avail_users'    => 'Nada que hacer. No hay usuarios que no tengan esta licencia asignada.',
                'log_msg'           => 'Asignada vía asignación masiva en página de licencias',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65


            ],
    ],
<<<<<<< HEAD
=======

    'below_threshold' => 'Solo quedan :remaining_count licencias y su cantidad mínima es de :min_amt. Puede que desee considerar la compra de más licencias.',
    'below_threshold_short' => 'Este artículo está por debajo de la cantidad mínima requerida.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
);

<?php

return array(
    'about_licenses_title'      => 'O licencah',
    'about_licenses'            => 'Licence se uporabljajo za sledenje programske opreme. Imajo določeno število prostih mest, ki jih je mogoče izdati posameznikom',
    'checkin'  					=> 'Prevzem licenčnih mest',
    'checkout_history'  		=> 'Zgodovina izdaje',
    'checkout'  				=> 'Izdaj licenco',
    'edit'  					=> 'Urejanje licence',
    'filetype_info'				=> 'Dovoljene oblike datotek so png, gif, jpg, jpeg, doc, docx, pdf, txt, zip in rar.',
    'clone'  					=> 'Kloniraj licenco',
    'history_for'  				=> 'Zgodovina za ',
    'in_out'  					=> 'Vhod / izhod',
    'info'  					=> 'Informacije o licenci',
    'license_seats'  			=> 'Število licenc',
    'seat'  					=> 'Število licenc',
    'seat_count'  				=> 'Seat :count',
    'view'  					=> 'Ogled licence',
    'delete_disabled'           => 'This license cannot be deleted yet because some seats are still checked out.',
    'bulk'                      =>
        [
            'checkin_all'           => [
                'button'            => 'Checkin All Seats',
                'modal'             => 'This action will checkin one seat. | This action will checkin all :checkedout_seats_count seats for this license.',
                'enabled_tooltip'   => 'Checkin ALL seats for this license from both users and assets',
                'disabled_tooltip'  => 'This is disabled because there are no seats currently checked out',
                'modal'             => 'This action will checkin one seat. | This action will checkin all :checkedout_seats_count seats for this license.',
            'checkout_all'              => [
                'button'                => 'Checkout All Seats',
                'modal'                 => 'This action will checkout one seat to the first available user. | This action will checkout all :available_seats_count seats to the first available users. A user is considered available for this seat if they do not already have this license checked out to them, and the Auto-Assign License property is enabled on their user account.',
                'enabled_tooltip'   => 'Checkout ALL seats (or as many as are available) to ALL users',
                'log_msg'           => 'Checked in via bulk license checkin in license GUI',
                'log_msg'           => 'Checked out via bulk license checkout in license GUI',


            ],
    ],

    'below_threshold' => 'There are only :remaining_count seats left for this license with a minimum quantity of :min_amt. You may want to consider purchasing more seats.',
    'below_threshold_short' => 'This item is below the minimum required quantity.',
);

    'below_threshold' => 'There are only :remaining_count seats left for this license with a minimum quantity of :min_amt. You may want to consider purchasing more seats.',
    'below_threshold_short' => 'This item is below the minimum required quantity.',

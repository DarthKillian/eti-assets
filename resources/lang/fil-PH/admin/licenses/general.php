<?php

return array(
    'about_licenses_title'      => 'Ang Tungkol sa mga Lisensya',
    'about_licenses'            => 'Ang mga lisensya ay ay ginagamit para subaybayan ang software. Mayrron itong tuloy na mga numero ng seats na pwedeng i-check out sa mga indibidwal',
    'checkin'  					=> 'I-checkin ang Lisensya ng Seat',
    'checkout_history'  		=> 'I-checkout ang Kasaysayan',
    'checkout'  				=> 'I-checkout ang Lisensya ng Seat',
    'edit'  					=> 'I-edit ang Lisensya',
    'filetype_info'				=> 'Ang mga pinapayagang uri ng file ay png, gif, jpg, jpeg, doc, docx, pdf, txt, zip, at rar.',
    'clone'  					=> 'I-clone ang Lisensya',
    'history_for'  				=> 'Ang kasaysayan para sa ',
    'in_out'  					=> 'Papasok/Palabas',
    'info'  					=> 'Ang Impormasyon sa Lisensya',
    'license_seats'  			=> 'Ang Lisensya ng mga Seat',
    'seat'  					=> 'Ang Seat',
<<<<<<< HEAD
=======
    'seat_count'  				=> 'Seat :count',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'seats'  					=> 'Ang mga seat',
    'software_licenses'  		=> 'Ang mga Lisenysa ng Software',
    'user'  					=> 'Ang gumagamit',
    'view'  					=> 'Tingnan ang Lisensya',
    'delete_disabled'           => 'This license cannot be deleted yet because some seats are still checked out.',
    'bulk'                      =>
        [
            'checkin_all'           => [
                'button'            => 'Checkin All Seats',
<<<<<<< HEAD
                'modal'             => 'This will action checkin one seat. | This action will checkin all :checkedout_seats_count seats for this license.',
=======
                'modal'             => 'This action will checkin one seat. | This action will checkin all :checkedout_seats_count seats for this license.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
                'enabled_tooltip'   => 'Checkin ALL seats for this license from both users and assets',
                'disabled_tooltip'  => 'This is disabled because there are no seats currently checked out',
                'disabled_tooltip_reassignable'  => 'This is disabled because the License is not reassignable',
                'success'           => 'License successfully checked in! | All licenses were successfully checked in!',
<<<<<<< HEAD
                'log_msg'           => 'Checked in via bulk license checkout in license GUI',
=======
                'log_msg'           => 'Checked in via bulk license checkin in license GUI',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
            ],

            'checkout_all'              => [
                'button'                => 'Checkout All Seats',
                'modal'                 => 'This action will checkout one seat to the first available user. | This action will checkout all :available_seats_count seats to the first available users. A user is considered available for this seat if they do not already have this license checked out to them, and the Auto-Assign License property is enabled on their user account.',
                'enabled_tooltip'   => 'Checkout ALL seats (or as many as are available) to ALL users',
                'disabled_tooltip'  => 'This is disabled because there are no seats currently available',
                'success'           => 'License successfully checked out! | :count licenses were successfully checked out!',
                'error_no_seats'    => 'There are no remaining seats left for this license.',
                'warn_not_enough_seats'    => ':count users were assigned this license, but we ran out of available license seats.',
                'warn_no_avail_users'    => 'Nothing to do. There are no users who do not already have this license assigned to them.',
                'log_msg'           => 'Checked out via bulk license checkout in license GUI',


            ],
    ],
<<<<<<< HEAD
=======

    'below_threshold' => 'There are only :remaining_count seats left for this license with a minimum quantity of :min_amt. You may want to consider purchasing more seats.',
    'below_threshold_short' => 'This item is below the minimum required quantity.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
);

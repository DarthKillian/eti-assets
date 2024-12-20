<?php

return array(
    'about_licenses_title'      => 'За лиценците',
    'about_licenses'            => 'Лиценците се користат за следење на софтверот. Тие имаат одреден број места кои можат да се задолжат на поединци',
    'checkin'  					=> 'Раздолжи лиценца за место',
    'checkout_history'  		=> 'Историја на задолжувања',
    'checkout'  				=> 'Задолжи лиценца за место',
    'edit'  					=> 'Ажурирај лиценца',
    'filetype_info'				=> 'Дозволени типови на датотеки се png, gif, jpg, jpeg, doc, docx, pdf, txt, zip и rar.',
    'clone'  					=> 'Клонирај лиценца',
    'history_for'  				=> 'Историја за ',
    'in_out'  					=> 'Раздолжи/Задолжи',
    'info'  					=> 'Информации за лиценцата',
    'license_seats'  			=> 'Лиценци за места',
    'seat'  					=> 'Место',
<<<<<<< HEAD
=======
    'seat_count'  				=> 'Места :count',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'seats'  					=> 'Места',
    'software_licenses'  		=> 'Лиценци за софтвер',
    'user'  					=> 'Корисник',
    'view'  					=> 'Погледнете лиценца',
<<<<<<< HEAD
    'delete_disabled'           => 'This license cannot be deleted yet because some seats are still checked out.',
    'bulk'                      =>
        [
            'checkin_all'           => [
                'button'            => 'Checkin All Seats',
                'modal'             => 'This will action checkin one seat. | This action will checkin all :checkedout_seats_count seats for this license.',
                'enabled_tooltip'   => 'Checkin ALL seats for this license from both users and assets',
                'disabled_tooltip'  => 'This is disabled because there are no seats currently checked out',
                'disabled_tooltip_reassignable'  => 'This is disabled because the License is not reassignable',
                'success'           => 'License successfully checked in! | All licenses were successfully checked in!',
                'log_msg'           => 'Checked in via bulk license checkout in license GUI',
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
=======
    'delete_disabled'           => 'Оваа лиценца сè уште не може да се избрише затоа што некои места сè уште е задолжена.',
    'bulk'                      =>
        [
            'checkin_all'           => [
                'button'            => 'Раздолжи ги сите места',
                'modal'             => 'Оваа акција ќе раздолжи едно место. | Оваа акција ќе ги раздолжи сите :checkedout_seats_count места за оваа лиценца.',
                'enabled_tooltip'   => 'Раздолжи ги СИТЕ места за оваа лиценца од корисници и средства',
                'disabled_tooltip'  => 'Ова е оневозможено бидејќи моментално нема задолжени места.',
                'disabled_tooltip_reassignable'  => 'Ова е оневозможено бидејќи лиценцата не може да се преместува',
                'success'           => 'Лиценцата е успешно раздолжена! | Сите лиценци се успешно раздолжени!',
                'log_msg'           => 'Раздолжи преку групно раздолжување во интерфејсот за лиценци',
            ],

            'checkout_all'              => [
                'button'                => 'Задолжи ги сите места',
                'modal'                 => 'Оваа акција ќе го задолжи на првиот достапен корисник. | Оваа акција ќе ги задолжи :available_seats_count места за првиот достапен корисник. Корисникот се смета за достапен за ова седиште ако веќе ја немаат задолжено оваа лиценца, и автоматското доделување лиценци е овозможено на нивната сметка.',
                'enabled_tooltip'   => 'Задолжи ги СИТЕ места (или колку што се достапни) на СИТЕ корисници',
                'disabled_tooltip'  => 'Ова е оневозможено бидејќи моментално нема достапни места',
                'success'           => 'Лиценцата е успешно задолжена! | :count лиценци се успешно задолжени!',
                'error_no_seats'    => 'Нема преостанати слободни места за оваа лиценца.',
                'warn_not_enough_seats'    => ':count корисници им е доделена оваа лиценца, но недостасуваа достапни места за оваа лиценца.',
                'warn_no_avail_users'    => 'Не треба ништо да се прави. Нема корисници што ја немаат доделено оваа лиценца.',
                'log_msg'           => 'Задолжено преку интерфејсот за групно задолжување лиценци',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65


            ],
    ],
<<<<<<< HEAD
=======

    'below_threshold' => 'Има само :remaining_count места достапни за оваа лиценца со минимална количина од :min_amt. Можеби би сакале да размислите за набавка на нови количини.',
    'below_threshold_short' => 'Овај предмет е под минималните потребни количини.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
);

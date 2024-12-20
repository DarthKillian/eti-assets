<?php

return array(
    'about_licenses_title'      => 'Apie licencijas',
<<<<<<< HEAD
    'about_licenses'            => 'Licencijos naudojamos programinei įrangai stebėti. Jie turi tam tikrą skaičių vietų, kurias galima patikrinti asmenims',
    'checkin'  					=> 'Išduoti licenzijos prieigą',
    'checkout_history'  		=> 'Išdavimo istorija',
    'checkout'  				=> 'Išduotas licenzijų kiekis',
    'edit'  					=> 'Keisti licenciją',
    'filetype_info'				=> 'Leidžiami dokumentų formatai png, gif, jpg, jpeg, doc, docx, pdf, txt, zip, rar.',
    'clone'  					=> 'Kopijuoti licenziją',
    'history_for'  				=> 'Istorija ',
    'in_out'  					=> 'Priimta/Išduota',
    'info'  					=> 'Licenzijos info',
    'license_seats'  			=> 'Licenzijos vnt. skaičius',
    'seat'  					=> 'Prieiga',
    'seats'  					=> 'Prieigos',
    'software_licenses'  		=> 'Programinės įrangos licenzijos',
    'user'  					=> 'Naudotojas',
    'view'  					=> 'Peržiūrėti licenciją',
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
                'error_no_seats'    => 'Nėra laisvų licencijų.',
                'warn_not_enough_seats'    => ':count users were assigned this license, but we ran out of available license seats.',
                'warn_no_avail_users'    => 'Nieko daryti nereikia. Nėra naudotojų, kuriems nebūtų priskirta ši licencija.',
                'log_msg'           => 'Checked out via bulk license checkout in license GUI',
=======
    'about_licenses'            => 'Licencijos naudojamos programinės įrangai sekimui. Jos turi nurodytą vietų skaičių, kiek jų galima priskirti naudotojams',
    'checkin'  					=> 'Paimti licenciją',
    'checkout_history'  		=> 'Išdavimo istorija',
    'checkout'  				=> 'Išduoti licenciją',
    'edit'  					=> 'Redaguoti licenciją',
    'filetype_info'				=> 'Leidžiami failų tipai yra: png, gif, jpg, jpeg, doc, docx, pdf, txt, zip, rar.',
    'clone'  					=> 'Klonuoti licenciją',
    'history_for'  				=> 'Istorija ',
    'in_out'  					=> 'Į/Iš',
    'info'  					=> 'Licencijos informacija',
    'license_seats'  			=> 'Licencijos vietų skaičius',
    'seat'  					=> 'Vieta',
    'seat_count'  				=> 'Vietos :count',
    'seats'  					=> 'Vietos',
    'software_licenses'  		=> 'Programinės įrangos licencijos',
    'user'  					=> 'Naudotojas',
    'view'  					=> 'Peržiūrėti licenciją',
    'delete_disabled'           => 'Ši licencija negali būti panaikinta, kadangi kai kurios vietos vis dar yra išduotos.',
    'bulk'                      =>
        [
            'checkin_all'           => [
                'button'            => 'Paimti visas vietas',
                'modal'             => 'Šis veiksmas paims vieną vietą. | Šis veiksmas paims visas :checkedout_seats_count šios licencijos vietas.',
                'enabled_tooltip'   => 'Paimkite VISAS licencijos vietas – tiek iš naudotojų, tiek iš turto',
                'disabled_tooltip'  => 'Išjungta, kadangi šiuo metu nėra išduotų vietų',
                'disabled_tooltip_reassignable'  => 'Išjungta, kadangi licencijos negalima perskirti',
                'success'           => 'Licencija paimta sėkmingai! | Visos licencijos paimtos sėkmingai!',
                'log_msg'           => 'Paimta naudojant masinio licencijų paėmimo sąsają',
            ],

            'checkout_all'              => [
                'button'                => 'Išduoti visas vietas',
                'modal'                 => 'Atlikus šį veiksmą, pirmam laisvam naudotojui bus priskirta viena vieta. | Atlikus šį veiksmą, bus priskirtos visos :available_seats_count vietos pirmiesiems galimiems naudotojams. Laikoma, kad naudotojas gali gauti vietą, jei jis dar neturi šios licencijos, o jo naudotojo paskyroje yra įgalintas automatinis licencijos priskyrimas.',
                'enabled_tooltip'   => 'Priskirti VISAS vietas (arba tiek, kiek yra), VISIEMS naudotojams',
                'disabled_tooltip'  => 'Išjungta, kadangi šiuo metu nėra laisvų vietų',
                'success'           => 'Licencija išduota sėkmingai! | :count licencijos išduotos sėkmingai!',
                'error_no_seats'    => 'Nėra laisvų licencijos vietų.',
                'warn_not_enough_seats'    => ':count naudotojams buvo priskirta ši licencija, bet mums baigėsi laisvos licencijos vietos.',
                'warn_no_avail_users'    => 'Nieko daryti nereikia. Nėra naudotojų, kuriems nebūtų priskirta ši licencija.',
                'log_msg'           => 'Išduota naudojant masinio licencijų išdavimo sąsają',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65


            ],
    ],
<<<<<<< HEAD
=======

    'below_threshold' => 'Liko tik :remaining_count šios licencijos vietos, kai mažiausias kiekis yra :min_amt. Apsvarstykite galimybę įsigyti daugiau vietų.',
    'below_threshold_short' => 'Turimas šio elemento kiekis yra mažesnis už mažiausią reikalaujamą kiekį.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
);

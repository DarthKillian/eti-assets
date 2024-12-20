<?php

return array(

    'does_not_exist' => 'Priedas [:id] neegzistuoja.',
    'not_found' => 'Priedas nerastas.',
<<<<<<< HEAD
    'assoc_users'	 => 'Vartotojams šiuo metu išduotų šio priedo vienetų skaičius - :count. Susigrąžinkite išduotus priedus ir bandykite dar kartą. ',

    'create' => array(
        'error'   => 'Priedas nebuvo sukurtas. Prašome bandykite dar kartą.',
        'success' => 'Priedas sėkmingai sukurtas.'
    ),

    'update' => array(
        'error'   => 'Įranga nebuvo atnaujinta. Prašome bandykite dar kartą',
=======
    'assoc_users'	 => 'Naudotojams išduotų šio priedo vienetų skaičius - :count. Susigrąžinkite išduotus priedus ir bandykite dar kartą. ',

    'create' => array(
        'error'   => 'Priedas nebuvo sukurtas, bandykite dar kartą.',
        'success' => 'Priedas sukurtas sėkmingai.'
    ),

    'update' => array(
        'error'   => 'Priedas nebuvo atnaujintas, bandykite dar kartą',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
        'success' => 'Priedas atnaujintas sėkmingai.'
    ),

    'delete' => array(
<<<<<<< HEAD
        'confirm'   => 'Ar jūs tikrai norite ištrinti šį priedą?',
        'error'   => 'Nepavyko ištrinti šio priedo. Pabandykite dar kartą.',
        'success' => 'Priedas ištrintas sėkmingai.'
    ),

     'checkout' => array(
        'error'   		=> 'Priedo nepavyko išduoti, pabandykite dar kartą',
        'success' 		=> 'Įranga sėkmingai išimta.',
        'unavailable'   => 'Priedo išimti negalima. Pasitikrinkite likutį',
        'user_does_not_exist' => 'Šis vartotojas neteisingas. Prašome bandykite dar kartą.'
    ),

    'checkin' => array(
        'error'   		=> 'Įrangos nepavyko pridėti, prašome bandykite dar kartą',
        'success' 		=> 'Įranga sėkmingai pridėta.',
        'user_does_not_exist' => 'Varototojas neteisingas. Prašome bandykite dar kartą.'
=======
        'confirm'   => 'Ar tikrai norite panaikinti šį priedą?',
        'error'   => 'Bandant panaikinti priedą įvyko klaida. Bandykite dar kartą.',
        'success' => 'Priedas panaikintas sėkmingai.'
    ),

     'checkout' => array(
        'error'   		=> 'Priedo nepavyko išduoti, bandykite dar kartą',
        'success' 		=> 'Priedas išduotas sėkmingai.',
        'unavailable'   => 'Priedo išduoti negalima. Patikrinkite likutį',
        'user_does_not_exist' => 'Neteisingas naudotojas. Bandykite dar kartą.',
         'checkout_qty' => array(
            'lte'  => 'Šiuo metu yra tik vienas šio tipo priedas, o jūs bandote išduoti :checkout_qty. Pakoreguokite išduodamą arba bendrą šio priedo atsargų kiekį ir bandykite dar kartą.|Yra :number_currently_remaining šio priedo vienetai (-ų), o jūs bandote išduoti :checkout_qty. Pakoreguokite išduodamą arba bendrą šio priedo atsargų kiekį ir bandykite dar kartą.',
            ),
           
    ),

    'checkin' => array(
        'error'   		=> 'Priedas nebuvo paimtas, bandykite dar kartą',
        'success' 		=> 'Priedas paimtas sėkmingai.',
        'user_does_not_exist' => 'Neteisingas naudotojas. Bandykite dar kartą.'
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    )


);

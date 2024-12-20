<?php

return array(

<<<<<<< HEAD
    'does_not_exist' => 'Lisaseade [:id] ei eksisteeri.',
    'not_found' => 'That accessory was not found.',
    'assoc_users'	 => 'See lisavarustus on praegu: kasutajate poolt kontrollitud arvude arv. Palun kontrollige tarvikuid ja proovige uuesti.',

    'create' => array(
        'error'   => 'Lisatarvikut ei loodud, proovige uuesti.',
        'success' => 'Lisavarustus loodi edukalt.'
    ),

    'update' => array(
        'error'   => 'Lisatarvikut ei värskendatud. Proovige uuesti',
        'success' => 'Lisatarvikut uuendati edukalt.'
    ),

    'delete' => array(
        'confirm'   => 'Kas olete kindel, et soovite seda lisaseadet kustutada?',
        'error'   => 'Aksessuaar eemaldati. Palun proovi uuesti.',
=======
    'does_not_exist' => 'Tarvik [:id] ei eksisteeri.',
    'not_found' => 'Seda tarvikut ei leitud.',
    'assoc_users'	 => 'Seda tarvikut on praegu :count väljastatud kasutajatele. Palun kontrollige tarvikuid ja proovige uuesti. ',

    'create' => array(
        'error'   => 'Tarvikut ei loodud, proovige uuesti.',
        'success' => 'See tarvik loodi edukalt.'
    ),

    'update' => array(
        'error'   => 'Tarvikut ei uuendatud. Proovige uuesti',
        'success' => 'Tarvikut uuendati edukalt.'
    ),

    'delete' => array(
        'confirm'   => 'Kas olete kindel, et soovite seda tarvikut kustutada?',
        'error'   => 'Tarvikut ei õnnestunud kustutada. Palun proovi uuesti.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
        'success' => 'Lisaseade kustutati edukalt.'
    ),

     'checkout' => array(
        'error'   		=> 'Lisatarvikut ei kontrollitud, palun proovige uuesti',
        'success' 		=> 'Lisaseade edukalt kontrollitud.',
<<<<<<< HEAD
        'unavailable'   => 'Accessory is not available for checkout. Check quantity available',
        'user_does_not_exist' => 'See kasutaja on kehtetu. Palun proovi uuesti.'
=======
        'unavailable'   => 'Tarvik ei ole väljastamiseks saadaval. Kontrolli laoseisu',
        'user_does_not_exist' => 'See kasutaja on kehtetu. Palun proovi uuesti.',
         'checkout_qty' => array(
            'lte'  => 'Praegu on saadaval ainult üks seda tüüpi lisaseade ja te üritate väljastada :checkout_qty. Palun kohandage väljastatavate lisaseadmete kogust või selle lisaseadme koguarvu ja proovige uuesti.Saadaval on :number_currently_remaining lisaseadet ja te üritate väljastada :checkout_qty. Palun kohandage väljastavate lisaseadmete kogust või selle lisaseadme koguarvu ja proovige uuesti.',
            ),
           
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    ),

    'checkin' => array(
        'error'   		=> 'Lisatarvikut ei olnud märgitud, palun proovige uuesti',
        'success' 		=> 'Lisaseade kontrollitud edukalt.',
        'user_does_not_exist' => 'See kasutaja on kehtetu. Palun proovi uuesti.'
    )


);

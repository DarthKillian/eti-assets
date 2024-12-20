<?php

return array(

    'does_not_exist' => 'L\'accessorio [:id] non esiste.',
    'not_found' => 'Questo accessorio non è stato trovato.',
    'assoc_users'	 => 'Questo Accessorio ha attualmente :count articoli assegnati agli utenti. Si prega di ritirare gli Accessori e riprovare. ',

    'create' => array(
        'error'   => 'L\'Accessorio non è stato creato, si prega di riprovare.',
        'success' => 'Accessorio creato con successo.'
    ),

    'update' => array(
        'error'   => 'L\'Accessorio non è stato aggiornato, si prega di riprovare',
        'success' => 'Accessorio aggiornato con successo.'
    ),

    'delete' => array(
        'confirm'   => 'Sei sicuro di voler eliminare quest\'Accessorio?',
        'error'   => 'Si è verificato un problema cercando di eliminare l\'accessorio. Si prega di riprovare.',
        'success' => 'L\'accessorio è stato eliminato con successo.'
    ),

     'checkout' => array(
        'error'   		=> 'L\'accessorio non è stato assegnato, si prega di riprovare',
        'success' 		=> 'Accessorio assegnato correttamente.',
        'unavailable'   => 'Accessorio non disponibile per l\'assegnazione. Controlla la quantità disponibile',
<<<<<<< HEAD
        'user_does_not_exist' => 'Questo utente non è valido. Riprova.'
=======
        'user_does_not_exist' => 'Questo utente non è valido. Riprova.',
         'checkout_qty' => array(
            'lte'  => 'Al momento c\'è solo un accessorio disponibile di questo tipo, ma si sta cercando di assegnarne :checkout_qty. Si prega di modificare la quantità da assegnare oppure la quantità totale in magazzino di questo accessorio e poi riprovare.|Ci sono :number_currently_remaining accessori disponibili in magazzino, ma si sta cercando di assegnarne :checkout_qty. Si prega di regolare la quantità da assegnare oppure la quantità totale in magazzino di questo accessorio e poi riprovare.',
            ),
           
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    ),

    'checkin' => array(
        'error'   		=> 'L\'accessorio non è stato riconsegnato corretamente, si prega di riprovare',
        'success' 		=> 'Accessorio riconsegnato con successo.',
        'user_does_not_exist' => 'Questo utente non è valido. Riprova.'
    )


);

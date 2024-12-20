<?php

return array(

    'does_not_exist' => 'La categoria non esiste.',
<<<<<<< HEAD
    'assoc_models'	 => 'Questa categoria è attualmente associata ad almeno un modello pertanto non può essere eliminata. Aggiorna i tuoi modelli e riprova. ',
    'assoc_items'	 => 'Questa categoria è attualmente associata ad almeno un :asset_type pertanto non può essere eliminata. Aggiorna il tuo :asset_type e riprova. ',
=======
    'assoc_models'	 => 'La categoria è già associata ad almeno un modello, pertanto non può essere eliminata. Aggiorna i modelli in modo che non si riferiscano alla categoria e riprova. ',
    'assoc_items'	 => 'Questa Categoria al momento è associata ad almeno un :asset_type perciò non può essere eliminata. Aggiorna il tuo :asset_type in modo che non si riferisca più alla Categoria e riprova. ',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65

    'create' => array(
        'error'   => 'La categoria non è stata creata, si prega di riprovare.',
        'success' => 'Categoria creata con successo.'
    ),

    'update' => array(
        'error'   => 'La categoria non è stata aggiornata, si prega di riprovare',
        'success' => 'Categoria aggiornata con successo.',
<<<<<<< HEAD
        'cannot_change_category_type'   => 'Non puoi cambiare il tipo di categoria una volta creata',
    ),

    'delete' => array(
        'confirm'   => 'Sei sicuro di voler cancellare questa categoria?',
        'error'   => 'Si è verificato un problema cercando di eliminare la categoria. Riprova.',
=======
        'cannot_change_category_type'   => 'Una volta creata una Categoria non puoi cambiarne il Tipo',
    ),

    'delete' => array(
        'confirm'   => 'Sicuro di voler eliminare questa Categoria?',
        'error'   => 'C\'è stato un problema eliminando la Categoria. Riprova.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
        'success' => 'La categoria è stata eliminata con successo.'
    )

);

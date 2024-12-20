<?php

return array(

    'does_not_exist' => 'Standort nicht verfügbar.',
<<<<<<< HEAD
    'assoc_users'	 => 'Dieser Standort ist aktuell mindestens einem Benutzer zugewiesen und kann nicht gelöscht werden. Bitte entfernen Sie die Standortzuweisung bei den jeweiligen Benutzern und versuchen Sie es erneut. ',
=======
    'assoc_users'    => 'Dieser Standort kann derzeit nicht gelöscht werden, da er der Standort eines Datensatzes für mindestens ein Asset oder einen Benutzer ist, ihm Assets zugewiesen sind oder er der übergeordnete Standort eines anderen Standorts ist. Aktualisieren Sie Ihre Datensätze, sodass dieser Standort nicht mehr referenziert wird, und versuchen Sie es erneut. ',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'assoc_assets'	 => 'Dieser Standort ist aktuell mindestens einem Gegenstand zugewiesen und kann nicht gelöscht werden. Bitte entfernen Sie die Standortzuweisung bei den jeweiligen Gegenständen und versuchen Sie es erneut diesen Standort zu entfernen. ',
    'assoc_child_loc'	 => 'Dieser Ort ist aktuell mindestens einem anderen Ort übergeordnet und kann nicht gelöscht werden. Bitte Orte aktualisieren, so dass dieser Standort nicht mehr verknüpft ist und erneut versuchen. ',
    'assigned_assets' => 'Zugeordnete Assets',
    'current_location' => 'Aktueller Standort',
<<<<<<< HEAD
=======
    'open_map' => 'Öffnen in :map_provider_icon Karten',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65


    'create' => array(
        'error'   => 'Standort wurde nicht erstellt, bitte versuchen Sie es erneut.',
        'success' => 'Standort erfolgreich erstellt.'
    ),

    'update' => array(
        'error'   => 'Standort wurde nicht aktualisiert, bitte erneut versuchen',
        'success' => 'Standort erfolgreich aktualisiert.'
    ),

<<<<<<< HEAD
=======
    'restore' => array(
        'error'   => 'Der Standort wurde nicht wiederhergestellt. Bitte versuchen Sie es erneut',
        'success' => 'Standort erfolgreich wiederhergestellt.'
    ),

>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'delete' => array(
        'confirm'   	=> 'Möchten Sie diesen Standort wirklich entfernen?',
        'error'   => 'Es gab einen Fehler beim Löschen des Standorts. Bitte erneut versuchen.',
        'success' => 'Der Standort wurde erfolgreich gelöscht.'
    )

);

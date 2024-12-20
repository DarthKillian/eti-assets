<?php

return array(

<<<<<<< HEAD
<<<<<<<< HEAD:resources/lang/is-IS/admin/models/message.php
    'deleted' => 'Eyða tegund eigna',
========
    'deleted' => 'Deleted asset model',
>>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65:resources/lang/ca-ES/admin/models/message.php
    'does_not_exist' => 'Model does not exist.',
    'no_association' => 'WARNING! The asset model for this item is invalid or missing!',
    'no_association_fix' => 'This will break things in weird and horrible ways. Edit this asset now to assign it a model.',
    'assoc_users'	 => 'This model is currently associated with one or more assets and cannot be deleted. Please delete the assets, and then try deleting again. ',
    'invalid_category_type' => 'This category must be an asset category.',

    'create' => array(
        'error'   => 'Model was not created, please try again.',
        'success' => 'Model created successfully.',
        'duplicate_set' => 'An asset model with that name, manufacturer and model number already exists.',
    ),

    'update' => array(
        'error'   => 'Model was not updated, please try again',
        'success' => 'Model updated successfully.',
    ),

    'delete' => array(
        'confirm'   => 'Are you sure you wish to delete this asset model?',
        'error'   => 'There was an issue deleting the model. Please try again.',
        'success' => 'The model was deleted successfully.'
    ),

    'restore' => array(
        'error'   		=> 'Model was not restored, please try again',
        'success' 		=> 'Model restored successfully.'
    ),

    'bulkedit' => array(
        'error'   		=> 'No fields were changed, so nothing was updated.',
        'success' 		=> 'Model successfully updated. |:model_count models successfully updated.',
<<<<<<<< HEAD:resources/lang/is-IS/admin/models/message.php
        'warn'          => 'You are about to update the properies of the following model: |You are about to edit the properties of the following :model_count models:',
========
        'warn'          => 'You are about to update the properties of the following model:|You are about to edit the properties of the following :model_count models:',
>>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65:resources/lang/ca-ES/admin/models/message.php
=======
    'deleted' => 'Eyða tegund eigna',
    'does_not_exist' => 'Tegund ekki til.',
    'no_association' => 'VIÐVÖRUN! Eignategund fyrir þennan hlut er ógilt eða vantar!',
    'no_association_fix' => 'Þetta mun brjóta hlutina á undarlegan og hræðilegan hátt. Breyttu þessari eign núna til að úthluta henni fyrirmynd.',
    'assoc_users'	 => 'Þessi tegund er sem stendur tengt einni eða fleiri eignum og ekki er hægt að eyða því. Vinsamlegast eyddu eignunum og reyndu síðan að eyða aftur. ',
    'invalid_category_type' => 'This category must be an asset category.',

    'create' => array(
        'error'   => 'Tegundin var ekki búið til, vinsamlegast reyndu aftur.',
        'success' => 'Tegund búin til.',
        'duplicate_set' => 'Eignategund með þessu nafni, framleiðanda og tegundarnúmeri er þegar til.',
    ),

    'update' => array(
        'error'   => 'Tegund var ekki uppfærð, vinsamlegast reyndu aftur',
        'success' => 'Tegund uppfærð.',
    ),

    'delete' => array(
        'confirm'   => 'Ertu viss um að þú viljir eyða þessu eignategund?',
        'error'   => 'Vandamál kom upp við að eyða tegundinni. Vinsamlegast reyndu aftur.',
        'success' => 'Tegund var eytt.'
    ),

    'restore' => array(
        'error'   		=> 'Tegund var ekki endurheimt, vinsamlegast reyndu aftur',
        'success' 		=> 'Tegund endurheimt.'
    ),

    'bulkedit' => array(
        'error'   		=> 'Engum reitum var breytt, svo ekkert var uppfært.',
        'success' 		=> 'Tegund uppfært. |:model_count Tegundir uppfærð.',
        'warn'          => 'Þú ert að fara að uppfæra eiginleika eftirfarandi model:|Þú ert að fara að breyta eiginleikum eftirfarandi :model_count tegunda:',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65

    ),

    'bulkdelete' => array(
<<<<<<< HEAD
        'error'   		    => 'No models were selected, so nothing was deleted.',
        'success' 		    => 'Model deleted!|:success_count models deleted!',
        'success_partial' 	=> ':success_count model(s) were deleted, however :fail_count were unable to be deleted because they still have assets associated with them.'
=======
        'error'   		    => 'Engar tegundir voru valdar og því var engu eytt.',
        'success' 		    => 'Tegund eytt!|:success_count tegundum eytt!',
        'success_partial' 	=> ':success_count tegund(um) var eytt, hins vegar var ekki hægt að eyða :fail_count vegna þess að þau hafa enn eignir tengdar þeim.'
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    ),

);

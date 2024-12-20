<?php

return array(

<<<<<<< HEAD
    'deleted' => 'Deleted asset model',
    'does_not_exist' => 'Tokio modelio nėra.',
    'no_association' => 'WARNING! The asset model for this item is invalid or missing!',
    'no_association_fix' => 'This will break things in weird and horrible ways. Edit this asset now to assign it a model.',
    'assoc_users'	 => 'Šis modelis šiuo metu susietas su daugiau nei vienu įrangos vientu ir negali būti ištrintas. Prašome ištrinkite įrangą ir tuomet bandykite trinti iš naujo. ',


    'create' => array(
        'error'   => 'Modelis nebuvo ištrintas, prašome bandykite iš naujo.',
        'success' => 'Modelis sėkmingai sukurtas.',
        'duplicate_set' => 'Įrangos modelis su šiuo pavadinimu, gamintoju ir modeliu numeriu jau yra.',
    ),

    'update' => array(
        'error'   => 'Modelis nebuvo atnaujintas, prašome bandykite iš naujo',
        'success' => 'Modelis sėkmingai atnaujintas.',
    ),

    'delete' => array(
        'confirm'   => 'Ar jūs tikrai norite ištrinti šios įrangos modelį?',
        'error'   => 'Nepavyko ištrinti modelio. Prašome bandykite dar kartą.',
        'success' => 'Modelis sėkmingai ištrintas.'
    ),

    'restore' => array(
        'error'   		=> 'Modelis nebuvo atkurtas, prašome bandykite dar kartą',
        'success' 		=> 'Modelis sėkmingai atkurtas.'
    ),

    'bulkedit' => array(
        'error'   		=> 'Nebuvo pakeista jokių laukų, todėl niekas nebuvo atnaujintas.',
        'success' 		=> 'Model successfully updated. |:model_count models successfully updated.',
        'warn'          => 'You are about to update the properies of the following model: |You are about to edit the properties of the following :model_count models:',
=======
    'deleted' => 'Panaikintas turto modelis',
    'does_not_exist' => 'Tokio modelio nėra.',
    'no_association' => 'ĮSPĖJIMAS! Tokio turto modelio nėra arba jis neteisingas!',
    'no_association_fix' => 'Tai sugadins dalykus keistais ir siaubingais būdais. Nedelsdami redaguokite šį turtą ir priskirkite jam modelį.',
    'assoc_users'	 => 'Šis modelis šiuo metu susietas su bent vienu turto vienetu, todėl negali būti panaikintas. Panaikinkite šį turtą, tuomet vėl bandykite panaikinti modelį. ',
    'invalid_category_type' => 'Kategorija turi būti turto kategorija.',

    'create' => array(
        'error'   => 'Modelis nebuvo panaikintas, bandykite dar kartą.',
        'success' => 'Modelis sukurtas sėkmingai.',
        'duplicate_set' => 'Turto modelis su tokiu pavadinimu, gamintoju ir modelio numeriu jau yra.',
    ),

    'update' => array(
        'error'   => 'Modelis nebuvo atnaujintas, bandykite dar kartą',
        'success' => 'Modelis atnaujintas sėkmingai.',
    ),

    'delete' => array(
        'confirm'   => 'Ar tikrai norite panaikinti šį turto modelį?',
        'error'   => 'Bandant panaikinti modelį įvyko klaida. Bandykite dar kartą.',
        'success' => 'Modelis panaikintas sėkmingai.'
    ),

    'restore' => array(
        'error'   		=> 'Modelis nebuvo atkurtas, bandykite dar kartą',
        'success' 		=> 'Modelis atkurtas sėkmingai.'
    ),

    'bulkedit' => array(
        'error'   		=> 'Jokie laukai nebuvo pakeisti, todėl niekas nebuvo atnaujinta.',
        'success' 		=> 'Modelis atnaujintas sėkmingai. |:model_count modeliai atnaujinti sėkmingai.',
        'warn'          => 'Ketinate atnaujinti šio modelio ypatybes:|Ketinate redaguoti šių :model_count modelių ypatybes:',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65

    ),

    'bulkdelete' => array(
<<<<<<< HEAD
        'error'   		    => 'Nepasirinktas modelis, nėra ką ištrinti.',
        'success' 		    => 'Model deleted!|:success_count models deleted!',
        'success_partial' 	=> ':success_count model(s) buvo ištrinti, bet :fail_count negalima ištrinti todėl, kad turtas vis dar susietas.'
=======
        'error'   		    => 'Nebuvo pasirinktas joks modelis, todėl niekas nebuvo panaikinta.',
        'success' 		    => 'Modelis panaikintas! :success_count modeliai panaikinti!',
        'success_partial' 	=> 'Panaikinti modeliai – :success_count, tačiau dar :fail_count nepavyko panaikinti, nes vis dar yra su jais susieto turto.'
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    ),

);

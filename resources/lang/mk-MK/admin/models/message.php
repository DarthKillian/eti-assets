<?php

return array(

<<<<<<< HEAD
    'deleted' => 'Deleted asset model',
    'does_not_exist' => 'Моделот не постои.',
    'no_association' => 'WARNING! The asset model for this item is invalid or missing!',
    'no_association_fix' => 'This will break things in weird and horrible ways. Edit this asset now to assign it a model.',
=======
    'deleted' => 'Избришан модел на средство',
    'does_not_exist' => 'Моделот не постои.',
    'no_association' => 'ПРЕДУПРЕДУВАЊЕ! Моделот на средство за овој предмет е невалиден или недостасува!',
    'no_association_fix' => 'Ова ќе ги сруши работите на чудни и ужасни начини. Ажурирајте го ова средство да му доделите модел.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'assoc_users'	 => 'Моделот во моментов е поврзан со едно или повеќе основни средства и не може да се избрише. Ве молиме избришете ги основните средствата, а потоа пробајте повторно да го избришете. ',
    'invalid_category_type' => 'Оваа категорија мора да биде категорија на средства.',

    'create' => array(
        'error'   => 'Моделот не е креиран, обидете се повторно.',
        'success' => 'Моделот е успешно креиран.',
        'duplicate_set' => 'Модел на основно средство со тоа име, производител и број на модел веќе постои.',
    ),

    'update' => array(
        'error'   => 'Моделот не е ажуриран, обидете се повторно',
        'success' => 'Моделот е ажуриран.',
    ),

    'delete' => array(
        'confirm'   => 'Дали сте сигурни дека сакате да го избришете моделот?',
        'error'   => 'Имаше проблем со бришење на моделот. Обидете се повторно.',
        'success' => 'Моделот е избришан.'
    ),

    'restore' => array(
        'error'   		=> 'Моделот не е вратен, обидете се повторно',
        'success' 		=> 'Моделот е вратен.'
    ),

    'bulkedit' => array(
        'error'   		=> 'Не беа сменети полиња, затоа ништо не беше ажурирано.',
<<<<<<< HEAD
        'success' 		=> 'Model successfully updated. |:model_count models successfully updated.',
        'warn'          => 'You are about to update the properies of the following model: |You are about to edit the properties of the following :model_count models:',
=======
        'success' 		=> 'Моделот е успешно ажуриран. |:model_count модели се успешно ажурирани',
        'warn'          => 'Ќе ги ажурирате каректеристиките на следниот модел:|Ќе ги ажурирате карактеристиките на следните :model_count модели:',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65

    ),

    'bulkdelete' => array(
        'error'   		    => 'Не беа избрани модели, затоа ништо не беше избришано.',
<<<<<<< HEAD
        'success' 		    => 'Model deleted!|:success_count models deleted!',
=======
        'success' 		    => 'Моделот е избришан!|:success_count модели се избришани!',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
        'success_partial' 	=> ':success_count модел (и) се избришани, меѓутоа :fail_count не може да се избришат, бидејќи тие сè уште имаат средства поврзани со нив.'
    ),

);

<?php

return [
    'about_assets_title'           => 'За основните средства',
    'about_assets_text'            => 'Основни средства се ставки следени по сериски број или код на средства. Тие обично имаат повисока набавна вредност и е важно нивно поединечно евидентирање.',
    'archived'  				=> 'Архивирано',
    'asset'  					=> 'Основно средство',
    'bulk_checkout'             => 'Раздолжи основно средство',
<<<<<<< HEAD
    'bulk_checkin'              => 'Checkin Assets',
=======
    'bulk_checkin'              => 'Раздолжо основно средство',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'checkin'  					=> 'Раздолжи основно средство',
    'checkout'  				=> 'Задолжи основно средство',
    'clone'  					=> 'Клонирај основно средство',
    'deployable'  				=> 'Распоредливи',
<<<<<<< HEAD
    'deleted'  					=> 'This asset has been deleted.',
    'delete_confirm'            => 'Are you sure you want to delete this asset?',
    'edit'  					=> 'Уредување на основно средство',
    'model_deleted'  			=> 'This Assets model has been deleted. You must restore the model before you can restore the Asset.',
    'model_invalid'             => 'The Model of this Asset is invalid.',
    'model_invalid_fix'         => 'The Asset should be edited to correct this before attempting to check it in or out.',
    'requestable'               => 'Може да се побара',
    'requested'				    => 'Побарано',
    'not_requestable'           => 'Not Requestable',
    'requestable_status_warning' => 'Do not change requestable status',
    'restore'  					=> 'Врати основно средство',
    'pending'  					=> 'Во чекање',
    'undeployable'  			=> 'Нераспоредливи',
    'undeployable_tooltip'  	=> 'This asset has a status label that is undeployable and cannot be checked out at this time.',
    'view'  					=> 'Преглед на основно средство',
    'csv_error' => 'You have an error in your CSV file:',
    'import_text' => '
    <p>
    Upload a CSV that contains asset history. The assets and users MUST already exist in the system, or they will be skipped. Matching assets for history import happens against the asset tag. We will try to find a matching user based on the user\'s name you provide, and the criteria you select below. If you do not select any criteria below, it will simply try to match on the username format you configured in the Admin &gt; General Settings.
    </p>

    <p>Fields included in the CSV must match the headers: <strong>Asset Tag, Name, Checkout Date, Checkin Date</strong>. Any additional fields will be ignored. </p>

    <p>Checkin Date: blank or future checkin dates will checkout items to associated user.  Excluding the Checkin Date column will create a checkin date with todays date.</p>
    ',
    'csv_import_match_f-l' => 'Try to match users by firstname.lastname (jane.smith) format',
    'csv_import_match_initial_last' => 'Try to match users by first initial last name (jsmith) format',
    'csv_import_match_first' => 'Try to match users by first name (jane) format',
    'csv_import_match_email' => 'Try to match users by email as username',
    'csv_import_match_username' => 'Try to match users by username',
    'error_messages' => 'Error messages:',
    'success_messages' => 'Success messages:',
    'alert_details' => 'Please see below for details.',
    'custom_export' => 'Custom Export',
    'mfg_warranty_lookup' => ':manufacturer Warranty Status Lookup',
    'user_department' => 'User Department',
=======
    'deleted'  					=> 'Ова основно средство е избришано.',
    'delete_confirm'            => 'Дали сте сигурни дека сакате да го избришете ова основно средство?',
    'edit'  					=> 'Уредување на основно средство',
    'model_deleted'  			=> 'Моделот на ова основно средство е избришан. Мора да го вратите моделот пред да го вратите основното средство.',
    'model_invalid'             => 'Моделот за ова основно средство е невалиден.',
    'model_invalid_fix'         => 'Средството мора да се ажурира користете валиден модел на средства пред да се обидете да го задолжите или раздолжите, или да го попишите.',
    'requestable'               => 'Може да се побара',
    'requested'				    => 'Побарано',
    'not_requestable'           => 'Не е побарливо',
    'requestable_status_warning' => 'Не менувајте го побарливиот статус ',
    'restore'  					=> 'Врати основно средство',
    'pending'  					=> 'Во чекање',
    'undeployable'  			=> 'Нераспоредливи',
    'undeployable_tooltip'  	=> 'Ова основно средство има статус на нераспоредливо и моментално не е можно да се задолжи.',
    'view'  					=> 'Преглед на основно средство',
    'csv_error' => 'Имате грешка во вашата CSV датотека:',
    'import_text' => '<p>Прикачете CSV датотека што содржи историја на основното средство. Основните средства и корисниците МОРА да постојат во системот, или тие ќе бидат изоставени. Усогласувањето на средствата за увоз на историја се врши со ознаката на средството. Ќе се обидеме да најдеме соодветен корисник врз основа на името на корисникот што го давате и критериумите што ќе ги изберете подолу. Ако не изберете ниту еден критериум подолу, тој едноставно ќе се обиде да се совпадне со форматот на корисничкото име што го конфигуриравте во <code>Admin &gt; Општи подесувања</code>.</p><p>Полињата вклучени во CSV мора да одговараат на заглавија: <strong>Инвентарен број, Име, Датум на задолжување, Датум на раздолжување</strong>. Сите дополнителни полиња ќе бидат игнорирани. </p><p>Датум на раздолжување: празно или идни датуми за раздолжување ќе ги задолжат ставките на наведениот корисник.  Исклучувајќи ја колоната за датум на раздолжување ќе создаде датум за раздолжување со денешен датум.</p>
    ',
    'csv_import_match_f-l' => 'Усогласи корисници по <strong>име.презиме</strong> (<code>jane.smith</code>) format',
    'csv_import_match_initial_last' => 'Усогласи корисници по <strong>прв иницијал од презимето</strong> (<code>jsmith</code>) format',
    'csv_import_match_first' => 'Усогласи корисници по <strong>име</strong> (<code>jane</code>) format',
    'csv_import_match_email' => 'Усогласи корисници по <strong>е-пошта</strong> as username',
    'csv_import_match_username' => 'Усогласи корисници по <strong>корисничко име</strong>',
    'error_messages' => 'Порака за грешка:',
    'success_messages' => 'Порака за успех:',
    'alert_details' => 'Видете подолу за детали.',
    'custom_export' => 'Обичен извоз',
    'mfg_warranty_lookup' => 'Пребарување на статусот :manufacturer на гаранција',
    'user_department' => 'Оддел на корисникот',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
];

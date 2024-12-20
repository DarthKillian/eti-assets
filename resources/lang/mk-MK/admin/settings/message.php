<?php

return [

    'update' => [
        'error'                 => 'Се случи грешка при ажурирањето. ',
        'success'               => 'Поставките се ажурирани.',
    ],
    'backup' => [
        'delete_confirm'        => 'Дали си сигурен дека сакаш да ја избришеш резервната копија? Ова не може да биде вратено. ',
        'file_deleted'          => 'Резервната копија е избришана. ',
        'generated'             => 'Направена е нова резервна копија.',
        'file_not_found'        => 'Таа резервна копија не може да се најде на серверот.',
<<<<<<< HEAD
        'restore_warning'       => 'Yes, restore it. I acknowledge that this will overwrite any existing data currently in the database. This will also log out all of your existing users (including you).',
        'restore_confirm'       => 'Are you sure you wish to restore your database from :filename?'
=======
        'restore_warning'       => 'Да, врати. Потврдувам дека ова ќе ги презапише сите постоечки податоци во моментот во базата на податоци. Ова исто така ќе ги одјави сите постоечки корисници This will also log out all of your existing users (вклучително и тебе).',
        'restore_confirm'       => 'Дали сте сигурни дека сакате да ја вратите вашата база на податоци од :filename?'
    ],
    'restore' => [
        'success'               => 'Резервната копија на вашиот систем е обновена. Повторно најавете се.'
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    ],
    'purge' => [
        'error'     => 'Се случи грешка при трајното бришење. ',
        'validation_failed'     => 'Потврдата за трајно бришење е неточна. Внесете го зборот "DELETE" во полето за потврда.',
        'success'               => 'Записите се трајно избришани.',
    ],
    'mail' => [
<<<<<<< HEAD
        'sending' => 'Sending Test Email...',
        'success' => 'Mail sent!',
        'error' => 'Mail could not be sent.',
        'additional' => 'No additional error message provided. Check your mail settings and your app log.'
    ],
    'ldap' => [
        'testing' => 'Testing LDAP Connection, Binding & Query ...',
        '500' => '500 Server Error. Please check your server logs for more information.',
        'error' => 'Something went wrong :(',
        'sync_success' => 'A sample of 10 users returned from the LDAP server based on your settings:',
        'testing_authentication' => 'Testing LDAP Authentication...',
        'authentication_success' => 'User authenticated against LDAP successfully!'
    ],
    'webhook' => [
        'sending' => 'Sending :app test message...',
        'success' => 'Your :webhook_name Integration works!',
        'success_pt1' => 'Success! Check the ',
        'success_pt2' => ' channel for your test message, and be sure to click SAVE below to store your settings.',
        '500' => '500 Server Error.',
        'error' => 'Something went wrong. :app responded with: :error_message',
        'error_redirect' => 'ERROR: 301/302 :endpoint returns a redirect. For security reasons, we don’t follow redirects. Please use the actual endpoint.',
        'error_misc' => 'Something went wrong. :( ',
=======
        'sending' => 'Испраќање на тест е-пошта...',
        'success' => 'Испратена пошта!',
        'error' => 'Пошта не може да се испрати.',
        'additional' => 'Не е обезбедена дополнителна порака за грешка. Проверете ги поставките за пошта и дневникот за апликации.'
    ],
    'ldap' => [
        'testing' => 'Тестирање LDAP Конекција, Поврзување и пребарување ...',
        '500' => '500 Серверска грешка. Проверете ги дневниците на вашиот сервер за повеќе информации.',
        'error' => 'Нешто не е во ред :(',
        'sync_success' => 'Примерок од 10 корисници е вратен од LDAP серверот на основа на вашите подесувања:',
        'testing_authentication' => 'Тестирање LDAP Автентификација...',
        'authentication_success' => 'Автентификацијата на корисникот на LDAP е успешна!'
    ],
    'webhook' => [
        'sending' => 'Испраќање :app тест порака...',
        'success' => 'Вашата :webhook_name Интеграција работи!',
        'success_pt1' => 'Успех! Проверете ',
        'success_pt2' => ' канал за вашата тест порака, и не заборавајте да кликнете на Зачувај подолу за да ги зачувате поставките.',
        '500' => '500 Серверска грешка.',
        'error' => 'Нешто не е во ред. :app одговори со :error_message',
        'error_redirect' => 'ГРЕШКА: 301/302 :endpoint враќа пренасочување. Од безбедносни причини, ние не ги следиме пренасочувањата. Ве молиме користете директна крајна точка.',
        'error_misc' => 'Нешто не е во ред. :( ',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    ]
];

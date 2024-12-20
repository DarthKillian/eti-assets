<?php

return [
<<<<<<< HEAD
    'activated_help_text' => 'This user can login',
    'activated_disabled_help_text' => 'You cannot edit activation status for your own account.',
=======
    'activated_help_text' => 'Овој корисник може да се најави',
    'activated_disabled_help_text' => 'Неможете да го смените статусот на сопствената сметка.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'assets_user'       => 'Средства задолжени на :name',
    'bulk_update_warn'	=> 'Ќе ажурирате :user_count корисници. Не можете да ги менувате вашите сопствени кориснички атрибути користејќи го овој формулар, и мора да правите измени на вашиот кориснички профил поединечно.',
    'bulk_update_help'	=> 'Оваа форма ви овозможува да ажурирате повеќе корисници одеднаш. Пополнете ги полињата што треба да ги промените. Сите полиња што остануваат празни ќе останат непроменети.',
    'current_assets'    => 'Средствата кои моментално се задолжени на овој корисник',
    'clone'             => 'Клонирај корисник',
    'contact_user'      => 'Контактирај го/ја :name',
    'edit'              => 'Ажурирај корисник',
    'filetype_info'     => 'Дозволени типови на датотеки се png, gif, jpg, jpeg, doc, docx, pdf, txt, zip и rar.',
    'history_user'      => 'Историја за :name',
    'info'				=> 'Информации',
    'restore_user'		=> 'Кликни тука за да ги вратите.',
    'last_login'        => 'Последна најава',
    'ldap_config_text'  => 'LDAP конфигурациските поставки може да се најдат во Admin > Settings. Избраната локација (опционално) ќе биде поставена за сите увезени корисници.',
    'print_assigned'    => 'Печати задолжение',
<<<<<<< HEAD
    'email_assigned'    => 'Email List of All Assigned',
    'user_notified'     => 'User has been emailed a list of their currently assigned items.',
    'auto_assign_label' => 'Include this user when auto-assigning eligible licenses',
    'auto_assign_help'  => 'Skip this user in auto assignment of licenses',
    'software_user'     => 'Софтвер задолжен на :name',
    'send_email_help'   => 'You must provide an email address for this user to send them credentials. Emailing credentials can only be done on user creation. Passwords are stored in a one-way hash and cannot be retrieved once saved.',
=======
    'email_assigned'    => 'Испрати Е-пошта со листа од сите доделени',
    'user_notified'     => 'На корисникот му е испрати Е-пошта со листа од сите доделени предмети.',
    'auto_assign_label' => 'Вклучете го овој корисник при автоматско доделување подобни лиценци',
    'auto_assign_help'  => 'Прескокнете го овој корисник при доделување лиценци',
    'software_user'     => 'Софтвер задолжен на :name',
    'send_email_help'   => 'Мора да наведете адреса на е-пошта за овој корисник да му се испратат ингеренциите. Испраќањето акредитиви преку е-пошта може да се направи само при креирање корисник. Лозинките се чуваат во еднонасочен хаш и не можат да се вратат откако ќе се зачуваат.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'view_user'         => 'Погледнете го/ја :name',
    'usercsv'           => 'CSV датотека',
    'two_factor_admin_optin_help' => 'Вашите тековни администраторски поставки овозможуваат селективно спроведување на автентикација со два фактори. ',
    'two_factor_enrolled' => 'Поврзан уред за 2FA ',
    'two_factor_active'   => '2FA активна',
<<<<<<< HEAD
    'user_deactivated'  => 'User cannot login',
    'user_activated'  => 'User can login',
    'activation_status_warning' => 'Do not change activation status',
    'group_memberships_helpblock' => 'Only superadmins may edit group memberships.',
    'superadmin_permission_warning' => 'Only superadmins may grant a user superadmin access.',
    'admin_permission_warning' => 'Only users with admins rights or greater may grant a user admin access.',
    'remove_group_memberships' => 'Remove Group Memberships',
    'warning_deletion_information' => 'You are about to checkin ALL items from the :count user(s) listed below. Super admin names are highlighted in red.',
    'update_user_assets_status' => 'Update all assets for these users to this status',
    'checkin_user_properties' => 'Check in all properties associated with these users',
    'remote_label'   => 'This is a remote user',
    'remote'   => 'Remote',
    'remote_help' => 'This can be useful if you need to filter by remote users who never or rarely come into your physical locations.',
    'not_remote_label' => 'This is not a remote user',
    'vip_label' => 'VIP user',
    'vip_help' => 'This can be helpful to mark important people in your org if you would like to handle them in special ways.',
    'create_user' => 'Create a user',
    'create_user_page_explanation' => 'This is the account information you will use to access the site for the first time.',
    'email_credentials' => 'Email credentials',
    'email_credentials_text' => 'Email my credentials to the email address above',
    'next_save_user' => 'Next: Save User',
    'all_assigned_list_generation' => 'Generated on:',
    'email_user_creds_on_create' => 'Email this user their credentials?',
=======
    'user_deactivated'  => 'Корисникот неможе да се најави',
    'user_activated'  => 'Корисникот може да се најави',
    'activation_status_warning' => 'Не го променувај статусот на активирање',
    'group_memberships_helpblock' => 'Само суперадминистраторите можат да изменат членство во група.',
    'superadmin_permission_warning' => 'Само суперадминистраторите можат на корисник да доделат суперадминистраторски пристап.',
    'admin_permission_warning' => 'Само корисници со администраторски права можат на корисник да доделат администраторски пристап.',
    'remove_group_memberships' => 'Отстранете членство во група',
    'warning_deletion_information' => 'Ќе ги означите СИТЕ предмети од :count корисник(ци) прикажани подолу. Суперадминистраторските имина се истакнати во црвено.',
    'update_user_assets_status' => 'Ажурирајте ги сите средства за овие корисници на овој статус',
    'checkin_user_properties' => 'Проверете ги сите својства поврзани со овие корисници',
    'remote_label'   => 'Ова е далечински корисник',
    'remote'   => 'Далечина',
    'remote_help' => 'Ова може да биде корисно за филтрирање по далечински корисник кој никогаш или ретко доаѓа во вашите визички локации.',
    'not_remote_label' => 'Ова не е далечински корисник',
    'vip_label' => 'VIP корисник',
    'vip_help' => 'Ова може да биде корисно за обележување важни личности во вашата организација ако сакате да ги опслужувате на специјален начин.',
    'create_user' => 'Креирај корисник',
    'create_user_page_explanation' => 'Ова е информација што ќе ја користите за првичен пристап.',
    'email_credentials' => 'Испрати креденцијали по е-пошта',
    'email_credentials_text' => 'Испрати ги моите креденцијали на адресата на е-пошта погоре',
    'next_save_user' => 'Сними корисник',
    'all_assigned_list_generation' => 'Генерирано на:',
    'email_user_creds_on_create' => 'Да му се испрати креденцијалите на корисникот?',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
];

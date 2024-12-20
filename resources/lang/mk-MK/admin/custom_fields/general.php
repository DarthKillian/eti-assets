<?php

return [
    'custom_fields'		        => 'Полиња по желба',
<<<<<<< HEAD
    'manage'                    => 'Manage',
    'field'		                => 'Поле',
    'about_fieldsets_title'		=> 'За Fieldsets',
    'about_fieldsets_text'		=> 'Fieldsets allow you to create groups of custom fields that are frequently re-used for specific asset model types.',
    'custom_format'             => 'Custom Regex format...',
=======
    'manage'                    => 'Управувај',
    'field'		                => 'Поле',
    'about_fieldsets_title'		=> 'За Fieldsets',
    'about_fieldsets_text'		=> 'Fildsets ви овозможуваат да создавате групи на прилагодени полиња што често се повторно користат за специфични типови на модели на средства.',
    'custom_format'             => 'Прилагоден Regex формат...',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'encrypt_field'      	        => 'Енкриптирајте ја вредноста на ова поле во базата на податоци',
    'encrypt_field_help'      => 'ПРЕДУПРЕДУВАЊЕ: Шифрирањето на поле прави полето да не може да се пребарува.',
    'encrypted'      	        => 'Енкриптирано',
    'fieldset'      	        => 'Fieldset/Група на полиња',
    'qty_fields'      	      => 'Qty Fields',
    'fieldsets'      	        => 'Fieldsets/Групи на полиња',
    'fieldset_name'           => 'Име на Fieldset',
    'field_name'              => 'Име на поле',
    'field_values'            => 'Вредности на поле',
    'field_values_help'       => 'Додајте изборни опции, по една на линија. Празните линии, освен првата линија, ќе бидат игнорирани.',
    'field_element'           => 'Форма на елемент',
    'field_element_short'     => 'Елемент',
    'field_format'            => 'Формат',
    'field_custom_format'     => 'Прилагоден формат на регесив',
    'field_custom_format_help'     => 'Ова поле ви овозможува да користите регесив ("regex") за валидација. Треба да започне со "regex:" - на пример, за потврда дека прилагодената вредност на полето содржи валиден IMEI (15 нумерички цифри), би користеле <code>regex: / ^[0-9]{15}$ /</code>.',
    'required'   		          => 'Потребно',
    'req'   		              => 'Req.',
    'used_by_models'   		    => 'Користено по модели',
    'order'   		            => 'Подредување',
    'create_fieldset'         => 'Нов Fieldset',
<<<<<<< HEAD
    'update_fieldset'         => 'Update Fieldset',
    'fieldset_does_not_exist'   => 'Fieldset :id does not exist',
    'fieldset_updated'         => 'Fieldset updated',
    'create_fieldset_title' => 'Create a new fieldset',
    'create_field'            => 'Ново прилагодено поле',
    'create_field_title' => 'Create a new custom field',
    'value_encrypted'      	        => 'Вредноста на ова поле е емкриптирана во базата на податоци. Само административните корисници ќе можат да ја видат декриптираната вредност',
    'show_in_email'     => 'Вклучете ја вредноста на ова поле во е-поштата испратена до корисникот? Шифрираните полиња не можат да бидат вклучени во е-пошта',
    'show_in_email_short'     => 'Include in emails.',
    'help_text' => 'Help Text',
    'help_text_description' => 'This is optional text that will appear below the form elements while editing an asset to provide context on the field.',
    'about_custom_fields_title' => 'About Custom Fields',
    'about_custom_fields_text' => 'Custom fields allow you to add arbitrary attributes to assets.',
    'add_field_to_fieldset' => 'Add Field to Fieldset',
    'make_optional' => 'Required - click to make optional',
    'make_required' => 'Optional - click to make required',
    'reorder' => 'Reorder',
    'db_field' => 'DB Field',
    'db_convert_warning' => 'WARNING. This field is in the custom fields table as <code>:db_column</code> but should be <code>:expected</code>.',
    'is_unique' => 'This value must be unique across all assets',
    'unique' => 'Unique',
    'display_in_user_view' => 'Allow the checked out user to view these values in their View Assigned Assets page',
    'display_in_user_view_table' => 'Visible to User',
    'auto_add_to_fieldsets' => 'Automatically add this to every new fieldset',
    'add_to_preexisting_fieldsets' => 'Add to any existing fieldsets',
    'show_in_listview' => 'Show in list views by default. Authorized users will still be able to show/hide via the column selector',
    'show_in_listview_short' => 'Show in lists',
    'show_in_requestable_list_short' => 'Show in requestable assets list',
    'show_in_requestable_list' => 'Show value in requestable assets list. Encrypted fields will not be shown',
    'encrypted_options' => 'This field is encrypted, so some display options will not be available.',
=======
    'update_fieldset'         => 'Ажурирај група на полиња',
    'fieldset_does_not_exist'   => 'Групата на полиња :id не постои',
    'fieldset_updated'         => 'FГрупата на полиња е ажурирана',
    'create_fieldset_title' => ' Креирај нова група на полиња',
    'create_field'            => 'Ново прилагодено поле',
    'create_field_title' => 'Креирај ново прилагодено поле',
    'value_encrypted'      	        => 'Вредноста на ова поле е емкриптирана во базата на податоци. Само административните корисници ќе можат да ја видат декриптираната вредност',
    'show_in_email'     => 'Вклучете ја вредноста на ова поле во е-поштата испратена до корисникот? Шифрираните полиња не можат да бидат вклучени во е-пошта',
    'show_in_email_short'     => 'Вклучи во е-пошта.',
    'help_text' => 'Текст за помош',
    'help_text_description' => 'Ова е опционален текст што ќе се појави под елементите на формуларот додека уредувате средства за да обезбеди контекст на полето.',
    'about_custom_fields_title' => 'За прилагодени полина',
    'about_custom_fields_text' => 'Прилагодените полиња ви овозможуваат да додадете произволни атрибути на средствата.',
    'add_field_to_fieldset' => 'Додади поле во групата полина',
    'make_optional' => 'Задолжително - кликнете за да направите по избор',
    'make_required' => 'По избор - кликнете за да го направите задолжително',
    'reorder' => 'Преуредување',
    'db_field' => 'Поле во базата на податоци',
    'db_convert_warning' => 'ПРЕДУПРЕДУВАЊЕ. Ова поле е во табелата за прилагодени полиња како <code>:db_column</code> но треба да биде <code>:expected</code>.',
    'is_unique' => 'Оваа вредност мора да биде уникатна кај сите средства',
    'unique' => 'Уникатно',
    'display_in_user_view' => 'Дозволете му на задолжениот корисник да ги види овие вредности на нивната страница за преглед на задолжени средства',
    'display_in_user_view_table' => 'Видливо за корисник',
    'auto_add_to_fieldsets' => 'Автоматски додади го на секоја група на полиња',
    'add_to_preexisting_fieldsets' => 'Додади на сите постоечки групи полиња',
    'show_in_listview' => 'Прикажи во табеларен приказ по дифолт. Овластените корисници сепак ќе можат да го покажат/скријат преку селекторот на колоната',
    'show_in_listview_short' => 'Покажи во списоци',
    'show_in_requestable_list_short' => 'Покажете во списокот со побарливи предмети',
    'show_in_requestable_list' => 'Прикажете вредност во списокот со побарливи предмети. Енкриптираните полиња нема да бидат прикажани',
    'encrypted_options' => 'Ова поле е енкриптирано, некои опции за приказ нема да бидат достапни.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65

];

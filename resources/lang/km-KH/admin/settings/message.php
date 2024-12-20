<?php

return [

    'update' => [
        'error'                 => 'កំហុសបានកើតឡើងខណៈពេលកំពុងធ្វើបច្ចុប្បន្នភាព។ ',
<<<<<<< HEAD
        'success'               => 'Settings updated successfully.',
    ],
    'backup' => [
        'delete_confirm'        => 'Are you sure you would like to delete this backup file? This action cannot be undone. ',
        'file_deleted'          => 'The backup file was successfully deleted. ',
        'generated'             => 'A new backup file was successfully created.',
        'file_not_found'        => 'That backup file could not be found on the server.',
        'restore_warning'       => 'Yes, restore it. I acknowledge that this will overwrite any existing data currently in the database. This will also log out all of your existing users (including you).',
        'restore_confirm'       => 'Are you sure you wish to restore your database from :filename?'
    ],
    'purge' => [
        'error'     => 'An error has occurred while purging. ',
        'validation_failed'     => 'Your purge confirmation is incorrect. Please type the word "DELETE" in the confirmation box.',
        'success'               => 'Deleted records successfully purged.',
    ],
    'mail' => [
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
        'success'               => 'បានធ្វើបច្ចុប្បន្នភាពការកំណត់ដោយជោគជ័យ។',
    ],
    'backup' => [
        'delete_confirm'        => 'តើអ្នកប្រាកដថាចង់លុបឯកសារបម្រុងទុកនេះទេ? សកម្មភាពនេះមិនអាចត្រឡប់វិញបានទេ។ ',
        'file_deleted'          => 'ឯកសារបម្រុងទុកត្រូវបានលុបដោយជោគជ័យ។ ',
        'generated'             => 'ឯកសារបម្រុងទុកថ្មីត្រូវបានបង្កើតដោយជោគជ័យ។',
        'file_not_found'        => 'ឯកសារបម្រុងទុកនោះមិនអាចត្រូវបានរកឃើញនៅលើម៉ាស៊ីនមេទេ។',
        'restore_warning'       => 'បាទ ស្ដារវាឡើងវិញ។ ខ្ញុំទទួលស្គាល់ថាវានឹងសរសេរជាន់លើទិន្នន័យដែលមានស្រាប់ណាមួយនាពេលបច្ចុប្បន្ននៅក្នុងមូលដ្ឋានទិន្នន័យ។ វាក៏នឹងចេញពីអ្នកប្រើប្រាស់ដែលមានស្រាប់របស់អ្នកទាំងអស់ (រួមទាំងអ្នក)',
        'restore_confirm'       => 'តើ​អ្នក​ប្រាកដ​ថា​អ្នក​ចង់​ស្ដារ​មូលដ្ឋាន​ទិន្នន័យ​របស់​អ្នក​ពី :filename?'
    ],
    'restore' => [
        'success'               => 'ការបម្រុងទុកប្រព័ន្ធរបស់អ្នកត្រូវបានស្ដារឡើងវិញ។ សូមចូលម្តងទៀត។'
    ],
    'purge' => [
        'error'     => 'កំហុសបានកើតឡើងខណៈពេលកំពុងសម្អាត។ ',
        'validation_failed'     => 'ការបញ្ជាក់ការសម្អាតរបស់អ្នកមិនត្រឹមត្រូវទេ។ សូមវាយពាក្យ "DELETE" នៅក្នុងប្រអប់បញ្ជាក់។',
        'success'               => 'កំណត់ត្រាដែលបានលុបត្រូវបានសម្អាតដោយជោគជ័យ។',
    ],
    'mail' => [
        'sending' => 'កំពុងផ្ញើអ៊ីមែលសាកល្បង...',
        'success' => 'បាន​ផ្ញើ​សំបុត្រ!',
        'error' => 'សំបុត្រមិនអាចផ្ញើបានទេ។',
        'additional' => 'គ្មាន​សារ​បញ្ហា​បន្ថែម​ត្រូវ​បាន​ផ្ដល់​ឱ្យ​។ ពិនិត្យការកំណត់សំបុត្ររបស់អ្នក និងកំណត់ហេតុកម្មវិធីរបស់អ្នក។'
    ],
    'ldap' => [
        'testing' => 'កំពុងសាកល្បងការតភ្ជាប់ LDAP Binding និង Query...',
        '500' => '500 កំហុសម៉ាស៊ីនមេ។ សូមពិនិត្យមើលកំណត់ហេតុម៉ាស៊ីនមេរបស់អ្នកសម្រាប់ព័ត៌មានបន្ថែម។',
        'error' => 'មាន​អ្វីមួយ​មិន​ប្រក្រតី :(',
        'sync_success' => 'គំរូនៃអ្នកប្រើប្រាស់ 10 នាក់បានត្រឡប់ពីម៉ាស៊ីនមេ LDAP ដោយផ្អែកលើការកំណត់របស់អ្នក៖',
        'testing_authentication' => 'កំពុងសាកល្បងការផ្ទៀងផ្ទាត់ LDAP...',
        'authentication_success' => 'អ្នកប្រើប្រាស់បានផ្ទៀងផ្ទាត់ភាពត្រឹមត្រូវប្រឆាំងនឹង LDAP ដោយជោគជ័យ!'
    ],
    'webhook' => [
        'sending' => 'កំពុងផ្ញើ៖ សារសាកល្បងកម្មវិធី...',
        'success' => 'ការរួមបញ្ចូល៖ webhook_name របស់អ្នកដំណើរការ!',
        'success_pt1' => 'ជោគជ័យ! ពិនិត្យ ',
        'success_pt2' => ' ឆានែលសម្រាប់សារសាកល្បងរបស់អ្នក ហើយត្រូវប្រាកដថាចុច រក្សាទុកខាងក្រោម ដើម្បីរក្សាទុកការកំណត់របស់អ្នក។',
        '500' => '500 កំហុសម៉ាស៊ីនមេ។',
        'error' => 'មាន​អ្វីមួយ​មិន​ប្រក្រតី។ :app បានឆ្លើយតបជាមួយ៖ :error_message',
        'error_redirect' => 'កំហុស៖ 301/302៖ ចំណុចបញ្ចប់ត្រឡប់ការបញ្ជូនបន្ត។ សម្រាប់ហេតុផលសុវត្ថិភាព យើងមិនធ្វើតាមការបញ្ជូនបន្តទេ។ សូមប្រើចំណុចបញ្ចប់ពិតប្រាកដ។',
        'error_misc' => 'មាន​អ្វីមួយ​មិន​ប្រក្រតី។ :( ',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    ]
];

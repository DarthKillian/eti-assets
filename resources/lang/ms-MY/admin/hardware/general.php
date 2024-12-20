<?php

return [
    'about_assets_title'           => 'Mengenai Aset',
    'about_assets_text'            => 'Aset adalah item yang dikesan oleh nombor siri atau tag aset. Mereka cenderung menjadi item nilai yang lebih tinggi di mana mengenal pasti perkara-perkara tertentu.',
    'archived'  				=> 'Diarkibkan',
    'asset'  					=> 'Harta',
    'bulk_checkout'             => 'Daftar Keluar Aset',
    'bulk_checkin'              => 'Checkin Assets',
    'checkin'  					=> 'Terima Harta',
    'checkout'  				=> 'Aset Checkout',
    'clone'  					=> 'Pendua Harta',
    'deployable'  				=> 'Deployable',
    'deleted'  					=> 'Aset ini telah dipadamkan.',
    'delete_confirm'            => 'Are you sure you want to delete this asset?',
    'edit'  					=> 'Kemaskini Harta',
    'model_deleted'  			=> 'Model Aset ini telah dipadamkan. Anda mesti kembalikan model sebelum anda boleh kembalikan Aset.',
<<<<<<< HEAD
    'model_invalid'             => 'The Model of this Asset is invalid.',
    'model_invalid_fix'         => 'The Asset should be edited to correct this before attempting to check it in or out.',
=======
    'model_invalid'             => 'This model for this asset is invalid.',
    'model_invalid_fix'         => 'The asset must be updated use a valid asset model before attempting to check it in or out, or to audit it.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'requestable'               => 'Diminta',
    'requested'				    => 'Diminta',
    'not_requestable'           => 'Not Requestable',
    'requestable_status_warning' => 'Do not change requestable status',
    'restore'  					=> 'Pulihkan Asset',
    'pending'  					=> 'Menunggu',
    'undeployable'  			=> 'Tidak dapat dipisahkan',
    'undeployable_tooltip'  	=> 'This asset has a status label that is undeployable and cannot be checked out at this time.',
    'view'  					=> 'Papar Harta',
    'csv_error' => 'You have an error in your CSV file:',
<<<<<<< HEAD
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
=======
    'import_text' => '<p>Upload a CSV that contains asset history. The assets and users MUST already exist in the system, or they will be skipped. Matching assets for history import happens against the asset tag. We will try to find a matching user based on the user\'s name you provide, and the criteria you select below. If you do not select any criteria below, it will simply try to match on the username format you configured in the <code>Admin &gt; General Settings</code>.</p><p>Fields included in the CSV must match the headers: <strong>Asset Tag, Name, Checkout Date, Checkin Date</strong>. Any additional fields will be ignored. </p><p>Checkin Date: blank or future checkin dates will checkout items to associated user.  Excluding the Checkin Date column will create a checkin date with todays date.</p>
    ',
    'csv_import_match_f-l' => 'Try to match users by <strong>firstname.lastname</strong> (<code>jane.smith</code>) format',
    'csv_import_match_initial_last' => 'Try to match users by <strong>first initial last name</strong> (<code>jsmith</code>) format',
    'csv_import_match_first' => 'Try to match users by <strong>first name</strong> (<code>jane</code>) format',
    'csv_import_match_email' => 'Try to match users by <strong>email</strong> as username',
    'csv_import_match_username' => 'Try to match users by <strong>username</strong>',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'error_messages' => 'Error messages:',
    'success_messages' => 'Success messages:',
    'alert_details' => 'Please see below for details.',
    'custom_export' => 'Custom Export',
    'mfg_warranty_lookup' => ':manufacturer Warranty Status Lookup',
    'user_department' => 'User Department',
];

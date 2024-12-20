<?php

return [
    'about_assets_title'           => 'អំពីទ្រព្យសកម្ម',
    'about_assets_text'            => 'ទ្រព្យសកម្មគឺជាធាតុដែលតាមដានដោយលេខស៊េរី ឬស្លាកទ្រព្យសម្បត្តិ។ ពួកវាមានទំនោរទៅជាធាតុមានតម្លៃខ្ពស់ជាង ដែលការកំណត់អត្តសញ្ញាណធាតុជាក់លាក់មួយមានសារៈសំខាន់។',
    'archived'  				=> 'ទុកក្នុងប័ណ្ណសារ',
    'asset'  					=> 'ទ្រព្យសកម្ម',
    'bulk_checkout'             => 'Checkout Assets',
    'bulk_checkin'              => 'Checkin Assets',
    'checkin'  					=> 'Checkin Asset',
    'checkout'  				=> 'Checkout Asset',
    'clone'  					=> 'Clone Asset',
    'deployable'  				=> 'អាចប្រើបាន',
    'deleted'  					=> 'ទ្រព្យសកម្មនេះត្រូវបានលុប។',
    'delete_confirm'            => 'តើអ្នកប្រាកដថាចង់លុបទ្រព្យសម្បត្តិនេះទេ?',
    'edit'  					=> 'កែសម្រួលទ្រព្យសកម្ម',
    'model_deleted'  			=> 'គំរូទ្រព្យសកម្មនេះត្រូវបានលុប។ អ្នក​ត្រូវ​តែ​ស្ដារ​គំរូ​មុន​ពេល​អ្នក​អាច​ស្ដារ​ទ្រព្យសកម្ម។',
<<<<<<< HEAD
    'model_invalid'             => 'គំរូនៃទ្រព្យសកម្មនេះមិនត្រឹមត្រូវទេ។',
    'model_invalid_fix'         => 'The Asset should be edited to correct this before attempting to check it in or out.',
=======
    'model_invalid'             => 'This model for this asset is invalid.',
    'model_invalid_fix'         => 'The asset must be updated use a valid asset model before attempting to check it in or out, or to audit it.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'requestable'               => 'អាចស្នើសុំបាន',
    'requested'				    => 'បានស្នើសុំ',
    'not_requestable'           => 'មិនអាចស្នើសុំបាន។',
    'requestable_status_warning' => 'កុំផ្លាស់ប្តូរស្ថានភាពដែលអាចស្នើសុំបាន។',
    'restore'  					=> 'ស្តារទ្រព្យសម្បត្តិ',
    'pending'  					=> 'កំពុងរង់ចាំ',
    'undeployable'  			=> 'មិន​អាច​ប្រើ​បាន',
    'undeployable_tooltip'  	=> 'This asset has a status label that is undeployable and cannot be checked out at this time.',
    'view'  					=> 'មើលទ្រព្យសកម្ម',
    'csv_error' => 'អ្នកមានកំហុសនៅក្នុងឯកសារ CSV របស់អ្នក៖',
<<<<<<< HEAD
    'import_text' => '
    <p>
    Upload a CSV that contains asset history. The assets and users MUST already exist in the system, or they will be skipped. Matching assets for history import happens against the asset tag. We will try to find a matching user based on the user\'s name you provide, and the criteria you select below. If you do not select any criteria below, it will simply try to match on the username format you configured in the Admin &gt; General Settings.
    </p>

    <p>Fields included in the CSV must match the headers: <strong>Asset Tag, Name, Checkout Date, Checkin Date</strong>. Any additional fields will be ignored. </p>

    <p>Checkin Date: blank or future checkin dates will checkout items to associated user.  Excluding the Checkin Date column will create a checkin date with todays date.</p>
    ',
    'csv_import_match_f-l' => 'ព្យាយាមផ្គូផ្គងអ្នកប្រើប្រាស់តាមទម្រង់ firstname.lastname (jane.smith)',
    'csv_import_match_initial_last' => 'ព្យាយាមផ្គូផ្គងអ្នកប្រើប្រាស់តាមទម្រង់នាមត្រកូលដំបូង (jsmith)',
    'csv_import_match_first' => 'ព្យាយាមផ្គូផ្គងអ្នកប្រើប្រាស់តាមទម្រង់ឈ្មោះ (jane)',
    'csv_import_match_email' => 'ព្យាយាមផ្គូផ្គងអ្នកប្រើប្រាស់តាមអ៊ីមែលជាឈ្មោះអ្នកប្រើប្រាស់',
    'csv_import_match_username' => 'ព្យាយាមផ្គូផ្គងអ្នកប្រើប្រាស់តាមឈ្មោះអ្នកប្រើប្រាស់',
=======
    'import_text' => '<p>Upload a CSV that contains asset history. The assets and users MUST already exist in the system, or they will be skipped. Matching assets for history import happens against the asset tag. We will try to find a matching user based on the user\'s name you provide, and the criteria you select below. If you do not select any criteria below, it will simply try to match on the username format you configured in the <code>Admin &gt; General Settings</code>.</p><p>Fields included in the CSV must match the headers: <strong>Asset Tag, Name, Checkout Date, Checkin Date</strong>. Any additional fields will be ignored. </p><p>Checkin Date: blank or future checkin dates will checkout items to associated user.  Excluding the Checkin Date column will create a checkin date with todays date.</p>
    ',
    'csv_import_match_f-l' => 'Try to match users by <strong>firstname.lastname</strong> (<code>jane.smith</code>) format',
    'csv_import_match_initial_last' => 'Try to match users by <strong>first initial last name</strong> (<code>jsmith</code>) format',
    'csv_import_match_first' => 'Try to match users by <strong>first name</strong> (<code>jane</code>) format',
    'csv_import_match_email' => 'Try to match users by <strong>email</strong> as username',
    'csv_import_match_username' => 'Try to match users by <strong>username</strong>',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'error_messages' => 'សារបង្ហាញពីកំហុស៖',
    'success_messages' => 'សារជោគជ័យ៖',
    'alert_details' => 'សូមមើលខាងក្រោមសម្រាប់ព័ត៌មានលម្អិត។',
    'custom_export' => 'Custom Export',
    'mfg_warranty_lookup' => '៖ រកមើលស្ថានភាពធានារបស់ក្រុមហ៊ុនផលិត',
    'user_department' => 'នាយកដ្ឋានអ្នកប្រើប្រាស់',
];

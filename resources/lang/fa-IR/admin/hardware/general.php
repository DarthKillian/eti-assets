<?php

return [
    'about_assets_title'           => 'درباره دارایی ها',
    'about_assets_text'            => 'دارایی ها مواردی هستند که توسط شماره سریال یا برچسب دارایی دنبال می شوند. آنها تمایل دارند که مقادیر ارزش بیشتری داشته باشند که در آن شناسایی یک مورد خاص موردنیاز باشد.',
    'archived'  				=> 'بایگانی شد',
    'asset'  					=> 'دارایی',
    'bulk_checkout'             => 'خروج دارایی ها',
    'bulk_checkin'              => 'دارایی های ثبت نام
',
    'checkin'  					=> 'دارایی checkin',
    'checkout'  				=> 'دارایی پرداخت',
    'clone'  					=> 'دارایی شگرف',
    'deployable'  				=> 'گسترش',
    'deleted'  					=> 'این دارایی حذف شده است.
',
    'delete_confirm'            => 'Are you sure you want to delete this asset?',
    'edit'  					=> 'ویرایش دارایی',
    'model_deleted'  			=> 'این مدل دارایی حذف شده است. قبل از اینکه بتوانید Asset را بازیابی کنید، باید مدل را بازیابی کنید.
',
<<<<<<< HEAD
    'model_invalid'             => 'The Model of this Asset is invalid.',
    'model_invalid_fix'         => 'The Asset should be edited to correct this before attempting to check it in or out.',
=======
    'model_invalid'             => 'This model for this asset is invalid.',
    'model_invalid_fix'         => 'The asset must be updated use a valid asset model before attempting to check it in or out, or to audit it.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'requestable'               => 'در خواست شد',
    'requested'				    => 'درخواست شده',
    'not_requestable'           => 'غیر قابل درخواست
',
    'requestable_status_warning' => 'Do not change requestable status',
    'restore'  					=> 'بازیابی دارایی',
    'pending'  					=> 'در انتظار',
    'undeployable'  			=> 'غیرقابل گسترش',
    'undeployable_tooltip'  	=> 'This asset has a status label that is undeployable and cannot be checked out at this time.',
    'view'  					=> 'نمایش دارایی ها
',
    'csv_error' => 'شما یک خطا در فایل CSV خود دارید:
',
<<<<<<< HEAD
    'import_text' => '<p>
    یک CSV حاوی سابقه دارایی آپلود کنید. دارایی ها و کاربران باید از قبل در سیستم وجود داشته باشند، در غیر این صورت از آنها صرفنظر می شود. تطبیق دارایی‌ها برای واردات سابقه در برابر برچسب دارایی اتفاق می‌افتد. ما سعی خواهیم کرد یک کاربر منطبق بر اساس نام کاربری که ارائه می‌کنید و معیارهایی که در زیر انتخاب می‌کنید پیدا کنیم. اگر هیچ معیاری را در زیر انتخاب نکنید، به سادگی سعی می کند با قالب نام کاربری که در Admin پیکربندی کرده اید مطابقت داشته باشد &gt; تنظیمات عمومی.
    </p>

    <p>فیلدهای موجود در CSV باید با سرصفحه‌ها مطابقت داشته باشند: <strong>برچسب دارایی، نام، تاریخ پرداخت، تاریخ ورود</strong>. هر فیلد اضافی نادیده گرفته خواهد شد. </p>

    <p>تاریخ اعلام حضور: تاریخ‌های خالی یا آتی اعلام حضور، موارد را به کاربر مرتبط پرداخت می‌کنند. با کنار گذاشتن ستون تاریخ ورود، تاریخ ورود با تاریخ امروز ایجاد می‌شود.</p>',
    'csv_import_match_f-l' => 'سعی کنید کاربران را با قالب firstname.lastname (jane.smith) مطابقت دهید
',
    'csv_import_match_initial_last' => 'سعی کنید کاربران را با فرمت نام خانوادگی اولیه (jsmith) مطابقت دهید
',
    'csv_import_match_first' => 'سعی کنید کاربران را با فرمت نام کوچک (جین) مطابقت دهید
',
    'csv_import_match_email' => 'سعی کنید کاربران را از طریق ایمیل به عنوان نام کاربری مطابقت دهید
',
    'csv_import_match_username' => 'سعی کنید کاربران را با نام کاربری مطابقت دهید
',
=======
    'import_text' => '<p>Upload a CSV that contains asset history. The assets and users MUST already exist in the system, or they will be skipped. Matching assets for history import happens against the asset tag. We will try to find a matching user based on the user\'s name you provide, and the criteria you select below. If you do not select any criteria below, it will simply try to match on the username format you configured in the <code>Admin &gt; General Settings</code>.</p><p>Fields included in the CSV must match the headers: <strong>Asset Tag, Name, Checkout Date, Checkin Date</strong>. Any additional fields will be ignored. </p><p>Checkin Date: blank or future checkin dates will checkout items to associated user.  Excluding the Checkin Date column will create a checkin date with todays date.</p>
    ',
    'csv_import_match_f-l' => 'Try to match users by <strong>firstname.lastname</strong> (<code>jane.smith</code>) format',
    'csv_import_match_initial_last' => 'Try to match users by <strong>first initial last name</strong> (<code>jsmith</code>) format',
    'csv_import_match_first' => 'Try to match users by <strong>first name</strong> (<code>jane</code>) format',
    'csv_import_match_email' => 'Try to match users by <strong>email</strong> as username',
    'csv_import_match_username' => 'Try to match users by <strong>username</strong>',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'error_messages' => 'پیام خطا',
    'success_messages' => 'پیام  موفقیت:
',
    'alert_details' => 'لطفا برای جزئیات زیر را ببینید.
',
    'custom_export' => 'صادرات سفارشی
',
    'mfg_warranty_lookup' => ':manufacturer Warranty Status Lookup',
    'user_department' => 'User Department',
];

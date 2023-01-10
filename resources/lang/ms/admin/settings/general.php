<?php

return [
    'ad'				        => 'Direktori Aktif',
    'ad_domain'				    => 'Domain direktori aktif',
    'ad_domain_help'			=> 'Ini kadangkala sama dengan domain e-mel anda, tetapi tidak semestinya.',
    'ad_append_domain_label'    => 'Tambahkan nama domain',
    'ad_append_domain'          => 'Tambahkan nama domain pada medan nama pengguna',
    'ad_append_domain_help'     => 'Pengguna tidak perlu menulis "nama pengguna@domain.local", mereka hanya boleh menaip "nama pengguna".',
    'admin_cc_email'            => 'SK Email',
    'admin_cc_email_help'       => 'Jika anda ingin menghantar salinan e-mel daftar masuk/daftar keluar yang dihantar kepada pengguna ke akaun e-mel tambahan, masukkannya di sini. Jika tidak, biarkan medan ini kosong.',
    'is_ad'				        => 'Ini adalah pelayan Direktori Aktif',
    'alerts'                	=> 'Alerts',
    'alert_title'               => 'Update Alert Settings',
    'alert_email'				=> 'Hantar isyarat kepada',
    'alert_email_help'    => 'Email addresses or distribution lists you want alerts to be sent to, comma separated',
    'alerts_enabled'			=> 'Isyarat Dihidupkan',
    'alert_interval'			=> 'Amaran Pemberitahuan Amaran (dalam hari)',
    'alert_inv_threshold'		=> 'Ambang Amaran Inventori',
    'allow_user_skin'           => 'Benarkan kulit antaramuka pengguna',
    'allow_user_skin_help_text' => 'Menandai kotak ini akan membolehkan pengguna mengatasi kulit UI dengan kulit yang berbeza.',
    'asset_ids'					=> 'ID Aset',
    'audit_interval'            => 'Selang Audit',
    'audit_interval_help'       => 'If you are required to regularly physically audit your assets, enter the interval in months that you use. If you update this value, all of the "next audit dates" for assets with an upcoming audit date will be updated.',
    'audit_warning_days'        => 'Ambang Amaran Audit',
    'audit_warning_days_help'   => 'Berapa hari lebih awal haruskah kami memberi amaran kepada anda apabila aset perlu untuk pengauditan?',
    'auto_increment_assets'		=> 'Generate auto-incrementing asset tags',
    'auto_increment_prefix'		=> 'Awalan (pilihan)',
    'auto_incrementing_help'    => 'Enable auto-incrementing asset tags first to set this',
    'backups'					=> 'Sandaran',
    'backups_help'              => 'Create, download, and restore backups ',
    'backups_restoring'         => 'Restoring from Backup',
    'backups_upload'            => 'Upload Backup',
    'backups_path'              => 'Backups on the server are stored in <code>:path</code>',
    'backups_restore_warning'   => 'Use the restore button <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> to restore from a previous backup. (This does not currently work with S3 file storage or Docker.<br><br>Your <strong>entire :app_name database and any uploaded files will be completely replaced</strong> by what\'s in the backup file.  ',
    'backups_logged_out'         => 'All existing users, including you, will be logged out once your restore is complete.',
    'backups_large'             => 'Very large backups may time out on the restore attempt and may still need to be run via command line. ',
    'barcode_settings'			=> 'Tetapan Kod Bar',
    'confirm_purge'			    => 'Mengesahkan Purge',
    'confirm_purge_help'		=> 'Masukkan teks "DELETE" dalam kotak di bawah untuk membersihkan rekod anda yang dipadamkan. Tindakan ini tidak boleh dibuat asal dan akan memadamkan semua item dan pengguna yang dipadam lembut secara KEKAL. (Anda harus membuat sandaran dahulu, hanya untuk selamat.)',
    'custom_css'				=> 'CSS tersuai',
    'custom_css_help'			=> 'Masukkan mana-mana CSS ubah khas yang anda mahu gunakan. Jangan masukkan tag &lt;style&gt;&lt;/style&gt;.',
    'custom_forgot_pass_url'	=> 'URL Khas untuk Penetapan Semula Kata Laluan',
    'custom_forgot_pass_url_help'	=> 'Ini menggantikan URL terlupa kata laluan terbina pada skrin log masuk, berguna untuk mengarahkan pengguna ke fungsi semula kata laluan LDAP dalaman atau dihoskan. Ia secara langsung akan melumpuhkan fungsi kata laluan terlupa pengguna tempatan.',
    'dashboard_message'			=> 'Mesej Papan Pemuka',
    'dashboard_message_help'	=> 'Teks ini akan muncul pada papan pemuka untuk sesiapa sahaja yang mempunyai kebenaran untuk melihat papan pemuka.',
    'default_currency'  		=> 'Mata Wang Default',
    'default_eula_text'			=> 'EULA lalai',
    'default_language'			=> 'Bahasa Lalai',
    'default_eula_help_text'	=> 'Anda juga boleh mengaitkan EULA tersuai untuk kategori aset tertentu.',
    'display_asset_name'        => 'Papar Nama Harta',
    'display_checkout_date'     => 'Papar Tarikh \'Checkout\'',
    'display_eol'               => 'Papar EOL dalam paparan jadual',
    'display_qr'                => 'Paparkan Kod Square',
    'display_alt_barcode'		=> 'Paparkan kod bar 1D',
    'email_logo'                => 'Logo E-Mel',
    'barcode_type'				=> 'Jenis Barcode 2D',
    'alt_barcode_type'			=> 'Jenis kod bar 1D',
    'email_logo_size'       => 'Logo segi empat sama dalam e-mel kelihatan terbaik. ',
    'enabled'                   => 'Enabled',
    'eula_settings'				=> 'Tetapan EULA',
    'eula_markdown'				=> 'EULA ini membolehkan markah <a href="https://help.github.com/articles/github-flavored-markdown/">Github berperisa</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Jenis fail yang diterima ialah ico, png dan gif. Format imej lain mungkin tidak berfungsi dalam semua penyemak imbas.',
    'favicon_size'          => 'Favicon hendaklah imej segi empat sama, 16x16 piksel.',
    'footer_text'               => 'Teks Pengaki Tambahan ',
    'footer_text_help'          => 'Teks ini akan muncul dalam pengaki sebelah kanan. Pautan dibenarkan menggunakan <a href="https://help.github.com/articles/github-flavored-markdown/">turunkan berperisa Github</a>. Pemisahan baris, pengepala, imej, dll boleh mengakibatkan hasil yang tidak dapat diramalkan.',
    'general_settings'			=> 'Tetapan umum',
    'general_settings_keywords' => 'company support, signature, acceptance, email format, username format, images, per page, thumbnail, eula,  tos, dashboard, privacy',
    'general_settings_help'     => 'Default EULA and more',
    'generate_backup'			=> 'Hasilkan Backup',
    'header_color'              => 'Warna Tandukan',
    'info'                      => 'Tetapan ini membenarkan anda menyesuaikan sesetengah aspek pemasangan anda.',
    'label_logo'                => 'Logo Label',
    'label_logo_size'           => 'Logo segi empat sama kelihatan terbaik - akan dipaparkan di bahagian atas sebelah kanan setiap label aset. ',
    'laravel'                   => 'Versi Laravel',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Default Permissions Group',
    'ldap_default_group_info'   => 'Select a group to assign to newly synced users. Remember that a user takes on the permissions of the group they are assigned.',
    'ldap_help'                 => 'LDAP/Active Directory',
    'ldap_client_tls_key'       => 'LDAP Client TLS Key',
    'ldap_client_tls_cert'      => 'Sijil TLS Bahagian Pelanggan LDAP',
    'ldap_enabled'              => 'LDAP diaktifkan',
    'ldap_integration'          => 'Integrasi LDAP',
    'ldap_settings'             => 'Tetapan LDAP',
    'ldap_client_tls_cert_help' => 'Client-Side TLS Certificate and Key for LDAP connections are usually only useful in Google Workspace configurations with "Secure LDAP." Both are required.',
     'ldap_client_tls_key'       => 'LDAP Client-Side TLS key',
    'ldap_login_test_help'      => 'Masukkan nama pengguna dan kata laluan LDAP yang sah dari pangkalan DN yang anda tentukan di atas untuk menguji sama ada log masuk LDAP anda dikonfigurasi dengan betul. ANDA MESTI SIMPAN KONFIGURASI LDAP TERKINI DAHULU.',
    'ldap_login_sync_help'      => 'Ini hanya ujian bahawa LDAP boleh diselaraskan dengan betul. Jika pertanyaan Pengesahan LDAP anda tidak betul, pengguna mungkin masih tidak boleh log masuk. ANDA MESTI SIMPAN KONFIGURASI LDAP TERKINI DAHULU.',
    'ldap_manager'              => 'LDAP Manager',
    'ldap_server'               => 'Pelayan LDAP',
    'ldap_server_help'          => 'Ini harus bermula dengan ldap: // (untuk tidak disulitkan atau TLS) atau ldaps: // (untuk SSL)',
    'ldap_server_cert'			=> 'Pengesahan sijil LDAP SSL',
    'ldap_server_cert_ignore'	=> 'Benarkan Sijil SSL yang tidak sah',
    'ldap_server_cert_help'		=> 'Pilih kotak semak ini jika anda menggunakan sijil SSL yang ditandatangani sendiri dan ingin menerima sijil SSL yang tidak sah.',
    'ldap_tls'                  => 'Gunakan TLS',
    'ldap_tls_help'             => 'Ini harus diperiksa hanya jika anda menjalankan STARTTLS pada pelayan LDAP anda.',
    'ldap_uname'                => 'Nama Pengguna LDAP Bind',
    'ldap_dept'                 => 'Jabatan LDAP',
    'ldap_phone'                => 'Nombor Telefon LDAP',
    'ldap_jobtitle'             => 'LDAP Jawatan',
    'ldap_country'              => 'LDAP Negara',
    'ldap_pword'                => 'LDAP Bind Password',
    'ldap_basedn'               => 'Pangkalan Bind DN',
    'ldap_filter'               => 'Penapis LDAP',
    'ldap_pw_sync'              => 'Sinkron Kata Laluan LDAP',
    'ldap_pw_sync_help'         => 'Nyahtandai kotak ini jika anda tidak mahu menyimpan kata laluan LDAP diselaraskan dengan kata laluan tempatan. Melumpuhkan ini bermakna pengguna anda mungkin tidak dapat melog masuk jika pelayan LDAP anda tidak dapat dicapai kerana sebab tertentu.',
    'ldap_username_field'       => 'Medan Nama Pengguna',
    'ldap_lname_field'          => 'Nama terakhir',
    'ldap_fname_field'          => 'Nama Pertama LDAP',
    'ldap_auth_filter_query'    => 'Pertanyaan Pengesahan LDAP',
    'ldap_version'              => 'Versi LDAP',
    'ldap_active_flag'          => 'Bendera Aktif LDAP',
    'ldap_activated_flag_help'  => 'This value is used to determine whether a synced user can login to Snipe-IT. <strong>It does not affect the ability to check items in or out to them</strong>, and should be the <strong>attribute name</strong> within your AD/LDAP, <strong>not the value</strong>. <br><br>If this field is set to a field name that does not exist in your AD/LDAP, or the value in the AD/LDAP field is set to <code>0</code> or <code>false</code>, <strong>user login will be disabled</strong>. If the value in the AD/LDAP field is set to <code>1</code> or <code>true</code> or <em>any other text</em> means the user can log in. When the field is blank in your AD, we respect the <code>userAccountControl</code> attribute, which usually allows non-suspended users to log in.',
    'ldap_emp_num'              => 'Nombor Kakitangan LDAP',
    'ldap_email'                => 'E-mel LDAP',
    'ldap_test'                 => 'Test LDAP',
    'ldap_test_sync'            => 'Test LDAP Synchronization',
    'license'                   => 'Lesen Perisian',
    'load_remote_text'          => 'Skrip Jauh',
    'load_remote_help_text'		=> 'Pemasangan Snipe-IT ini boleh memuatkan skrip dari dunia luar.',
    'login'                     => 'Login Attempts',
    'login_attempt'             => 'Login Attempt',
    'login_ip'                  => 'IP Address',
    'login_success'             => 'Success?',
    'login_user_agent'          => 'User Agent',
    'login_help'                => 'List of attempted logins',
    'login_note'                => 'Nota Masuk',
    'login_note_help'           => 'Opsyenal termasuk beberapa ayat pada skrin log masuk anda, contohnya untuk membantu orang yang telah menemui peranti yang hilang atau dicuri. Medan ini menerima markah <a href="https://help.github.com/articles/github-flavored-markdown/">Github markdown</a>',
    'login_remote_user_text'    => 'Pilihan log masuk Pengguna Jarak Jauh',
    'login_remote_user_enabled_text' => 'Dayakan Log Masuk dengan Pengepala Pengguna Jarak Jauh',
    'login_remote_user_enabled_help' => 'Pilihan ini mendayakan Pengesahan melalui pengepala REMOTE_USER mengikut "Antara Muka Gerbang Biasa (rfc3875)"',
    'login_common_disabled_text' => 'Lumpuhkan mekanisme pengesahan lain',
    'login_common_disabled_help' => 'Pilihan ini melumpuhkan mekanisme pengesahan lain. Hanya dayakan pilihan ini jika anda pasti log masuk REMOTE_USER anda sudah berfungsi',
    'login_remote_user_custom_logout_url_text' => 'URL log keluar tersuai',
    'login_remote_user_custom_logout_url_help' => 'Jika url disediakan di sini, pengguna akan diubah hala ke URL ini selepas pengguna log keluar dari Snipe-IT. Ini berguna untuk menutup sesi pengguna pembekal Pengesahan anda dengan betul.',
    'login_remote_user_header_name_text' => 'Pengepala nama pengguna tersuai',
    'login_remote_user_header_name_help' => 'Gunakan pengepala yang ditentukan dan bukannya REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Gunakan dalam Cetakan',
    'logo_print_assets_help'    => 'Gunakan penjenamaan pada senarai aset boleh cetak ',
    'full_multiple_companies_support_help_text' => 'Membataskan pengguna (termasuk pentadbir) yang diberikan kepada syarikat kepada aset syarikat mereka.',
    'full_multiple_companies_support_text' => 'Sokongan Syarikat Pelbagai Penuh',
    'show_in_model_list'   => 'Tunjukkan dalam Model Dropdown',
    'optional'					=> 'pilihan',
    'per_page'                  => 'Senarai Setiap Mukasurat',
    'php'                       => 'Versi PHP',
    'php_info'                  => 'PHP Info',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, system, info',
    'php_overview_help'         => 'PHP System info',
    'php_gd_info'               => 'Anda mesti pasangkan php-gd untuk paparkan kod QR, lihat arahan pemasangan.',
    'php_gd_warning'            => 'Pemproses imej PHP dan \'plugin\' GD TIDAK dipasang.',
    'pwd_secure_complexity'     => 'Kompleks Kata Laluan',
    'pwd_secure_complexity_help' => 'Pilih mana-mana peraturan kompleksiti kata laluan yang anda mahu untuk menguatkuasakan.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'Password cannot be the same as first name, last name, email, or username',
    'pwd_secure_complexity_letters' => 'Require at least one letter',
    'pwd_secure_complexity_numbers' => 'Require at least one number',
    'pwd_secure_complexity_symbols' => 'Require at least one symbol',
    'pwd_secure_complexity_case_diff' => 'Require at least one uppercase and one lowercase',
    'pwd_secure_min'            => 'Aksara minimum kata laluan',
    'pwd_secure_min_help'       => 'Nilai minimum yang dibenarkan ialah 8',
    'pwd_secure_uncommon'       => 'Cegah kata laluan biasa',
    'pwd_secure_uncommon_help'  => 'Ini tidak akan membenarkan pengguna menggunakan kata laluan yang biasa dari 10,000 kata laluan teratas dilaporkan melanggar.',
    'qr_help'                   => 'Bolehkan Kod QR dahulu untuk pasang ini',
    'qr_text'                   => 'Teks Kod QR',
    'saml'                      => 'SAML',
    'saml_title'                => 'Update SAML settings',
    'saml_help'                 => 'SAML settings',
    'saml_enabled'              => 'SAML didayakan',
    'saml_integration'          => 'Penyepaduan SAML',
    'saml_sp_entityid'          => 'ID Entiti',
    'saml_sp_acs_url'           => 'URL Assertion Consumer Service (ACS)',
    'saml_sp_sls_url'           => 'URL Perkhidmatan Log Keluar Tunggal (SLS)',
    'saml_sp_x509cert'          => 'Sijil Awam',
    'saml_sp_metadata_url'      => 'URL metadata',
    'saml_idp_metadata'         => 'Metadata IdP SAML',
    'saml_idp_metadata_help'    => 'Anda boleh menentukan metadata IdP menggunakan URL atau fail XML.',
    'saml_attr_mapping_username' => 'Pemetaan Atribut - Nama Pengguna',
    'saml_attr_mapping_username_help' => 'NameID akan digunakan jika pemetaan atribut tidak ditentukan atau tidak sah.',
    'saml_forcelogin_label'     => 'SAML Force Login',
    'saml_forcelogin'           => 'Make SAML the primary login',
    'saml_forcelogin_help'      => 'You can use \'/login?nosaml\' to get to the normal login page.',
    'saml_slo_label'            => 'SAML Single Log Out',
    'saml_slo'                  => 'Send a LogoutRequest to IdP on Logout',
    'saml_slo_help'             => 'This will cause the user to be first redirected to the IdP on logout. Leave unchecked if the IdP doesn\'t correctly support SP-initiated SAML SLO.',
    'saml_custom_settings'      => 'SAML Custom Settings',
    'saml_custom_settings_help' => 'You can specify additional settings to the onelogin/php-saml library. Use at your own risk.',
    'saml_download'             => 'Download Metadata',
    'setting'                   => 'Tetapan',
    'settings'                  => 'Tetapan',
    'show_alerts_in_menu'       => 'Show alerts in top menu',
    'show_archived_in_list'     => 'Archived Assets',
    'show_archived_in_list_text'     => 'Show archived assets in the "all assets" listing',
    'show_assigned_assets'      => 'Show assets assigned to assets',
    'show_assigned_assets_help' => 'Display assets which were assigned to the other assets in View User -> Assets, View User -> Info -> Print All Assigned and in Account -> View Assigned Assets.',
    'show_images_in_email'     => 'Show images in emails',
    'show_images_in_email_help'   => 'Uncheck this box if your Snipe-IT installation is behind a VPN or closed network and users outside the network will not be able to load images served from this installation in their emails.',
    'site_name'                 => 'Nama Sesawang',
    'slack'                     => 'Slack',
    'slack_title'               => 'Update Slack Settings',
    'slack_help'                => 'Slack settings',
    'slack_botname'             => 'Botak Botak',
    'slack_channel'             => 'Saluran Slack',
    'slack_endpoint'            => 'Endpoint Slack',
    'slack_integration'         => 'Tetapan Slack',
    'slack_integration_help'    => 'Slack integration is optional, however the endpoint and channel are required if you wish to use it. To configure Slack integration, you must first <a href=":slack_link" target="_new" rel="noopener">create an incoming webhook</a> on your Slack account. Click on the <strong>Test Slack Integration</strong> button to confirm your settings are correct before saving. ',
    'slack_integration_help_button'    => 'Once you have saved your Slack information, a test button will appear.',
    'slack_test_help'           => 'Test whether your Slack integration is configured correctly. YOU MUST SAVE YOUR UPDATED SLACK SETTINGS FIRST.',
    'snipe_version'  			=> 'Versi Snipe-IT',
    'support_footer'            => 'Support Footer Links ',
    'support_footer_help'       => 'Specify who sees the links to the Snipe-IT Support info and Users Manual',
    'version_footer'            => 'Version in Footer ',
    'version_footer_help'       => 'Specify who sees the Snipe-IT version and build number.',
    'system'                    => 'Maklumat Sistem',
    'update'                    => 'Kemaskini Tetapan',
    'value'                     => 'Nilai',
    'brand'                     => 'Penjenamaan',
    'brand_keywords'            => 'footer, logo, print, theme, skin, header, colors, color, css',
    'brand_help'                => 'Logo, Site Name',
    'web_brand'                 => 'Web Branding Type',
    'about_settings_title'      => 'Mengenai Tetapan',
    'about_settings_text'       => 'Tetapan ini membolehkan anda menyesuaikan aspek tertentu pemasangan anda.',
    'labels_per_page'           => 'Label setiap halaman',
    'label_dimensions'          => 'Dimensi label (inci)',
    'next_auto_tag_base'        => 'Selanjutnya auto-increment',
    'page_padding'              => 'Margin halaman (inci)',
    'privacy_policy_link'       => 'Link to Privacy Policy',
    'privacy_policy'            => 'Privacy Policy',
    'privacy_policy_link_help'  => 'If a url is included here, a link to your privacy policy will be included in the app footer and in any emails that the system sends out, in compliance with GDPR. ',
    'purge'                     => 'Rekod Menghapuskan Rekod',
    'purge_deleted'             => 'Purge Deleted ',
    'labels_display_bgutter'    => 'Lapisan bawah bawah label',
    'labels_display_sgutter'    => 'Lapisan sampingan label',
    'labels_fontsize'           => 'Saiz fon label',
    'labels_pagewidth'          => 'Lebar helai label',
    'labels_pageheight'         => 'Ketinggian kunci label',
    'label_gutters'        => 'Jarak label (inci)',
    'page_dimensions'        => 'Dimensi halaman (inci)',
    'label_fields'          => 'Label bidang yang kelihatan',
    'inches'        => 'inci',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Pautan ke Snipe-IT dalam E-mel',
    'show_url_in_emails_help_text'      => 'Nyahtandai kotak ini jika anda tidak mahu memaut kembali ke pemasangan Snipe-IT anda di tapak kaki e-mel anda. Berguna jika kebanyakan pengguna anda tidak masuk.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Ketinggian imej kecil maksimum',
    'thumbnail_max_h_help'   => 'Ketinggian maksimum dalam piksel yang lakaran kecil mungkin dipaparkan dalam paparan penyenaraian. Min 25, max 500.',
    'two_factor'        => 'Pengesahan Dua Faktor',
    'two_factor_secret'        => 'Kod Dua Faktor',
    'two_factor_enrollment'        => 'Pendaftaran Dua Faktor',
    'two_factor_enabled_text'        => 'Dayakan Dua Faktor',
    'two_factor_reset'        => 'Menetapkan semula Rahsia Dua Faktor',
    'two_factor_reset_help'        => 'Ini akan memaksa pengguna untuk mendaftarkan peranti mereka dengan Pengesah Google sekali lagi. Ini berguna jika peranti yang sedang didaftarkan sekarang hilang atau dicuri.',
    'two_factor_reset_success'          => 'Peranti dua faktor berjaya diset semula',
    'two_factor_reset_error'          => 'Penetapan peranti dua faktor gagal',
    'two_factor_enabled_warning'        => 'Mengaktifkan dua faktor sekiranya ia tidak didayakan akan segera memaksa anda untuk mengesahkan dengan peranti Google Auth terdaftar. Anda akan mempunyai keupayaan untuk mendaftarkan peranti anda jika seseorang tidak mendaftar pada masa ini.',
    'two_factor_enabled_help'        => 'Ini akan menghidupkan pengesahan dua faktor menggunakan Google Authenticator.',
    'two_factor_optional'        => 'Selektif (Pengguna boleh mendayakan atau mematikan jika dibenarkan)',
    'two_factor_required'        => 'Diperlukan untuk semua pengguna',
    'two_factor_disabled'        => 'Dilumpuhkan',
    'two_factor_enter_code'	=> 'Masukkan Kod Dua Faktor',
    'two_factor_config_complete'	=> 'Hantar Kod',
    'two_factor_enabled_edit_not_allowed' => 'Pentadbir anda tidak membenarkan anda mengedit tetapan ini.',
    'two_factor_enrollment_text'	=> "Dua faktor pengesahan diperlukan, namun peranti anda belum lagi mendaftar. Buka apl Google Authenticator anda dan imbas kod QR di bawah untuk mendaftarkan peranti anda. Sebaik sahaja anda telah mendaftarkan peranti anda, masukkan kod di bawah",
    'require_accept_signature'      => 'Memerlukan Tandatangan',
    'require_accept_signature_help_text'      => 'Mengaktifkan ciri ini akan menghendaki pengguna menandatangani secara fizikal apabila menerima aset.',
    'left'        => 'dibiarkan',
    'right'        => 'betul',
    'top'        => 'atas',
    'bottom'        => 'bawah',
    'vertical'        => 'menegak',
    'horizontal'        => 'mendatar',
    'unique_serial'                => 'Unique serial numbers',
    'unique_serial_help_text'                => 'Checking this box will enforce a uniqueness constraint on asset serials',
    'zerofill_count'        => 'Panjang tag aset, termasuk zerofill',
    'username_format_help'   => 'This setting will only be used by the import process if a username is not provided and we have to generate a username for you.',
    'oauth_title' => 'OAuth API Settings',
    'oauth' => 'OAuth',
    'oauth_help' => 'Oauth Endpoint Settings',
    'asset_tag_title' => 'Update Asset Tag Settings',
    'barcode_title' => 'Update Barcode Settings',
    'barcodes' => 'Barcodes',
    'barcodes_help_overview' => 'Barcode &amp; QR settings',
    'barcodes_help' => 'This will attempt to delete cached barcodes. This would typically only be used if your barcode settings have changed, or if your Snipe-IT URL has changed. Barcodes will be re-generated when accessed next.',
    'barcodes_spinner' => 'Attempting to delete files...',
    'barcode_delete_cache' => 'Delete Barcode Cache',
    'branding_title' => 'Update Branding Settings',
    'general_title' => 'Update General Settings',
    'mail_test' => 'Send Test',
    'mail_test_help' => 'This will attempt to send a test mail to :replyto.',
    'filter_by_keyword' => 'Filter by setting keyword',
    'security' => 'Security',
    'security_title' => 'Update Security Settings',
    'security_keywords' => 'password, passwords, requirements, two factor, two-factor, common passwords, remote login, logout, authentication',
    'security_help' => 'Two-factor, Password Restrictions',
    'groups_keywords' => 'permissions, permission groups, authorization',
    'groups_help' => 'Account permission groups',
    'localization' => 'Localization',
    'localization_title' => 'Update Localization Settings',
    'localization_keywords' => 'localization, currency, local, locale, time zone, timezone, international, internatinalization, language, languages, translation',
    'localization_help' => 'Language, date display',
    'notifications' => 'Notifications',
    'notifications_help' => 'Email alerts, audit settings',
    'asset_tags_help' => 'Incrementing and prefixes',
    'labels' => 'Labels',
    'labels_title' => 'Update Label Settings',
    'labels_help' => 'Label sizes &amp; settings',
    'purge' => 'Purge',
    'purge_keywords' => 'permanently delete',
    'purge_help' => 'Purge Deleted Records',
    'ldap_extension_warning' => 'It does not look like the LDAP extension is installed or enabled on this server. You can still save your settings, but you will need to enable the LDAP extension for PHP before LDAP syncing or login will work.',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => 'Employee Number',
    'create_admin_user' => 'Create a User ::',
    'create_admin_success' => 'Success! Your admin user has been added!',
    'create_admin_redirect' => 'Click here to go to your app login!',
    'setup_migrations' => 'Database Migrations ::',
    'setup_no_migrations' => 'There was nothing to migrate. Your database tables were already set up!',
    'setup_successful_migrations' => 'Your database tables have been created',
    'setup_migration_output' => 'Migration output:',
    'setup_migration_create_user' => 'Next: Create User',
    'ldap_settings_link' => 'LDAP Settings Page',
    'slack_test' => 'Test <i class="fab fa-slack"></i> Integration',
];

<?php

return [
    'about_assets_title'           => 'Über Assets',
    'about_assets_text'            => 'Assets sind Gegenstände die durch eine Seriennummer oder einem Asset-Tag identifiziert werden. Meistens sind diese Gegenstände von höherem Wert, weshalb es Sinn ergibt diese spezifisch zu kennzeichnen.',
    'archived'  				=> 'Archiviert',
    'asset'  					=> 'Asset',
    'bulk_checkout'             => 'Assets herausgeben',
    'bulk_checkin'              => 'Assets zurücknehmen',
    'checkin'  					=> 'Asset zurücknehmen',
    'checkout'  				=> 'Asset herausgeben',
    'clone'  					=> 'Asset duplizieren',
    'deployable'  				=> 'Einsetzbar',
    'deleted'  					=> 'Dieses Asset wurde gelöscht.',
    'delete_confirm'            => 'Sind Sie sich sicher, dass Sie dieses Asset löschen möchten?',
    'edit'  					=> 'Asset bearbeiten',
    'model_deleted'  			=> 'Dieses Modell für Assets wurde gelöscht. Sie müssen das Modell wiederherstellen, bevor Sie das Asset wiederherstellen können.',
<<<<<<< HEAD
    'model_invalid'             => 'Das Modell dieses Asset ist ungültig.',
    'model_invalid_fix'         => 'Das Asset sollte bearbeitet werden, um dies zu korrigieren, bevor versucht wird, es ein- oder auszuchecken.',
=======
    'model_invalid'             => 'Dieses Modell für dieses Asset ist ungültig.',
    'model_invalid_fix'         => 'Das Asset muss mithilfe eines gültigen Asset-Modells aktualisiert werden, bevor Sie versuchen, es ein- oder auszuchecken oder zu prüfen.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'requestable'               => 'Anforderbar',
    'requested'				    => 'Angefordert',
    'not_requestable'           => 'Kann nicht angefordert werden',
    'requestable_status_warning' => 'Wechsle nicht den Status "Anforderbar"',
    'restore'  					=> 'Asset wiederherstellen',
    'pending'  					=> 'Ausstehend',
    'undeployable'  			=> 'Nicht einsetzbar',
    'undeployable_tooltip'  	=> 'Dieses Asset hat eine Statusbezeichnung, die nicht einsetzbar ist und zu diesem Zeitpunkt nicht ausgecheckt werden kann.',
    'view'  					=> 'Asset ansehen',
    'csv_error' => 'Es gibt einen Fehler in der CSV-Datei:',
<<<<<<< HEAD
    'import_text' => '
    <p>
    Laden Sie eine CSV-Datei hoch, die den Asset-Verlauf enthält. Die Assets und Benutzer MÜSSEN bereits im System vorhanden oder sie werden übersprungen. Übereinstimmende Assets für den Import der Historie geschieht mit dem Tag des Asset-Tags. Wir werden versuchen, einen passenden Benutzer zu finden, basierend auf dem von Ihnen angegebenen Benutzernamen und den Kriterien, die Sie unten auswählen. Wenn Sie keine Kriterien unten auswählen, wird einfach das Benutzernamen-Format, welches Sie in den Admin &gt; Allgemeinen Einstellungen konfiguriert haben zum Abgleich genutzt.
    </p>

    <p>Die im CSV enthaltenen Felder müssen mit den Kopfzeilen übereinstimmen: <strong>Asset Tag, Name, Checkout Date, Checkin Date</strong>. Zusätzliche Felder werden ignoriert. </p>

    <p>Checkin Date: Ein Leeres oder zukünftiges Datum wird Elemente an zugeordnete Benutzer auschecken. Ohne die Spalte Checkin Date wird das Rücknahmedatum auf das heutigen Datum gesetzt.</p>
    ',
    'csv_import_match_f-l' => 'Versucht den Benutzer nach dem vorname.nachname (jane.smith) Format abzugleichen',
    'csv_import_match_initial_last' => 'Versucht den Benutzer nach dem ersten Buchstaben des Vornamen und dem Nachnamen (jsmith) Format abzugleichen',
    'csv_import_match_first' => 'Versuchen Sie, Benutzer nach dem Vornamenformat (Jane) abzugleichen',
    'csv_import_match_email' => 'Versuchen Sie, Benutzer per E-Mail als Benutzername zu vergleichen',
    'csv_import_match_username' => 'Versuche Benutzer mit Benutzername zu vergleichen',
=======
    'import_text' => '<p>Laden Sie eine CSV hoch, das den Assetverlauf enthält. Die Assets und Benutzer MÜSSEN bereits im System vorhanden sein oder sie werden übersprungen. Für den Verlaufsimport passende Assets werden über den Asset-Tag zugeordnet. Wir werden versuchen, einen passenden Benutzer, basierend auf dem von Ihnen angegebenen Benutzernamen und den unten ausgewählten Kriterien, zu finden. Wenn Sie keine Kriterien auswählen, wird über das Benutzernamensformat, das Sie in <code>Admin- &gt; Allgemeine Einstellungen</code>konfiguriert haben, eine Zuordnung versucht.</p><p>Felder, die in der CSV enthalten sind, müssen mit den Kopfzeilen übereinstimmen: <strong>Asset Tag, Name, Checkout Datum, Check-in Datum</strong>. Zusätzliche Felder werden ignoriert. </p><p>Check-in Datum: Bei leeren oder zukünftiger Check-in Daten werden die Elemente direkt dem genannten User ausgecheckt. Ohne die Spalte Check-in Datum wird das aktuelle Datum gesetzt.</p>
    ',
    'csv_import_match_f-l' => 'Versuchen Sie, Benutzer im <strong>Vorname.Nachname</strong> (<code>jane.smith</code>) Format zu finden',
    'csv_import_match_initial_last' => 'Versuchen Sie, Benutzer im <strong>ersten ersten Nachnamen</strong> (<code>jsmith</code>) Format zu finden',
    'csv_import_match_first' => 'Versuchen Sie, Benutzer im <strong>Vorname</strong> (<code>jane</code>) Format zu finden',
    'csv_import_match_email' => 'Versuchen Sie, Benutzer mit <strong>E-Mail</strong> als Benutzername zu identifizieren',
    'csv_import_match_username' => 'Versuche Benutzer mit <strong>Benutzernamen</strong> zu identifizieren',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'error_messages' => 'Fehlermeldungen:',
    'success_messages' => 'Erfolgsmeldungen:',
    'alert_details' => 'Siehe unten für Details.',
    'custom_export' => 'Benutzerdefinierter Export',
    'mfg_warranty_lookup' => ':manufacturer Garantiestatus Abfrage',
    'user_department' => 'Abteilung des Benutzers',
];

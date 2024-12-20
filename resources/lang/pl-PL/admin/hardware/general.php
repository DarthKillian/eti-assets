<?php

return [
    'about_assets_title'           => 'O Aktywach',
    'about_assets_text'            => 'Aktywa są to elementy identyfikowane przez numer seryjny lub etykietę.  Są to przedmioty o większej wartości, gdzie liczy się identyfikacji określonego elementu.',
    'archived'  				=> 'Zarchiwizowane',
    'asset'  					=> 'Aktywo',
    'bulk_checkout'             => 'Przypisz aktywa',
    'bulk_checkin'              => 'Przyjmij aktywa',
    'checkin'  					=> 'Potwierdzanie zasobu/aktywa',
    'checkout'  				=> 'Przypisz zasób',
    'clone'  					=> 'Klonuj zasób',
    'deployable'  				=> 'Gotowe do wdrożenia',
    'deleted'  					=> 'Ten zasób został usunięty.',
    'delete_confirm'            => 'Czy na pewno chcesz usunąć?',
    'edit'  					=> 'Edytuj zasób',
    'model_deleted'  			=> 'Ten model zasobów został usunięty. Musisz przywrócić model zanim będziesz mógł przywrócić zasób.',
<<<<<<< HEAD
    'model_invalid'             => 'Model tego zasobu jest nieprawidłowy.',
    'model_invalid_fix'         => 'Zasób powinien być edytowany w celu poprawienia tego przed próbą przyjęcia go lub wydania.',
=======
    'model_invalid'             => 'Nieprawidłowy model dla tego zasobu.',
    'model_invalid_fix'         => 'The asset must be updated use a valid asset model before attempting to check it in or out, or to audit it.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'requestable'               => 'Żądane',
    'requested'				    => 'Zamówione',
    'not_requestable'           => 'Brak możliwości zarządzania',
    'requestable_status_warning' => 'Nie zmieniaj statusu żądanego',
    'restore'  					=> 'Przywróć aktywa',
    'pending'  					=> 'Oczekuje',
    'undeployable'  			=> 'Niemożliwe do wdrożenia',
    'undeployable_tooltip'  	=> 'Ten zasób ma etykietę statusu, która nie może być uruchomiona i nie może zostać zablokowana w tym czasie.',
    'view'  					=> 'Wyświetl nabytki',
    'csv_error' => 'Wystąpił błąd w twoim pliku CSV:',
<<<<<<< HEAD
    'import_text' => '
<p>
     Prześlij plik CSV zawierający historię zasobów. Zasoby i użytkownicy MUSZĄ już istnieć w systemie, w przeciwnym razie zostaną pominięci. Dopasowanie zasobów do importu historii odbywa się na podstawie tagu zasobu. Spróbujemy znaleźć pasującego użytkownika na podstawie podanej przez Ciebie nazwy użytkownika i kryteriów wybranych poniżej. Jeśli nie wybierzesz żadnych kryteriów poniżej, po prostu spróbuje dopasować format nazwy użytkownika skonfigurowany na stronie Administrator &gt; Ustawienia główne.
     </p>

     <p>Pola zawarte w pliku CSV muszą być zgodne z nagłówkami: <strong>Etykieta zasobu, Nazwa, Data wymeldowania, Data zameldowania</strong>. Wszelkie dodatkowe pola będą ignorowane. </p>

     <p>Data zaewidencjonowania: puste lub przyszłe daty zaewidencjonowania spowodują wyewidencjonowanie przedmiotów dla powiązanego użytkownika. Wykluczenie kolumny Data zameldowania spowoduje utworzenie daty zameldowania z dzisiejszą datą.</p>    ',
    'csv_import_match_f-l' => 'Spróbuj dopasować użytkowników przez imię.nazwisko (jan.kowalski)',
    'csv_import_match_initial_last' => 'Spróbuj dopasować użytkowników przez pierwszą literę imienia i nazwisko (jkowalski)',
    'csv_import_match_first' => 'Spróbuj dopasować użytkowników według formatu imienia (jan)',
    'csv_import_match_email' => 'Spróbuj dopasować użytkowników po adresie e-mail',
    'csv_import_match_username' => 'Spróbuj dopasować użytkowników po nazwie użytkownika',
=======
    'import_text' => '<p>Prześlij plik CSV zawierający historię zasobów. Aktywa i użytkownicy MUSI już istnieć w systemie lub zostaną pominięci. Dopasowywanie zasobów do importu historii odbywa się z tagiem aktywów. Będziemy próbowali znaleźć pasującego użytkownika na podstawie podanej nazwy użytkownika i kryteriów, które wybrałeś poniżej. Jeśli nie wybierzesz kryteriów poniżej, spróbuje po prostu dopasować format nazwy użytkownika, który skonfigurowałeś w <code>Admin &gt; Ustawienia ogólne</code>.</p><p>Pola zawarte w CSV muszą odpowiadać nagłówkom: <strong>Tag, Nazwa, Data Zamówienia, Data Zamówienia,</strong>. Wszelkie dodatkowe pola zostaną zignorowane. </p><p>Data sprawdzenia: puste lub przyszłe daty zaznaczenia będą zamawiać elementy do powiązanego użytkownika. Wyłączenie kolumny Data wyboru utworzy datę wyboru z dzisiejszą datą.</p>
    ',
    'csv_import_match_f-l' => 'Spróbuj dopasować użytkowników o formacie <strong>imie.Nazwisko</strong> (<code>jane.smith</code>)',
    'csv_import_match_initial_last' => 'Spróbuj dopasować użytkowników według formatu <strong>pierwsze imię</strong> (<code>jsmith</code>)',
    'csv_import_match_first' => 'Spróbuj dopasować użytkowników o formacie <strong>imienia</strong> (<code>jane</code>)',
    'csv_import_match_email' => 'Spróbuj dopasować użytkowników po <strong>adresie e-mail</strong>',
    'csv_import_match_username' => 'Spróbuj dopasować użytkowników do nazwy użytkownika <strong></strong>',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'error_messages' => 'Komunikat błędu:',
    'success_messages' => 'Wiadomości o powodzeniu:',
    'alert_details' => 'Więcej szczegółów znajduje się poniżej.',
    'custom_export' => 'Eksport niestandardowy',
    'mfg_warranty_lookup' => ':Producent Wyszukiwarka Statusu Gwarancji',
    'user_department' => 'Departament użytkownika',
];

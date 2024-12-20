<?php

return [
    'custom_fields'		        => 'Polja po meri',
    'manage'                    => 'Upravljaj',
    'field'		                => 'Polje',
    'about_fieldsets_title'		=> 'O setih polj',
    'about_fieldsets_text'		=> 'Seti polj vam omogočajo, da ustvarite skupine polj po meri, ki se pogosto znova uporabijo za določene tipe modelov sredstev.',
    'custom_format'             => 'Oblika zapisa po meri regex...',
    'encrypt_field'      	        => 'Šifriraj vrednost tega polja v bazi podatkov',
    'encrypt_field_help'      => 'OPOZORILO: Šifriranje polja onemogoča iskanje.',
    'encrypted'      	        => 'Šifrirano',
    'fieldset'      	        => 'Set polj',
    'qty_fields'      	      => 'Polja količina',
    'fieldsets'      	        => 'Set polj',
    'fieldset_name'           => 'Ime seta polja',
    'field_name'              => 'Ime polja',
    'field_values'            => 'Vrednosti polja',
    'field_values_help'       => 'Dodajte izbirne možnosti, eno za vsako vrstico. Prazne vrstice, razen prve vrstice, bodo prezrte.',
    'field_element'           => 'Obrazec Element',
    'field_element_short'     => 'Element',
    'field_format'            => 'Oblika',
    'field_custom_format'     => 'Regex format po meri',
    'field_custom_format_help'     => 'To polje vam omogoča, da uporabite izraz regex za validacijo. Začeti bi moral z "regex:" - na primer, če želite potrditi, da vrednost polja po meri vsebuje veljaven IMEI (15 številk), uporabite <code>regex: / ^[0-9]{15}$ /</code>.',
    'required'   		          => 'Zahtevano',
    'req'   		              => 'Req.',
    'used_by_models'   		    => 'Uporabljeno po modelih',
    'order'   		            => 'Naročilo',
    'create_fieldset'         => 'Nov set polj',
    'update_fieldset'         => 'Update Fieldset',
    'fieldset_does_not_exist'   => 'Fieldset :id does not exist',
    'fieldset_updated'         => 'Fieldset updated',
    'create_fieldset_title' => 'Create a new fieldset',
    'create_field'            => 'Novo polje po meri',
    'create_field_title' => 'Create a new custom field',
    'value_encrypted'      	        => 'Vrednost tega polja je šifrirana v bazi podatkov. Dešifrirane vrednosti bodo lahko videli samo skrbniki sistema',
    'show_in_email'     => 'Vključi vrednost tega polja v izdajni e-pošti poslani uporabniku? Šifriranih polj ni mogoče vključiti v e-pošti',
    'show_in_email_short'     => 'Include in emails.',
    'help_text' => 'Help Text',
    'help_text_description' => 'This is optional text that will appear below the form elements while editing an asset to provide context on the field.',
    'about_custom_fields_title' => 'About Custom Fields',
    'about_custom_fields_text' => 'Custom fields allow you to add arbitrary attributes to assets.',
    'add_field_to_fieldset' => 'Add Field to Fieldset',
    'make_optional' => 'Required - click to make optional',
    'make_required' => 'Optional - click to make required',
    'reorder' => 'Spremeni vrstni red',
    'db_field' => 'DB Field',
    'db_convert_warning' => 'WARNING. This field is in the custom fields table as <code>:db_column</code> but should be <code>:expected</code>.',
    'is_unique' => 'This value must be unique across all assets',
    'unique' => 'Unique',
    'display_in_user_view' => 'Allow the checked out user to view these values in their View Assigned Assets page',
<<<<<<< HEAD
    'display_in_user_view_table' => 'Visible to User',
    'auto_add_to_fieldsets' => 'Automatically add this to every new fieldset',
    'add_to_preexisting_fieldsets' => 'Add to any existing fieldsets',
    'show_in_listview' => 'Show in list views by default. Authorized users will still be able to show/hide via the column selector',
    'show_in_listview_short' => 'Show in lists',
=======
    'display_in_user_view_table' => 'Vidno uporabniku',
    'auto_add_to_fieldsets' => 'Automatically add this to every new fieldset',
    'add_to_preexisting_fieldsets' => 'Add to any existing fieldsets',
    'show_in_listview' => 'Show in list views by default. Authorized users will still be able to show/hide via the column selector',
    'show_in_listview_short' => 'Pokaži v seznamih',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'show_in_requestable_list_short' => 'Show in requestable assets list',
    'show_in_requestable_list' => 'Show value in requestable assets list. Encrypted fields will not be shown',
    'encrypted_options' => 'This field is encrypted, so some display options will not be available.',

];

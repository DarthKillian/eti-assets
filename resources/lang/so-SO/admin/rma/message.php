<?php

return
[
    'rma_exists' => 'RMA already exists for this asset. Please complete the current RMA, delete it, or select a different asset.',
    'not_found' =>  'RMA was not found.',

    'create' => [
        'success' => 'RMA successfully created!',
        'error' => 'RMA could not be created',
        'asset_checkedout' => 'This asset is currently checked out. Please the check in the asset to start the RMA process'
    ],

    'update' => [
        'success' => 'RMA successfully updated!',
        'error' => 'There was an issue updating the RMA'
    ],

    'delete' => [
        'success' => 'RMA successfully deleted!',
        'error' => "Looks like you can't do the simplest thing... Error during RMA delete!"
    ]
];

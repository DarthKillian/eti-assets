<?php

namespace App\Presenters;

/**
 * Class AccessoryPresenter
 */
class RMAPresenter extends Presenter
{
    /**
     * Json Column Layout for bootstrap table
     * @return string
     */
    public static function dataTableLayout()
    {
        $layout = [
            [
                'field' => 'id',
                'searchable' => false,
                'sortable' => true,
                'title' => trans('general.id'),
                'visible' => false,
            ], [
                'field' => 'asset',
                'searchable' => true,
                'sortable' => true,
                'title' => 'Asset',
                'formatter' => 'assetSerialLinkFormatter',
            ], [
                'field' => 'rma_number',
                'searchable' => true,
                'sortable' => true,
                'title' => 'RMA Number',
                'formatter' => 'rmaRequestLinkFormatter',

            ], [
                'field' => 'case_number',
                'searchable' => true,
                'sortable' => true,
                'title' => 'Case Number',
                'visible' => false,
                // 'formatter' => 'caseLinkObjFormatter',
            ],
            [
                'field' => 'company',
                'searchable' => true,
                'sortable' => true,
                'title' => 'Company',
            ],
            [
                'field' => 'status',
                'searchable' => true,
                'sortable' => true,
                'title' => 'Status',
                // 'formatter' => 'accessoriesLinkFormatter',
            ], [
                'field' => 'technician',
                'searchable' => true,
                'sortable' => true,
                'title' => 'Technician',
                // 'formatter' => 'accessoriesLinkFormatter',
            ],
            [
                'field' => 'requestor',
                'searchable' => true,
                'sortable' => true,
                'title' => 'Requestor',
                'visible' => false,
                // 'formatter' => 'accessoriesLinkFormatter',
            ],
            [
                'field' => 'notes',
                'searchable' => true,
                'sortable' => true,
                'title' => 'Notes',
                'visible' => false,
                // 'formatter' => 'accessoriesLinkFormatter',
            ], [
                'field' => 'start_date',
                'searchable' => true,
                'sortable' => true,
                'switchable' => true,
                'title' => 'Start Date',
                // 'formatter' => 'manufacturersLinkObjFormatter',
            ], [
                'field' => 'completion_date',
                'searchable' => true,
                'sortable' => true,
                'title' => 'Completion Date',
                'visible' => true,
                // 'formatter' => 'suppliersLinkObjFormatter',
            ],
            [
                'field' => 'actions',
                'searchable' => false,
                'sortable' => false,
                'switchable' => false,
                'title' => trans('table.actions'),
                'formatter' => 'rmaActionsFormatter',
            ],
        ];

        return json_encode($layout);
    }

    /**
     * Pregenerated link to this accessories view page.
     * @return string
     */
    public function nameUrl()
    {
        return (string) link_to_route('rma.show', $this->name, $this->id);
    }

    /**
     * Url to view this item.
     * @return string
     */
    public function viewUrl()
    {
        return route('rma.show', $this->id);
    }

    public function name()
    {
        return $this->model->name;
    }
}

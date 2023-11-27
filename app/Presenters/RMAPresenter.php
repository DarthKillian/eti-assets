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
                // 'formatter' => 'rmaLinkFormatter',
            ], [
                'field' => 'case_number',
                'searchable' => true,
                'sortable' => true,
                'title' => 'Case Number',
                // 'formatter' => 'caseLinkObjFormatter',
            ], [
                'field' => 'user',
                'searchable' => true,
                'sortable' => true,
                'title' => 'User',
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
                'visible' => false,
                // 'formatter' => 'suppliersLinkObjFormatter',
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
        return (string) link_to_route('accessories.show', $this->name, $this->id);
    }

    /**
     * Url to view this item.
     * @return string
     */
    public function viewUrl()
    {
        return route('accessories.show', $this->id);
    }

    public function name()
    {
        return $this->model->name;
    }
}

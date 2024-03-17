<?php

namespace App\DataTables;
use Yajra\DataTables\Services\DataTable;

class BaseDataTable extends DataTable
{
    /**
     * @var array
     */
    protected array $parameters = [
        'language' => [
            'url' => '//cdn.datatables.net/plug-ins/1.10.24/i18n/English.json'
        ],
        'initComplete' => 'function(settings, json) {$(this).removeClass("table-striped");}',
    ];
}

?>
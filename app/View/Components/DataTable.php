<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DataTable extends Component
{
    public $rows;
    public $columns;
    public $highlightFirst;
    public $striped;
    public $tableClass;
    public $theadClass;
    public $tbodyClass;
    public $rowClass;
    public $cellClass;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $rows,
        $columns,
        $highlightFirst = false,
        $striped = true,
        $tableClass = '',
        $theadClass = '',
        $tbodyClass = '',
        $rowClass = '',
        $cellClass = ''
    ) {
        $this->rows = $rows;
        $this->columns = $columns;
        $this->highlightFirst = $highlightFirst;
        $this->striped = $striped;
        $this->tableClass = $tableClass;
        $this->theadClass = $theadClass;
        $this->tbodyClass = $tbodyClass;
        $this->rowClass = $rowClass;
        $this->cellClass = $cellClass;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.data-table');
    }
}

<?php

namespace Modules\Cms\DataTables;

use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

// models...
use Modules\Cms\Entities\Slider;

class SliderDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->rawColumns(['image', 'action'])
            ->addColumn('image', function ($data) {
                if (isset($data->image)) {
                    return "<img style='width: 200px;' src=" . ($data->image->file_url ?? '') . ">";
                } else {
                    return "No image";
                }
            })
            ->addColumn('action', function ($data) {
                return view('cms::slider.action', compact('data'))->render();
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param Slider $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Slider $model)
    {
        return $model->newQuery()->orderBy('sort_order');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('data_table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bflrtip')
            ->orderBy(1)
            ->buttons(
                Button::make('create'),
                Button::make('export'),
                Button::make('print'),
                Button::make('reload')
            )
            ->parameters([
                'pageLength' => 10
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::computed('DT_RowIndex')
                ->title('Sl')->width(50),
            Column::make('title'),
            Column::make('image'),
            Column::make('sort_order')->title('Order'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Slider_' . date('YmdHis');
    }
}

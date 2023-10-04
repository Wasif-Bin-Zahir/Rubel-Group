<?php

namespace Modules\Ums\DataTables\Profile;

use Carbon\Carbon;
use Modules\Ums\Entities\UserWorkInfo;
use Yajra\DataTables\DataTableAbstract;
use Yajra\DataTables\Html\Builder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

// models...

class WorkInfoDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->editColumn('start_date', function ($data) {
                return Carbon::parse((string) $data->start_date)->format('Y-m-d');
            })
            ->editColumn('end_date', function ($data) {
                return Carbon::parse((string) $data->end_date)->format('Y-m-d');
            })
            ->addColumn('action', function ($data) {
                return view('ums::profile.work_info.action', compact('data'))->render();
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param UserWorkInfo $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(UserWorkInfo $model)
    {
        // return data
        return $model->newQuery()->where('user_id', auth()->user()->id);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return Builder
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
                ->title('Sl'),
            Column::make('company_name'),
            Column::make('designation'),
            Column::make('department'),
            Column::make('start_date'),
            Column::make('end_date'),
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
        return 'UserWorkInfo_' . date('YmdHis');
    }
}

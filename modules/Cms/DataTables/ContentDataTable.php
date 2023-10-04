<?php

namespace Modules\Cms\DataTables;

use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

// models...
use Modules\Cms\Entities\Content;

class ContentDataTable extends DataTable
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
            ->addColumn('action', function ($data) {
                return view('cms::content.action', compact('data'))->render();
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param Content $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Content $model)
    {
        // Content model instance
        $content = $model->newQuery();

        // apply joins
        $content->join('content_categories', 'contents.content_category_id', 'content_categories.id');

        // select queries
        $content->select([
            'contents.id',
            'contents.title',
            // 'contents.display_date',
            'contents.updated_at'
        ]);

        // where page category
        if (request()->has('category_id')) {
            $content->where('content_category_id', request()->get('category_id'));
        }

        // return data
        return $content;
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
                Button::make('create')->action("window.location = '".route('backend.cms.content.create', ['category_id' => request()->get('category_id')])."';"),
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
            Column::make('title'),
            // Column::make('display_date')->name('contents.display_date'),
            Column::make('updated_at'),
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
        return 'Content_' . date('YmdHis');
    }
}

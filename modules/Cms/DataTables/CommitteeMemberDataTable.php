<?php

namespace Modules\Cms\DataTables;

use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

// models...
use Modules\Cms\Entities\CommitteeMember;

class CommitteeMemberDataTable extends DataTable
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
            ->addColumn('action',  function($data) {
                return view('cms::committee_member.action', compact('data'))->render();
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param CommitteeMember $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(CommitteeMember $model)
    {
        $commite = $model->newQuery();
        $commite->leftJoin('committee_categories', 'committee_categories.id', 'committee_members.committee_category_id');
        if(isset($_GET['id'])){
            $commite->where('committee_members.committee_category_id',$_GET['id']);
        }
       
        $commite->select([
            'committee_members.id',
            'committee_members.name',
            'committee_members.designation',
            'committee_members.company',
            'committee_categories.title as committe',
            'committee_categories.updated_at'
        ]);

        // return data
        return $commite;
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
                ->title('Sl'),
            Column::make('name'),
			Column::make('designation'),
            Column::make('company'),
            Column::make('committe'),
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
        return 'CommitteeMember_' . date('YmdHis');
    }
}

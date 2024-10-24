<?php

namespace App\DataTables\Admin\Lansia;

use App\Models\DataLansia;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class DetailDataLansiaDataTable extends DataTable
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
            ->addColumn('action', function ($row) {
                $btn = '<div class="btn-group">';
                $btn = $btn . '<a href="' . route('admin.data-lansia.datalansia.edit', $row->id) . '" class="btn btn-dark buttons-edit"><i class="fas fa-edit"></i></a>';
                $btn = $btn . '<a href="' . route('admin.data-lansia.datalansia.destroy', $row->id) . '" class="btn btn-danger buttons-delete"><i class="fas fa-trash fa-fw"></i></a>';
                $btn = $btn . '</div>';
                return $btn;
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\App\Models\Admin\DetailDataLansiaDataTable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    // public function query(Warga $model)
    // {
    //     $id = request()->segment(3);
    //     return $model->select('warga.*')->with(['agama', 'status_keluarga'])->where('keluarga_id', $id);
    // }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('data_lansia-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            // ->dom('<"dataTables_wrapper dt-bootstrap"B<"row"<"col-xl-7 d-block d-sm-flex d-xl-block justify-content-center"<"d-block d-lg-inline-flex"l>><"col-xl-5 d-flex d-xl-block justify-content-center"fr>>t<"row"<"col-sm-5"i><"col-sm-7"p>>>')
            ->orderBy(1)
            ->parameters([
                'responsive' => true,
                'autoWidth' => false
            ]);
        // ->buttons(
        //     Button::make('create'),
        //     Button::make('export'),
        //     Button::make('print'),
        //     Button::make('reset'),
        //     Button::make('reload')
        // );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            // Column::make('id'),
            //Column::make('no'),
            Column::make('nama_lansia'),
            Column::make('email'),
            Column::make('no_hp'),
            Column::make('no_KMS'),
            Column::make('NIK'),
            Column::make('jenis_kelamin'),
            Column::make('ttl'),
            Column::make('umur'),
            Column::make('status_perkawinan')->data('statuskawin.nama'),
            Column::make('alamat'),
            Column::make('agama')->data('agama.nama'),
            Column::make('pendidikan_terakhir'),
            Column::make('golongan_darah')->data('golongandarah.nama'),
            Column::make('jaminan_kesehatan')->data('jaminankesehatan.jaminan_kesehatan_id'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center')
                
            
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Admin\DetailKeluarga_' . date('YmdHis');
    }
}

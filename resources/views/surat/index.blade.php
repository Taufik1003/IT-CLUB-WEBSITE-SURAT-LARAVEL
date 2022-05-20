@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> <a href="/surat-tambah" class="btn btn-success my-1 btn-sm"   >Tambah</a></div>
                <div class="card-body">
                    <table id="datatable" class="table table-bordered  m-t-30">
                        <thead>
                            <tr>
                                <th width="10%">No</th>
                                <th>Perihal</th>
                                <th>Nomor Surat</th>
                                <th>Tanggal</th>

                                <th>Tujuan</th>

                                <th width="10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push('js')
    <script>
        let dataTable = $('#datatable').DataTable({
            dom: 'lBfrtip',
            buttons: [{
                className: 'btn btn-success btn-sm mr-2',
                text: 'Create',
                action: function (e, dt, node, config) {
                    createItem();
                }
            }, {
                className: 'btn btn-warning btn-sm mr-2',
                text: 'Reload',
                action: function (e, dt, node, config) {
                    reloadDatatable();
                }
            }],

            responsive: true,
            processing: true,
            serverSide: true,
            searching: true,
            pageLength: 5,
            lengthMenu: [
                [5, 10, 15, -1],
                [5, 10, 15, "All"]
            ],
            ajax: {
                url: '/surat',
                type: 'GET',
            },
            columns: [{
                    data: 'DT_RowIndex',
                    orderable: false
                },
                {
                    data: 'perihal',
                    orderable: true
                },
                {
                    data: 'nomor_surat',
                    orderable: true
                },
                {
                    data: 'tanggal',
                    orderable: true
                },
                {
                    data: 'tujuan',
                    orderable: true
                },
                {
                    data: 'action',
                    name: '#',
                    orderable: false
                },
            ]
        });

    </script>

@endpush

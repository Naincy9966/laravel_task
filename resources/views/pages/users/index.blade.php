@extends('layouts.admin')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>{{ trans('global.members') }}</h2>
            <div class="right-wrapper text-end">
            </div>
        </header>
        <!-- start: page -->
        <!-- start: page -->
        <div class="row">
            <div class="col">
                <section class="card">
                    <header class="card-header">
                        <div class="card-actions">
                        </div>
                        <h2 class="card-title">{{ trans('global.user') }}</h2>
                        <!-- <a href="">{{ trans('global.pending_members') }}</a> -->
                    </header>
                    <div class="card-body">
                        <div class="table_responsive">
                            <table id="user_table" class=" table table-bordered table-striped table-hover datatable">

                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>{{ trans('global.name') }}</th>
                                        <th>{{ trans('global.email') }}</th>
                                        <th>{{ trans('global.phone') }}</th>
                                        <th>{{ trans('global.address') }}</th>
                                        <th>{{ trans('global.date_of_birth') }}</th>
                                        <th>{{ trans('global.year_of_establish') }}</th>
                                        <th></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- end: page -->
    </section>
@endsection
@section('scripts')
    <script>
        var usertable = $('#user_table').DataTable({
            serverSide: true,
            processing: true,
            responsive: true,
            ajax: "{{ route('users.list') }}",
            columns: [{
                    name: 'id',
                    render: function(data, type, full, meta) {
                        // Add 1 to the ID to start from 1
                        return meta.row + 1;
                    }
                }, {
                    name: 'name'
                },
                {
                    name: 'email'
                },
                {
                    name: 'phone'
                },
                {
                    name: 'user_detail.address'
                },
                {
                    name: 'user_detail.date_of_birth'
                },
                {
                    name: 'user_detail.year_of_establish'
                },
                {
                    name: 'action',
                    orderable: false,
                    searchable: false
                }

            ],
            dom: 'Bfrtip',
            lengthMenu: [
                [50, -1],
                ['50 rows', 'Show all']
            ],
            buttons: [
                // 'pageLength',
                // 'copyHtml5',
                // 'excelHtml5',
                // 'csvHtml5',
                // 'pdfHtml5',
                // 'print'
            ]
        });
    </script>

    @parent
@endsection

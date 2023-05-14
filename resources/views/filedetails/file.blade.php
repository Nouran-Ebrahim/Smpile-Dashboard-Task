@extends('layouts.master')
@section('title')
   Attachment Details
@stop
@section('css')
    <!-- Internal Data table css -->
    <link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Attachment</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    Details</span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')

    <div class="panel panel-primary tabs-style-2">
        <div class=" tab-menu-heading">
            <div class="tabs-menu1">
                <!-- Tabs -->
                <ul class="nav panel-tabs main-nav-line">
                    <li><a href="#tab4" class="nav-link active" data-toggle="tab"> Food</a></li>
                    <li><a href="#tab5" class="nav-link" data-toggle="tab">Bakeries </a></li>
                    <li><a href="#tab6" class="nav-link" data-toggle="tab">Drinkes</a></li>
                </ul>
            </div>
        </div>
        <div class="panel-body tabs-menu-body main-content-body-right border">
            <div class="tab-content">
                <div class="tab-pane active" id="tab4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table key-buttons text-md-nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>File</th>
                                        <th>Operation</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 0; ?>
                                    @foreach ($food as $f)
                                        <?php $i++; ?>
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $f->title }} </td>
                                            <td>{{ $f->file_name }}</td>
                                            <td>
                                                <a class="btn btn-primary btn-sm"
                                                    href="{{ URL::asset('Attachments/' . $f->file_name) }}" download><i
                                                        class="fas fa-download"></i>&nbsp;
                                                    download</a>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab5">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table key-buttons text-md-nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>File</th>
                                        <th>Operation</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 0; ?>
                                    @foreach ($bakeries as $b)
                                        <?php $i++; ?>
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $b->title }} </td>
                                            <td>{{ $b->file_name }}</td>
                                            <td>
                                                <a class="btn btn-primary btn-sm"
                                                    href="{{ URL::asset('Attachments/' . $b->file_name) }}" download><i
                                                        class="fas fa-download"></i>&nbsp;
                                                    download</a>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab6">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table key-buttons text-md-nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th> Title</th>
                                        <th> File</th>
                                        <th>Operation</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 0; ?>
                                    @foreach ($drinks as $d)
                                        <?php $i++; ?>
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $d->title }} </td>
                                            <td>{{ $d->file_name }}</td>
                                            <td>
                                                <a class="btn btn-primary btn-sm"
                                                    href="{{ URL::asset('Attachments/' . $d->file_name) }}" download><i
                                                        class="fas fa-download"></i>&nbsp;
                                                    download</a>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- delete -->

        </div>
    </div>
@endsection
@section('js')
    <!-- Internal Data tables -->
    <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>
    <!--Internal  Datatable js -->
    <script src="{{ URL::asset('assets/js/table-data.js') }}"></script>
    <script>
        $('#delete_file').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id_file = button.data('id_file')
            var file_name = button.data('file_name')
            var invoice_number = button.data('invoice_number')
            var modal = $(this)
            modal.find('.modal-body #id_file').val(id_file);
            modal.find('.modal-body #file_name').val(file_name);
            modal.find('.modal-body #invoice_number').val(invoice_number);
        })
    </script>
    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
@endsection

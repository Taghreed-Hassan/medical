@extends('admin.layouts.master')
@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('Admin/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('Admin/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('Admin/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('Admin/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('Admin/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('Admin/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<!---Internal Owl Carousel css-->
<link href="{{URL::asset('Admin/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
<!---Internal  Multislider css-->
<link href="{{URL::asset('Admin/plugins/multislider/multislider.css')}}" rel="stylesheet">
<!--Internal   Notify -->
<link href="{{URL::asset('Admin/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">{{__('admin/services.home')}}</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{trans('admin/sidbar.Services')}}</span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')

{{-- Succesfully Add --}}

@if (session()->has('Succesfully_Add'))
<script>
    window.onload = function() {
        notif({
            msg: "{{__('admin/services.Succesfully_Add')}}"
            , type: "success"
        });
    }
</script>
@endif

@if (session()->has('Succesfully_Edit'))
<script>
    window.onload = function() {
        notif({
            msg: "{{__('admin/services.Succesfully_Edit')}}"
            , type: "success"
        });
    }
</script>
@endif

@if (session()->has('ServiesDeleted'))
<script>
    window.onload = function() {
        notif({
            msg: "{{__('admin/services.ServiesDeleted')}}"
            , type: "success"
        });
    }
</script>
@endif

{{-- Error --}}

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<!-- row -->
<div class="row ">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row">

                    {{-- strat Button Create --}}
                    <div class="col-4">
                        <button class="btn btn-success" data-toggle="modal" data-target="#Add_Services">{{__('admin/services.Add_Services')}}</button>
                        @include('admin.Services.create')
                    </div>
                    {{-- End Button Create --}}

                </div>
            </div>
            <div class="card-body">
                <table class="table text-md-nowrap text-center" id="example2">
                    <thead>
                        <tr>
                            <th class="wd-15p border-bottom-0">#</th>
                            <th class="wd-15p border-bottom-0">{{__('admin/services.name_Services')}}</th>
                            <th class="wd-20p border-bottom-0">{{__('admin/services.Notes_Services')}}</th>
                            <th class="wd-15p border-bottom-0">{{__('admin/services.Operations')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i=0;
                        @endphp
                        @foreach ($Servies as $xxx)
                        @php
                        $i++;
                        @endphp
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$xxx->Name_Services}}</td>
                            <td>{{$xxx->Notes_Services == true ? $xxx->Notes_Services : trans('admin/services.Notes')}}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{__('admin/services.Operations')}}
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#EditServies{{$xxx->id}}"><i class="fa fa-edit text-success"></i> {{trans('admin/services.Edit')}}</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#DeletedServies{{$xxx->id}}"><i class=" fa fa-trash text-danger"></i> {{trans('admin/services.Deleted')}}</a>
                                    </div>
                                </div>
                            </td>

                            {{-- Modal Edit Services --}}
                            @include('admin.Services.edit')

                            {{-- Modal Deleted Services --}}
                            @include('admin.Services.deleted')

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- row closed -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')
<!-- Internal Data tables -->
<script src="{{URL::asset('Admin/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('Admin/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('Admin/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('Admin/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('Admin/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('Admin/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('Admin/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('Admin/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('Admin/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('Admin/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('Admin/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('Admin/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('Admin/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('Admin/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('Admin/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('Admin/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('Admin/js/table-data.js')}}"></script>
<!--Internal  Datepicker js -->
<script src="{{URL::asset('Admin/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!-- Internal Select2 js-->
<script src="{{URL::asset('Admin/plugins/select2/js/select2.min.js')}}"></script>
<!-- Internal Modal js-->
<script src="{{URL::asset('Admin/js/modal.js')}}"></script>
<!--Internal  Notify js -->
<script src="{{URL::asset('Admin/plugins/notify/js/notifIt.js') }}"></script>
<script src="{{URL::asset('Admin/plugins/notify/js/notifit-custom.js') }}"></script>
@endsection
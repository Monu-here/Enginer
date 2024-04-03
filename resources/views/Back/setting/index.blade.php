@extends('Back.layout.app')
@section('css')
@endsection
@section('toolbar')
    / Setting
@endsection
@section('content')
    {{-- <div class="container"> --}}
    <div class="row ">
        <div class="col-sm-12">
            <div class="card card-table comman-shadow">
                <div class="card-body">
                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="page-title">Setting</h3>
                            </div>
                            <div class="col-auto text-end float-end ms-auto download-grp">
                                <a href="students.html" class="btn btn-outline-gray me-2 active"><i
                                        class="feather-list"></i></a>
                                <a href="students-grid.html" class="btn btn-outline-gray me-2"><i
                                        class="feather-grid"></i></a>
                                <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i>
                                    Download</a>
                                <a href="{{ route('admin.setting.add') }}" class="btn btn-primary"><i
                                        class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="clienttable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Website Name</th>
                                        <th>Website Text</th>
                                        <th>Email</th>
                                        <th>Location</th>
                                        <th>Phone No</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1; @endphp
                                    @foreach ($settings as $settings)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $settings->websitename }}</td>
                                            <td>{{ $settings->websitetext }}</td>
                                            <td>{{ $settings->email }}</td>
                                            <td>{{ $settings->location }}</td>
                                            <td>{{ $settings->phone }}</td>
                                           
                                            <td>
                                                ssssss

                                            </td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- </div> --}}
    @include('Back.Slider.show')
@endsection
@section('js')
@endsection

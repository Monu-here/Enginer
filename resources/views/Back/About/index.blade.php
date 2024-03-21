@extends('Back.layout.app')
@section('css')
@endsection
@section('toolbar')
    / About
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
                                <h3 class="page-title">About</h3>
                            </div>
                            <div class="col-auto text-end float-end ms-auto download-grp">
                                <a href="students.html" class="btn btn-outline-gray me-2 active"><i
                                        class="feather-list"></i></a>
                                <a href="students-grid.html" class="btn btn-outline-gray me-2"><i
                                        class="feather-grid"></i></a>
                                <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i>
                                    Download</a>
                                <a href="{{ route('admin.about.add') }}" class="btn btn-primary"><i
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
                                        <th>Text1</th>
                                        <th>Text2</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1; @endphp
                                    @foreach ($abouts as $about)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $about->text1 }}</td>
                                            <td>{{ $about->text2 }}</td>
                                            <td><img src="{{ asset($about->image) }}" alt="" width="50"></td>
                                            <td>
                                                <a href="{{ route('admin.about.edit', ['about' => $about->id]) }}"
                                                    class="btn btn-sm btn-success"><i class="fa fa-pen"></i></a>
                                                <a href="{{ route('admin.about.del', ['about' => $about->id]) }}"
                                                    class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                                {{-- <a href="{{ route('admin.about.show', ['sliderId' => $slider->id]) }}"
                                                    class="btn btn-sm btn-success" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a> --}}

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

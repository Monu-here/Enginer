@extends('Back.layout.app')
@section('css')
@endsection
@section('toolbar')
    / Slider
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
                                <h3 class="page-title">Slider</h3>
                            </div>
                            <div class="col-auto text-end float-end ms-auto download-grp">
                                <a href="students.html" class="btn btn-outline-gray me-2 active"><i
                                        class="feather-list"></i></a>
                                <a href="students-grid.html" class="btn btn-outline-gray me-2"><i
                                        class="feather-grid"></i></a>
                                <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i>
                                    Download</a>
                                <a href="{{ route('admin.slider.add') }}" class="btn btn-primary"><i
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
                                        <th>Text</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1; @endphp
                                    @foreach ($sliders as $slider)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $slider->text1 }}</td>
                                            <td><img src="{{ asset($slider->image) }}" alt="" width="50"></td>
                                            <td>
                                                <a href="{{ route('admin.slider.edit', ['slider' => $slider->id]) }}"
                                                    class="btn btn-sm btn-success"><i class="fa fa-pen"></i></a>
                                                <a href="{{ route('admin.slider.del', ['slider' => $slider->id]) }}"
                                                    class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                                <a href="{{ route('admin.slider.show', ['sliderId' => $slider->id]) }}"
                                                    class="btn btn-sm btn-success" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                <button id="showSliderButton" class="btn btn-primary">Show Slider</button>

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

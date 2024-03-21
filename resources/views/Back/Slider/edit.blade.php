@extends('Back.layout.app')
@section('toolbar')
    / <a href="{{ route('admin.slider.index') }}" style="text-decoration: none; color: black"> Slider </a> / Edit / {{$slider->id}}
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" />
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('admin.slider.edit', ['slider' => $slider->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <label for="text">Image</label>
                                <input type="file" class="form-control photo" name="image" placeholder="Enter Image"
                                    accept="image/*" data-default-file={{ asset($slider->image) }}>
                            </div>
                            <div class="col-6">
                                <label for="text">Text</label>
                                <input type="text" class="form-control" name="text1" id="text1"
                                    value="{{ $slider->text1 }}">
                                <div class="mt-3">
                                    <button class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.photo').dropify();
        });
    </script>
@endsection

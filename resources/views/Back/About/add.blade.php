@extends('Back.layout.app')
@section('toolbar')
    / <a href="{{ route('admin.about.index') }}" style="text-decoration: none; color: black"> About </a>  /Add

@endsection
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" />
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('admin.about.add') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <label for="text">Image</label>
                                <input type="file" class="form-control photo" name="image" placeholder="Enter Image"
                                    accept="image/*">
                            </div>
                            <div class="col-6">
                                <label for="text">Text1</label>
                                <input type="text" class="form-control" name="text1" id="text1">
                                <label for="text">Text2</label>
                                <input type="text" class="form-control" name="text2" id="text2">
                                <div class="mt-3">
                                    <button class="btn btn-primary">Save</button>
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

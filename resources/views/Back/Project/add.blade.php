@extends('Back.layout.app')
@section('toolbar')
    / <a href="{{ route('admin.project.index') }}" style="text-decoration: none; color: black"> Project </a> /Add
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" />
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('admin.project.add') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <label for="text">Image</label>
                                <input type="file" class="form-control photo" name="image" placeholder="Enter Image"
                                    accept="image/*">
                                <label for="cate">Category</label>
                                <select name="category_id" id="category_id" class="form-control ">
                                    <option value="Study Matrial">Study Matrial</option>
                                    <option value="Program">Program</option>
                                    <option value="Farewale">Farewale</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="text">Name</label>
                                <input type="text" class="form-control" name="name" id="name">
                                <label for="text">Description</label>
                                <input type="text" class="form-control" name="desc" id="desc">
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

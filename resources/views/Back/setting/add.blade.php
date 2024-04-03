@extends('Back.layout.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('admin.setting.add') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label for="websitename">Website Name</label>
                                <input type="text" name="websitename" id="websitename" class="form-control" value="{{$setting->websitename ?? "Admin"}}">
                            </div>
                            <div class="col">
                                <label for="websitename">About us</label>
                                <input type="text" name="websitetext" id="websitetext" class="form-control" value="{{$setting->websitetext ?? "Admin"}}">
                            </div>
                            <div class="col">
                                <label for="websitename">Location</label>
                                <input type="text" name="location" id="location" class="form-control" value="{{$setting->location ?? "admin"}}">
                            </div>
                            <div class="col">
                                <label for="websitename">Email</label>
                                <input type="text" name="email" id="email" class="form-control" value="{{$setting->email ?? "Admin"}}">
                            </div>
                            <div class="col">
                                <label for="websitename">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control" value="{{$setting->phone ?? "Admin"}}">
                            </div>
                            <div class="col mt-4">
                                <button class="btn btn-primary">Submit</button>
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

@extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Add Blog Form</h4>
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <form  action="{{route('blog.new')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="from-group row mb-4">
                            <label for="horizontal-firatname-input" class="col-sm-3 col-form-lebel">Category Name </label>
                            <div class="col-sm-9">
                                <select class="form-control" required name="category_id" id="">
                                    <option value="" disabled selected>-- Select Category Name</option>
                                    @foreach ($categories as $category )
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="from-group row mb-4">
                            <label for="horizontal-firatname-input1" class="col-sm-3 col-form-lebel">Blog Title </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="main_title" id="horizontal-firatname-input1">
                            </div>
                        </div>
                        <div class="from-group row mb-4">
                            <label for="horizontal-firatname-input2" class="col-sm-3 col-form-lebel">Blog Sub Title </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="sub_title" id="horizontal-firatname-input2">
                            </div>
                        </div>
                        <div class="from-group row mb-4">
                            <label for="horizontal-firatname-input" class="col-sm-3 col-form-lebel">Short Description </label>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" name="short_description" id="horizontal-firatname-input"cols="30" rows="2"></textarea>
                            </div>

                        </div>
                        <div class="from-group row mb-4">
                            <label for="horizontal-firatname-input4" class="col-sm-3 col-form-lebel">Long Description </label>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control summernote" name="long_description" id="horizontal-firatname-input4"cols="30" rows="8"></textarea>
                            </div>
                        </div>
                        <div class="from-group row mb-4">
                            <label for="horizontal-firatname-input" class="col-sm-3 col-form-lebel"> Image </label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control-file" name="image" id="horizontal-firatname-input">
                            </div>
                        </div>
                        <div class="from-grop row justify-content-end">
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary w-md">Create New Blog </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('master.admin.master')

@section('body')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Edit Category Form</h4>
                <p class="text-center text-success">{{Session::get('message')}}</p>
                <form  action="{{route('category.new')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="from-group row mb-4">
                        <label for="horizontal-firatname-input" class="col-sm-3 col-form-lebel">Category Name </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" id="horizontal-firatname-input">
                        </div>
                    </div>
                    <div class="from-group row mb-4">
                        <label for="horizontal-firatname-input" class="col-sm-3 col-form-lebel">Category Description </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="description" id="horizontal-firatname-input">
                        </div>
                    </div>
                    <div class="from-group row mb-4">
                        <label for="horizontal-firatname-input" class="col-sm-3 col-form-lebel">Category Image </label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control-file" name="image" id="horizontal-firatname-input">
                        </div>
                    </div>
                    <div class="from-grop row justify-content-end">
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-primary w-md">Edit New Category </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

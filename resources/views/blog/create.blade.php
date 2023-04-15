@extends('layouts.app')
@section('content')
    <div class="container" class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a
                                        href="{{ route('blogs.index') }}">About Us</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Default Basic Forms Start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Add new blog</h4>
                    </div>
                </div>

                <form action="{{ route('blogs.store') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"> Title</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" name="title" placeholder="Enter Title"
                                value="{{ old('title') }}" required>
                        </div>
                    </div>

                    <div class="form-group">
     
                        <label for="category">Category</label>
                        <select class="form-control" id="category" name="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"> Description</label>
                        <div class="col-sm-12 col-md-10">
                            <textarea name="description" id="description" type="text" class="form-control" rows="20" required></textarea>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"></label>
                        <div class="col-sm-12 col-md-10">
                            <button class="btn btn-success" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Default Basic Forms End -->

        </div>
    </div>
@endsection


@extends('admin.layouts.layout')


@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Category "{{$category->title}}"</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{route('categories.update', ['category' => $category->id])}}">
            @method('PUT')
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Category title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror " id="title"
                           name="title" placeholder="Enter category title" value="{{$category->title}}">
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.content -->
@endsection

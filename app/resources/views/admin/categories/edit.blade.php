
@extends('admin.layouts.layout')


@section('content')
    <!-- Main content -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Категория "{{$category->title}}"</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{route('categories.update', ['category' => $category->id])}}">
            @method('PUT')
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Новое название категории:</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror " id="title"
                           name="title" placeholder="Введите новое название" value="{{$category->title}}">
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Изменить</button>
            </div>
        </form>
    </div>
    <!-- /.content -->
@endsection

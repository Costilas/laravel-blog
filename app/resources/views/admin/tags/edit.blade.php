@extends('admin.layouts.layout')


@section('content')
    <!-- Main content -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Тег: "{{$tag->title}}"</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{route('tags.update', ['tag' => $tag->id])}}">
            @method('PUT')
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Новое название тега: </label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror " id="title"
                           name="title" placeholder="Введите новое название..." value="{{$tag->title}}">
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

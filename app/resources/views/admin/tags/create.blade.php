@extends('admin.layouts.layout')


@section('content')
    <!-- Main content -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Добавить новый тег:</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{route('tags.store')}}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Название тега: </label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror " id="title"
                           name="title" placeholder="Введите название...">
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Добавить</button>
            </div>
        </form>
    </div>
<!-- /.content -->
@endsection

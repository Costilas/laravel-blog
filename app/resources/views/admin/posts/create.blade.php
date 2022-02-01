@extends('admin.layouts.layout')


@section('content')

    <!-- Main content -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Создать новую статью</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{route('posts.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Заголовок поста</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                           name="title" placeholder="Введите заголовок статьи">
                </div>
                <div class="form-group">
                    <label for="description">Цитата</label>
                    <textarea class="form-control @error('title') is-invalid @enderror" rows="5" id="description" name="description" placeholder="Цитата..."></textarea>
                </div>
                <div class="form-group">
                    <label for="content">Контент</label>
                    <textarea class="form-control @error('title') is-invalid @enderror" rows="7" id="content" name="content" placeholder="Основной текст статьи..."></textarea>
                </div>
                <div class="form-group">
                    <label for="category_id">Категория</label>
                    <select class="form-control @error('title') is-invalid @enderror" name="category_id" id="category_id">
                        @foreach($categories as $id => $title)
                            <option value="{{$id}}">{{$title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tags">Теги:</label>
                    <select class="select2 @error('title') is-invalid @enderror" multiple="multiple" name="tags[]" id="tags" data-placeholder="Выберите теги:" style="width: 100%;">
                        @foreach($tags as $id => $title)
                            <option value="{{$id}}">{{$title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="thumbnail">Загрузка картинки</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input @error('title') is-invalid @enderror" id="thumbnail" name="thumbnail">
                            <label class="custom-file-label" for="thumbnail">Выберите файл</label>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Создать</button>
            </div>
        </form>
    </div>
    <!-- /.content -->
@endsection

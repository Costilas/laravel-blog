
@extends('admin.layouts.layout')


@section('content')
    <!-- Main content -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Статья "{{$post->title}}"</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{route('posts.update', ['post' => $post->id])}}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Заголовок статьи</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                           name="title" placeholder="Введите новый заголовок" value="{{$post->title}}">
                </div>
                <div class="form-group">
                    <label for="description">Цитата</label>
                    <textarea class="form-control @error('title') is-invalid @enderror" rows="5" name="description"
                              placeholder="Цитата...">{{$post->description}}</textarea>
                </div>
                <div class="form-group">
                    <label for="content">Контент</label>
                    <textarea class="form-control @error('title') is-invalid @enderror" rows="7" name="content"
                              placeholder="Контент статьи...">{{$post->content}}</textarea>
                </div>
                <div class="form-group">
                    <label for="category_id">Категория</label>
                    <select class="form-control @error('title') is-invalid @enderror" name="category_id" id="category_id">
                        @foreach($categories as $id => $title)
                            <option @if($post->category_id === $id) selected @endif value="{{$id}}">{{$title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tags">Multiple</label>
                    <select class="select2" multiple="multiple" name="tags[]" id="tags" data-placeholder="Выберите теги:" style="width: 100%;">
                        @foreach($tags as $id => $title)
                            <option @if(in_array($id, $post->tags->pluck('id')->all())) selected @endif value="{{$id}}">{{$title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="thumbnail">Загрузка картинки</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="thumbnail" name="thumbnail">
                            <label class="custom-file-label" for="thumbnail">Выберите файл</label>
                        </div>
                    </div>
                    <div>
                        <img class="img-thumbnail mt-2" src="{{$post->getImage()}}" width="200">
                    </div>
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

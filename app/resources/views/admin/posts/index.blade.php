@extends('admin.layouts.layout')


@section('content')
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Список статей сайта: </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <a href="{{route('posts.create')}}" class="btn btn-info mb-3"> Добавить статью</a>
                @if($posts->count())
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Наименование</th>
                                <th>Категория</th>
                                <th>Теги</th>
                                <th>Дата</th>
                                <th>Изображение</th>
                                <th style="width: 40px">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>
                                        {{$post->id}}
                                    </td>
                                    <td>
                                        {{$post->title}}
                                    </td>
                                    <td>
                                        {{$post->category->title}}
                                    </td>
                                    <td>
                                        {{$post->tags->pluck('title')->join(',')}}
                                    </td>
                                    <td>
                                        {{$post->created_at}}
                                    </td>
                                    <td>
                                        <img src="{{asset($post->thumbnail)}}" alt="">
                                    </td>
                                    <td class="d-flex justify-content-center">
                                        <a href="{{route('posts.edit', ['post' => $post->id])}}"
                                           class="btn btn-info btn-sm m-3">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form method="post"
                                              action="{{route('posts.destroy', ['post' => $post->id])}}"
                                              class="d-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm m-3"
                                                    onclick="return confirm('Подтвердите удаление')">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <br> Статей пока нет.
                @endif
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                {{$posts->links()}}
            </div>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection

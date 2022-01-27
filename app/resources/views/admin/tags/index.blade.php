@extends('admin.layouts.layout')


@section('content')
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Доступные теги: </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <a href="{{route('tags.create')}}" class="btn btn-info mb-3"> Добавить тэг</a>
                @if($tags->count())
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Наименование</th>
                                <th>Slug</th>
                                <th style="width: 40px">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tags as $tag)
                                <tr>
                                    <td>
                                        {{$tag->id}}
                                    </td>
                                    <td>
                                        {{$tag->title}}
                                    </td>
                                    <td>
                                        {{$tag->slug}}
                                    </td>
                                    <td class="d-flex justify-content-center">
                                        <a href="{{route('tags.edit', ['tag' => $tag->id])}}"
                                           class="btn btn-info btn-sm m-3">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form method="post"
                                              action="{{route('tags.destroy', ['tag' => $tag->id])}}"
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
                    <br> Тэгов пока нет.
                @endif
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                {{$tags->links()}}
            </div>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection

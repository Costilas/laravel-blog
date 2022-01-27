@extends('admin.layouts.layout')


@section('content')
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Категории постов: </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <a href="{{route('categories.create')}}" class="btn btn-info mb-3"> Добавить категорию</a>
                @if($categories->count())
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
                            @foreach($categories as $category)
                                <tr>
                                    <td>
                                        {{$category->id}}
                                    </td>
                                    <td>
                                        {{$category->title}}
                                    </td>
                                    <td>
                                        {{$category->slug}}
                                    </td>
                                    <td class="d-flex justify-content-center">
                                        <a href="{{route('categories.edit', ['category' => $category->id])}}"
                                           class="btn btn-info btn-sm m-3">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form method="post"
                                              action="{{route('categories.destroy', ['category' => $category->id])}}"
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
                    <br> Категорий пока нет.
                @endif
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                {{$categories->links()}}
                {{-- <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul> --}}
            </div>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection

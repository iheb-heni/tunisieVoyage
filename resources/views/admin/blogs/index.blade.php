@extends('layouts.app')

@section('content')
    <!-- En-tête du contenu (En-tête de la page) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 d-flex justify-content-between">
                    <h1 class="m-0">{{ __('Blog') }}</h1>
                    <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary btn-sm"> <i class="fa fa-plus"></i> </a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.En-tête du contenu (En-tête de la page) -->

    <!-- Contenu principal -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body p-0">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Titre</th>
                                        <th>Image</th>
                                        <th>Extrait</th>
                                        <th>Catégorie</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $blog->title }}</td>
                                        <td>
                                            <a href="{{ Storage::url($blog->image) }}" target="_blank">
                                                <img src="{{ Storage::url($blog->image) }}" width="100" alt="">
                                            </a>
                                        </td>
                                        <td>{{ $blog->excerpt }}</td>
                                        <td>{{ $blog->category->name }}</td>
                                        <td>
                                            <a href="{{ route('admin.blogs.edit', [$blog]) }}" class="btn btn-sm btn-info"> <i class="fa fa-edit"></i> </a>              
                                            <form onclick="return confirm('Êtes-vous sûr ?');" class="d-inline-block" action="{{ route('admin.blogs.destroy', [$blog]) }}" method="post">
                                                @csrf 
                                                @method('delete')
                                                <button class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </button>
                                            </form>                              
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer clearfix">
                            {{ $blogs->links() }}
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.Contenu principal -->
@endsection

@extends('layouts.app')

@section('content')
<!-- En-tête du contenu (En-tête de la page) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12 d-flex justify-content-between">
                <h1 class="m-0">{{ __('Declaration') }}</h1>
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
                                    <th>nom</th>
                                    <th>prenom</th>
                                    <th>email</th>
                                    <th>message</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($declarations as $declaration)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $declaration->name }}</td>
                                    <td>{{ $declaration->last_name }}</td>
                                    <td>{{ $declaration->email }}</td>
                                    <td>{{ $declaration->message }}</td>
                                    <td>
                                        {{-- Ajoutez le formulaire de suppression ici --}}
                                        <form action="{{ route('admin.declaration.destroy', $declaration->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->

                </div>

            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.Contenu principal -->
@endsection

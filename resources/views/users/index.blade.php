@extends('layouts.app')

@section('content')
    <!-- En-tête du contenu (En-tête de la page) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Utilisateurs') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

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
                                        <th>{{ __('Nom') }}</th>
                                        <th>{{ __('E-mail') }}</th>
                                        <th>{{ __('Action') }}</th> <!-- Ajouter une nouvelle colonne pour les actions -->
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                        
                                            <form onclick="return confirm('Êtes-vous sûr ?');" class="d-inline-block" action="{{ route('admin.users.destroy', [$users]) }}" method="post">
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
                            {{ $users->links() }}
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection

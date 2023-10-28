@extends('layouts.app')

@section('content')
    <!-- En-tête du contenu (En-tête de la page) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 justify-content-between d-flex">
                    <h1 class="m-0">{{ __('Forfait de Voyage') }}</h1>
                    <a href="{{ route('admin.travel_packages.create') }}" class="btn btn-primary btn-sm"> <i class="fa fa-plus"></i> </a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.En-tête du contenu (En-tête de la page) -->

    <!-- Contenu principal -->
    <div class="content">
        <div class "container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body p-0">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Type</th>
                                        <th>Emplacement</th>
                                        <th>Prix</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($travel_packages as $travel_package)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $travel_package->type }}</td>
                                        <td>{{ $travel_package->location }}</td>
                                        <td>{{ $travel_package->price }}</td>
                                        <td>
                                            <a href="{{ route('admin.travel_packages.edit', [$travel_package]) }}" class="btn btn-sm btn-info"> <i class="fa fa-edit"></i> </a>              
                                            <form onclick="return confirm('Êtes-vous sûr ?');" class="d-inline-block" action="{{ route('admin.travel_packages.destroy', [$travel_package]) }}" method="post">
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
                            {{ $travel_packages->links() }}
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.Contenu principal -->
</div>

@extends('layouts.app')

@section('content')
    <!-- En-tête du contenu (En-tête de la page) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 d-flex justify-content-between">
                    <h1 class="m-0">{{ __('Formulaire de Modification') }}</h1>
                    <a href="{{ route('admin.travel_packages.index') }}" class="btn btn-primary"> <i class="fa fa-arrow-left"></i> </a>
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
                    <div class="card p-3">
                        <form method="post" action="{{ route('admin.categories.update', [$category]) }}">
                            @csrf 
                            @method('put')
                            <div class="form-group row border-bottom pb-4">
                                <label for="name" class="col-sm-2 col-form-label">Nom</label>
                                <div class="col-sm-10">
                                    <input type="text" class "form-control" name="name" value="{{ old('name', $category->name) }}" id="name" placeholder="exemple : Bali">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Enregistrer</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.Contenu principal -->
@endsection

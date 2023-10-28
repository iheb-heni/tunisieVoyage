@extends('layouts.app')

@section('content')
    <!-- En-tête du contenu (En-tête de la page) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 d-flex justify-content-between">
                    <h1 class="m-0">{{ __('Réservations') }}</h1>
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
                                        <th>Nom</th>
                                        <th>Email</th>
                                        <th>Numéro de téléphone</th>
                                        <th>Date</th>
                                        <th>Forfait de voyage</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($bookings as $booking)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $booking->name }}</td>
                                        <td>{{ $booking->email }}</td>
                                        <td>{{ $booking->number_phone }}</td>
                                        <td>{{ $booking->date }}</td>
                                        <td>{{ $booking->travel_package->location }}</td>
                                        <td>
                                            <form onclick="return confirm('Êtes-vous sûr ?');" class="d-inline-block" action="{{ route('admin.bookings.destroy', [$booking]) }}" method="post">
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

                        <div class "card-footer clearfix">
                            {{ $bookings->links() }}
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.Contenu principal -->
@endsection

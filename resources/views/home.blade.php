@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lr Dev Folio</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

<<<<<<< HEAD
                    You are logged in!
                    <a href="{{ @url('heroes/edit') }}">Hero details</a>
=======
                    <a href="{{ @url('heroes/create') }}">Hero Details</a>
>>>>>>> cpanel
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

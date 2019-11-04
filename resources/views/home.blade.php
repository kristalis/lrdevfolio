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

                    You are logged in!
                    <p><a href="{{@url('heroes').'/'.'1'.'/edit'}}" class="btn btn-primary">Edit</a></p>

                    <a href="{{ @url('heroes/create') }}">Hero Details</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="mt-4">
                <h1 class="text-center">
                    You are logged in
                </h1>
                <h5 class="text-center">
                    La dashboard è una pagina privata (protetta dal middleware)
                </h5>
            </div>
        </div>
    </div>
@endsection

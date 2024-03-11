@extends('layouts.app')

@section('page-title', 'Projects'.$project->name )

@php
    use Carbon\Carbon;
@endphp

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-success mb-5">
                        Project: {{ $project->name}}
                    </h1>

                    <div class="mb-5">
                        <h5>Description:</h5>

                        <p class="card-text"> {{ $project->description}}</p>         
                    </div>
                    
                    <div class="mb-5">
                        <h5>Tecnologies used:</h5>
                        <ul>
                            @php
                                $technologies = explode(" ",$project->technologies)
                            @endphp
                            @foreach ($technologies  as $technologie)
                                <li>
                                    {{ $technologie }}
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h5> Date of creation of the project:</h5>

                        <p class="card-text"> {{ Carbon::createFromFormat('Y-m-d', $project->creation_date)->format('d-m-Y') }}</p>         
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
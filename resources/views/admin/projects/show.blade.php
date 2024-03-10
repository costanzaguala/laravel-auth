@extends('layouts.app')

@section('page-title', 'Project'.$project->name )

@php
    use Carbon\Carbon;
@endphp

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-success">
                        Project: {{ $project->name}}
                    </h1>

                    <p class="card-text">{{ $project->description}}</p>
                    
                    <div class="d-flex justify-content-between ">
                        <div>
                            <h5>Tecnologies used</h5>
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
                    <div>


                    <div>
                        <ul>
                            <li>
                                Date of creation of the project: {{ Carbon::createFromFormat('Y-m-d', $project->start_date)->format('d-m-Y') }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
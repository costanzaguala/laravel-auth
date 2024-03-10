@extends('layouts.app')

@section('page-title', 'Progetti-realizzati')

@section('main-content')
{{-- importazione carbon --}}
@php
    use Carbon\Carbon;
@endphp

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-success">
                        Projects created
                    </h1>
                    <hr>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Languages used</th>
                                <th scope="col">Start date</th>
                                <th colspan="3" class="text-center"scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                            <tr>
                                <th scope="row">{{ $project->name }}</th>
                                <td>{{ $project->technologies }}</td>
                                <td>{{ Carbon::createFromFormat('Y-m-d', $project->start_date)->format('d-m-Y')}}</td>
                                <td>
                                    <a href="{{ route('admin.projects.show', ['project' => $project->slug]) }}" class="btn btn-xs btn-bg-dark me-2">
                                        View
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.projects.edit', ['project' => $project->slug]) }}" class="btn btn-bg-dark me-2">
                                        Edit
                                    </a>
                                </td>
                                <td>
                                    <form onsubmit="return confirm('Sei sicuro di voler eliminare questa voce?');"  action="{{ route('admin.projects.destroy', ['project' => $project->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                Delete
                                            </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
@endsection
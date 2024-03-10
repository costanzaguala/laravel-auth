@extends('layouts.app')

@section('page-title',  $project->title.' edit')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-success">
                        Edit project: {{ $project->name }}
                    </h1>
                    <br>
                    <form action="{{ route('admin.projects.update', ['project' => $project->id]) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label">Name of the project<span class="text-danger">*</span></label>
                            <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name" name="name" placeholder="Insert the name of the project" maxlength="255" required value="{{ old('name') }}">
                            @error('name')
                                 <div class="alert alert-danger">
                                     {{ $message }}
                                 </div>
                            @enderror
                         </div>
                        <div class="mb-3">
                           <label for="description" class="form-label">Description</label>
                           <textarea class="form-control" id="description" name="description" rows="3" placeholder="Insert a brief description of the project">{{ $project->description}}</textarea>
                           @error('description')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                           @enderror
                        </div>
                        <div class="mb-3">
                            <label for="technologies" class="form-label">Technologies used <span class="text-danger">*</span></label>
                            <input type="text" class="form-control  @error('technologies') is-invalid @enderror" id="technologies" name="technologies" placeholder="Inserisci le tecnologie..." maxlength="255" required value="{{ $project->technologies }}">
                            @error('technologies')
                                 <div class="alert alert-danger">
                                     {{ $message }}
                                 </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="creation-date" class="form-label">Date of project creation<span class="text-danger">*</span></label>
                            <input type="date" class="form-control" id="creation-date" name="creation-date"  required value="{{ old('creation-date') }}">
                            @error('creation-date')
                                 <div class="alert alert-danger">
                                     {{ $message }}
                                 </div>
                            @enderror
                        </div>
                        <div>
                            <button type="submit" class="btn btn-warning w-100">
                                Edit
                            </button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
@endsection
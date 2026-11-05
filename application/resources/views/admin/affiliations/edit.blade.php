@extends('admin.layouts.app', [
    'title' => __('Edit Affiliation'),
    'parentSection' => 'resources',
    'elementName' => 'edit'
])

@section('title', 'Edit Affiliation')

@section('content')
    @component('admin.layouts.headers.auth')
        @component('admin.layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Edit Resource') }}
            @endslot

            <li class="breadcrumb-item"><a href="{{ route('admin::affiliations.index') }}">{{ __('Affiliation') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Edit') }}</li>
        @endcomponent
    @endcomponent

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">{{ __('Edit Affiliation') }}</h3>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin::affiliations.update', $affiliation->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="title">{{ __('Title') }}</label>
                                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $affiliation->title) }}">
                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="date">{{ __('Date') }}</label>
                                <input type="date" name="date" id="date" class="form-control" value="{{ old('date', $affiliation->date) }}">
                                @error('date')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="pdf">{{ __('PDF') }}</label>
                                <input type="file" name="pdf" id="pdf" class="form-control">
                                @if($affiliation->pdf)
                                    <p><a href="{{ url('upload/' . $affiliation->pdf) }}" target="_blank">Current PDF</a></p>
                                @endif
                                @error('pdf')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                                <a href="{{ route('admin::affiliations.index') }}" class="btn btn-secondary">{{ __('Cancel') }}</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('admin.layouts.footers.auth')
    </div>
@endsection

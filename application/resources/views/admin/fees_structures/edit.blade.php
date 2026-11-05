@extends('admin.layouts.app', [
    'title' => __('Edit Fees Structure'),
    'parentSection' => 'fees_structures',
    'elementName' => 'fees_structure'
])

@section('title', 'Edit Fees Structure')

@section('content')
    @component('admin.layouts.headers.auth')
        @component('admin.layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Edit Fees Structure') }}
            @endslot
            <li class="breadcrumb-item"><a href="{{ route('admin::fees-structures.index') }}">{{ __('Fees Structures') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Edit') }}</li>
        @endcomponent
    @endcomponent

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">{{ __('Edit Fees Structure') }}</h3>
                        <a href="{{ route('admin::fees-structures.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('admin::fees-structures.update', $feesStructure->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="title">{{ __('Title') }}</label>
                                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $feesStructure->title) }}" required>
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="pdf">{{ __('PDF') }}</label>
                                <input type="file" name="pdf" id="pdf" class="form-control @error('pdf') is-invalid @enderror">
                                @if ($feesStructure->pdf)
                                    <a href="{{ url('upload/' . $feesStructure->pdf) }}" target="_blank">View Current PDF</a>
                                @endif
                                @error('pdf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('admin.layouts.footers.auth')
    </div>
@endsection

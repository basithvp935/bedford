@extends('layouts.app', [
    'title' => __('Author Management'),
    'parentSection' => '',
    'elementName' => 'author-management'
])

@section('content')
    @component('layouts.headers.auth') 
        @component('layouts.headers.breadcrumbs')
            @slot('title') 
                {{ __('Authors') }} 
            @endslot

            <li class="breadcrumb-item"><a href="{{ route('author.index') }}">{{ __('Author Management') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('List') }}</li>
        @endcomponent
    @endcomponent

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Authors') }}</h3>
                             </div>
                            @if (auth()->user()->can('create', App\Author::class))
                                <div class="col-4 text-right">
                                    <a href="{{ route('author.create') }}" class="btn btn-sm btn-primary">{{ __('Add author') }}</a>
                                </div>
                            @endif
                        </div>
                    </div>
                    
                    <div class="col-12 mt-2">
                        @include('alerts.success')
                        @include('alerts.errors')
                    </div>

                    <div class="table-responsive py-4">
                        <table class="table align-items-center table-flush"  id="datatable-basic">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">{{ __('Name') }}</th>
                                    <th scope="col">{{ __('Design') }}</th>
                                    <th scope="col">{{ __('Bio') }}</th>
                                    <th scope="col">{{ __('Phone') }}</th>
                                    <th scope="col">{{ __('E-Mail') }}</th>
                                    @can('manage-items', App\User::class)
                                        <th scope="col"></th>
                                    @endcan
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($authors as $author)
                                    <tr>
                                        <td>{{ $author->name }}</td>
                                        <td>{{ $author->design }}</td>
                                        <td>{{ $author->bio }}</td>
                                        <td>{{ $author->phone }}</td>
                                        <td>{{ $author->email }}</td>
                                        @can('manage-items', App\User::class)
                                            <td class="text-right">
                                                @if (auth()->user()->can('update', $author) || auth()->user()->can('delete', $author))
                                                    <div class="dropdown">
                                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                            @can('update', $author)
                                                                <a class="dropdown-item" href="{{ route('author.edit', $author) }}">{{ __('Edit') }}</a>
                                                            @endcan
                                                            @if (auth()->user()->can('delete', $author))
                                                                <form action="{{ route('author.destroy', $author) }}" method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button type="button" class="dropdown-item" onclick="confirm('{{ __("Are you sure you want to delete this author?") }}') ? this.parentElement.submit() : ''">
                                                                        {{ __('Delete') }}
                                                                    </button>
                                                                </form>
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endif
                                            </td>
                                        @endcan
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
            
        @include('layouts.footers.auth')
    </div>
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('') }}/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('') }}/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('') }}/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
@endpush

@push('js')
    <script src="{{ asset('') }}/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('') }}/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('') }}/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('') }}/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('') }}/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('') }}/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="{{ asset('') }}/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('') }}/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
@endpush
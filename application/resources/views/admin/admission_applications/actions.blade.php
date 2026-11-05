{{-- Row actions: view application details or delete --}}
<div class="dropdown">
    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-ellipsis-v"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
        <a class="dropdown-item" href="{{ route('admin::admission_applications.show', $row->id) }}">{{ __('View') }}</a>
        <form action="{{ route('admin::admission_applications.destroy', $row->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="button" class="dropdown-item" onclick="confirm('{{ __('Are you sure you want to delete this admission application?') }}') ? this.parentElement.submit() : ''">
                {{ __('Delete') }}
            </button>
        </form>
    </div>
</div>

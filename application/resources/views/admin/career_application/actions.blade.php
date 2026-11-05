<div class="dropdown">
    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-ellipsis-v"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
        <button tyle="button" class="dropdown-item"  data-toggle="modal" data-target="#exampleModal"  data-id="{{ $dpt->id }}">View Details</button>
        <form action="{{ route('admin::career_applications.destroy', $dpt->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="button" class="dropdown-item" onclick="confirm('{{ __("Are you sure you want to delete this application?") }}') ? this.parentElement.submit() : ''">
                {{ __('Delete') }}
            </button>
        </form>
    </div>
</div>

<div class="dropdown">
    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-ellipsis-v"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
        <a class="dropdown-item" href="{{ route('admin::circulars.edit', $dpt->id) }}">{{ __('Edit') }}</a>
            <form action="{{ route('admin::circulars.destroy', $dpt->id) }}" method="post">
                @csrf
                @method('delete')
                <button type="button" class="dropdown-item" onclick="confirm('{{ __("Are you sure you want to delete this circular?") }}') ? this.parentElement.submit() : ''">
                    {{ __('Delete') }}
                </button>
            </form>

    </div>
</div>

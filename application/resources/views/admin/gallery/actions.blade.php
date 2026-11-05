<div class="dropdown">
    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-ellipsis-v"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
        <a class="dropdown-item" href="{{ route('admin::gallerys.edit', $dpt->id) }}">{{ __('Edit') }}</a>
        @if($dpt->type=="Image")
        <a class="dropdown-item" href="{{ route('admin::gallery_images', $dpt->id) }}">{{ __('Sub Images') }}</a>
        @endif
            <form action="{{ route('admin::gallerys.destroy', $dpt->id) }}" method="post">
                @csrf
                @method('delete')
                <button type="button" class="dropdown-item" onclick="confirm('{{ __("Are you sure you want to delete this gallery?") }}') ? this.parentElement.submit() : ''">
                    {{ __('Delete') }}
                </button>
            </form>
        
    </div>
</div>
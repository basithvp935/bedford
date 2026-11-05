
@if($dpt->flash==1)

<label class="custom-toggle custom-toggle-success"><input onclick="setFlashNews(0,<?php echo $dpt->id?>)" type="checkbox" checked>
    <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
</label>
@else
<label class="custom-toggle custom-toggle-danger"><input onclick="setFlashNews(1,<?php echo $dpt->id?>)" type="checkbox" checked>
    <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="No"></span>
</label>
@endif    
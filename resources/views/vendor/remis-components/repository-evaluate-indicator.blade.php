@if(isset($collection))
    @if ($collection->is_evaluated == 0)
        <i class='bx bx-x-circle text-danger'></i>
    @else
        <i class='bx bx-check-circle text-success'></i>
    @endif
@endif

@if(isset($attachments))
    @foreach ($attachments as $attachment )
        <li class="list-group-item justify-content-start list-group-item-action d-flex  align-items-center cursor-pointer">
            <i class='bx bx-file  me-2'></i>
            <div class="w-100">
                {{ $attachment->getClientOriginalName() }}
            </div>
        </li>
    @endforeach
@else
    <li class="list-group-item d-flex justify-content-between align-items-center">No files</li>
@endif

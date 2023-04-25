@if($evaluationEditId != $evaluationId)
    {{ elapse($dateModified) }}
@else
    <i class="text-info">Currently editting...</i>
@endif

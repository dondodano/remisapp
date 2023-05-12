<div wire:ignore>
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label text-sm-end" for="{{ $model }}" wire:model.defer="responsibilitycenter">{{ $title }}</label>
        <div class="col-sm-9">
            <select  id="{{ $model }}" class="form-select" name="{{ $model }}" >
                <option value="0">-- Select {{ $title }} --</option>
                @foreach($collection as $item)
                    <option value="{{ $item->id }}">{{ $item->term }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
@push('footer-2')
<script>
    $(document).ready(function(){
        $('select').select2()
        $('select').on('change', function(e){
            var selectedId = $(this).attr('id');
            var data = $(this).select2("val");
            @this.set('selected', data);
        })
    })
</script>
@endpush

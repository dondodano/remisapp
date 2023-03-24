@if(isset($collection))
    @if(is_countable($collection))
        @if (!in_array(gettype($collection), ['array', 'string', 'boolean', 'integer', 'resource', 'null', 'float' ]))
            @if($collection->hasPages())
                <div class="d-flex flex-row justify-content-end mt-3">
                    <div class="me-3">
                        {{ $collection->links() }}
                    </div>
                </div>
            @endif
        @endif
    @endif
@endif

<div class="btn-group">
    <a href="{{ route('user.show', [$data->id]) }}" type="button" class="btn btn-default">
        <i class="fas fa-eye text-success"></i>
    </a>
    <a href="{{ route('user.edit', [$data->id]) }}" type="button" class="btn btn-default">
        <i class="fas fa-pen text-primary"></i>
    </a>
    <a type="button" class="btn btn-default btn-delete" tabindex="0" data-html="true" data-popover-content="#confirm_delete{{ $data->id }}">
        <i class="fas fa-trash text-danger"></i>
    </a>
    <div style="display: none;" id="confirm_delete{{ $data->id }}">
        <div class="popover-body">
            <a type="button" class="btn btn-danger text-white delete_submit {{ $data->id }}">Delete</a>
            <a role="button" class="btn btn-dark text-white">Cancel</a>
        </div>
    </div>
    {{--{!! Form::open(['url' => route('user.destroy', [$data->id]), 'method' => 'delete', 'id' => 'delete_form' . $data->id]) !!}{!! Form::close() !!}--}}
</div>

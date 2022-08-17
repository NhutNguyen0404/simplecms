@props(['type', 'message'])
<div class="alert alert-{{ $type ?? 'warning ' }} border-0 alert-dismissible">
    <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
    {!! $message ?? '' !!}
</div>

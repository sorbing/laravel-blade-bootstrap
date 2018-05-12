<?php
    /** @global $name */
    $type = !empty($type) ? $type : 'text';
    $id = !empty($id) ? $id : "{$name}_field";
    $label = !empty($label) ? $label : ucfirst($name);
?>

@isset($row)
    <div class="form-group row">
        <label for="{{ $id }}" class="col-sm-{{ $row }} col-form-label">{{ $label }}</label>
        <div class="col-sm-{{ (12 - $row) }}">
            <input type="{{ $type }}" class="form-control" id="{{ $id }}" value="{{ $value or '' }}" placeholder="{{ $placeholder or '' }}" {{ $attributes or '' }}>
        </div>
    </div>
@else
    <div class="form-group">
        <label for="{{ $id }}">{{ $label }}</label>
        <input type="{{ $type }}" class="form-control" id="{{ $id }}" placeholder="{{ $placeholder or '' }}" value="{{ $value or '' }}" {{ $attributes or '' }}>
    </div>
@endisset

@props(['name', 'placeholder', 'labelName', 'type' => 'text', 'value'])

<div class="form-group mt-2 mb-2">
    <label style="color: gray" for="{{ $name }}">{{ $labelName }}</label>
    <input value="{{ $value }}" placeholder="{{ $placeholder }}" name="{{ $name }}" class="form-control" type="{{ $type }}">
</div>

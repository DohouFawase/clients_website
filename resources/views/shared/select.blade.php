@php

    $label ??= ucfirst($name);
    $name ??= '';
    $class ??= null;
    $value ??='';
@endphp


<div @class(['form-group', $class])>
    <label for="{{ $name }}" class="form-label"><h3>{{ $label }}</h3></label> 
        <select name="{{ $name }}" id="{{ $name }}">
        @foreach ($categorie as $k => $v)
                <option value="{{$k}}" class="form-control" selected> {{$v}} </option>
        @endforeach
    </select>
</div>

@error($name)
<div class="invalid-feedback">
    {{ $message }}
</div>
@enderror

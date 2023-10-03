@php
       $label ??= ucfirst($name);
    $name ??= '';
    $class ??= null;
    $value ??='';

@endphp


<div @class(['form-group', $class])>
   <label for="{{$name}}" class="form-label"><h3>{{$label}}</h3></label> 

      <input class="form-control @error($name) is-invalid  @enderror" type = "file" name="{{$name}}" id="{{$name}}" value="{{old($name,$value)}}" > 
</div>

@error($name)
    <div class="invalid-feedback">
        {{$message}}
    </div>
@enderror

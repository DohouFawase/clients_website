@php
   
   $label ??= ucfirst($name);

    $class??=null;

@endphp


 





 <div @class(['form-group', $class])>
    <label for="{{$name}}" class="form-label"><h3>{{$label}}</h3></label> 
    <input type="date"  name="{{ $name }}" id="{{ $name }}" value="{{old($name,$value)}}"  class="form-control @error($name) is-invalid  @enderror">
   
 </div>

 @error($name)
 <div class="invalid-feedback">
     {{$message}}
 </div>
@enderror



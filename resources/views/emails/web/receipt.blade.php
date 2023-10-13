<x-mail::message>
# Introduction

@foreach ($products as $product)
<li>{{ $product->name }} - ${{ $product->price }}</li>
@endforeach

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

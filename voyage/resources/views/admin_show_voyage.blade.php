@foreach($voyage->getAttributes() as $key => $value)
    {{$key}} : {{$value}} <br>
@endforeach

@foreach ($voyages as $voyage)
    {{$voyage->id}} -- {{$voyage->destination}} -- 
    <a href="{{route('voyages.show', $voyage)}}"> VOIR </a> -- 
    <a href="{{route('voyages.edit', $voyage)}}"> EDITER </a> -- 
    <form action="{{route('voyages.destroy', $voyage->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit"> SUPPRIMER </button>
    </form>
    <br>
@endforeach

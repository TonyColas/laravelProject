<form method="POST" action="{{route('voyages.update', $voyage->id)}}">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label"> destination </label>
        <input type="text" name="destination" value="{{$voyage->destination}}">
    </div>

    <div class="mb-3">
        <label class="form-label"> description </label>
        <input type="text" name="description" value="{{$voyage->description}}">
    </div>

    <div class="mb-3">
        <label class="form-label"> date </label>
        <input type="text" name="date" value="{{$voyage->date}}">
    </div>

    <div class="mb-3">
        <label class="form-label"> cost </label>
        <input type="text" name="cost" value="{{$voyage->cost}}">
    </div>

    <div class="mb-3">
        <label class="form-label"> organizer </label>
        <input type="text" name="organizer" value="{{$voyage->organizer}}">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
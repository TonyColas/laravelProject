<form method="POST" action="{{route('voyage.store')}}">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label"> destination </label>
        <input type="text" name="destination">
    </div>

    <div class="mb-3">
        <label class="form-label"> description </label>
        <input type="text" name="description">
    </div>

    <div class="mb-3">
        <label class="form-label"> date </label>
        <input type="text" name="date">
    </div>

    <div class="mb-3">
        <label class="form-label"> cost </label>
        <input type="text" name="cost">
    </div>

    <div class="mb-3">
        <label class="form-label"> organizer </label>
        <input type="text" name="organizer">
    </div>

    <div class="mb-3">
        <label class="form-label"> topPlace </label>
        <input type="text" name="topPlace">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
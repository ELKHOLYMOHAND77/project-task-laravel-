<h2>Edit Course</h2>
<form action="{{ route('courses.update', $course->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $course->title }}" required><br><br>
    <textarea name="description">{{ $course->description }}</textarea><br><br>
    <input type="number" step="0.01" name="price" value="{{ $course->price }}" required><br><br>
    <input type="number" name="duration" value="{{ $course->duration }}" required><br><br>
    <button type="submit">Update Information</button>
</form>

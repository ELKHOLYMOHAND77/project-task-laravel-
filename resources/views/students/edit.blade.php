<h2>edit student</h2>
<form action="{{ route('students.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $student->name }}" required><br><br>
    <input type="email" name="email" value="{{ $student->email }}" required><br><br>
    <input type="text" name="phone" value="{{ $student->phone }}" required><br><br>

    <label> course:</label><br>
    <select name="course_id" required>
        @foreach ($courses as $course)
            <option value="{{ $course->id }}" {{ $student->course_id == $course->id ? 'selected' : '' }}>
                {{ $course->title }}
            </option>
        @endforeach
    </select><br><br>

    <button type="submit">update </button>
</form>

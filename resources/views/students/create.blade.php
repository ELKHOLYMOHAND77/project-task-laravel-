<h2> New Student</h2>
<form action="{{ route('students.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Full Name" required><br><br>
    <input type="email" name="email" placeholder="Email Address" required><br><br>
    <input type="text" name="phone" placeholder="Phone Number" required><br><br>

    <label>Choose Course:</label><br>
    <select name="course_id" required>
        <option value="">-- Choose Course --</option>
        @foreach ($courses as $course)
            <option value="{{ $course->id }}">{{ $course->title }}</option>
        @endforeach
    </select><br><br>

    <button type="submit">Register Student</button>
</form>

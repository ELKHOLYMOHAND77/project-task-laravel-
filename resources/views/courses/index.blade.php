<h2>Available Courses</h2>
<a href="{{ route('courses.create') }}">+ Add New Course</a>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>Course Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Duration</th>
        <th>Control</th>
    </tr>
    @foreach ($courses as $course)
        <tr>
            <td>{{ $course->title }}</td>
            <td>{{ $course->description }}</td>
            <td>{{ $course->price }}</td>
            <td>{{ $course->duration }}</td>
            <td>
                <a href="{{ route('courses.edit', $course->id) }}">edit</a>

                <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

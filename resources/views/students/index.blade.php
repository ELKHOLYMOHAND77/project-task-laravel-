<h2>List of Enrolled Students</h2>
<a href="{{ route('students.create') }}">+ Register New Student</a> |
<a href="{{ route('courses.index') }}">Go to Course Management</a>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>name</th>
        <th>email</th>
        <th>phone</th>
        <th>course</th>
        <th>actions</th>
    </tr>
    @foreach ($students as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->phone }}</td>
            <td>{{ $student->course->title }}</td>
            <td>
                <a href="{{ route('students.edit', $student->id) }}">edit</a>

                <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

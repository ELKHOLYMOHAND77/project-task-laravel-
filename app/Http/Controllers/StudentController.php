<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::with('course')->get();
        return view('students.index', compact('students'));
    }

    // 2. فتح صفحة تسجيل طالب جديد مع إرسال الكورسات للقائمة المنسدلة
    public function create()
    {
        $courses = Course::all();
        return view('students.create', compact('courses'));
    }

    // 3. حفظ الطالب الجديد
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students',
            'phone' => 'required',
            'course_id' => 'required|exists:courses,id',
        ]);

        Student::create($request->all());
        return redirect()->route('students.index');
    }

    // 4. فتح صفحة تعديل بيانات الطالب
    public function edit(Student $student)
    {
        $courses = Course::all();
        return view('students.edit', compact('student', 'courses'));
    }

    // 5. تحديث بيانات الطالب
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email,' . $student->id,
            'phone' => 'required',
            'course_id' => 'required|exists:courses,id',
        ]);

        $student->update($request->all());
        return redirect()->route('students.index');
    }

    // 6. حذف الطالب
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index');
    }
}

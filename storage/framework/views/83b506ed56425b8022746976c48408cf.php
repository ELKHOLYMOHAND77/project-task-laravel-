<h2>قائمة الكورسات المتاحة</h2>
<a href="<?php echo e(route('courses.create')); ?>">+ إضافة كورس جديد</a>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>اسم الكورس</th>
        <th>الوصف</th>
        <th>السعر</th>
        <th>المدة (ساعات)</th>
        <th>التحكم</th>
    </tr>
    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($course->title); ?></td>
            <td><?php echo e($course->description); ?></td>
            <td><?php echo e($course->price); ?></td>
            <td><?php echo e($course->duration); ?></td>
            <td>
                <a href="<?php echo e(route('courses.edit', $course->id)); ?>">تعديل</a>

                <form action="<?php echo e(route('courses.destroy', $course->id)); ?>" method="POST" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit">حذف</button>
                </form>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php /**PATH F:\Management\resources\views/courses/index.blade.php ENDPATH**/ ?>
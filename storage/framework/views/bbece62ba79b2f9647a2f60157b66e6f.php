<h2>Add New Course</h2>
<form action="<?php echo e(route('courses.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="text" name="title" placeholder="Course Name" required><br><br>
    <textarea name="description" placeholder="Brief Description"></textarea><br><br>
    <input type="number" step="0.01" name="price" placeholder="Price" required><br><br>
    <input type="number" name="duration" placeholder="Duration (Hours)" required><br><br>
    <button type="submit">Save Course</button>
</form>
<?php /**PATH F:\Management\resources\views/courses/create.blade.php ENDPATH**/ ?>
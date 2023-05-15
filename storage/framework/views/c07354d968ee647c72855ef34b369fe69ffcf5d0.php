<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            direction: rtl;
            text-align: right;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
<h2>ایجاد درس جدید برای دوره ها</h2>
<form action="<?php echo e(route('lesson.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <select name="course_id" required>
        <option value="">دوره را انتخاب کنید</option>
        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($course->id); ?>"><?php echo e($course->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <input type="text" name="name" placeholder="نام درس را وارد کنید">
    <input type="number" name="price" placeholder="قیمت درس را وارد کنید">
    <button type="submit">ایجاد</button>
</form>
<br><br>

<hr>

<br>
<?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<form action="<?php echo e(route('course.update', $course->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <h2>تغییر قیمت <?php echo e($course->name); ?></h2>
    <p>قیمت فعلی : <?php echo e($course->price); ?></p>
    <lable>قیمت جدید : </lable>
    <input type="number" name="price" placeholder="قیمت جدید دوره را وارد کنید">
    <button type="submit">ویرایش</button>
</form>
<br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\faragiran\resources\views/index.blade.php ENDPATH**/ ?>
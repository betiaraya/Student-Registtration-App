
<?php $__env->startSection('otherContent'); ?>

<form action="<?php echo e(route('create_post')); ?>" method="POST">

<?php echo csrf_field(); ?>
<center>

<label>Student Name:</label><br>
<input type="text" name="stuName"><br>
<label>Student Surname:</label><br>
<input type="text" name="stuSurname"><br>
<label>Student Department:</label><br>
<input type="text" name="stuDepartment"><br>
<input type="submit" name="send" value="Create"><br>
</center>

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('mainTemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Essential\Desktop\New folder\resources\views/createStudent.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="de" dir="ltr">

      <?php echo $__env->make('dashboard.includings', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <body>
            <?php echo $__env->make('dashboard.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php echo $__env->make('dashboard.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php echo $__env->make('dashboard.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      </body>
</html>

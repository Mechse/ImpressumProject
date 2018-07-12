<!DOCTYPE html>
<html lang="de" dir="ltr">

      <?php echo $__env->make('layout.includings', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <body>
            <?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php echo $__env->make('layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      </body>
</html>

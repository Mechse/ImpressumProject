<!DOCTYPE html>
<html lang="de" dir="ltr">

      <?php echo $__env->make('album.includings', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo csrf_field(); ?>
      <body>
            <?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php echo $__env->make('album.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      </body>
</html>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <br>
          <div class="sidebar-sticky">
                <form action="/rawindex/<?php echo e($user); ?>/<?php echo e($entry->Web_id); ?>" method="post">
                      <?php echo csrf_field(); ?>
                      <ul class="nav flex-column">

                            <?php $__currentLoopData = $datafields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datafield): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $type = $datafield->Type;
                           try{
                                 $val = $datas->$type;
                           } catch(Exception $e){
                                 $val = "";
                           }
                     ?>
                                  <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span><?php echo e($type); ?>:</span>
                          </h6>

                                  <li class="nav-item">
                                        <input type="text" name="<?php echo e($type); ?>" value="<?php echo e($val); ?>"> </li>
                                  <li class="nav-item">
                                        <input type="text" name="<?php echo e($type); ?>_reg" placeholder="<?php echo e($type); ?> RegEx" value="<?php echo e($regex[$type]); ?>"> </li>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                  <br>
                                  <li class="nav-item">
                                        <button type="submit" name="button">Update</button>

                                        <label for="worked">Worked:</label>
                                          <input id="worked" name="worked" type="checkbox" value=<?php echo e($worked); ?> <?php if($worked): ?><?php echo e('checked'); ?> <?php else: ?> <?php echo e('checked'); ?> <?php endif; ?>></input>

                                  </li>
                                  @#dd($worked)
                      </ul>
                </form>
          </div>
    </nav>

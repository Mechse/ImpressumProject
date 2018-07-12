<script type="text/javascript">
      function view(id) {
            window.open('http://88.99.67.75/getArchiveData.php?pw=0c20fc30c1cfe46df3ebf7eb6224b16e&source=webpage&output=html&id='+id);
      }
</script>
<main role="main">

  <div class="album py-5 bg-dark">
    <div class="container">

      <div class="row">
            <?php $__currentLoopData = $raw_entries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <h2><a href="/rawindex/<?php echo e($user); ?>/<?php echo e($entry->Web_id); ?>" >#<?php echo e($entry->Web_id); ?></a></h2>
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary" onclick="view(<?php echo e($entry->Web_id); ?>);">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Status: <?php echo e($entry->Status); ?></button>
                        
                        <button type="button" class="btn btn-sm btn-outline-secondary">Worker: <?php echo e($entry->Usr_id); ?></button>
                      </div>
                      <small class="text-muted">9 mins</small>
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              <div class="paginator" style="margin: auto;">
                    <?php echo e($raw_entries->links()); ?>

              </div>

      </div>
    </div>
  </div>
</main>

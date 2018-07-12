<!DOCTlYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>Dashboard <?php echo e($entry->Web_id); ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/dashboard.css" rel="stylesheet">
  </head>

  <body>
        <div style="background-color: #343a40;">
             <h1 style="color: white;">#<?php echo e($entry->Web_id); ?></h1>
            <h2><a href="http://88.99.67.75/getArchiveData.php?pw=0c20fc30c1cfe46df3ebf7eb6224b16e&source=webpage&output=html&id=<?php echo e($entry->Web_id); ?>">View.</a></h2>
          <div class="container-fluid">
            <div class="row">
              <nav style="float:left;">
                   <form action="/rawindex/<?php echo e($user); ?>/<?php echo e($entry->Web_id); ?>" method="post">
                         <?php echo csrf_field(); ?>
                         <ul class="nav nav-pills flex-column">

                              <?php $__currentLoopData = $datafields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datafield): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php $type = $datafield->Type;
                                          try{
                                                $val = $datas->$type;
                                          } catch(Exception $e){
                                                $val = "";
                                          }
                                    ?>
                                    <label style="color: white;" for="<?php echo e($type); ?>"><?php echo e($type); ?>:</label>
                                    <input type="text" name="<?php echo e($type); ?>" value="<?php echo e($val); ?>">
                                    <input type="text" name="<?php echo e($type); ?>_reg" placeholder="<?php echo e($type); ?> RegEx" value="">
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              <br>
                              <button type="submit" name="button">Update</button>
                         </ul>

                   </form>
              </nav>

              <main style="color: white;"  class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
                   <?php echo e($entry->Raw); ?>

              </main>
            </div>
          </div>
        </div>
  </body>
</html>


<?php $__env->startSection('content'); ?>
    <div class="pagetitle">
        <h1>Video</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('video')); ?>">Video</a></li>
                <li class="breadcrumb-item active"><?php echo e($video->title); ?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card mb-3" style="max-width: 100%;">
        <div class="row">
            <div class="col-md-7 mt-5 ms-5">
                
                <?php echo $video->url; ?>

            </div>
            <div class="col-md-4">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($video->title); ?></h5>
                    <p class="card-text"><?php echo e($video->description); ?></p>
                    <p class="card-text"><small class="text-muted">Last updated : <?php echo e($video->updated_at); ?></small></p>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <h4>Write Comment</h4>
            <form action="<?php echo e(route('video.comment.store', ['video' => $video->code])); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <input type="text" class="form-control" name="text" id="" aria-describedby="helpId"
                        placeholder="Add your comment here...">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-footer">
            <h4>All Comment</h4>
            <hr>
            <div class="mt-4">
                <?php $__currentLoopData = $video->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row">
                        <div class="col-1">
                            <img src="<?php echo e($comment->user->getImage); ?>" alt="Photo" class="rounded-circle">
                        </div>
                        <div class="col-11">
                            <h6><?php echo e($comment->user->name); ?></h6>
                            <h5><?php echo e($comment->text); ?></h5>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-nice', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\contoh_spatie\resources\views/video/show.blade.php ENDPATH**/ ?>

<?php $__env->startSection('content'); ?>
    <div class="pagetitle">
        <h1><?php echo e($name); ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('post.index')); ?>">Post</a></li>
                <li class="breadcrumb-item active"><?php echo e($name); ?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <div class="row">
                    <div class="col-6"><?php echo e($name); ?> Post</div>
                    <div class="col-6 text-end">
                        <a href="<?php echo e(route('post.index')); ?>">
                            <div class="btn btn-warning">
                                <i class="bi bi-backspace"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <form action="<?php echo e($route); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php if(@$post): ?>
                    <?php echo method_field('PUT'); ?>
                <?php endif; ?>
                <div class="mb-3">
                    <h6 class="form-label">Title</h6>
                    <input value="<?php echo e($post->title ?? ''); ?>" name="title" class="form-control" type="text"
                        id="formFile">
                </div>
                <div class="mb-3">
                    <h6 class="form-label">Image</h6>
                    <?php if(@$post): ?>
                        <?php switch($post->media('image')->first()->mime_type):
                            case ('image/png'): ?>
                                <img src="<?php echo e($post->getFirstMedia('image')->getUrl()); ?>" alt="Loading..." style="width: 100px">
                            <?php break; ?>

                            <?php case ('application/pdf'): ?>
                                <a href="<?php echo e($post->getFirstMedia('image')->getUrl()); ?>">
                                    <?php echo e($post->media('image')->first()->file_name); ?>

                                </a>
                            <?php break; ?>

                            <?php case ('application/vnd.openxmlformats-officedocument.wordprocessingml.document'): ?>
                                <a href="<?php echo e($post->getFirstMedia('image')->getUrl()); ?>">
                                    <?php echo e($post->media('image')->first()->file_name); ?>

                                </a>
                            <?php break; ?>

                            <?php default: ?>
                                <img src="<?php echo e($post->getFirstMedia('image')->getUrl()); ?>" alt="Loading..." style="width: 100px">
                        <?php endswitch; ?>
                    <?php endif; ?>
                    <input name="image" class="form-control" type="file" id="formFile">
                </div>
                <div class="mb-3">
                    <h6 class="form-label">Description</h6>
                    <textarea class="form-control" name="description" id="" cols="20" rows="5"><?php echo e($post->description ?? ''); ?></textarea>
                </div>
                <div class="col-12 text-end">
                    <button type="submit" class="btn btn-info">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-nice', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\contoh_spatie\resources\views/posts/form.blade.php ENDPATH**/ ?>
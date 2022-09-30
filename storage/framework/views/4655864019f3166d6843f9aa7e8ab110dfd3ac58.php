
<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal85f966f1b5de8551aa930b6f61c6100ede97428e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\PageTitle::class, ['namaPageAktif' => 'Post'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('page-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\PageTitle::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal85f966f1b5de8551aa930b6f61c6100ede97428e)): ?>
<?php $component = $__componentOriginal85f966f1b5de8551aa930b6f61c6100ede97428e; ?>
<?php unset($__componentOriginal85f966f1b5de8551aa930b6f61c6100ede97428e); ?>
<?php endif; ?>
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <div class="row">
                    <div class="col-12 text-end">
                        <a href="<?php echo e(route('post.create')); ?>">
                            <div class="btn btn-info">Tambah</div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Table with stripped rows -->
            <table class="datatable table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Title</th>
                        <th scope="col">Publish</th>
                        <th scope="col">File</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr">
                            <th scope="row"><?php echo e($loop->iteration); ?></th>
                            <td><?php echo e($post->title); ?></td>
                            <td><?php echo e($post->publish); ?></td>
                            <td>
                                <?php switch($post->media('image')->first()->mime_type):
                                    case ('image/png'): ?>
                                        <img src="<?php echo e($post->getFirstMedia('image')->getUrl()); ?>" alt="Loading..."
                                            style="width: 100px">
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
                                        <img src="<?php echo e($post->getFirstMedia('image')->getUrl()); ?>" alt="Loading..."
                                            style="width: 100px">
                                <?php endswitch; ?>
                            </td>
                            <td>
                                <div class="d-flex
                                justify-content-center">
                                    <a class="btn btn-info mx-1" href="<?php echo e(route('post.edit', $post)); ?>">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <button type="button" class="btn btn-danger mx-1" data-bs-toggle="modal"
                                        data-bs-target="#modal-delete">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                    
                                </div>
                            </td>
                            </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <!-- End Table with stripped rows -->
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('posts.modal-delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.app-nice', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\contoh_spatie\resources\views/posts/index.blade.php ENDPATH**/ ?>
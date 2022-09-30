
<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal85f966f1b5de8551aa930b6f61c6100ede97428e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\PageTitle::class, ['namaPageAktif' => 'Task'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="table-responsive-md">
                        <table
                            class="datatable table table-striped
        table-hover	
        table-borderless
        table-primary
        align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>No</th>
                                    <th class="text-center">Nama Task</th>
                                    <th>Deskripsi</th>
                                    <th>Status</th>
                                    <th>Last Updated</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="table-primary">
                                        <td scope="row"><?php echo e($task->id); ?></td>
                                        <td><?php echo e($task->name); ?></td>
                                        <td><?php echo e($task->description); ?></td>
                                        <td><?php echo e($task->status); ?></td>
                                        <td><?php echo e($task->updated_at); ?></td>
                                        <td>
                                            <div class="d-flex">
                                                <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
                                                    <a href="">
                                                        <div class="btn btn-info"><i class="bi bi-card-checklist"></i></div>
                                                    </a>
                                                <?php endif; ?>
                                                <?php if(auth()->check() && auth()->user()->hasRole('superadmin')): ?>
                                                    <a href="">
                                                        <div class="btn btn-warning"><i class="bi bi-pencil-square"></i>
                                                        </div>
                                                    </a>
                                                    <a href="">
                                                        <div class="btn btn-danger"><i class="bi bi-trash"></i></div>
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-nice', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\contoh_spatie\resources\views/tasks/index.blade.php ENDPATH**/ ?>
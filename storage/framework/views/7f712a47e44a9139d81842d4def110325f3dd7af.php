

<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal85f966f1b5de8551aa930b6f61c6100ede97428e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\PageTitle::class, ['namaPageAktif' => 'Project'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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
                    <div class="card-body">
                        <div class="table-responsive-md">
                            <table
                                class="datatable table table-striped table-hover table-borderless table-primary align-middle">
                                <?php if(auth()->check() && auth()->user()->hasRole('superadmin')): ?>
                                    <div class="text-end m-4" data-bs-toggle="modal" data-bs-target="#modal-create">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#modal-create">
                                            <i class="bi bi-plus-square-fill"></i>
                                        </button>
                                        
                                    </div>
                                <?php endif; ?>
                                <thead class="table-light justify-content-between">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Project</th>
                                        <th>Task</th>
                                        <th>Leader</th>
                                        <th>Owner</th>
                                        <th>Progress</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <?php $__currentLoopData = $dataProject; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="table-primary">
                                            <td scope="row"><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($project->name); ?></td>
                                            <td><?php echo e($project->jumlah_task_count); ?></td>
                                            <td><?php echo e($project->leader->name); ?></td>
                                            <td><?php echo e($project->owner); ?></td>
                                            <td><?php echo e($project->progress); ?></td>
                                            <td>
                                                <div class="d-flex align-middle">
                                                    <a href="<?php echo e(route('project.show', $project)); ?>">
                                                        <div class="btn btn-success">
                                                            <i class="bi bi-eye"></i>
                                                        </div>
                                                    </a>
                                                    <?php if(auth()->check() && auth()->user()->hasRole('superadmin')): ?>
                                                        <a href="<?php echo e(route('project.edit', $project)); ?>">
                                                            <div class="btn btn-warning">
                                                                <i class="bi bi-pencil-square"></i>
                                                            </div>
                                                        </a>
                                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                            data-bs-target="#modal-delete">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                        
                                                    <?php endif; ?>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    <?php $__env->stopSection(); ?>

<?php echo $__env->make('project.modal-delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('project.modal-form-create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.app-nice', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\contoh_spatie\resources\views/project/index.blade.php ENDPATH**/ ?>
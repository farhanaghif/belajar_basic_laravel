

<?php $__env->startSection('content'); ?>
    <div class="pagetitle">
        <h1>Task of Project</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('project.index')); ?>">Project</a></li>
                <li class="breadcrumb-item active">Task of Project</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <p><?php echo e($project->name); ?></p>
                        
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <table>
                                <tr>
                                    <td>Owner Project</td>
                                    <td>:</td>
                                    <td class="text-center"><?php echo e($project->owner); ?></td>
                                </tr>
                                <tr>
                                    <td>Progress</td>
                                    <td>:</td>
                                    <td class="text-center"><?php echo e($project->progress); ?></td>
                                </tr>
                                <tr>
                                    <td>Deadline Project</td>
                                    <td>:</td>
                                    <td class="text-center"><?php echo e($project->deadline); ?></td>
                                </tr>
                                <tr>
                                    <td>Handled by</td>
                                    <td>:</td>
                                    <td class="text-center"><?php echo e($project->leader->name); ?></td>
                                </tr>
                            </table>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>

                    <div class="card-body">
                        <?php echo e($project->description); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="text-end m-4">
                </div>
                <div class="table-responsive-md">
                    <table
                        class="table table-striped-columns
                        table-hover	
                        table-borderless
                        table-primary
                        align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Nama Task</th>
                                <th class="text-center">Deskripsi</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr class="table-primary">
                                <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <td class="text-center" scope="row"><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($task->name); ?></td>
                                    <td><?php echo e($task->description); ?></td>
                                    <td><?php echo e($task->status); ?></td>
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
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-nice', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\contoh_spatie\resources\views/project/show.blade.php ENDPATH**/ ?>
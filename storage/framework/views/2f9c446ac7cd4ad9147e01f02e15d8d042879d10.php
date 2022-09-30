
<div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Project</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('project.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-floating mb-3">
                        <input name="name" type="text" class="form-control" id="floatingInput" placeholder="a">
                        <label class="ms-0" for="floatingInput">Project Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="owner" type="text" class="form-control" id="floatingInput" placeholder="a">
                        <label class="ms-0" for="floatingInput">Owner</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="leader_id" type="number" class="form-control" id="floatingInput" placeholder="a">
                        <label class="ms-0" for="floatingInput">Leader ID</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="deadline" type="date" class="form-control" id="floatingInput" placeholder="a">
                        <label class="ms-0" for="floatingInput">Deadline</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="progress" type="number" class="form-control" id="floatingInput" placeholder="a">
                        <label class="ms-0" for="floatingInput">Progress</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="description" type="text-area" class="form-control" id="floatingInput"
                            placeholder="a">
                        <label class="ms-0" for="floatingInput">Description</label>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php /**PATH C:\xampp\htdocs\contoh_spatie\resources\views/project/modal-form-create.blade.php ENDPATH**/ ?>

<?php $__env->startSection('content'); ?>
    <h1>Danh sách Sách</h1>
    <?php if(session('Note')): ?>
        <div class="alert alert-success">
            <?php echo e(session('Note')); ?>

        </div>
    <?php endif; ?>
    <a href="<?php echo e(url('admin/book/createBook')); ?>" class="btn btn-primary">Thêm Sách Mới</a>
    <table class="table mt-3">
        <thead>
        <tr>
            <th>Tiêu đề</th>
            <th>Tác giả</th>
            <th>Hành động</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($book->title); ?></td>
                <td><?php echo e($book->author); ?></td>
                <td>
                    <a href="<?php echo e(url('admin/book/editBook', $book->id)); ?>" class="btn btn-sm btn-primary">Chỉnh sửa</a>
                    <form action="<?php echo e(url('admin/book/deleteBook', $book->id)); ?>" method="POST" class="d-inline">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa sách này?')">Xóa</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Nhom7_QuanLyThuVien-DoDangCong,Bouathong\resources\views/admin/book/getBooks.blade.php ENDPATH**/ ?>
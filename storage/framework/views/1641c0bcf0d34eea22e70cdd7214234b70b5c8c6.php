<?php $__env->startSection('content'); ?>

<?php $no=1; ?>
	<table id="datatable" class="table table-striped table-bordered">
       <thead>          
        	<tr class="headings">
        	<th class="column-title">No </th>
        	<th class="column-title">Nama Penerbit</th>
        	<th class="column-title">Alamat</th>
        	<th class="column-title">Kontak</th>
        	<th class="column-title no-link last"><span class="nobr">Action</span>
        	</th>
       </thead>
		<tbody>
			<?php $__currentLoopData = $penerbit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penerbit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($no++); ?></td>
              	<td><a href="#"><a href="/liblary/<?php echo e($penerbit->slug); ?>"><p> <?php echo e($penerbit->nama_penerbit); ?> </p></a></a></td>
				<td><?php echo e($penerbit->alamat_penerbit); ?></td>
				<td><?php echo e($penerbit->kontak_penerbit); ?></td>
				<td>
					<button class="edit-modal btn btn-primary btn-xs">
					    <i class='fa fa-eye' style="color: white"></i>
					</button>
					<button class="edit-modal btn btn-primary btn-xs">
					    <i class='fa fa-pencil' style="color: white"></i>
					</button>
					
						<button class="delete-modal btn btn-danger btn-xs" value="delete">
							<form action="/list-buku/<?php echo e($penerbit->id); ?>" method="post">
							<input type="hidden" name="_method" value="delete">
							<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
								<span class="glyphicon glyphicon-trash"></span>
							</form>
						</button>
					
					
				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      	</tbody>
	</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
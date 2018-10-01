
<?php $__env->startSection('banner-image',asset($banner['banner'])); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
	<!--<div class="flt">-->
	<!--	<h2>Solutions</h2>-->
	<!--<hr>-->
	<!--</div>-->
	<div class="row">
		<div class="col-md-2 col-xs-12"></div>
	<div class="col-md-8 col-xs-12">
	<div class="brdCum">
					<ul>
						<li><a href="<?php echo e(route('home')); ?>">Home</a>/</li>
						<li>Solutions</li>
					</ul>
				</div></div>
	<div class="col-md-2 col-xs-12"></div>
	</div>
        <div class="">		
			<div class="col-md-2 col-sm-3 col-md-12">
				<?php if(!$solutiontags->isEmpty()): ?>
				<form class="form-horizontal" role="form" id="filterForm" action="<?php echo e(isset($solutions)&&!empty($solutions)?route('solution.filtersolutions',['id'=>$solutions->getId()]):''); ?>" method="POST">
					<?php echo e(csrf_field()); ?>

					<div class="leftDrop">
						<h3>Refine by</h3>
						<div class="pdn">					
							<h4>Solution</h4>
							<?php $__currentLoopData = $solutiontags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solutiontag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php if($solutiontag->getIsActive()): ?>
								<div class="checkbox">
						          <label>
						            <input type="checkbox" value="<?php echo e($solutiontag->getId()); ?>" name="solution-tag[]" <?php echo e(isset($selectedTags)&&in_array($solutiontag->getId(), $selectedTags)?'checked':''); ?>>
										<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
										<?php echo e($solutiontag->getTagName()); ?>

									</label>
						        </div>
						        <?php endif; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					</div>
					<div class="filtr-btn">
						<button type="submit" class="btn btn-sm btn-primary pull-right">Search</button>
					</div>
				</form>
				<?php endif; ?>
			</div>
			<div class="col-md-8 col-sm-8 col-md-12">
			    <div class="row"><div class="col-md-12"><h4><?php echo e($solutions->getName()); ?></h4></div></div>			
				<div class="row">
					<?php if($solutions->getScenarioDetail()): ?>
						<?php $__currentLoopData = $solutions->getScenarioDetail(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scenarioDetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<a href="<?php echo e(route('solution.products',['id'=>$scenarioDetail->getId()])); ?>">
								<div class="col-md-4 col-md-12">
									<div class="solInerTab">
										<?php $file = $scenarioDetail->getImage() ?>
									<div class="divImg"><img src="<?php echo e($scenarioDetail->getScenarioImg()); ?>" class="img-responsive" alt="solution-1"></div>			<h1><?php echo e($scenarioDetail->getName()); ?></h1>
										<p><?php echo e($scenarioDetail->getDescription()); ?></p>
									</div>
								</div>
							</a>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
					<?php else: ?>
						<p>No solutions found..</p>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-md-2 col-md-12 hidden-sm hidden-xs">
                        <?php $__env->startComponent('front-end.component.ads',['ads'=>$ads]); ?>
                            <?php echo $__env->renderComponent(); ?>
					</div>
		</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end.layouts.frontLayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
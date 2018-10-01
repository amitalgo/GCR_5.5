
<?php $__env->startSection('banner-image',asset($banner['banner'])); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
	<!--<div class="flt">-->
	<!--	<h2>Products</h2>-->
	<!--<hr>-->
	<!--</div>-->
	<div class="row">
		<div class="col-md-2 col-sm-2 col-xs-12"></div>
	<div class="col-md-8 col-sm-3 col-xs-12">
	<div class="brdCum">
					<ul>
						<li><a href="<?php echo e(route('home')); ?>">Home</a>/</li>
						<li><a href="<?php echo e(isset($solutionId)&&null!=$solutionId?route('solution.index',['id'=>$solutionId]):route('solution.show',['id'=>$tagId])); ?>">Solutions</a>/</li>
						<li> Products</li>
					</ul>
				</div></div>
	<div class="col-md-2 col-sm-2 col-xs-12"></div>
	</div>
	
        <div class="">
        	<div class="col-md-2 col-sm-3 col-md-12">
        		<?php if(!$producttags->isEmpty()): ?>
				<form class="form-horizontal" role="form" id="filterForm" action="<?php echo e(route('solution.filterproducts',['id'=>$id])); ?>" method="POST">
					<?php echo e(csrf_field()); ?>

					<div class="leftDrop">
						<h3>Refine by</h3>
						<div class="pdn">						
							<h4>Product</h4>
							<?php $__currentLoopData = $producttags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producttag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="checkbox">
						          <label>
						            <input type="checkbox" value="<?php echo e($producttag->getId()); ?>" name="product-filter[]" <?php echo e(isset($selectedTags)&&in_array($producttag->getId(), $selectedTags)?'checked':''); ?>>
										<span class="cr"><i class="cr-icon fa fa-check" aria-hidden="true"></i></span>
										<?php echo e($producttag->getTagName()); ?>

									</label>
						        </div>
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
				<?php if($scenarioProducts): ?>
				    <div class="row">
				        <div class="col-md-12"><h4><?php echo e($scenarioProducts[0]->getScenarioId()->getName()); ?></h4></div>
				    </div>

					<?php $__currentLoopData = $scenarioProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scenarioProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="row Products">
							<div class="col-md-4 col-sm-4 col-md-12">
								<div class="Products scroller">
							<?php $__empty_1 = true; $__currentLoopData = $scenarioProduct->getProductId()->getProductAttachment(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attachment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
								<li>
								<a href="<?php echo e($attachment->getScenarioImg()); ?>" data-title="<?php echo e($scenarioProduct->getProductId()->getName()); ?>" >
									<img src="<?php echo e($attachment->getScenarioImg()); ?>" class="img-responsive" alt="<?php echo e($attachment->getType()); ?>">
								</a>
								</li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
							<?php endif; ?>
						</div>
					</div>
							<div class="col-md-8 col-sm-8 col-md-12">
								<h1><?php echo e($scenarioProduct->getProductId()->getName()); ?></h1>
								<h2>By <?php echo e($scenarioProduct->getProductId()->getVender()); ?></h2>
								<p><?php echo \Illuminate\Support\Str::words($scenarioProduct->getProductId()->getDescription(), 40,' ...'); ?>... <a style="cursor: pointer;" type="button" class="more-btn" data-attr="<?php echo e($scenarioProduct->getProductId()->getDescription()); ?>">more</a> </p>
								<div>
									<button type="button" class="btn btn-primary inquire-btn" data-pid="<?php echo e($scenarioProduct->getProductId()->getId()); ?>">Inquire Now</button>
								</div>
							</div>
								<hr>
						</div>
						
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php else: ?>
					<div class="row">
						<p>No products found..</p>
					</div>
				<?php endif; ?>
			</div>
			<div class="col-md-2 col-md-12 hidden-sm hidden-xs">
                        <?php $__env->startComponent('front-end.component.ads',['ads'=>$ads]); ?>
                            <?php echo $__env->renderComponent(); ?>
					</div>
		</div>





	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end.layouts.frontLayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
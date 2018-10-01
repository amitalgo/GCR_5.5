
<?php $__env->startSection('banner-image',asset($banner->getImage())); ?>

<?php $__env->startSection('content'); ?>


    <div class="container-fluid" style=" padding-right: 0px;  padding-left:0px;">
	 <div class="container">
        <div class="col-md-10 col-sm-10 col-pdn col-xs-12">
		  <div class="col-md-12 col-sm-12 col-xs-12">
            <?php echo $content->getDescription(); ?>

			</div>
        </div>
		<div class="col-md-2 col-md-12 hidden-sm hidden-xs">
            <?php $__env->startComponent('front-end.component.ads',['ads'=>$ads]); ?>
                <?php echo $__env->renderComponent(); ?>
		</div>
       
		
			
				
			
			
            
			
            
			
				
					
                
				
                    
                
			
                
                
            
            
			
        
		
    </div>
	  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end.layouts.frontLayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
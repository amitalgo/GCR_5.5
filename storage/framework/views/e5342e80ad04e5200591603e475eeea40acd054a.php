
<?php $__env->startSection('title'); ?>
    <?php echo e(ucfirst(substr(Route::currentRouteName(),strpos(Route::currentRouteName(),".") + 1))); ?> | Experience Centre
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <style>
        .form-horizontal .form-group{
            margin-right: 4px!important;

        }
    </style>
    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title"> <?php echo e(ucfirst(substr(Route::currentRouteName(),strpos(Route::currentRouteName(),".") + 1))); ?> Experience Centre </h4>
                <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-sm-2">
                            <a class="btn btn-default waves-effect waves-light" href="<?php echo e(route('experience-centre.index')); ?>"><i class="fa fa-reply"></i> Back </a>
                        </div>
                    </div>
                    <hr/>
                    <form class="form-horizontal" role="form" id="addForm" action="<?php if(@isset($experience)): ?> <?php echo e(route('experience-centre.update',['experience-centre' => $experience->getId()] )); ?> <?php else: ?><?php echo e(route('experience-centre.store')); ?> <?php endif; ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <?php echo e(csrf_field()); ?>

                                        <?php if(isset($experience)): ?>
                                            <input type="hidden" name="_method" value="PUT">
                                        <?php endif; ?>
                                        <select class="form-control select2" required="required" id="cat_id" name="category">
                                            <option value="">Choose Category</option>
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($category->getId()); ?>" <?php if(isset($experience)): ?> <?php echo e($experience->getCategoryId()->getId() == $category->getId() ? "selected=selected" : ""); ?> <?php endif; ?> ><?php echo e($category->getName()); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                <hr/>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input class="form-control" required="required" placeholder="Title" type="text" name="title[]"  value="<?php if(isset($experience)): ?><?php echo e($experience->getTitle()); ?> <?php endif; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label>Solution</label>
                                    <select class="form-control select2" required="required" id="sol_id" name="solution[]">
                                        <option value="">Choose Solution</option>
                                        <?php $__currentLoopData = $solutions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solution): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($solution->getId()); ?>" <?php if(isset($experience)): ?> <?php echo e($experience->getCategoryId()->getId() == $solution->getId() ? "selected=selected" : ""); ?> <?php endif; ?> ><?php echo e($solution->getName()); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>
                                    
                                        
                                        
                                        
                                    

                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-12 parents">
                                <div class="col-sm-1">
                                    <div class="form-group">
                                        <label> Is Image </label><br/>
                                        <input type="checkbox" class="is_video" name="is_video[]" value="<?php if(isset($experience)): ?><?php if($experience->getIsVideo()): ?> 1 <?php else: ?> 0 <?php endif; ?> <?php endif; ?>" <?php if(isset($experience)): ?> <?php if($experience->getIsVideo()): ?> <?php else: ?> checked <?php endif; ?> <?php endif; ?>/>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group UrlIsHide" <?php if(isset($experience)): ?><?php if($experience->getIsVideo()): ?> style="display: block" <?php else: ?> style="display: none" <?php endif; ?> <?php endif; ?>>
                                        <label> URL  </label>
                                        <input class="form-control url" placeholder="You Tube Url" type="text" name="url[]"  value="<?php if(isset($experience)): ?><?php echo e($experience->getMediaUrl()); ?> <?php endif; ?>">
                                    </div>
                                    <div class="form-group ImgAndRedirectLinkIsHide" <?php if(isset($experience)): ?><?php if($experience->getIsVideo()): ?> style="display: none" <?php else: ?> style="display: block" <?php endif; ?> <?php endif; ?>>
                                        <label> Upload Image  </label>
                                        <input class="filestyle image" data-size="sm" placeholder="Browse Image" type="file" name="image[]" multiple <?php if(isset($experience)): ?><?php if($experience->getIsVideo()): ?> <?php else: ?>  <?php endif; ?> <?php endif; ?>/>
                                        <?php if(isset($experience)): ?>
                                            <?php if($experience->getIsVideo()): ?> <?php else: ?> <img class="img-thumbnail thumb-lg" src="<?php echo e(asset($experience->getMediaUrl())); ?>" alt=""> <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group ImgAndRedirectLinkIsHide" <?php if(isset($experience)): ?><?php if($experience->getIsVideo()): ?> style="display: none" <?php else: ?> style="display: block" <?php endif; ?> <?php endif; ?>>
                                        <label> Redirect Link  </label>
                                        <input class="form-control r-link" placeholder="Redirect Link" type="text" name="r-link[]"  value="<?php if(isset($experience)): ?><?php echo e($experience->getLinkRedirect()); ?> <?php endif; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-1" style="float:left">
                                    <div class="form-group">
                                        <label> </label>
                                        <button type="button" class="btn btn-icon waves-effect btn-default waves-light" onclick="init.addForm( '<?php echo e(route("experience-form")); ?>' )"> <i class="fa fa-plus"></i> </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="clear-fix"></div>
                        <?php if(isset($experience)): ?>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-1 control-label text-left" for="cat">Status : </label>
                                    <div class="col-md-6">
                                        <div class="radio radio-success radio-inline">
                                            <input type="radio" id="active_1" name="active" value="1" <?php echo e($experience->getIsActive()?'checked':''); ?>>
                                            <label for="active_1">Active</label>
                                        </div>
                                        <div class="radio radio-danger radio-inline">
                                            <input type="radio" id="active_0" name="active" value="0" <?php echo e($experience->getIsActive()?'':'checked'); ?>>
                                            <label for="active_0">Inactive</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="addMoreElement"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-default waves-effect waves-light btn-md">
                                    Submit
                                </button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>

    </div>
    <script>
        $(document).ready(function () {

        })
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.adminLayouts2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
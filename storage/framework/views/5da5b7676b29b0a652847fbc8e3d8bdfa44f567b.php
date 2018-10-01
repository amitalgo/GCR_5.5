<div class="sidebar-inner slimscrollleft">
    <!--- Divider -->
    <div id="sidebar-menu">
        <ul>

            <li class="text-muted menu-title">Navigation</li>

            <li class="has_sub">
                <a href="#" class="waves-effect"><i class="fa fa-file-text" aria-hidden="true"></i>
 <span>Pages</span> </a>
                <ul class="list-unstyled">
                    <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e(url('admin/page/'.$page->link)); ?>"><?php echo e($page->name); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </ul>
            </li>
            <li class="has_sub">
                <a href="#" class="waves-effect"><i class="fa fa-gear"></i><span>General </span> </a>
                <ul class="list-unstyled">
                    <li><a href="<?php echo e(route('contact.index')); ?>">Contact Emails</a></li>
                    <li><a href="<?php echo e(route('support.index')); ?>">Support Emails</a></li>
                    <li><a href="<?php echo e(route('office.index')); ?>">Office</a></li>
                    <li><a href="<?php echo e(url('admin/country')); ?>">Country</a></li>
                    <li><a href="<?php echo e(url('admin/industry')); ?>">Industry</a></li>
                    <li><a href="<?php echo e(url('admin/product-type')); ?>">Product Type</a></li>
                </ul>
            </li>

            
            <li><a href="<?php echo e(url('admin/verticals')); ?>"><i class="fa fa-columns" aria-hidden="true"></i> Verticals</a></li>
            <li><a href="<?php echo e(url('admin/products')); ?>"><i class="fa fa-product-hunt" aria-hidden="true"></i>
 Products</a></li>
            <li><a href="<?php echo e(url('admin/tags')); ?>"><i class="fa fa-tag" aria-hidden="true"></i>
 Tags</a></li>


            <li><a href="<?php echo e(url('admin/partners')); ?>"><i class="fa fa-handshake-o" aria-hidden="true"></i>Partners</a></li>

            <li class="has_sub">
                <a href="#" class="waves-effect"><i class="fa fa-video-camera" aria-hidden="true"></i> Experience Centre </span> </a>
                <ul class="list-unstyled">
                    <li><a href="<?php echo e(url('admin/category')); ?>">Category</a></li>
                    <li><a href="<?php echo e(url('admin/experience-centre')); ?>">Experience Centre</a></li>
                </ul>
            </li>
            <li><a href="<?php echo e(url('admin/news')); ?>"><i class="fa fa-calendar" aria-hidden="true"></i>News & Events</a></li>

            <li><a href="<?php echo e(url('admin/providers')); ?>"><i class="fa fa-slideshare" aria-hidden="true"></i>
Providers</a></li>

            
            <li><a href="<?php echo e(url('admin/solutions')); ?>"><i class="fa fa-sitemap" aria-hidden="true"></i>
</i>Solutions</a></li>

            <li><a href="<?php echo e(url('admin/ads')); ?>"><i class="fa fa-picture-o" aria-hidden="true"></i>
Ads</a></li>
            <li><a href="<?php echo e(url('admin/testimonials')); ?>"><i class="fa fa-quote-left" aria-hidden="true"></i>Testimonials</a></li>
            <li><a href="<?php echo e(route('roles.index')); ?>"><i class="fa fa-user-secret" aria-hidden="true"></i>Roles & Permission</a></li>
            <li><a href="<?php echo e(route('users.index')); ?>"><i class="fa fa-user-plus" aria-hidden="true"></i>
Users</a></li>


        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>
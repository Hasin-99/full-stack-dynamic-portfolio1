<?php $__env->startSection('title', 'Works - Md. Shadman Hasin'); ?>

<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/works.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <section class="works-section">
        <h1>My Works</h1>
        <div class="works-grid">
            
            <?php $__empty_1 = true; $__currentLoopData = $projects ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="work-item">
                    <div class="work-image">
                        <?php if($project->image): ?>
                            <img src="<?php echo e(asset('storage/' . $project->image)); ?>" alt="<?php echo e($project->title); ?>" style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px;">
                        <?php else: ?>
                            <div class="project-mockup mobile-app"></div>
                        <?php endif; ?>
                    </div>
                    <h3><?php echo e($project->icon ?? '📱'); ?> <?php echo e($project->title); ?></h3>
                    <p><?php echo e($project->description); ?></p>
                    <?php if($project->tech_tags && is_array($project->tech_tags)): ?>
                        <div class="work-tech">
                            <?php $__currentLoopData = $project->tech_tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <span class="tech-tag"><?php echo e($tag); ?></span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>
                    <?php if($project->project_url): ?>
                        <a href="<?php echo e($project->project_url); ?>" target="_blank" class="project-link">View Project →</a>
                    <?php endif; ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                
                
                
                <div class="work-item">
                    <div class="work-image">
                        <div class="project-mockup mobile-app"></div>
                    </div>
                    <h3>📱 StudentMove – Smart Transportation App</h3>
                    <p>A dedicated mobile application designed to revolutionize transportation for students in Dhaka city. Prioritizes efficiency, reliability, and safety to solve daily commuting challenges.</p>
                    <div class="work-tech">
                        <span class="tech-tag">Figma</span>
                        <span class="tech-tag">Mobile App</span>
                        <span class="tech-tag">UX Design</span>
                    </div>
                </div>

                
                <div class="work-item">
                    <div class="work-image">
                        <div class="project-mockup dashboard"></div>
                    </div>
                    <h3>🍽️ PoS Restaurant System Design</h3>
                    <p>Designed the order flow, menu layout, and billing screens for a restaurant Point of Sale system. Optimized the interface specifically for touchscreen usability.</p>
                    <div class="work-tech">
                        <span class="tech-tag">Interface Design</span>
                        <span class="tech-tag">Touchscreen UI</span>
                        <span class="tech-tag">Billing Flow</span>
                    </div>
                </div>

                
                <div class="work-item">
                    <div class="work-image">
                        <div class="project-mockup landing"></div>
                    </div>
                    <h3>💼 Finance & Consulting Landing Pages</h3>
                    <p>Professional landing page templates created for conversion and clean visual hierarchy with strong typography and color systems.</p>
                    <div class="work-tech">
                        <span class="tech-tag">Landing Page</span>
                        <span class="tech-tag">Typography</span>
                        <span class="tech-tag">Web Design</span>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <footer>
        <p>&copy; <?php echo e(date('Y')); ?> Md. Shadman Hasin. All rights reserved.</p>
    </footer>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('js/works.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/md.shadmanhain/Downloads/full-stack-dynamic-portfolio1/resources/views/pages/works.blade.php ENDPATH**/ ?>
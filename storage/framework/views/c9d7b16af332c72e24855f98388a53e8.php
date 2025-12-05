<?php $__env->startSection('title', 'Md. Shadman Hasin - Portfolio'); ?>

<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
    <style>
        /* These styles allow the button to work inside the clickable card */
        .profile-card {
            position: relative;
            text-decoration: none;
            color: inherit;
        }
        .card-link-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1; /* Covers the card */
        }
        .btn-download {
            position: relative;
            z-index: 10; /* Sits ON TOP of the overlay so it's clickable */
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: 15px;
            padding: 8px 16px;
            background: #000;
            color: #fff !important;
            border-radius: 20px;
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: bold;
            border: 1px solid #333;
        }
        .btn-download:hover {
            background: #333;
            transform: scale(1.05);
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <!-- Top Row -->
        <div class="grid-row">
            <!-- FIXED: Changed <a> to <div> so we can nest the download button -->
            <div class="profile-card large-card">
                <div class="profile-content">
                    <div class="profile-image">
                        
                        <?php if(isset($user) && $user->image): ?>
                            <img src="<?php echo e(asset('storage/' . $user->image)); ?>" alt="<?php echo e($user->name); ?>" style="width:100px; height:100px; border-radius:50%; object-fit:cover;">
                        <?php else: ?>
                            <img src="<?php echo e(asset('assets/images/profile.jpg')); ?>" alt="Md. Shadman Hasin" style="width:100px; height:100px; border-radius:50%; object-fit:cover;">
                        <?php endif; ?>
                    </div>
                    <div class="profile-info">
                        <span class="role"><?php echo e($settings['job_title'] ?? 'WEB ENGINEER'); ?></span>
                        <h1><?php echo e($user->name ?? 'Md. Shadman Hasin'); ?></h1>
                        <p><?php echo e($settings['short_bio'] ?? 'Web Engineer • Full Stack Developer • UI/UX Enthusiast'); ?></p>
                        
                        <!-- THE DOWNLOAD BUTTON -->
                        <!-- Ensure file exists at: public/assets/resume/Md._Shadman_Hasin_CV.pdf -->
                        <a href="<?php echo e(asset('assets/resume/Md._Shadman_Hasin_CV.pdf')); ?>" class="btn-download" download="Md._Shadman_Hasin_CV.pdf">
                            <i class="fas fa-download"></i> Download CV
                        </a>
                    </div>
                </div>
                
                <div class="more-icon">→</div>
                
                <!-- Overlay link makes the rest of the card clickable -->
                <a href="<?php echo e(route('about')); ?>" class="card-link-overlay"></a>
            </div>
            
            <div class="projects-banner">
                <?php $__empty_1 = true; $__currentLoopData = $projects ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <span><?php echo e($project->title); ?></span><?php if(!$loop->last): ?> • <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <span>StudentMove App</span> • <span>PoS Restaurant System</span> • <span>Finance Landing Pages</span>
                <?php endif; ?>
            </div>
        </div>

        <!-- Middle Row -->
        <div class="grid-row">
            <a href="<?php echo e(route('works')); ?>" class="card showcase-card card-link">
                <div class="card-content">
                    <div class="showcase-image">
                        <div class="device-mockup">
                            <div class="device phone"></div>
                            <div class="device phone"></div>
                            <div class="device laptop"></div>
                        </div>
                    </div>
                    <span class="card-label">SHOWCASE</span>
                    <h3>Projects</h3>
                    <div class="more-icon">→</div>
                </div>
            </a>
        </div>

        <!-- Bottom Row -->
        <div class="grid-row">
            <div class="stats-card">
                <div class="stat-item">
                    <span class="stat-number"><?php echo e($settings['experience_years'] ?? '2+'); ?></span>
                    <span class="stat-label">YEARS EXPERIENCE</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number"><?php echo e($settings['clients_count'] ?? '5'); ?></span>
                    <span class="stat-label">CLIENTS WORLDWIDE</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number"><?php echo e(isset($projects) ? count($projects) : '10+'); ?></span>
                    <span class="stat-label">TOTAL PROJECTS</span>
                </div>
            </div>
            
            <a href="<?php echo e(route('contact')); ?>" class="card work-together-card card-link">
                <div class="card-content">
                    <div class="star-icon">★</div>
                    <h2>Let's work <span class="highlight">together.</span></h2>
                    <div class="more-icon">→</div>
                </div>
            </a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('js/home.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/md.shadmanhain/Downloads/full-stack-dynamic-portfolio1/resources/views/pages/home.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title', 'About - Md. Shadman Hasin'); ?>

<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/about.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <section class="about-section">
        <h1>About Me</h1>
        <div class="about-content">
            
            <img src="<?php echo e(asset('assets/images/profile.jpg')); ?>" alt="Md. Shadman Hasin" class="about-img">
            <div class="about-text">
                <p><?php echo e($settings['about_text_1'] ?? '👋 Hi, I\'m Md. Shadman Hasin – Web Engineer & Full Stack Developer'); ?></p>
                <p><?php echo e($settings['about_text_2'] ?? 'I build robust digital solutions that solve real problems. Passionate about full-stack development, database architecture, and creating user-centered applications that people love to use.'); ?></p>
                <p><?php echo e($settings['about_text_3'] ?? 'I\'m currently pursuing my BSc in Computer Science & Engineering at Daffodil International University. My approach blends technical engineering with creative design thinking, allowing me to prototype rapid solutions in Figma and build them out with Laravel and modern web technologies.'); ?></p>
                <p>I enjoy exploring the intersection of engineering and design, always looking for efficient workflows and scalable architectures — while always keeping the human user at the core of every line of code.</p>
            </div>
        </div>
        
        <div class="skills-section">
            <h2>🧠 Skills & Expertise</h2>
            <div class="skills-grid">
                <?php $__empty_1 = true; $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="skill-item">
                        <h3><?php echo e($skill->icon ?? '💻'); ?> <?php echo e($skill->title); ?></h3>
                        <p><?php echo e($skill->description); ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    
                    <div class="skill-item">
                        <h3>💻 Full Stack Development</h3>
                        <p>PHP, Laravel, JavaScript, HTML, CSS</p>
                    </div>
                    <div class="skill-item">
                        <h3>🎨 UI/UX Design</h3>
                        <p>Figma, Adobe XD, Illustrator, Prototyping</p>
                    </div>
                    <div class="skill-item">
                        <h3>🗄️ Backend Engineering</h3>
                        <p>Database Design, OOP, REST APIs</p>
                    </div>
                    <div class="skill-item">
                        <h3>📱 Responsive Design</h3>
                        <p>Mobile-First Layouts, Cross-Browser Compatibility</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        
        <div class="experience-section">
            <h2>🎓 Experience & Education</h2>
            <div class="experience-grid">
                <?php $__empty_1 = true; $__currentLoopData = $experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="experience-item">
                        <h3><?php echo e($experience->icon ?? '✅'); ?> <?php echo e($experience->title); ?></h3>
                        <p><?php echo e($experience->description); ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    
                    <div class="experience-item">
                        <h3>💼 Nexaaverse</h3>
                        <p><strong>UI/UX & Graphic Designer (Feb 2025 - Apr 2025)</strong><br>Designed UI for HR/CRM dashboards and created digital brand materials.</p>
                    </div>
                    <div class="experience-item">
                        <h3>💼 Accenture</h3>
                        <p><strong>UI/UX & Graphic Designer (Nov 2024 - Apr 2025)</strong><br>Designed product features, wireframes, and prototypes focusing on UX principles.</p>
                    </div>
                    
                    
                    <div class="experience-item">
                        <h3>🎓 Daffodil International University</h3>
                        <p>BSc in Computer Science & Engineering (2022 - 2026)</p>
                    </div>
                    <div class="experience-item">
                        <h3>🎓 Govt Yasin College</h3>
                        <p>HSC (Science) (2018 - 2020)</p>
                    </div>
                     <div class="experience-item">
                        <h3>🎓 Faridpur Zilla School</h3>
                        <p>SSC (Science) (2016 - 2018)</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        
        <div class="process-section">
            <h2>🧭 My Work Process</h2>
            <div class="process-grid">
                <div class="process-item">
                    <span class="process-number">1</span>
                    <h3>🧠 Analyze</h3>
                    <p>Understand requirements and system architecture</p>
                </div>
                <div class="process-item">
                    <span class="process-number">2</span>
                    <h3>✏️ Design</h3>
                    <p>Wireframe UIs and database schemas</p>
                </div>
                <div class="process-item">
                    <span class="process-number">3</span>
                    <h3>💻 Develop</h3>
                    <p>Code frontend and backend logic</p>
                </div>
                <div class="process-item">
                    <span class="process-number">4</span>
                    <h3>🚀 Deploy</h3>
                    <p>Test, optimize, and launch the application</p>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <footer>
        <p>&copy; <?php echo e(date('Y')); ?> Md. Shadman Hasin. All rights reserved.</p>
    </footer>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('js/about.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/md.shadmanhain/Downloads/full-stack-dynamic-portfolio1/resources/views/pages/about.blade.php ENDPATH**/ ?>
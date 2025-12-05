

<?php $__env->startSection('title', 'About - Md Julfikar Hasan'); ?>

<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/about.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <section class="about-section">
        <h1>About Me</h1>
        <div class="about-content">
            <img src="<?php echo e(asset('assets/images/profile.jpg')); ?>" alt="Md Julfikar Hasan" class="about-img">
            <div class="about-text">
                <p><?php echo e($settings['about_text_1'] ?? '👋 Hi, I\'m Md Julfikar Hasan – UI/UX Designer'); ?></p>
                <p><?php echo e($settings['about_text_2'] ?? 'I design intuitive digital experiences that solve real problems and bring ideas to life. Passionate about user-centered design, AI-driven workflows, and creating products that people love to use.'); ?></p>
                <p><?php echo e($settings['about_text_3'] ?? 'I\'m currently pursuing my BSc in Computer Science & Engineering at Daffodil International University, blending technical understanding with creative design skills. My approach is driven by user-centered design thinking, rapid prototyping in Figma, and a love for solving complex design challenges with simple, functional solutions.'); ?></p>
                <p>I enjoy exploring the intersection of design and AI, using tools like ChatGPT and AI-powered plugins to enhance creativity and accelerate workflows — while always keeping the human touch at the core of my work.</p>
            </div>
        </div>
        
        <div class="skills-section">
            <h2>🧠 Skills & Expertise</h2>
            <div class="skills-grid">
                <?php $__empty_1 = true; $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="skill-item">
                        <h3><?php echo e($skill->icon ?? '🎨'); ?> <?php echo e($skill->title); ?></h3>
                        <p><?php echo e($skill->description); ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="skill-item">
                        <h3>🎨 User-Centered Design Thinking</h3>
                        <p>Creating designs that prioritize user needs and business goals</p>
                    </div>
                    <div class="skill-item">
                        <h3>🧩 Figma Prototyping</h3>
                        <p>Auto-layout, Components, Design Systems</p>
                    </div>
                    <div class="skill-item">
                        <h3>📱 Responsive UI Design</h3>
                        <p>Web, Mobile, and Dashboard interfaces</p>
                    </div>
                    <div class="skill-item">
                        <h3>🔍 Wireframing & User Flows</h3>
                        <p>Structuring information architecture</p>
                    </div>
                    <div class="skill-item">
                        <h3>🔁 Feedback-driven Iteration</h3>
                        <p>Continuous improvement and developer handoff</p>
                    </div>
                    <div class="skill-item">
                        <h3>🤖 AI-Assisted Design Workflows</h3>
                        <p>Copy, naming, brainstorming with AI tools</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        
        <div class="experience-section">
            <h2>🎓 Experience & Achievements</h2>
            <div class="experience-grid">
                <?php $__empty_1 = true; $__currentLoopData = $experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="experience-item">
                        <h3><?php echo e($experience->icon ?? '✅'); ?> <?php echo e($experience->title); ?></h3>
                        <p><?php echo e($experience->description); ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="experience-item">
                        <h3>✅ Accenture North America</h3>
                        <p>Product Design Simulation on Forage, focusing on feature iteration and UX improvements</p>
                    </div>
                    <div class="experience-item">
                        <h3>💼 Real-world Projects</h3>
                        <p>Contributed to task-based internships, applying practical design thinking to solve user problems</p>
                    </div>
                    <div class="experience-item">
                        <h3>🌍 Remote Collaboration</h3>
                        <p>Frequently applies for remote roles to expand skills and collaborate on diverse product teams</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        
        <div class="process-section">
            <h2>🧭 My Design Process</h2>
            <div class="process-grid">
                <div class="process-item">
                    <span class="process-number">1</span>
                    <h3>🧠 Research & Empathy</h3>
                    <p>Understand user needs and business goals</p>
                </div>
                <div class="process-item">
                    <span class="process-number">2</span>
                    <h3>✏️ Wireframing</h3>
                    <p>Sketch ideas and test early structure</p>
                </div>
                <div class="process-item">
                    <span class="process-number">3</span>
                    <h3>🧪 Prototyping</h3>
                    <p>Bring ideas to life interactively in Figma</p>
                </div>
                <div class="process-item">
                    <span class="process-number">4</span>
                    <h3>🔁 Feedback & Iteration</h3>
                    <p>Refine designs based on input</p>
                </div>
                <div class="process-item">
                    <span class="process-number">5</span>
                    <h3>🚀 Developer Handoff</h3>
                    <p>Prepare final assets and documentation</p>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <footer>
        <p>&copy; <?php echo e(date('Y')); ?> Md Julfikar Hasan. All rights reserved.</p>
    </footer>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('js/about.js')); ?>"></script>
<?php $__env->stopPush(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\md-julfikar-hasan-v2\resources\views/pages/about.blade.php ENDPATH**/ ?>
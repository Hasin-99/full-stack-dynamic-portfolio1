

<?php $__env->startSection('title', 'Settings'); ?>

<?php $__env->startSection('content'); ?>
    <h2>Settings</h2>
    
    <form action="<?php echo e(route('admin.settings.update')); ?>" method="POST" enctype="multipart/form-data" style="max-width: 800px;">
        <?php echo csrf_field(); ?>
        <h3>Profile Settings</h3>
        <div>
            <label>Profile Name</label>
            <input type="text" name="profile_name" value="<?php echo e($settings['profile_name'] ?? ''); ?>">
        </div>
        <div>
            <label>Profile Role</label>
            <input type="text" name="profile_role" value="<?php echo e($settings['profile_role'] ?? ''); ?>">
        </div>
        <div>
            <label>Profile Bio</label>
            <textarea name="profile_bio" rows="3"><?php echo e($settings['profile_bio'] ?? ''); ?></textarea>
        </div>
        <div>
            <label>Profile Image</label>
            <input type="file" name="profile_image" accept="image/*">
        </div>
        <div>
            <label>Resume File</label>
            <input type="file" name="resume_file" accept=".pdf">
        </div>
        
        <h3 style="margin-top: 2rem;">Statistics</h3>
        <div>
            <label>Experience Years</label>
            <input type="text" name="experience_years" value="<?php echo e($settings['experience_years'] ?? ''); ?>">
        </div>
        <div>
            <label>Clients Count</label>
            <input type="text" name="clients_count" value="<?php echo e($settings['clients_count'] ?? ''); ?>">
        </div>
        <div>
            <label>Projects Count</label>
            <input type="text" name="projects_count" value="<?php echo e($settings['projects_count'] ?? ''); ?>">
        </div>
        
        <h3 style="margin-top: 2rem;">About Page</h3>
        <div>
            <label>About Text 1</label>
            <textarea name="about_text_1" rows="2"><?php echo e($settings['about_text_1'] ?? ''); ?></textarea>
        </div>
        <div>
            <label>About Text 2</label>
            <textarea name="about_text_2" rows="3"><?php echo e($settings['about_text_2'] ?? ''); ?></textarea>
        </div>
        <div>
            <label>About Text 3</label>
            <textarea name="about_text_3" rows="3"><?php echo e($settings['about_text_3'] ?? ''); ?></textarea>
        </div>
        
        <h3 style="margin-top: 2rem;">Contact Settings</h3>
        <div>
            <label>Email</label>
            <input type="email" name="contact_email" value="<?php echo e($settings['contact_email'] ?? ''); ?>">
        </div>
        <div>
            <label>Phone</label>
            <input type="text" name="contact_phone" value="<?php echo e($settings['contact_phone'] ?? ''); ?>">
        </div>
        <div>
            <label>Location</label>
            <input type="text" name="contact_location" value="<?php echo e($settings['contact_location'] ?? ''); ?>">
        </div>
        
        <h3 style="margin-top: 2rem;">Social Links</h3>
        <div>
            <label>Behance URL</label>
            <input type="url" name="behance_url" value="<?php echo e($settings['behance_url'] ?? ''); ?>">
        </div>
        <div>
            <label>LinkedIn URL</label>
            <input type="url" name="linkedin_url" value="<?php echo e($settings['linkedin_url'] ?? ''); ?>">
        </div>
        <div>
            <label>Dribbble URL</label>
            <input type="url" name="dribbble_url" value="<?php echo e($settings['dribbble_url'] ?? ''); ?>">
        </div>
        <div>
            <label>GitHub URL</label>
            <input type="url" name="github_url" value="<?php echo e($settings['github_url'] ?? ''); ?>">
        </div>
        
        <div style="margin-top: 2rem;">
            <button type="submit" class="btn btn-primary">Save Settings</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\md-julfikar-hasan-v2\resources\views/admin/settings/index.blade.php ENDPATH**/ ?>
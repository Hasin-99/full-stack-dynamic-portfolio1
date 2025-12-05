<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
    {
        $settings = [
            'profile_name'     => Setting::get('profile_name', 'Md. Shadman Hasin'),
            'profile_role'     => Setting::get('profile_role', 'Web Engineer'),
            'profile_bio'      => Setting::get('profile_bio', 'Web Engineer • Backend Developer • Creative Problem Solver'),
            'profile_image'    => Setting::get('profile_image', 'assets/images/profile.jpg'),
            'resume_file'      => Setting::get('resume_file', 'assets/Md_Shadman_Hasin_CV.pdf'),
            'experience_years' => Setting::get('experience_years', '1.5'),
            'clients_count'    => Setting::get('clients_count', '5'),
            'projects_count'   => Setting::get('projects_count', '12+'),
            'about_text_1'     => Setting::get('about_text_1', '👋 Hi, I\'m Md. Shadman Hasin – Web Engineer'),
            'about_text_2'     => Setting::get('about_text_2', 'I build robust, scalable, and dynamic web solutions for modern businesses.'),
            'about_text_3'     => Setting::get('about_text_3', 'I\'m currently sharpening my craft and exploring the latest in web technology.'),
            'contact_email'    => Setting::get('contact_email', 'hasin22205101462@diu.edu.bd'),
            'contact_phone'    => Setting::get('contact_phone', '01764851551'),
            'contact_location' => Setting::get('contact_location', 'Bangladesh'),
            'facebook_url'     => Setting::get('facebook_url', 'https://www.facebook.com/share/1HJjSjyBhV/'),
            'linkedin_url'     => Setting::get('linkedin_url', 'https://www.linkedin.com/in/md-shadman-hasin-648587333?utm_source=share_via&utm_content=profile&utm_medium=member_android'),
            'github_url'       => Setting::get('github_url', 'https://github.com/Hasin-99'),
            // dribbble_url removed; add back if needed
        ];

        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $fields = [
            'profile_name', 'profile_role', 'profile_bio', 'experience_years',
            'clients_count', 'projects_count', 'about_text_1', 'about_text_2',
            'about_text_3', 'contact_email', 'contact_phone', 'contact_location',
            'facebook_url', 'linkedin_url', 'github_url'
            // If you want 'dribbble_url', add it here and to the index array above
        ];

        foreach ($fields as $field) {
            if ($request->has($field)) {
                Setting::set($field, $request->input($field));
            }
        }

        if ($request->hasFile('profile_image')) {
            $path = $request->file('profile_image')->store('profile', 'public');
            Setting::set('profile_image', $path);
        }

        if ($request->hasFile('resume_file')) {
            $path = $request->file('resume_file')->store('resume', 'public');
            Setting::set('resume_file', $path);
        }

        return redirect()->route('admin.settings.index')->with('success', 'Settings updated successfully!');
    }
}
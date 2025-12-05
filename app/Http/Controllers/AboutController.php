<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Experience;
use App\Models\Setting;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        // Skills & Experiences
        try {
            $skills = Skill::orderBy('order')->get();
            $experiences = Experience::orderBy('order')->get();
        } catch (\Exception $e) {
            $skills = collect([]);
            $experiences = collect([]);
        }

        // Settings (using your name & role in the default fallback text)
        try {
            $settings = [
                'about_text_1' => Setting::get('about_text_1', '👋 Hi, I\'m Md. Shadman Hasin – Web Engineer'),
                'about_text_2' => Setting::get('about_text_2', 'I build robust, scalable, and dynamic web solutions for modern businesses.'),
                'about_text_3' => Setting::get('about_text_3', 'I\'m currently sharpening my craft and exploring the latest in web technology.'),
                'profile_image' => Setting::get('profile_image', 'assets/images/profile.jpg'),
            ];
        } catch (\Exception $e) {
            $settings = [
                'about_text_1' => '👋 Hi, I\'m Md. Shadman Hasin – Web Engineer',
                'about_text_2' => 'I build robust, scalable, and dynamic web solutions for modern businesses.',
                'about_text_3' => 'I\'m currently sharpening my craft and exploring the latest in web technology.',
                'profile_image' => 'assets/images/profile.jpg',
            ];
        }

        return view('pages.about', compact('skills', 'experiences', 'settings'));
    }
}
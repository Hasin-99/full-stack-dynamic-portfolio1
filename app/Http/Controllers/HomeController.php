<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        try {
            $featuredProjects = Project::where('is_featured', true)
                ->where('is_active', true)
                ->orderBy('order')
                ->limit(3)
                ->get();
            
            $projects = Project::where('is_active', true)
                ->orderBy('order')
                ->get();
            
            $settings = $this->getSettings();
        } catch (\Exception $e) {
            // Database not configured yet - use defaults
            $featuredProjects = collect([]);
            $projects = collect([]);
            $settings = $this->getSettings();
        }
        
        return view('pages.home', compact('featuredProjects', 'projects', 'settings'));
    }

    private function getSettings()
    {
        try {
            return [
                'name' => Setting::get('profile_name', 'Md. Shadman Hasin'),
                'role' => Setting::get('profile_role', 'Web Engineer'),
                'bio' => Setting::get('profile_bio', 'Web Engineer • Backend Developer • Creative Problem Solver'),
                'profile_image' => Setting::get('profile_image', 'assets/images/profile.jpg'),
                'resume_file' => Setting::get('resume_file', 'assets/Md_Shadman_Hasin_CV.pdf'),
                'experience_years' => Setting::get('experience_years', '1.5'),
                'clients_count' => Setting::get('clients_count', '5'),
                'projects_count' => Setting::get('projects_count', '12+'),
            ];
        } catch (\Exception $e) {
            return [
                'name' => 'Md. Shadman Hasin',
                'role' => 'Web Engineer',
                'bio' => 'Web Engineer • Backend Developer • Creative Problem Solver',
                'profile_image' => 'assets/images/profile.jpg',
                'resume_file' => 'assets/Md_Shadman_Hasin_CV.pdf',
                'experience_years' => '1.5',
                'clients_count' => '5',
                'projects_count' => '12+',
            ];
        }
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        try {
            $settings = [
                'email' => Setting::get('contact_email', 'hasin22205101462@diu.edu.bd'),
                'phone' => Setting::get('contact_phone', '01764851551'),
                'location' => Setting::get('contact_location', 'Bangladesh'),
                'facebook_url' => Setting::get('facebook_url', 'https://www.facebook.com/share/1HJjSjyBhV/'),
                'linkedin_url' => Setting::get('linkedin_url', 'https://www.linkedin.com/in/md-shadman-hasin-648587333?utm_source=share_via&utm_content=profile&utm_medium=member_android'),
                'github_url' => Setting::get('github_url', 'https://github.com/Hasin-99'),
            ];
        } catch (\Exception $e) {
            $settings = [
                'email' => 'hasin22205101462@diu.edu.bd',
                'phone' => '01764851551',
                'location' => 'Bangladesh',
                'facebook_url' => 'https://www.facebook.com/share/1HJjSjyBhV/',
                'linkedin_url' => 'https://www.linkedin.com/in/md-shadman-hasin-648587333?utm_source=share_via&utm_content=profile&utm_medium=member_android',
                'github_url' => 'https://github.com/Hasin-99',
            ];
        }
        
        return view('pages.contact', compact('settings'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        try {
            ContactMessage::create($validated);
            return redirect()->route('contact')->with('success', 'Message sent successfully!');
        } catch (\Exception $e) {
            return redirect()->route('contact')->with('error', 'Database not configured. Please configure database first.');
        }
    }
}
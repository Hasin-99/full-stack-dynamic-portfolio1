@extends('layouts.app')

@section('title', 'About - Md. Shadman Hasin')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')
    <section class="about-section">
        <h1>About Me</h1>
        <div class="about-content">
            {{-- Ensure you place your photo at public/assets/images/profile.jpg --}}
            <img src="{{ asset('assets/images/profile.jpg') }}" alt="Md. Shadman Hasin" class="about-img">
            <div class="about-text">
                <p>{{ $settings['about_text_1'] ?? '👋 Hi, I\'m Md. Shadman Hasin – Web Engineer & Full Stack Developer' }}</p>
                <p>{{ $settings['about_text_2'] ?? 'I build robust digital solutions that solve real problems. Passionate about full-stack development, database architecture, and creating user-centered applications that people love to use.' }}</p>
                <p>{{ $settings['about_text_3'] ?? 'I\'m currently pursuing my BSc in Computer Science & Engineering at Daffodil International University. My approach blends technical engineering with creative design thinking, allowing me to prototype rapid solutions in Figma and build them out with Laravel and modern web technologies.' }}</p>
                <p>I enjoy exploring the intersection of engineering and design, always looking for efficient workflows and scalable architectures — while always keeping the human user at the core of every line of code.</p>
            </div>
        </div>
        
        <div class="skills-section">
            <h2>🧠 Skills & Expertise</h2>
            <div class="skills-grid">
                @forelse($skills as $skill)
                    <div class="skill-item">
                        <h3>{{ $skill->icon ?? '💻' }} {{ $skill->title }}</h3>
                        <p>{{ $skill->description }}</p>
                    </div>
                @empty
                    {{-- Skills updated to match CV --}}
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
                @endforelse
            </div>
        </div>
        
        <div class="experience-section">
            <h2>🎓 Experience & Education</h2>
            <div class="experience-grid">
                @forelse($experiences as $experience)
                    <div class="experience-item">
                        <h3>{{ $experience->icon ?? '✅' }} {{ $experience->title }}</h3>
                        <p>{{ $experience->description }}</p>
                    </div>
                @empty
                    {{-- Experience from CV --}}
                    <div class="experience-item">
                        <h3>💼 Nexaaverse</h3>
                        <p><strong>UI/UX & Graphic Designer (Feb 2025 - Apr 2025)</strong><br>Designed UI for HR/CRM dashboards and created digital brand materials.</p>
                    </div>
                    <div class="experience-item">
                        <h3>💼 Accenture</h3>
                        <p><strong>UI/UX & Graphic Designer (Nov 2024 - Apr 2025)</strong><br>Designed product features, wireframes, and prototypes focusing on UX principles.</p>
                    </div>
                    
                    {{-- Education from CV --}}
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
                @endforelse
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
@endsection

@section('footer')
    <footer>
        <p>&copy; {{ date('Y') }} Md. Shadman Hasin. All rights reserved.</p>
    </footer>
@endsection

@push('scripts')
    <script src="{{ asset('js/about.js') }}"></script>
@endpush
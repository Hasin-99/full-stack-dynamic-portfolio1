@extends('layouts.app')

@section('title', 'Works - Md. Shadman Hasin')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/works.css') }}">
@endpush

@section('content')
    <section class="works-section">
        <h1>My Works</h1>
        <div class="works-grid">
            {{-- Use null coalesce operator to prevent errors if $projects is undefined --}}
            @forelse($projects ?? [] as $project)
                <div class="work-item">
                    <div class="work-image">
                        @if($project->image)
                            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px;">
                        @else
                            <div class="project-mockup mobile-app"></div>
                        @endif
                    </div>
                    <h3>{{ $project->icon ?? '📱' }} {{ $project->title }}</h3>
                    <p>{{ $project->description }}</p>
                    @if($project->tech_tags && is_array($project->tech_tags))
                        <div class="work-tech">
                            @foreach($project->tech_tags as $tag)
                                <span class="tech-tag">{{ $tag }}</span>
                            @endforeach
                        </div>
                    @endif
                    @if($project->project_url)
                        <a href="{{ $project->project_url }}" target="_blank" class="project-link">View Project →</a>
                    @endif
                </div>
            @empty
                {{-- STATIC FALLBACK CONTENT (Matches your CV) --}}
                
                {{-- Project 1: StudentMove --}}
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

                {{-- Project 2: PoS Restaurant System (Updated from CV) --}}
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

                {{-- Project 3: Placeholder/Previous Work --}}
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
            @endforelse
        </div>
    </section>
@endsection

@section('footer')
    <footer>
        <p>&copy; {{ date('Y') }} Md. Shadman Hasin. All rights reserved.</p>
    </footer>
@endsection

@push('scripts')
    <script src="{{ asset('js/works.js') }}"></script>
@endpush
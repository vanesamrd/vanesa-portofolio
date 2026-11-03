<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $profile['name'] }} · Portofolio Web, UI/UX & Machine Learning</title>
    <meta name="description" content="Portofolio resmi {{ $profile['name'] }} - Mahasiswi Informatika dengan spesialisasi Web Development (Laravel, PHP), UI/UX Design (Figma), dan Machine Learning.">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        mono: ['"JetBrains Mono"', 'monospace'],
                    },
                    colors: {
                        brand: {
                            50: '#fdf2f8',
                            100: '#fce7f3',
                            200: '#fbcfe8',
                            300: '#f9a8d4',
                            400: '#f472b6',
                            500: '#ec4899',
                            600: '#db2777',
                            700: '#be185d',
                            800: '#9d174d',
                            900: '#831843',
                        },
                        violet: {
                            500: '#8b5cf6',
                            600: '#7c3aed',
                            700: '#6d28d9',
                        }
                    },
                    animation: {
                        'marquee-left': 'marqueeLeft 35s linear infinite',
                        'marquee-right': 'marqueeRight 35s linear infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'float': 'float 6s ease-in-out infinite',
                    },
                    keyframes: {
                        marqueeLeft: {
                            '0%': { transform: 'translateX(0%)' },
                            '100%': { transform: 'translateX(-50%)' },
                        },
                        marqueeRight: {
                            '0%': { transform: 'translateX(-50%)' },
                            '100%': { transform: 'translateX(0%)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-12px)' },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        /* Smooth Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #0f172a;
        }
        ::-webkit-scrollbar-thumb {
            background: #334155;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #ec4899;
        }

        /* Marquee hover pause */
        .marquee-track:hover .marquee-content {
            animation-play-state: paused;
        }

        /* Glassmorphism helpers */
        .glass-card {
            background: rgba(15, 23, 42, 0.75);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }
        .glass-card:hover {
            border-color: rgba(236, 72, 153, 0.35);
        }
        .glow-effect {
            box-shadow: 0 0 35px -5px rgba(236, 72, 153, 0.25);
        }
        .glow-avatar {
            box-shadow: 0 0 45px -5px rgba(139, 92, 246, 0.4);
        }
    </style>
</head>
<body class="bg-[#0A0F1D] text-slate-100 font-sans antialiased selection:bg-pink-500 selection:text-white">

    <!-- Background Ambient Glow Orbs -->
    <div class="fixed inset-0 pointer-events-none overflow-hidden z-0">
        <div class="absolute -top-32 -left-32 w-96 h-96 bg-purple-600/15 rounded-full blur-3xl"></div>
        <div class="absolute top-1/3 -right-32 w-96 h-96 bg-pink-600/15 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-32 left-1/3 w-[500px] h-[500px] bg-blue-600/10 rounded-full blur-3xl"></div>
    </div>

    <!-- Navigation Bar -->
    <header class="sticky top-0 z-50 glass-card border-b border-slate-800/80 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo & Brand -->
                <a href="#hero" class="flex items-center gap-3 group">
                    <div class="w-11 h-11 rounded-xl bg-gradient-to-tr from-pink-500 via-purple-600 to-indigo-500 p-0.5 shadow-lg group-hover:scale-105 transition-transform duration-300">
                        <div class="w-full h-full bg-slate-900 rounded-[10px] flex items-center justify-center">
                            <span class="font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-pink-400 to-purple-400 text-lg tracking-wider">VP</span>
                        </div>
                    </div>
                    <div>
                        <span class="font-bold text-white text-lg tracking-tight group-hover:text-pink-400 transition-colors">Vanesa.dev</span>
                        <span class="block text-[11px] text-slate-400 font-mono leading-tight">Portofolio Kuliah</span>
                    </div>
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden md:flex items-center gap-8">
                    <a href="#about" class="text-sm font-medium text-slate-300 hover:text-pink-400 transition-colors">Tentang</a>
                    <a href="#skills" class="text-sm font-medium text-slate-300 hover:text-pink-400 transition-colors">Keahlian</a>
                    <a href="#running-skills" class="text-sm font-medium text-slate-300 hover:text-pink-400 transition-colors">Tech Stack</a>
                    <a href="#projects" class="text-sm font-medium text-slate-300 hover:text-pink-400 transition-colors">Portofolio Proyek</a>
                    <a href="#journey" class="text-sm font-medium text-slate-300 hover:text-pink-400 transition-colors">Pengalaman</a>
                    <a href="#contact" class="text-sm font-medium text-slate-300 hover:text-pink-400 transition-colors">Kontak</a>
                </nav>

                <!-- Social & CTA Buttons -->
                <div class="hidden lg:flex items-center gap-4">
                    <!-- GitHub -->
                    <a href="{{ $profile['socials']['github'] }}" target="_blank" rel="noopener noreferrer" title="GitHub Profile" class="p-2.5 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800 transition-all">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                    </a>
                    <!-- LinkedIn -->
                    <a href="{{ $profile['socials']['linkedin'] }}" target="_blank" rel="noopener noreferrer" title="LinkedIn Profile" class="p-2.5 rounded-lg text-slate-400 hover:text-blue-400 hover:bg-slate-800 transition-all">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>

                    <!-- Direct Contact CTA -->
                    <a href="#contact" class="inline-flex items-center gap-2 px-4 py-2 rounded-xl text-sm font-semibold text-white bg-gradient-to-r from-pink-500 to-purple-600 hover:from-pink-600 hover:to-purple-700 shadow-md hover:shadow-pink-500/25 transition-all duration-300">
                        <span>Hubungi Aku</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>

                <!-- Mobile Menu Toggle Button -->
                <button type="button" id="mobile-menu-btn" class="md:hidden p-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu" class="hidden md:hidden px-4 pt-2 pb-6 space-y-3 bg-slate-900/95 border-b border-slate-800">
            <a href="#about" class="block px-3 py-2 rounded-lg text-base font-medium text-slate-300 hover:text-pink-400 hover:bg-slate-800">Tentang</a>
            <a href="#skills" class="block px-3 py-2 rounded-lg text-base font-medium text-slate-300 hover:text-pink-400 hover:bg-slate-800">Keahlian</a>
            <a href="#running-skills" class="block px-3 py-2 rounded-lg text-base font-medium text-slate-300 hover:text-pink-400 hover:bg-slate-800">Tech Stack</a>
            <a href="#projects" class="block px-3 py-2 rounded-lg text-base font-medium text-slate-300 hover:text-pink-400 hover:bg-slate-800">Portofolio Proyek</a>
            <a href="#journey" class="block px-3 py-2 rounded-lg text-base font-medium text-slate-300 hover:text-pink-400 hover:bg-slate-800">Pengalaman</a>
            <a href="#contact" class="block px-3 py-2 rounded-lg text-base font-medium text-slate-300 hover:text-pink-400 hover:bg-slate-800">Kontak</a>
            <div class="pt-2 flex items-center gap-3">
                <a href="{{ $profile['socials']['github'] }}" target="_blank" class="p-2.5 rounded-lg bg-slate-800 text-slate-300">GitHub</a>
                <a href="{{ $profile['socials']['linkedin'] }}" target="_blank" class="p-2.5 rounded-lg bg-slate-800 text-blue-400">LinkedIn</a>
                <a href="#contact" class="flex-1 text-center py-2.5 rounded-xl bg-pink-500 font-semibold text-white">Hubungi Aku</a>
            </div>
        </div>
    </header>

    <main class="relative z-10">

        <!-- ============================================== -->
        <!-- HERO & PROFILE HEADER SECTION                 -->
        <!-- ============================================== -->
        <section id="hero" class="relative pt-16 pb-20 md:pt-24 md:pb-28 overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
                    
                    <!-- Left Column: Bio & Introduction -->
                    <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                        <!-- Status Badge -->
                        <div class="inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full bg-emerald-950/60 border border-emerald-500/30 text-emerald-400 text-xs font-semibold tracking-wide shadow-sm">
                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                            <span class="w-2 h-2 rounded-full bg-emerald-400 -ml-4"></span>
                            <span>{{ $profile['status'] }}</span>
                        </div>

                        <!-- Name & Title -->
                        <div class="space-y-3">
                            <h2 class="text-sm md:text-base font-mono font-medium text-pink-400 uppercase tracking-widest">
                                👋 Halo semua, perkenalkan aku
                            </h2>
                            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-white leading-tight">
                                <span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-slate-100 to-pink-200">{{ $profile['name'] }}</span>
                            </h1>
                            <p class="text-lg sm:text-xl font-medium text-transparent bg-clip-text bg-gradient-to-r from-pink-400 via-purple-300 to-indigo-400">
                                {{ $profile['role'] }}
                            </p>
                        </div>

                        <!-- Short Bio / Deskripsi Singkat -->
                        <p class="text-slate-300 text-base sm:text-lg leading-relaxed max-w-2xl mx-auto lg:mx-0">
                            {{ $profile['bio'] }}
                        </p>

                        <!-- Key Focus Badges -->
                        <div class="flex flex-wrap gap-2.5 justify-center lg:justify-start pt-1">
                            <span class="px-3.5 py-1.5 rounded-lg text-xs font-medium bg-slate-800/80 text-pink-300 border border-pink-500/20">
                                🛠️ Backend &amp; Fullstack (Laravel, Node.js, Express.js)
                            </span>
                            <span class="px-3.5 py-1.5 rounded-lg text-xs font-medium bg-slate-800/80 text-blue-300 border border-blue-500/20">
                                🗄️ Database (PostgreSQL, MySQL, DBeaver)
                            </span>
                            <span class="px-3.5 py-1.5 rounded-lg text-xs font-medium bg-slate-800/80 text-amber-300 border border-amber-500/20">
                                🧠 ML Regresi (Python &amp; Google Colab)
                            </span>
                            <span class="px-3.5 py-1.5 rounded-lg text-xs font-medium bg-slate-800/80 text-purple-300 border border-purple-500/20">
                                🎨 UI/UX Design (Figma Prototyping)
                            </span>
                        </div>

                        <!-- Action Buttons -->
                        <div class="pt-4 flex flex-wrap gap-4 justify-center lg:justify-start">
                            <a href="#projects" class="px-7 py-3.5 rounded-xl text-base font-semibold text-white bg-gradient-to-r from-pink-500 via-purple-600 to-indigo-600 hover:from-pink-600 hover:to-indigo-700 shadow-lg shadow-pink-500/25 hover:shadow-pink-500/40 hover:-translate-y-0.5 transition-all duration-300 flex items-center gap-2">
                                <span>Jelajahi Portofolioku</span>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </a>
                            <a href="#contact" class="px-6 py-3.5 rounded-xl text-base font-semibold text-slate-200 bg-slate-800/80 hover:bg-slate-700 hover:text-white border border-slate-700 hover:border-pink-500/50 hover:-translate-y-0.5 transition-all duration-300 flex items-center gap-2">
                                <span>Hubungi Aku</span>
                                <svg class="w-5 h-5 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                            </a>
                            <a href="#about" class="px-5 py-3.5 rounded-xl text-sm font-semibold text-slate-400 hover:text-white transition-colors flex items-center gap-1.5">
                                <span>Tentang Aku</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                        </div>

                        <!-- Social Connection Links Row -->
                        <div class="pt-3 flex items-center justify-center lg:justify-start gap-4 text-slate-400">
                            <span class="text-xs uppercase tracking-wider font-mono text-slate-500">Koneksi Cepat:</span>
                            <!-- GitHub -->
                            <a href="{{ $profile['socials']['github'] }}" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors flex items-center gap-1.5 text-sm" title="GitHub Profile">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                                <span>GitHub</span>
                            </a>
                            <!-- LinkedIn -->
                            <a href="{{ $profile['socials']['linkedin'] }}" target="_blank" rel="noopener noreferrer" class="hover:text-blue-400 transition-colors flex items-center gap-1.5 text-sm" title="LinkedIn Profile">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                <span>LinkedIn</span>
                            </a>
                            <!-- Email -->
                            <a href="mailto:{{ $profile['socials']['email'] }}" class="hover:text-pink-400 transition-colors flex items-center gap-1.5 text-sm" title="Email Vanesa">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                <span>Email</span>
                            </a>
                        </div>
                    </div>

                    <!-- Right Column: Profile Picture & Visual Cards -->
                    <div class="lg:col-span-5 flex justify-center">
                        <div class="relative w-72 sm:w-80 md:w-96 animate-float">
                            
                            <!-- Glowing background radial ring -->
                            <div class="absolute inset-0 rounded-full bg-gradient-to-tr from-pink-500 via-purple-600 to-cyan-400 blur-2xl opacity-40 scale-105"></div>
                            
                            <!-- Profile Picture Frame -->
                            <div class="relative rounded-3xl p-2 bg-gradient-to-tr from-pink-500 via-purple-600 to-indigo-500 shadow-2xl glow-avatar">
                                <div class="relative rounded-[22px] overflow-hidden bg-slate-900 border-2 border-slate-800 aspect-square">
                                    <img src="{{ asset($profile['avatar']) }}" alt="Foto Profil {{ $profile['name'] }}" class="w-full h-full object-cover">
                                    
                                    <!-- Bottom Gradient Overlay with Name Tag -->
                                    <div class="absolute inset-x-0 bottom-0 p-4 bg-gradient-to-t from-slate-950 via-slate-950/80 to-transparent">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h3 class="text-white font-bold text-base">{{ $profile['nickname'] }}</h3>
                                                <p class="text-xs text-pink-300 font-mono">JTI Polinema · WRI</p>
                                            </div>
                                            <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-semibold bg-pink-500/20 text-pink-300 border border-pink-500/30">
                                                Active Coder
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Floating Stat Badge 1 (Top Left): Framework Utama -->
                            <div class="absolute -top-5 -left-4 sm:-left-8 glass-card p-2.5 sm:p-3 rounded-2xl shadow-xl flex items-center gap-3 border border-slate-700/60 animate-bounce duration-1000 hidden sm:flex z-20">
                                <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-pink-500/20 text-pink-400 flex items-center justify-center font-bold text-base sm:text-lg shrink-0">
                                    🚀
                                </div>
                                <div>
                                    <p class="text-[9px] sm:text-[10px] font-mono text-slate-400 uppercase tracking-wider">Framework Utama</p>
                                    <p class="text-xs font-bold text-white whitespace-nowrap">Laravel · Node · Express</p>
                                </div>
                            </div>

                            <!-- Floating Stat Badge 2 (Bottom Right): UI/UX Design (Pindah ke pojok bawah agar wajah bebas) -->
                            <div class="absolute -bottom-5 -right-4 sm:-right-8 glass-card p-2.5 sm:p-3 rounded-2xl shadow-xl flex items-center gap-3 border border-slate-700/60 hidden sm:flex z-20">
                                <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-purple-500/20 text-purple-400 flex items-center justify-center font-bold text-base sm:text-lg shrink-0">
                                    🎨
                                </div>
                                <div>
                                    <p class="text-[9px] sm:text-[10px] font-mono text-slate-400 uppercase tracking-wider">UI/UX Design</p>
                                    <p class="text-xs font-bold text-white whitespace-nowrap">Figma · Prototype · Research</p>
                                </div>
                            </div>

                            <!-- Floating Stat Badge 3 (Bottom Left): Machine Learning / AI (Tanpa tulisan regresi) -->
                            <div class="absolute bottom-6 -left-6 sm:-left-10 glass-card p-2.5 sm:p-3 rounded-2xl shadow-xl flex items-center gap-2.5 sm:gap-3 border border-slate-700/60 hidden md:flex z-20">
                                <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-amber-500/20 text-amber-400 flex items-center justify-center font-bold text-base sm:text-lg shrink-0">
                                    🧠
                                </div>
                                <div>
                                    <p class="text-[9px] sm:text-[10px] font-mono text-slate-400 uppercase tracking-wider">Machine Learning / AI</p>
                                    <p class="text-xs font-bold text-amber-300 whitespace-nowrap">Python · Google Colab</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Stats Summary Row -->
                <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6">
                    @foreach($profile['stats'] as $stat)
                        <div class="glass-card p-5 sm:p-6 rounded-2xl border border-slate-800 text-center hover:border-pink-500/40 transition-all duration-300">
                            <p class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-pink-400 to-purple-400 mb-1">
                                {{ $stat['value'] }}
                            </p>
                            <p class="text-xs sm:text-sm font-medium text-slate-400">
                                {{ $stat['label'] }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


        <!-- ============================================== -->
        <!-- RUNNING TECH STACK LOGOS (Skill yang Berjalan) -->
        <!-- ============================================== -->
        <section id="running-skills" class="py-12 bg-slate-950/80 border-y border-slate-800/80 relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-8 text-center">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-purple-500/10 border border-purple-500/20 text-purple-300 text-xs font-mono uppercase tracking-wider mb-2">
                    <span>⚡ Animated Tech Stream</span>
                </div>
                <h3 class="text-xl sm:text-2xl font-bold text-white tracking-tight">
                    Skill &amp; Alat yang Sering Digunakan
                </h3>
                <p class="text-sm text-slate-400 mt-1">
                    (Hover atau arahkan mouse ke kartu untuk menghentikan putaran)
                </p>
            </div>

            <!-- Gradient Mask Overlays (Left & Right Fade) -->
            <div class="absolute inset-y-0 left-0 w-24 sm:w-40 bg-gradient-to-r from-[#0A0F1D] to-transparent z-10 pointer-events-none"></div>
            <div class="absolute inset-y-0 right-0 w-24 sm:w-40 bg-gradient-to-l from-[#0A0F1D] to-transparent z-10 pointer-events-none"></div>

            <!-- Row 1: Marquee Left -->
            <div class="marquee-track flex overflow-hidden select-none py-2">
                <div class="marquee-content flex gap-5 shrink-0 animate-marquee-left">
                    @for($i = 0; $i < 2; $i++)
                        @foreach($runningSkills as $skill)
                            <div class="flex items-center gap-3 px-5 py-3 rounded-2xl glass-card border border-slate-800 hover:border-pink-500/50 hover:bg-slate-800/90 transition-all duration-300 cursor-pointer shadow-md group">
                                <div class="w-8 h-8 flex items-center justify-center transition-transform group-hover:scale-110">
                                    <svg class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor">
                                        {!! $skill['svg'] !!}
                                    </svg>
                                </div>
                                <span class="text-sm font-semibold text-slate-200 group-hover:text-white transition-colors whitespace-nowrap">
                                    {{ $skill['name'] }}
                                </span>
                            </div>
                        @endforeach
                    @endfor
                </div>
            </div>

            <!-- Row 2: Marquee Right (Reverse Direction) -->
            <div class="marquee-track flex overflow-hidden select-none py-2 mt-4">
                <div class="marquee-content flex gap-5 shrink-0 animate-marquee-right">
                    @for($i = 0; $i < 2; $i++)
                        @foreach(array_reverse($runningSkills) as $skill)
                            <div class="flex items-center gap-3 px-5 py-3 rounded-2xl glass-card border border-slate-800 hover:border-purple-500/50 hover:bg-slate-800/90 transition-all duration-300 cursor-pointer shadow-md group">
                                <div class="w-8 h-8 flex items-center justify-center transition-transform group-hover:scale-110">
                                    <svg class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor">
                                        {!! $skill['svg'] !!}
                                    </svg>
                                </div>
                                <span class="text-sm font-semibold text-slate-200 group-hover:text-white transition-colors whitespace-nowrap">
                                    {{ $skill['name'] }}
                                </span>
                            </div>
                        @endforeach
                    @endfor
                </div>
            </div>
        </section>


        <!-- ============================================== -->
        <!-- ABOUT ME SECTION (Detail Profil Mahasiswi)     -->
        <!-- ============================================== -->
        <section id="about" class="py-20 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    
                    <!-- Left: Graphic Card / Info -->
                    <div class="lg:col-span-5 space-y-6">
                        <div class="glass-card p-6 sm:p-8 rounded-3xl border border-slate-800 relative overflow-hidden">
                            <!-- Background gradient flare -->
                            <div class="absolute top-0 right-0 w-48 h-48 bg-pink-500/10 rounded-full blur-2xl"></div>

                            <h3 class="text-xl font-bold text-white mb-4 flex items-center gap-2">
                                <span class="text-pink-400">👩‍💻</span> Profil Mahasiswi
                            </h3>

                            <ul class="space-y-4 text-sm text-slate-300">
                                <li class="flex items-start justify-between pb-3 border-b border-slate-800">
                                    <span class="text-slate-400 font-mono">Nama Lengkap</span>
                                    <span class="font-semibold text-white text-right">{{ $profile['name'] }}</span>
                                </li>
                                <li class="flex items-start justify-between pb-3 border-b border-slate-800">
                                    <span class="text-slate-400 font-mono">Status</span>
                                    <span class="font-semibold text-pink-400 text-right">Mahasiswi Polinema (2024 - Sekarang)</span>
                                </li>
                                <li class="flex items-start justify-between pb-3 border-b border-slate-800">
                                    <span class="text-slate-400 font-mono">Organisasi</span>
                                    <span class="font-semibold text-white text-right">HRD Workshop Riset Informatika (WRI)</span>
                                </li>
                                <li class="flex items-start justify-between pb-3 border-b border-slate-800">
                                    <span class="text-slate-400 font-mono">Kompetisi</span>
                                    <span class="font-semibold text-purple-300 text-right">Finalis &amp; Lead Tim Intercomp JTI 2026</span>
                                </li>
                                <li class="flex items-start justify-between pb-3 border-b border-slate-800">
                                    <span class="text-slate-400 font-mono">Lokasi</span>
                                    <span class="font-semibold text-white text-right">{{ $profile['location'] }}</span>
                                </li>
                                <li class="flex items-start justify-between">
                                    <span class="text-slate-400 font-mono">Bahasa</span>
                                    <span class="font-semibold text-white text-right">Indonesia, Inggris</span>
                                </li>
                            </ul>

                            <div class="mt-6 pt-5 border-t border-slate-800/80 flex items-center justify-between">
                                <div class="text-xs text-slate-400">
                                    Tertarik berkolaborasi?
                                </div>
                                <a href="#contact" class="text-xs font-bold text-pink-400 hover:text-pink-300 flex items-center gap-1">
                                    Kirim Pesan &rarr;
                                </a>
                            </div>
                        </div>

                        <!-- Quick Quote / Manifesto -->
                        <div class="p-5 rounded-2xl bg-gradient-to-r from-purple-900/30 to-pink-900/30 border border-purple-500/20 text-slate-300 text-sm italic">
                            &ldquo;Bagi saya, kode yang baik tidak hanya berjalan tanpa eror, tetapi juga menghadirkan pengalaman pengguna (UX) yang menyenangkan dan memberi dampak nyata melalui analitik data.&rdquo;
                        </div>
                    </div>

                    <!-- Right: Story & Philosophy -->
                    <div class="lg:col-span-7 space-y-6">
                        <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-pink-500/10 border border-pink-500/20 text-pink-300 text-xs font-mono uppercase tracking-wider">
                            <span>Tentang Diriku</span>
                        </div>
                        <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight leading-tight">
                            Memadukan Logika Pemrograman Web dengan Estetika Desain &amp; Analitik Data
                        </h2>
                        
                        <div class="space-y-4 text-slate-300 text-base leading-relaxed">
                            <p>
                                Selama perjalanan perkuliahan di jurusan Informatika, saya menemukan passion terbesar saya di ranah <strong class="text-white">Backend Engineering &amp; Arsitektur Sistem</strong>, di mana logika proses bisnis, efisiensi database, dan kehandalan API menjadi fokus utama—meskipun saya juga siap dan terbiasa bekerja secara <span class="text-pink-400 font-semibold">Full-Stack</span>.
                            </p>
                            <p>
                                Dalam pengembangan <strong class="text-white">Backend &amp; Web</strong>, saya mengandalkan <span class="text-pink-400 font-semibold">Laravel (PHP)</span> serta ekosistem JavaScript <span class="text-emerald-400 font-semibold">Node.js &amp; Express.js</span> untuk membangun RESTful API yang scalable dan secure. Dalam pengelolaan data, saya menguasai <span class="text-blue-400 font-semibold">PostgreSQL</span> dan <span class="text-sky-400 font-semibold">MySQL</span>, serta menggunakan <span class="text-amber-400 font-semibold">DBeaver</span> sebagai GUI database utama untuk query visual dan mapping skema relasional.
                            </p>
                            <p>
                                Pada bidang <strong class="text-white">Machine Learning</strong>, saya berfokus pada pemodelan <strong class="text-amber-300">Regresi Prediktif</strong> (Linear Regression &amp; Random Forest Regressor). Seluruh pipeline pembersihan data dan pelatihan model saya kerjakan di cloud environment <span class="text-amber-400 font-semibold">Google Colab</span>, memanfaatkan library Python seperti Scikit-Learn dan Pandas untuk memprediksi volume penjualan dan kebutuhan stok.
                            </p>
                            <p>
                                Untuk melengkapi sisi teknis, saya juga mendalami <strong class="text-white">UI/UX Design</strong> di <span class="text-purple-400 font-semibold">Figma</span> untuk memastikan produk digital yang dibangun memiliki pengalaman pengguna yang intuitif, estetis, dan teruji kegunaannya.
                            </p>
                        </div>

                        <!-- 3 Pillars Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-2">
                            <div class="p-4 rounded-xl glass-card border border-slate-800">
                                <span class="text-2xl mb-2 block">🛠️</span>
                                <h4 class="font-bold text-white text-sm">Robust Backend &amp; APIs</h4>
                                <p class="text-xs text-slate-400 mt-1">Laravel &amp; Express.js arsitektur server aman dan cepat.</p>
                            </div>
                            <div class="p-4 rounded-xl glass-card border border-slate-800">
                                <span class="text-2xl mb-2 block">🗄️</span>
                                <h4 class="font-bold text-white text-sm">Database &amp; DBeaver</h4>
                                <p class="text-xs text-slate-400 mt-1">Skema relasional PostgreSQL &amp; MySQL teroptimasi.</p>
                            </div>
                            <div class="p-4 rounded-xl glass-card border border-slate-800">
                                <span class="text-2xl mb-2 block">📈</span>
                                <h4 class="font-bold text-white text-sm">Predictive ML Regresi</h4>
                                <p class="text-xs text-slate-400 mt-1">Pemodelan data di Google Colab dengan skor R² tinggi.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- ============================================== -->
        <!-- SKILLS & KEAHLIAN CATEGORIES SECTION           -->
        <!-- ============================================== -->
        <section id="skills" class="py-20 bg-slate-950/60 border-t border-slate-800/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-purple-500/10 border border-purple-500/20 text-purple-300 text-xs font-mono uppercase tracking-wider mb-3">
                        <span>Kompetensi &amp; Keahlian</span>
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Keahlian yang Saya Miliki
                    </h2>
                    <p class="text-slate-400 text-base mt-3">
                        Kombinasi keahlian teknis pemrograman web, desain antarmuka, eksplorasi machine learning, dan alur kolaborasi tim.
                    </p>
                </div>

                <!-- Skills Category Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @foreach($skillCategories as $cat)
                        <div class="glass-card p-6 sm:p-8 rounded-3xl border border-slate-800/90 hover:border-slate-700 transition-all duration-300">
                            <!-- Category Header -->
                            <div class="flex items-center gap-3.5 mb-4">
                                <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-pink-500/20 to-purple-600/20 border border-pink-500/30 flex items-center justify-center text-pink-400">
                                    @if($cat['icon'] == 'code')
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                                    @elseif($cat['icon'] == 'palette')
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4 5 5 0 015-5h4a5 5 0 015 5 4 4 0 01-4 4H7zM17 7a4 4 0 10-8 0 4 4 0 008 0zm0 0a4 4 0 014 4v1a2 2 0 01-2 2h-1"/></svg>
                                    @elseif($cat['icon'] == 'cpu')
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/></svg>
                                    @else
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                    @endif
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-white">{{ $cat['category'] }}</h3>
                                    <p class="text-xs text-slate-400">{{ $cat['description'] }}</p>
                                </div>
                            </div>

                            <!-- Skills List -->
                            <div class="space-y-4 mt-6">
                                @foreach($cat['skills'] as $skill)
                                    <div class="space-y-1.5">
                                        <div class="flex items-center justify-between text-sm">
                                            <span class="font-semibold text-slate-200">{{ $skill['name'] }}</span>
                                            <span class="font-mono text-xs font-medium text-pink-400">{{ $skill['level'] }}%</span>
                                        </div>
                                        <div class="w-full h-2 rounded-full bg-slate-800 overflow-hidden">
                                            <div class="h-full rounded-full bg-gradient-to-r from-pink-500 via-purple-500 to-indigo-500 transition-all duration-1000" style="width: {{ $skill['level'] }}%"></div>
                                        </div>
                                        <p class="text-[11px] text-slate-400">{{ $skill['desc'] }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


        <!-- ============================================== -->
        <!-- PORTOFOLIO PROYEK KULIAH (WEB, UI/UX, & 1 ML)  -->
        <!-- ============================================== -->
        <section id="projects" class="py-20 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <!-- Section Header -->
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-pink-500/10 border border-pink-500/20 text-pink-300 text-xs font-mono uppercase tracking-wider mb-3">
                        <span>Showcase Hasil Karya</span>
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Portofolio Proyek Selama Kuliah
                    </h2>
                    <p class="text-slate-400 text-base mt-3">
                        Kumpulan karya riil selama masa studi: aplikasi web fullstack, studi kasus perancangan UI/UX, dan 1 riset terapan Machine Learning.
                    </p>
                </div>

                <!-- Filter Tabs -->
                <div class="flex flex-wrap items-center justify-center gap-2.5 mb-14" id="portfolio-filters">
                    <button type="button" data-filter="all" class="filter-btn active px-5 py-2.5 rounded-xl text-sm font-semibold text-white bg-pink-500 shadow-lg shadow-pink-500/25 transition-all">
                        Semua Proyek ({{ count($projects) }})
                    </button>
                    <button type="button" data-filter="web-development" class="filter-btn px-5 py-2.5 rounded-xl text-sm font-semibold text-slate-300 bg-slate-900 border border-slate-800 hover:border-pink-500/50 hover:text-white transition-all">
                        💻 Web Development
                    </button>
                    <button type="button" data-filter="ui-ux" class="filter-btn px-5 py-2.5 rounded-xl text-sm font-semibold text-slate-300 bg-slate-900 border border-slate-800 hover:border-pink-500/50 hover:text-white transition-all">
                        🎨 UI/UX Design
                    </button>
                    <button type="button" data-filter="machine-learning" class="filter-btn px-5 py-2.5 rounded-xl text-sm font-semibold text-slate-300 bg-slate-900 border border-slate-800 hover:border-pink-500/50 hover:text-white transition-all">
                        🧠 Machine Learning (Featured)
                    </button>
                </div>


                <!-- Projects Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="projects-container">
                    
                    @foreach($projects as $project)
                        <div class="project-card glass-card rounded-3xl border border-slate-800 overflow-hidden flex flex-col group hover:-translate-y-1.5 transition-all duration-300 @if($project['category_slug'] == 'machine-learning') lg:col-span-2 border-purple-500/40 glow-effect @endif" data-category="{{ $project['category_slug'] }}">
                            
                            <!-- Project Image Mockup -->
                            <div class="relative aspect-video w-full overflow-hidden bg-slate-950 border-b border-slate-800/80">
                                <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                
                                <!-- Category Badge -->
                                <div class="absolute top-4 left-4 flex gap-2">
                                    <span class="px-3 py-1 rounded-full text-xs font-bold tracking-wide 
                                        @if($project['category_slug'] == 'machine-learning') bg-cyan-950/90 text-cyan-300 border border-cyan-500/40
                                        @elseif($project['category_slug'] == 'web-development') bg-pink-950/90 text-pink-300 border border-pink-500/40
                                        @else bg-purple-950/90 text-purple-300 border border-purple-500/40
                                        @endif">
                                        {{ $project['category'] }}
                                    </span>

                                    @if(isset($project['badge']))
                                        <span class="px-3 py-1 rounded-full text-xs font-bold bg-amber-950/90 text-amber-300 border border-amber-500/40 hidden sm:inline-block">
                                            ★ {{ $project['badge'] }}
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <!-- Content Body -->
                            <div class="p-6 sm:p-7 flex-1 flex flex-col justify-between space-y-5">
                                <div class="space-y-3">
                                    <h3 class="text-xl font-bold text-white group-hover:text-pink-400 transition-colors leading-snug">
                                        {{ $project['title'] }}
                                    </h3>
                                    <p class="text-slate-300 text-sm leading-relaxed">
                                        {{ $project['short_desc'] }}
                                    </p>

                                    <!-- Key Metrics Pills -->
                                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-2.5 pt-2">
                                        @foreach($project['metrics'] as $metric)
                                            <div class="px-3 py-2 rounded-xl bg-slate-900/90 border border-slate-800 text-center">
                                                <p class="text-[10px] text-slate-400 font-mono">{{ $metric['label'] }}</p>
                                                <p class="text-xs font-bold text-white">{{ $metric['value'] }}</p>
                                            </div>
                                        @endforeach
                                    </div>

                                    <!-- Tech Stack Badges -->
                                    <div class="flex flex-wrap gap-1.5 pt-2">
                                        @foreach($project['tags'] as $tag)
                                            <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-slate-800/80 text-slate-300 border border-slate-700/60">
                                                {{ $tag }}
                                            </span>
                                        @endforeach
                                    </div>
                                </div>

                                <!-- Action Buttons -->
                                <div class="pt-4 border-t border-slate-800/80 flex items-center justify-between gap-3">
                                    <!-- Detail Modal Trigger -->
                                    <button type="button" onclick="openProjectModal('{{ $project['id'] }}')" class="inline-flex items-center gap-1.5 text-sm font-semibold text-pink-400 hover:text-pink-300 transition-colors">
                                        <span>Lihat Detail Lengkap</span>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                    </button>

                                    <div class="flex items-center gap-2">
                                        @if(!empty($project['repo_link']))
                                            <a href="{{ $project['repo_link'] }}" target="_blank" rel="noopener noreferrer" class="p-2 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800 border border-transparent hover:border-slate-700 transition-all" title="Source Code">
                                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                                            </a>
                                        @endif
                                        @if(!empty($project['demo_link']))
                                            <a href="{{ $project['demo_link'] }}" target="_blank" rel="noopener noreferrer" class="p-2 rounded-xl text-slate-400 hover:text-pink-400 hover:bg-slate-800 border border-transparent hover:border-slate-700 transition-all" title="Live Preview / Prototype">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section>


        <!-- ============================================== -->
        <!-- COLLEGE & EXPERIENCE MILESTONES (Timeline)     -->
        <!-- ============================================== -->
        <section id="journey" class="py-20 bg-slate-950/70 border-t border-slate-800/80">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-2xl mx-auto mb-16">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-300 text-xs font-mono uppercase tracking-wider mb-3">
                        <span>Jejak Langkah</span>
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Riwayat &amp; Pengalaman Kuliah
                    </h2>
                    <p class="text-slate-400 text-base mt-3">
                        Perjalanan pembelajaran akademis, keasistenan laboratorium, riset machine learning, dan proyek independen.
                    </p>
                </div>

                <!-- Timeline List -->
                <div class="relative border-l-2 border-slate-800 ml-4 sm:ml-32 space-y-12">
                    @foreach($experiences as $exp)
                        <div class="relative pl-8 sm:pl-10 group">
                            <!-- Timeline Dot Indicator -->
                            <div class="absolute -left-[9px] top-1.5 w-4 h-4 rounded-full bg-slate-900 border-2 border-pink-500 group-hover:scale-125 group-hover:bg-pink-500 transition-all duration-300"></div>
                            
                            <!-- Date Label (Left aligned on desktop) -->
                            <div class="sm:absolute sm:-left-36 sm:top-1 text-xs font-mono font-semibold text-pink-400 uppercase tracking-wider mb-2 sm:mb-0">
                                {{ $exp['period'] }}
                            </div>

                            <!-- Card Content -->
                            <div class="glass-card p-6 rounded-2xl border border-slate-800/90 group-hover:border-slate-700 transition-all duration-300">
                                <h3 class="text-lg font-bold text-white group-hover:text-pink-400 transition-colors">
                                    {{ $exp['role'] }}
                                </h3>
                                <p class="text-xs font-medium text-purple-300 font-mono mt-0.5 mb-3">
                                    {{ $exp['institution'] }}
                                </p>
                                <p class="text-sm text-slate-300 leading-relaxed">
                                    {{ $exp['desc'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>


        <!-- ============================================== -->
        <!-- CONTACT & CONNECT SECTION                      -->
        <!-- ============================================== -->
        <section id="contact" class="py-24 relative">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-2xl mx-auto mb-14">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-pink-500/10 border border-pink-500/20 text-pink-300 text-xs font-mono uppercase tracking-wider mb-3">
                        <span>Ayo Terhubung</span>
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Hubungi Saya untuk Kolaborasi
                    </h2>
                    <p class="text-slate-400 text-base mt-3">
                        Punya tawaran proyek, magang, kolaborasi riset, atau ingin berdiskusi santai seputar Web Development, UI/UX, dan AI? Hubungi saya langsung melalui kontak berikut:
                    </p>
                </div>

                <!-- 3 Direct Channels Grid (Email, LinkedIn, GitHub) -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                    
                    <!-- Email Card -->
                    <a href="mailto:{{ $profile['socials']['email'] }}" class="glass-card p-6 sm:p-7 rounded-3xl border border-slate-800 hover:border-pink-500/60 hover:bg-slate-800/80 transition-all duration-300 group flex flex-col justify-between shadow-lg">
                        <div>
                            <div class="w-14 h-14 rounded-2xl bg-pink-500/20 text-pink-400 flex items-center justify-center shrink-0 group-hover:scale-110 group-hover:bg-pink-500 group-hover:text-white transition-all duration-300 mb-5">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <span class="text-xs font-mono uppercase tracking-wider text-slate-400 block mb-1">Email Resmi</span>
                            <h3 class="text-base font-bold text-white group-hover:text-pink-300 transition-colors break-all">
                                {{ $profile['socials']['email'] }}
                            </h3>
                            <p class="text-xs text-slate-400 mt-2 leading-relaxed">Saluran komunikasi utama untuk keperluan profesional, magang, dan akademik.</p>
                        </div>
                        <div class="pt-5 mt-4 border-t border-slate-800/80 flex items-center justify-between text-xs font-semibold text-pink-400 group-hover:text-pink-300">
                            <span>Kirim Email</span>
                            <span class="group-hover:translate-x-1 transition-transform">&rarr;</span>
                        </div>
                    </a>

                    <!-- LinkedIn Card -->
                    <a href="{{ $profile['socials']['linkedin'] }}" target="_blank" rel="noopener noreferrer" class="glass-card p-6 sm:p-7 rounded-3xl border border-slate-800 hover:border-blue-500/60 hover:bg-slate-800/80 transition-all duration-300 group flex flex-col justify-between shadow-lg">
                        <div>
                            <div class="w-14 h-14 rounded-2xl bg-blue-500/20 text-blue-400 flex items-center justify-center shrink-0 group-hover:scale-110 group-hover:bg-blue-500 group-hover:text-white transition-all duration-300 mb-5">
                                <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                            </div>
                            <span class="text-xs font-mono uppercase tracking-wider text-slate-400 block mb-1">LinkedIn Network</span>
                            <h3 class="text-base font-bold text-white group-hover:text-blue-300 transition-colors truncate">
                                vanesa-mardiana-putri06
                            </h3>
                            <p class="text-xs text-slate-400 mt-2 leading-relaxed">Terhubung secara profesional untuk kolaborasi dan relasi karir teknologi.</p>
                        </div>
                        <div class="pt-5 mt-4 border-t border-slate-800/80 flex items-center justify-between text-xs font-semibold text-blue-400 group-hover:text-blue-300">
                            <span>Buka LinkedIn</span>
                            <span class="group-hover:translate-x-1 transition-transform">&rarr;</span>
                        </div>
                    </a>

                    <!-- GitHub Card -->
                    <a href="{{ $profile['socials']['github'] }}" target="_blank" rel="noopener noreferrer" class="glass-card p-6 sm:p-7 rounded-3xl border border-slate-800 hover:border-purple-500/60 hover:bg-slate-800/80 transition-all duration-300 group flex flex-col justify-between shadow-lg">
                        <div>
                            <div class="w-14 h-14 rounded-2xl bg-purple-500/20 text-purple-400 flex items-center justify-center shrink-0 group-hover:scale-110 group-hover:bg-purple-500 group-hover:text-white transition-all duration-300 mb-5">
                                <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                            </div>
                            <span class="text-xs font-mono uppercase tracking-wider text-slate-400 block mb-1">GitHub Repository</span>
                            <h3 class="text-base font-bold text-white group-hover:text-purple-300 transition-colors truncate">
                                github.com/vanesamrd
                            </h3>
                            <p class="text-xs text-slate-400 mt-2 leading-relaxed">Eksplorasi kode proyek terbuka, bintang, dan riwayat repository.</p>
                        </div>
                        <div class="pt-5 mt-4 border-t border-slate-800/80 flex items-center justify-between text-xs font-semibold text-purple-400 group-hover:text-purple-300">
                            <span>Buka GitHub</span>
                            <span class="group-hover:translate-x-1 transition-transform">&rarr;</span>
                        </div>
                    </a>

                </div>

                <!-- Location & Status Badge -->
                <div class="mt-12 p-5 rounded-2xl glass-card border border-slate-800 text-center max-w-lg mx-auto flex flex-col sm:flex-row items-center justify-center gap-3 text-sm text-slate-300">
                    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-950/80 text-emerald-400 text-xs font-semibold border border-emerald-500/30 shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                        Status: Open for Remote
                    </span>
                    <span>📍 Malang, Indonesia · 100% Remote Ready</span>
                </div>

            </div>
        </section>

    </main>


    <!-- ============================================== -->
    <!-- FOOTER                                         -->
    <!-- ============================================== -->
    <footer class="border-t border-slate-800/80 bg-slate-950 py-12 relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 rounded-xl bg-gradient-to-tr from-pink-500 to-purple-600 p-0.5">
                    <div class="w-full h-full bg-slate-900 rounded-[10px] flex items-center justify-center font-bold text-xs text-pink-400">
                        VP
                    </div>
                </div>
                <div>
                    <p class="text-sm font-bold text-white">{{ $profile['name'] }}</p>
                    <p class="text-xs text-slate-400 font-mono">&copy; {{ date('Y') }} All Rights Reserved</p>
                </div>
            </div>

            <!-- Tech acknowledgement -->
            <p class="text-xs text-slate-500 font-mono text-center md:text-right">
                Built with <span class="text-red-400">Laravel 13</span>, <span class="text-cyan-400">Tailwind CSS</span> &amp; <span class="text-purple-400">Figma</span>.
            </p>
        </div>
    </footer>


    <!-- ============================================== -->
    <!-- PROJECT DETAIL MODAL DIALOG                    -->
    <!-- ============================================== -->
    <div id="project-modal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-slate-950/80 backdrop-blur-md p-4 sm:p-6 lg:p-8 flex items-center justify-center">
        <div class="glass-card max-w-3xl w-full rounded-3xl border border-slate-700 shadow-2xl overflow-hidden relative my-auto animate-float">
            <!-- Close Button -->
            <button type="button" onclick="closeProjectModal()" class="absolute top-5 right-5 z-20 w-9 h-9 rounded-full bg-slate-800/90 text-slate-300 hover:text-white hover:bg-slate-700 flex items-center justify-center transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>

            <!-- Modal Image Header -->
            <div class="aspect-video w-full bg-slate-950 relative overflow-hidden">
                <img id="modal-img" src="" alt="Project Preview" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent"></div>
            </div>

            <!-- Modal Content Body -->
            <div class="p-6 sm:p-8 space-y-6">
                <div>
                    <span id="modal-category" class="inline-block px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-pink-500/20 text-pink-300 border border-pink-500/30 mb-2"></span>
                    <h3 id="modal-title" class="text-2xl sm:text-3xl font-extrabold text-white"></h3>
                </div>

                <div class="space-y-4 text-slate-300 text-sm leading-relaxed">
                    <p id="modal-full-desc"></p>
                </div>

                <!-- Highlights Bullet List -->
                <div>
                    <h4 class="text-sm font-mono font-bold text-slate-200 uppercase tracking-wider mb-2.5">
                        Poin Kunci &amp; Temuan Proyek:
                    </h4>
                    <ul id="modal-highlights" class="space-y-2 text-xs sm:text-sm text-slate-300 list-disc list-inside"></ul>
                </div>

                <!-- Tags list -->
                <div id="modal-tags" class="flex flex-wrap gap-2 pt-2"></div>

                <!-- Modal Actions -->
                <div class="pt-4 border-t border-slate-800 flex items-center justify-end gap-3">
                    <button type="button" onclick="closeProjectModal()" class="px-5 py-2.5 rounded-xl text-sm font-semibold text-slate-300 hover:text-white bg-slate-800 hover:bg-slate-700 transition-colors">
                        Tutup
                    </button>
                    <a id="modal-repo-link" href="#" target="_blank" class="px-5 py-2.5 rounded-xl text-sm font-semibold text-white bg-pink-500 hover:bg-pink-600 transition-colors flex items-center gap-1.5">
                        <span>Buka Tautan</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- Client-Side Scripts (Filtering & Interactive Modals) -->
    <script>
        // Projects data passed safely to JavaScript
        const projectsData = @json($projects);

        // Mobile Menu Toggle
        const mobileBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        if (mobileBtn && mobileMenu) {
            mobileBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // Project Filter Functionality
        const filterButtons = document.querySelectorAll('#portfolio-filters .filter-btn');
        const projectCards = document.querySelectorAll('.project-card');

        filterButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active classes
                filterButtons.forEach(b => {
                    b.classList.remove('bg-pink-500', 'text-white', 'shadow-lg', 'shadow-pink-500/25');
                    b.classList.add('bg-slate-900', 'text-slate-300', 'border', 'border-slate-800');
                });

                // Set clicked button to active
                btn.classList.add('bg-pink-500', 'text-white', 'shadow-lg', 'shadow-pink-500/25');
                btn.classList.remove('bg-slate-900', 'text-slate-300', 'border-slate-800');

                const filter = btn.getAttribute('data-filter');

                projectCards.forEach(card => {
                    const cardCat = card.getAttribute('data-category');
                    if (filter === 'all' || cardCat === filter) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // Project Modal Dialog Functionality
        const modal = document.getElementById('project-modal');
        const modalImg = document.getElementById('modal-img');
        const modalCategory = document.getElementById('modal-category');
        const modalTitle = document.getElementById('modal-title');
        const modalFullDesc = document.getElementById('modal-full-desc');
        const modalHighlights = document.getElementById('modal-highlights');
        const modalTags = document.getElementById('modal-tags');
        const modalRepoLink = document.getElementById('modal-repo-link');

        function openProjectModal(projectId) {
            const project = projectsData.find(p => p.id === projectId);
            if (!project) return;

            modalImg.src = project.image;
            modalCategory.innerText = project.category;
            modalTitle.innerText = project.title;
            modalFullDesc.innerText = project.full_desc || project.short_desc;

            // Highlights
            modalHighlights.innerHTML = '';
            if (project.highlights && project.highlights.length > 0) {
                project.highlights.forEach(h => {
                    const li = document.createElement('li');
                    li.innerText = h;
                    modalHighlights.appendChild(li);
                });
            }

            // Tags
            modalTags.innerHTML = '';
            if (project.tags) {
                project.tags.forEach(t => {
                    const span = document.createElement('span');
                    span.className = 'px-3 py-1 rounded-lg text-xs font-mono bg-slate-800 text-pink-300 border border-slate-700';
                    span.innerText = t;
                    modalTags.appendChild(span);
                });
            }

            // Link
            const link = project.demo_link || project.repo_link || '#';
            modalRepoLink.href = link;
            if (link === '#') {
                modalRepoLink.style.display = 'none';
            } else {
                modalRepoLink.style.display = 'inline-flex';
            }

            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeProjectModal() {
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Close modal on escape key or clicking outside card
        window.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeProjectModal();
        });
        modal.addEventListener('click', (e) => {
            if (e.target === modal) closeProjectModal();
        });
    </script>
</body>
</html>

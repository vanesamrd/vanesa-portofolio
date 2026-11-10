import React, { useState } from 'react';
import { 
    Code, Cpu, Wrench, Palette, Mail, ExternalLink, Github,
    ArrowRight, CheckCircle2, Sparkles, Send, User, Award, BookOpen, 
    Layers, Terminal, Database, X, Menu, Phone, MapPin, Heart, FileText, Download
} from 'lucide-react';

export default function App() {
    const [mobileMenuOpen, setMobileMenuOpen] = useState(false);
    const [selectedCategory, setSelectedCategory] = useState('all');
    const [activeProjectModal, setActiveProjectModal] = useState<any | null>(null);

    const profile = {
        name: 'Vanesa Mardiana Putri',
        nickname: 'Vanesa',
        role: 'Backend-Focused Full-Stack Developer & UI/UX Designer',
        subtitle: 'Laravel · Node.js · Express.js · Java · Flutter · Firebase · Power BI · MySQL · PostgreSQL',
        bio: 'Halo! Aku Vanesa Mardiana Putri, mahasiswi Politeknik Negeri Malang (POLINEMA) yang berfokus pada Backend Engineering dan arsitektur sistem web (Laravel, Node.js, Express.js, Java), mobile app (Flutter), cloud & basis data (Firebase, MySQL, PostgreSQL), analitik data (Power BI, Google Colab ML), serta UI/UX Design di Figma. Aktif sebagai pengurus HRD di Workshop Riset Informatika (WRI) dan Finalis Team Lead kompetisi web development.',
        avatar: '/images/avatar-vanesa.svg',
        location: 'Indonesia',
        status: 'Tersedia untuk Magang, Freelance & Full-time Backend / Fullstack',
        stats: [
            { label: 'Proyek Selesai', value: '12+' },
            { label: 'Tahun Koding & Kuliah', value: '3+' },
            { label: 'Tech Stack & Tools', value: '20+' },
            { label: 'Model Akurasi R² / SUS', value: '91%+' },
        ],
        socials: {
            github: 'https://github.com/vanesamrd',
            linkedin: 'https://www.linkedin.com/in/vanesa-mardiana-putri06/',
            email: 'paneja436@gmail.com',
        }
    };

    const runningSkills = [
        { 
            name: 'Laravel', 
            color: '#FF2D20', 
            desc: 'MVC, Eloquent ORM, REST API',
            icon: (
                <svg className="w-6 h-6" viewBox="0 0 24 24" fill="none">
                    <path fill="#FF2D20" d="M12 2.5l8.5 4.9v9.8L12 22.1l-8.5-4.9V7.4L12 2.5zm0 2.3L5.5 8.5v7.2L12 19.4l6.5-3.7V8.5L12 4.8zm0 2.4l4.2 2.4v4.9L12 16.9l-4.2-2.4V9.6L12 7.2z"/>
                </svg>
            )
        },
        { 
            name: 'Node.js', 
            color: '#339933', 
            desc: 'Event-driven I/O, Async',
            icon: (
                <svg className="w-6 h-6" viewBox="0 0 24 24" fill="#339933">
                    <path d="M12 2l10 5.7v11.5L12 25l-10-5.8V7.7L12 2zm0 2.3L4 8.9v9.2l8 4.6 8-4.6V8.9l-8-4.6zm-1.5 5.5h3v7h-3v-7zm1.5-3.5a1.8 1.8 0 1 1 0 3.6 1.8 1.8 0 0 1 0-3.6z"/>
                </svg>
            )
        },
        { 
            name: 'Express.js', 
            color: '#111827', 
            desc: 'Modular routing, Middleware',
            icon: (
                <svg className="w-6 h-6" viewBox="0 0 24 24" fill="#111827">
                    <path d="M3 6h4l3 6-3 6H3l3.5-6L3 6zm8 0h3l5 7.5L24 6h-3l-3.5 5.2L14 6h-3v12h2.5v-7.8l3 4.8 3-4.8V18H21V6z"/>
                </svg>
            )
        },
        { 
            name: 'PHP', 
            color: '#777BB4', 
            desc: 'PHP 8.3 OOP & Artisan',
            icon: (
                <svg className="w-6 h-6" viewBox="0 0 24 24">
                    <ellipse cx="12" cy="12" rx="11" ry="7" fill="#777BB4"/>
                    <text x="12" y="14.5" fill="white" fontSize="7" fontWeight="bold" fontFamily="sans-serif" textAnchor="middle">PHP</text>
                </svg>
            )
        },
        { 
            name: 'PostgreSQL', 
            color: '#4169E1', 
            desc: 'Relational Schema & JSONB',
            icon: (
                <svg className="w-6 h-6" viewBox="0 0 24 24" fill="#336791">
                    <path d="M12 2C6.48 2 2 6.48 2 12c0 4.1 2.5 7.6 6.1 9.1-.1-.7-.1-1.6.2-2.3l1.3-4.4c-.3-.6-.5-1.4-.5-2.2 0-2.1 1.2-3.6 2.7-3.6 1.3 0 1.9 1 1.9 2.1 0 1.3-.8 3.2-1.3 5-.4 1.5.8 2.8 2.3 2.8 2.7 0 4.8-2.9 4.8-7 0-3.7-2.6-6.2-6.4-6.2-4.4 0-6.9 3.3-6.9 6.7 0 1.3.5 2.8 1.2 3.6.1.2.2.3.1.6l-.4 1.8c-.1.3-.3.4-.6.3-2.1-1-3.4-4-3.4-6.5C2.5 6.9 6.8 3.5 12.4 3.5c4.7 0 8.4 3.4 8.4 7.9 0 4.7-3 8.5-7.1 8.5-1.4 0-2.7-.7-3.2-1.6l-.9 3.3c-.3 1.2-1.1 2.6-1.7 3.5 1.3.4 2.7.6 4.1.6 5.5 0 10-4.5 10-10S17.5 2 12 2z"/>
                </svg>
            )
        },
        { 
            name: 'MySQL', 
            color: '#4479A1', 
            desc: 'Optimization & Migrations',
            icon: (
                <svg className="w-6 h-6" viewBox="0 0 24 24" fill="#00758F">
                    <path d="M12 3C7 3 3 5.2 3 8v8c0 2.8 4 5 9 5s9-2.2 9-5V8c0-2.8-4-5-9-5zm0 2c4.1 0 7 1.7 7 3s-2.9 3-7 3-7-1.7-7-3 2.9-3 7-3zm7 6.3c-.8.8-2.6 1.7-5.5 1.7-2.9 0-4.7-.9-5.5-1.7V11c1.4.9 3.6 1.5 5.5 1.5s4.1-.6 5.5-1.5v.3zm0 4c-.8.8-2.6 1.7-5.5 1.7-2.9 0-4.7-.9-5.5-1.7V15c1.4.9 3.6 1.5 5.5 1.5s4.1-.6 5.5-1.5v.3z"/>
                </svg>
            )
        },
        { 
            name: 'DBeaver', 
            color: '#8B5A2B', 
            desc: 'Database GUI & ERD',
            icon: (
                <svg className="w-6 h-6" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10" fill="#6B4423"/>
                    <path fill="#D2B48C" d="M8 9c0-1.5 1.5-3 4-3s4 1.5 4 3v3c0 3-1.8 5-4 5s-4-2-4-5V9z"/>
                    <circle cx="10" cy="10" r="1.2" fill="#222"/>
                    <circle cx="14" cy="10" r="1.2" fill="#222"/>
                    <rect x="11.2" y="12" width="1.6" height="2" rx="0.4" fill="#FFFFFF"/>
                </svg>
            )
        },
        { 
            name: 'Google Colab', 
            color: '#F9AB00', 
            desc: 'Cloud ML Notebooks',
            icon: (
                <svg className="w-6 h-6" viewBox="0 0 24 24">
                    <path fill="#F9AB00" d="M16.9 8.2c-1.5-1.4-3.5-2.2-5.7-2.2-4.4 0-8 3.6-8 8s3.6 8 8 8c2.2 0 4.2-.8 5.7-2.2l-2-2c-1 1-2.3 1.5-3.7 1.5-3 0-5.3-2.4-5.3-5.3s2.4-5.3 5.3-5.3c1.4 0 2.7.5 3.7 1.5l2-2z"/>
                    <path fill="#E37400" d="M12 9.5a4.5 4.5 0 1 0 0 9 4.5 4.5 0 0 0 0-9zm6.8-1.3l-2 2c1 1 1.5 2.3 1.5 3.8s-.5 2.8-1.5 3.8l2 2c1.5-1.5 2.2-3.5 2.2-5.8s-.7-4.3-2.2-5.8z"/>
                </svg>
            )
        },
        { 
            name: 'Python', 
            color: '#3776AB', 
            desc: 'Pandas, NumPy, Scikit-Learn',
            icon: (
                <svg className="w-6 h-6" viewBox="0 0 24 24">
                    <path fill="#3776AB" d="M11.9 2c-3.1 0-5 1.4-5 3.3v2.2h5.1V8H4.6C2.6 8 1 9.6 1 11.6c0 2.2 1.6 3.4 3.6 3.4h1.7v-2.2c0-1.8 1.6-3.3 3.4-3.3h5.2V7.1C14.9 3.9 13.3 2 11.9 2zm-1.8 1.6c.5 0 .9.4.9.9s-.4.9-.9.9-.9-.4-.9-.9.4-.9.9-.9z"/>
                    <path fill="#FFD43B" d="M12.1 22c3.1 0 5-1.4 5-3.3v-2.2h-5.1V16h7.4c2 0 3.6-1.6 3.6-3.6 0-2.2-1.6-3.4-3.6-3.4h-1.7v2.2c0 1.8-1.6 3.3-3.4 3.3H9.1v2.4c0 3.2 1.6 5.1 3 5.1zm1.8-1.6c-.5 0-.9-.4-.9-.9s.4-.9.9-.9.9.4.9.9-.4.9-.9.9z"/>
                </svg>
            )
        },
        { 
            name: 'JavaScript', 
            color: '#F7DF1E', 
            desc: 'ES6+ & DOM Manipulation',
            icon: (
                <svg className="w-6 h-6" viewBox="0 0 24 24">
                    <rect width="24" height="24" rx="4" fill="#F7DF1E"/>
                    <path d="M6 18.5c1 .6 2.2 1 3.4 1 2.3 0 3.7-1.1 3.7-3.2v-7.1H10.5v7c0 1.2-.7 1.8-1.8 1.8-.7 0-1.4-.3-1.8-.7l-.9 1.2zm8.5-.2c1.1.7 2.4 1.1 3.9 1.1 2.3 0 3.6-1.2 3.6-2.9 0-1.7-1.1-2.5-2.8-3.3-1.4-.7-2-1.1-2-1.8 0-.7.6-1.3 1.7-1.3 1 0 1.9.4 2.5.8l.7-1.4c-.7-.5-1.8-.9-3.2-.9-2.3 0-3.6 1.3-3.6 2.9 0 1.7 1.1 2.6 2.8 3.3 1.4.6 2 1.1 2 1.9 0 .8-.8 1.4-2 1.4-1.2 0-2.3-.5-3.1-1.1l-.7 1.4z"/>
                </svg>
            )
        },
        { 
            name: 'Figma', 
            color: '#F24E1E', 
            desc: 'UI/UX & Prototyping',
            icon: (
                <svg className="w-6 h-6" viewBox="0 0 24 24">
                    <path fill="#F24E1E" d="M8 2h4v5H8z"/>
                    <path fill="#A259FF" d="M8 7h4v5H8z"/>
                    <path fill="#0ACF83" d="M8 12h4v5H8z"/>
                    <path fill="#FF7262" d="M12 2h4a3 3 0 0 1 0 6h-4V2z"/>
                    <circle fill="#1ABCFE" cx="14" cy="9.5" r="2.5"/>
                    <path fill="#0ACF83" d="M8 17a2.5 2.5 0 0 0 2.5 2.5c1.4 0 2.5-1.1 2.5-2.5V17H8z"/>
                </svg>
            )
        },
        { 
            name: 'Tailwind CSS', 
            color: '#06B6D4', 
            desc: 'Modern Utility Styling',
            icon: (
                <svg className="w-6 h-6" viewBox="0 0 24 24" fill="#06B6D4">
                    <path d="M12.001 4.8c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.9.2 1.5.9 2.2 1.6 1.1 1.2 2.5 2.6 5.6 2.6 3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.9-.2-1.5-.9-2.2-1.6-1.1-1.2-2.5-2.6-5.6-2.6zm-6 7.2c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.9.2 1.5.9 2.2 1.6 1.1 1.2 2.5 2.6 5.6 2.6 3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.9-.2-1.5-.9-2.2-1.6-1.1-1.2-2.5-2.6-5.6-2.6z"/>
                </svg>
            )
        },
        { 
            name: 'Git & GitHub', 
            color: '#F05032', 
            desc: 'Version Control & Workflow',
            icon: (
                <svg className="w-6 h-6" viewBox="0 0 24 24" fill="#F05032">
                    <path d="M21.6 11.2l-8.8-8.8c-.8-.8-2-.8-2.8 0L8.4 4c-.2.2-.4.5-.4.8 0 .3.2.6.4.8l2.6 2.6v4.6c-.6.3-1 .8-1.2 1.5-.4.1-.9.2-1.3.4l-2.6-2.6c.1-.3.2-.6.2-.9 0-1.1-.9-2-2-2s-2 .9-2 2 .9 2 2 2c.4 0 .7-.1 1-.3l2.5 2.5c-.3.7-.3 1.5 0 2.2.5 1.1 1.7 1.8 2.9 1.6.8-.2 1.5-.7 1.8-1.5h4.4c.4 1.1 1.5 1.9 2.8 1.8 1.5-.1 2.7-1.3 2.8-2.8.1-1.2-.6-2.4-1.7-2.8v-3.7l2.8-2.8c.8-.8.8-2 0-2.8z"/>
                </svg>
            )
        },
        { 
            name: 'Scikit-Learn', 
            color: '#F7931E', 
            desc: 'Machine Learning & Predictive',
            icon: (
                <svg className="w-6 h-6" viewBox="0 0 24 24">
                    <circle cx="7" cy="12" r="4.5" fill="#3499CD"/>
                    <circle cx="17" cy="12" r="4.5" fill="#F7931E"/>
                    <path d="M12 7.8c1.3 1.1 2 2.6 2 4.2s-.7 3.1-2 4.2c-1.3-1.1-2-2.6-2-4.2s.7-3.1 2-4.2z" fill="#2E7D32"/>
                </svg>
            )
        },
        { 
            name: 'Power BI', 
            color: '#F2C811', 
            desc: 'Business Intelligence & Dashboards',
            icon: (
                <svg className="w-6 h-6" viewBox="0 0 24 24" fill="none">
                    <rect x="2.5" y="13" width="4" height="8" rx="1.5" fill="#E6AD10" />
                    <rect x="7.8" y="9.5" width="4" height="11.5" rx="1.5" fill="#F2C811" />
                    <rect x="13.1" y="6" width="4" height="15" rx="1.5" fill="#F6D743" />
                    <rect x="18.4" y="2.5" width="4" height="18.5" rx="1.5" fill="#F3BF00" />
                </svg>
            )
        },
        { 
            name: 'Flutter', 
            color: '#02569B', 
            desc: 'Cross-Platform Mobile Apps',
            icon: (
                <svg className="w-6 h-6" viewBox="0 0 24 24">
                    <path fill="#40C4FF" d="M14.3 2.5L3.2 13.6l3.4 3.4L21.3 2.5H14.3z"/>
                    <path fill="#0288D1" d="M14.3 11.2l-5.3 5.3 5.3 5.3h7L16 16.5l5.3-5.3h-7z"/>
                    <path fill="#01579B" d="M9 16.5l5.3 5.3h7l-5.3-5.3H9z"/>
                </svg>
            )
        },
        { 
            name: 'Firebase', 
            color: '#FFCA28', 
            desc: 'Firestore, Auth & Realtime DB',
            icon: (
                <svg className="w-6 h-6" viewBox="0 0 24 24">
                    <path fill="#FFA000" d="M4.6 17.6L7.3 3.2c.1-.4.6-.6.9-.3l3.6 6.8L4.6 17.6z"/>
                    <path fill="#F57C00" d="M13.8 9.5l2.4-4.6c.2-.4.8-.4 1 0l3.8 12.7L13.8 9.5z"/>
                    <path fill="#FFCA28" d="M4.6 17.6l7.1 4c.2.1.4.1.6 0l8.7-4.9-3.4-11.4c-.2-.4-.8-.4-1 0l-2.4 4.6-2.4-4.6c-.2-.4-.8-.4-1 0L4.6 17.6z"/>
                </svg>
            )
        },
        { 
            name: 'Java', 
            color: '#E76F00', 
            desc: 'OOP, Backend & JVM Architecture',
            icon: (
                <svg className="w-6 h-6" viewBox="0 0 24 24" fill="none">
                    <path d="M4 19h13a2 2 0 0 0 2-2V9H3v8a2 2 0 0 0 1 2z" stroke="#5382A1" strokeWidth="2" strokeLinejoin="round"/>
                    <path d="M19 10h1.5a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5H19" stroke="#5382A1" strokeWidth="2" strokeLinecap="round"/>
                    <path d="M7 6c0-1.5 1.2-2 1.2-3M11 6c0-1.5 1.2-2 1.2-3M15 6c0-1.5 1.2-2 1.2-3" stroke="#E76F00" strokeWidth="1.8" strokeLinecap="round"/>
                    <path d="M2 21h18" stroke="#5382A1" strokeWidth="2" strokeLinecap="round"/>
                </svg>
            )
        },
        { 
            name: 'HTML5', 
            color: '#E34F26', 
            desc: 'Semantic Web, Accessibility & SEO',
            icon: (
                <svg className="w-6 h-6" viewBox="0 0 24 24">
                    <path fill="#E34F26" d="M4 2.5l1.6 17.5L12 22l6.4-2L20 2.5H4z"/>
                    <path fill="#EF652A" d="M12 4.2v16l4.9-1.5L18.4 4.2H12z"/>
                    <path fill="#EBEBEB" d="M12 8.3H7.8l.2 2.1h4v-2.1zm0 3.8H8.2l.2 2.1h3.6V12.1zm0 4.5l-2.3-.6-.2-1.2H7.6l.3 2.4 4.1 1.1V16.6z"/>
                    <path fill="#FFFFFF" d="M12 8.3v2.1h4l-.4 3.8-3.6 1v2.1l4.4-1.2.6-5.7H12v-2.1z"/>
                </svg>
            )
        },
        { 
            name: 'CSS3', 
            color: '#1572B6', 
            desc: 'Flexbox, Grid & Modern Styling',
            icon: (
                <svg className="w-6 h-6" viewBox="0 0 24 24">
                    <path fill="#1572B6" d="M4 2.5l1.6 17.5L12 22l6.4-2L20 2.5H4z"/>
                    <path fill="#33A9DC" d="M12 4.2v16l4.9-1.5L18.4 4.2H12z"/>
                    <path fill="#EBEBEB" d="M12 8.3H7.8l.5 5.7h3.7v-2.1H9.8l-.2-1.5h2.4V8.3zm0 6.6l-2.3-.6-.2-1.2H7.6l.3 2.4 4.1 1.1v-1.7z"/>
                    <path fill="#FFFFFF" d="M12 8.3v2.1h3.8l-.4 3.6-3.4 1v2.1l4.4-1.2.6-5.5h-5z"/>
                </svg>
            )
        },
        { 
            name: 'Excel', 
            color: '#107C41', 
            desc: 'Spreadsheet, Formulas & Pivot Tables',
            icon: (
                <svg className="w-6 h-6" viewBox="0 0 24 24" fill="none">
                    <path d="M14 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V10l-7-7z" fill="#107C41"/>
                    <path d="M14 3v7h7l-7-7z" fill="#33C481"/>
                    <rect x="2" y="7" width="10" height="10" rx="1.5" fill="#0E6B37" stroke="#33C481" strokeWidth="0.5"/>
                    <path d="M4.6 9.8l1.7 2.2-1.7 2.2h1.4l1-1.4 1 1.4h1.4l-1.7-2.2 1.7-2.2H9.3L8 11.2l-1.3-1.4H4.6z" fill="#FFFFFF"/>
                </svg>
            )
        },
    ];

    const skillCategories = [
        {
            category: 'Backend & Full-Stack Development',
            icon: <Code className="w-6 h-6 text-pink-500" />,
            description: 'Membangun arsitektur server, RESTful API, otentikasi aman, dan logika backend yang tangguh.',
            skills: [
                { name: 'Laravel (PHP 8+)', level: 92, desc: 'MVC architecture, Eloquent ORM, REST API, Middleware, Service Providers' },
                { name: 'Java (OOP & Core)', level: 88, desc: 'Object-Oriented Programming, MVC, clean code structure, and enterprise logic' },
                { name: 'Node.js & Express.js', level: 88, desc: 'Asynchronous event-driven I/O, modular routing, middleware pipeline, JWT' },
                { name: 'Flutter & Dart Mobile', level: 86, desc: 'Cross-platform Android & iOS development, widget architecture, state management' },
                { name: 'HTML5 & CSS3 Modern', level: 94, desc: 'Semantic markup, accessible structure, responsive UI, Flexbox, Grid layout' },
                { name: 'RESTful API Engineering', level: 90, desc: 'API design, JSON payload validation, status codes, CORS, Postman testing' },
            ],
        },
        {
            category: 'Database Management & Cloud',
            icon: <Database className="w-6 h-6 text-violet-500" />,
            description: 'Perancangan skema relasional, optimasi query, manajemen transaksi data, dan cloud databases.',
            skills: [
                { name: 'PostgreSQL', level: 88, desc: 'Relational schemas, foreign keys, complex joins, indexing, and JSONB fields' },
                { name: 'MySQL Database', level: 90, desc: 'Database migrations, indexing, query optimization, normalization' },
                { name: 'Firebase (Firestore & Auth)', level: 89, desc: 'NoSQL Cloud Firestore, real-time sync, Firebase Auth, security rules' },
                { name: 'DBeaver', level: 92, desc: 'Multi-database GUI client, ERD schema visualization, query builder, data export' },
            ],
        },
        {
            category: 'Machine Learning & Data Analytics',
            icon: <Cpu className="w-6 h-6 text-amber-500" />,
            description: 'Eksplorasi data, pemodelan prediktif berbasis Regresi, visualisasi analitik, dan spreadsheet data.',
            skills: [
                { name: 'Microsoft Excel (Advanced)', level: 93, desc: 'Data cleaning, pivot tables, VLOOKUP/XLOOKUP, formulas, data modeling' },
                { name: 'Power BI Analytics', level: 90, desc: 'Interactive business dashboards, DAX queries, data modeling, KPI tracking' },
                { name: 'Google Colab Environment', level: 94, desc: 'Cloud notebooks, GPU/CPU runtime, integration with Google Drive and dataset pipelines' },
                { name: 'Regression Algorithms', level: 89, desc: 'Linear Regression, Ridge/Lasso, Random Forest Regressor, Polynomial Regression' },
                { name: 'Python (Pandas, Scikit-Learn)', level: 88, desc: 'Data wrangling, cleaning missing values, outliers, feature scaling, model fitting' },
            ],
        },
        {
            category: 'UI/UX Design & Collaborative Tools',
            icon: <Palette className="w-6 h-6 text-rose-500" />,
            description: 'Merancang alur pengalaman pengguna dan berkolaborasi menggunakan perkakas modern.',
            skills: [
                { name: 'Figma & Prototyping', level: 90, desc: 'Interactive UI components, wireframing, high-fidelity prototypes, design tokens' },
                { name: 'Git & GitHub Workflow', level: 89, desc: 'Branching strategies, commits, pull requests, resolving conflicts' },
                { name: 'Postman API Testing', level: 91, desc: 'Endpoint validation, environment variables, automated collection testing' },
            ],
        },
    ];

    const projects = [
        {
            id: 'ml-bbm-regression',
            title: 'Analisis & Prediksi Efisiensi Bahan Bakar Kendaraan (BBM) Menggunakan Regresi & Uji Hipotesis',
            category: 'Machine Learning',
            category_slug: 'machine-learning',
            badge: 'Featured ML Regression & Hypothesis Testing',
            short_desc: 'Pemodelan Machine Learning & Analisis Statistika berbasis Regresi Sederhana & Berganda di Google Colab untuk menganalisis korelasi berat kendaraan terhadap konsumsi BBM dan menguji hipotesis kehematan bahan bakar.',
            full_desc: 'Mengembangkan analisis prediktif dan pengujian hipotesis efisiensi bahan bakar kendaraan (BBM) menggunakan Python di Google Colab. Berdasarkan data uji, Regresi Sederhana menghasilkan persamaan Y = 15.2408 + (-0.004775)X dengan koefisien korelasi r = -0.9746 (R² = 94.98%), membuktikan bahwa semakin berat kendaraan, semakin boros konsumsi BBM-nya. Regresi Berganda mencapai R² = 97.85% dengan MSE = 0.0759. Dilengkapi Uji Hipotesis 1 (Korelasi: H0 ditolak, berat berpengaruh terhadap BBM) dan Uji Hipotesis 2 (Rata-rata: H0 diterima, rata-rata BBM tidak berbeda signifikan dari 8.0 km/L).',
            image: '/assets/aistudio/Tangkapan_Layar_2026-11-09_pukul_19.00.19_c1abbb67.png',
            tags: ['Python', 'Google Colab', 'Scikit-Learn', 'Linear Regression', 'Multiple Regression', 'Hypothesis Testing', 'Pandas'],
            metrics: [
                { label: 'R² Score Sederhana', value: '94.98% (r = -0.9746)' },
                { label: 'R² Score Berganda', value: '97.85% (MSE 0.0759)' },
                { label: 'Uji Hipotesis', value: 'T-Distribusi Valid' },
                { label: 'Environment', value: 'Google Colab' },
            ],
            highlights: [
                'Analisis korelasi berat kendaraan vs konsumsi BBM dengan r = -0.9746 (korelasi negatif sangat kuat).',
                'Pemodelan Regresi Sederhana: Y = 15.2408 + (-0.004775)X dengan R² = 94.98%.',
                'Pemodelan Regresi Berganda: Y = -2.7249 + (-0.001106)X1 + (0.121055)X2 dengan R² = 97.85% & MSE = 0.0759.',
                'Pengujian Hipotesis 1 (Korelasi): H0 DITOLAK — berat kendaraan terbukti berpengaruh signifikan terhadap tingkat kehematan BBM.',
                'Pengujian Hipotesis 2 (Uji Rata-rata): H0 DITERIMA — rata-rata konsumsi BBM tidak berbeda signifikan dari 8.0 km/L.',
                'Visualisasi lengkap grafik korelasi berat vs BBM serta kurva Distribusi T - Uji Rata-rata BBM di Google Colab.',
            ],
            repo_link: 'https://github.com/vanesamrd',
            demo_link: 'https://colab.research.google.com',
            featured: true,
        },
        {
            id: 'web-ecocare-recycle',
            title: 'EcoCare - Platform Penjemputan Sampah Daur Ulang & Reward',
            category: 'Web Development',
            category_slug: 'web-development',
            badge: 'Laravel 12 & Node.js Telemetry',
            short_desc: 'Platform web bertema hijau emerald yang menghubungkan warga dengan Bank Sampah terdekat: booking penjemputan via peta Leaflet, tracking kurir real-time, dan dompet EcoPoints yang bisa ditukar jadi saldo E-Wallet & Token PLN.',
            full_desc: 'Platform web full-stack dengan UI hijau emerald & slate yang responsive (Tailwind CSS + Lucide icons). Fitur utama: autentikasi multi-role (Warga, Kurir, Admin) dengan 1-click demo login, Full CRUD jadwal penjemputan (filter status Pending/On The Way/Completed), master data mitra Bank Sampah, peta interaktif Leaflet + OpenStreetMap dengan perhitungan jarak Haversine (1-15 km), stepper tracking 7 tahap (Pending sampai Completed), microservice telemetri Node.js yang memancarkan GPS, kecepatan, dan daya baterai kurir, hingga dompet EcoPoints dengan katalog reward.',
            image: '/images/projects/project-web-ecocare.png',
            tags: ['Laravel 12', 'PHP 8.3', 'Node.js', 'MySQL', 'Leaflet.js', 'Tailwind CSS'],
            metrics: [
                { label: 'Level Akses', value: 'Warga · Kurir · Admin' },
                { label: 'Status Tracking', value: '7 Tahap Real-Time' },
                { label: 'Katalog Reward', value: '6 Jenis Penukaran' },
            ],
            highlights: [
                'Dashboard warga dengan wizard booking penjemputan, filter status, pencarian instan, dan modal detail.',
                'Peta interaktif Leaflet.js & OpenStreetMap: custom marker kapasitas Bank Sampah, perhitungan jarak Haversine.',
                'Stepper timeline penjemputan Pending ➔ Approved ➔ Courier Assigned ➔ On The Way ➔ Arrived ➔ Weighing ➔ Completed.',
                'Microservice telemetri Node.js memancarkan GPS, kecepatan (km/h), dan daya baterai motor listrik kurir.',
                'Dompet EcoPoints dengan mutasi kredit/debit serta penukaran instan ke saldo GoPay/DANA, Token Listrik PLN, dan pulsa.',
            ],
            repo_link: 'https://github.com/vanesamrd',
            demo_link: 'https://ecocare-three.vercel.app/#peta',
            featured: true,
        },
        {
            id: 'web-sigizi-stunting',
            title: 'SiGizi - Sistem Informasi Pemantauan Gizi & Stunting Balita',
            category: 'Web Development',
            category_slug: 'web-development',
            badge: 'Laravel 13, Livewire & AI Gemini',
            short_desc: 'Sistem kesehatan bertema teal untuk Posyandu, Puskesmas, dan Dinkes: pencatatan kunjungan balita, kalkulasi Z-Score BB/U & TB/U otomatis, grafik pertumbuhan, dan rekomendasi gizi dari Asisten AI.',
            full_desc: 'Aplikasi monitoring gizi & stunting dengan UI teal dan slate yang bersih, dibangun dengan Laravel 13 + Livewire. Memiliki 4 level akses: Ortu (login via NIK), Kader Posyandu, Puskesmas, dan Dinkes. Setiap kunjungan otomatis menghitung Z-Score BB/U dan TB/U dari standar KMS, lalu dianalisis oleh Asisten AI Gemini yang memberi rekomendasi gizi singkat.',
            image: '/images/projects/project-web-sigizi.png',
            tags: ['Laravel 13', 'Livewire', 'MySQL', 'Gemini API', 'DomPDF', 'Tailwind CSS'],
            metrics: [
                { label: 'Level Akses', value: 'Ortu · Posyandu · Puskesmas · Dinkes' },
                { label: 'Perhitungan Gizi', value: 'Z-Score BB/U & TB/U' },
                { label: 'Asisten AI', value: 'Gemini Flash' },
            ],
            highlights: [
                'Kalkulasi Z-Score BB/U dan TB/U otomatis di tiap kunjungan dengan formula standar KMS.',
                'Asisten AI SiGizi (Gemini) menganalisis riwayat pertumbuhan dan imunisasi menjadi rekomendasi gizi.',
                'Dashboard kader Posyandu: data anak, input kunjungan, grafik tumbuh, riwayat laporan, dan rujukan.',
                'Panel Puskesmas untuk monitoring dan cetak PDF rujukan menggunakan barryvdh/laravel-dompdf.',
            ],
            repo_link: 'https://github.com/vanesamrd/SiGizi-OLIVIA26',
            demo_link: 'https://sigizi-olivia.vercel.app',
            featured: false,
        },
        {
            id: 'web-coffeespot-discovery',
            title: 'CoffeSpot - Platform Rekomendasi & Discovery Cafe',
            category: 'Web Development',
            category_slug: 'web-development',
            badge: 'Laravel 10 · Map & Multi-language',
            short_desc: 'Platform discovery cafe berbasis lokasi: jelajah cafe populer & terdekat, pencarian dan filter rating, detail menu/fasilitas, ulasan dengan foto, favorit, serta dashboard owner dan admin.',
            full_desc: 'CoffeSpot adalah platform web rekomendasi dan penemuan cafe yang dibangun dengan Laravel 10, Blade, Tailwind CSS, dan Alpine.js. Menyediakan pencarian serta filter cafe (rating, popularitas, terbaru, terdekat), halaman detail cafe dengan galeri foto, jam operasional, peta Leaflet + OpenStreetMap, ulasan dan balasan owner, sistem favorit, multi-bahasa (Indonesia/English), serta tiga level peran: user, owner, dan admin. Owner dapat mengelola data cafe dan membalas ulasan, sedangkan admin memoderasi cafe, ulasan yang dilaporkan, dan pengguna. Dilengkapi autentikasi Breeze, verifikasi email, dan reset password via OTP email.',
            image: '/images/projects/project-web-coffeespot.svg',
            tags: ['Laravel 10', 'PHP 8.1', 'Tailwind CSS', 'Alpine.js', 'MySQL', 'Blade', 'Leaflet.js', 'OpenStreetMap'],
            metrics: [
                { label: 'Role Pengguna', value: 'User · Owner · Admin' },
                { label: 'Pencarian & Filter', value: 'Rating · Popular · Nearby' },
                { label: 'Peta Interaktif', value: 'Leaflet + OSM' },
                { label: 'Bahasa', value: 'Indonesia & English' },
            ],
            highlights: [
                'Discovery cafe dengan pencarian nama/lokasi serta filter rating, popularitas, terbaru, dan terdekat.',
                'Halaman detail cafe: galeri foto, jam operasional, alamat, peta Leaflet + OpenStreetMap, dan ulasan pengguna.',
                'Sistem ulasan dengan rating, foto, laporan ulasan, serta balasan resmi dari owner cafe.',
                'Dashboard owner untuk membuat/mengedit cafe, mengelola foto, dan membalas ulasan pelanggan.',
                'Panel admin untuk moderasi cafe, verifikasi approval, penanganan ulasan terlapor, dan manajemen pengguna.',
                'Autentikasi Breeze, verifikasi email, reset password via OTP email, dan dukungan multi-bahasa (ID/EN).',
            ],
            repo_link: 'https://github.com/vanesamrd/pbl-3',
            demo_link: null,
            featured: false,
        },
        {
            id: 'web-snapfit-wastra',
            title: 'SnapFit - Platform Kolaborasi UMKM & Desainer dengan AI & AR',
            category: 'Web Development',
            category_slug: 'web-development',
            badge: 'Laravel 13 · Vue 3 · Inertia',
            short_desc: 'Platform ekonomi kreatif yang menghubungkan UMKM wastra Nusantara dengan desainer: AI Product Studio, Web AR Virtual Try-On, Co-Create Room realtime, marketplace, dan pembayaran online.',
            full_desc: 'SnapFit adalah platform web untuk memberdayakan UMKM kreatif (batik, tenun, kerajinan) dengan menghubungkan mereka ke desainer profesional. Dibangun dengan Laravel 13, Vue 3 + Inertia.js, Tailwind CSS, dan MySQL. Fitur inovasi utamanya: AI Product Studio untuk menghasilkan foto produk studio dan variasi angle otomatis, Web AR Virtual Try-On untuk mencoba busana secara virtual langsung di browser, serta Realtime Co-Create Room untuk kolaborasi desain antara UMKM dan desainer. Dilengkapi marketplace, keranjang/wishlist, checkout via Midtrans, notifikasi, analitik, serta dashboard multi-role (UMKM, Desainer, Buyer, Admin). Autentikasi menggunakan Laravel Sanctum, Spatie Permission, dan Google OAuth 2.0. Proyek ini dikembangkan untuk kompetisi INTERCOMP 2026 JTI POLINEMA.',
            image: '/images/projects/project-web-snapfit.svg',
            tags: ['Laravel 13', 'Vue 3', 'Inertia.js', 'Tailwind CSS', 'MySQL', 'Midtrans', 'Sanctum', 'Google OAuth'],
            metrics: [
                { label: 'Role Pengguna', value: 'UMKM · Desainer · Buyer · Admin' },
                { label: 'Inovasi Inti', value: 'AI · AR · Co-Create' },
                { label: 'Pembayaran', value: 'Midtrans' },
                { label: 'Kompetisi', value: 'INTERCOMP 2026' },
            ],
            highlights: [
                'AI Product Studio: mengubah foto produk biasa menjadi foto studio profesional, variasi angle, dan caption marketing otomatis.',
                'Web AR Virtual Try-On: pembeli dapat mencoba busana secara virtual langsung dari browser/kamera HP tanpa install aplikasi.',
                'Realtime Co-Create Room: kolaborasi desain antara UMKM dan desainer, terinspirasi alur kerja Figma untuk produk fisik.',
                'Marketplace wastra Nusantara dengan keranjang, wishlist, checkout Midtrans, dan riwayat pesanan.',
                'Dashboard multi-role: UMKM (studio, produk, pesanan, analitik), Desainer (portofolio, kolaborasi), Buyer, dan Admin (moderasi & analitik global).',
                'Autentikasi Sanctum + Spatie Permission + Google OAuth 2.0 dengan UI premium bernuansa heritage Nusantara.',
            ],
            repo_link: 'https://github.com/Adidtiasmara/SnapFit',
            demo_link: null,
            featured: true,
        },

        {
            id: 'uiux-skinmate-app',
            title: 'SkinMate - AI-Powered Skincare Analysis & Management App',
            category: 'UI/UX Design',
            category_slug: 'ui-ux',
            badge: 'UI/UX Showcase & Case Study',
            short_desc: 'Aplikasi untuk mengenali jenis kulit melalui analisis wajah, menemukan rekomendasi skincare, dan menjaga rutinitas perawatan harian. Dilengkapi tampilan mobile app (8 layar) dan admin web (5 layar).',
            full_desc: 'SkinMate dirancang dengan pendekatan human-centered design untuk membantu pengguna mengenali jenis kulit (normal, kering, berminyak, sensitif) melalui fitur scan wajah bertenaga AI. Aplikasi ini menyediakan rekomendasi produk skincare yang tepat, pengingat rutinitas harian, riwayat analisis kulit, serta Admin Web Dashboard yang komprehensif untuk mengelola data produk, kategori jenis kulit, dan aturan rekomendasi.',
            image: '/assets/aistudio/SkinMate___Poster_showcase_UI_UX_d61b67cb.png',
            tags: ['Figma', 'UI/UX Design', 'Mobile App', 'Admin Dashboard', 'Skincare AI', 'Design System'],
            metrics: [
                { label: 'Layar Mobile App', value: '8 Layar Utama' },
                { label: 'Panel Admin Web', value: '5 Layar Manajemen' },
                { label: 'Fokus Solusi', value: 'Analisis Kulit & Rutinitas' },
            ],
            highlights: [
                'Mobile App: Splash screen, Login/Register, Home, Scan Wajah, Hasil Analisis, Reminder, History, dan Rekomendasi Skincare.',
                'Admin Web: Login Admin, Dashboard Alur Sistem & Insight, Kelola Data Skincare (CRUD produk), Data Jenis Kulit, dan Kelola Rekomendasi Rutinitas.',
                'Integrasi Mobile & Web: Menghubungkan analisis wajah berbasis machine learning dengan manajemen katalog produk skincare.',
                'Desain antarmuka yang bersih, intuitif, dan ramah pengguna untuk perawatan kulit harian.',
            ],
            repo_link: null,
            demo_link: null,
            featured: true,
        },
        {
            id: 'uiux-ruhi-bank-sampah',
            title: 'RuHi - Solusi Digital Bank Sampah RT/RW & Identifikasi Sampah AI',
            category: 'UI/UX Design',
            category_slug: 'ui-ux',
            badge: 'UI/UX Ecosystem Showcase',
            short_desc: 'Sistem otomasi pencatatan bank sampah, identifikasi jenis sampah dengan foto AI (akurasi 98.4%), dan manajemen poin warga dalam satu platform digital terintegrasi untuk RT/RW dan pengelola.',
            full_desc: 'RuHi adalah platform digital dan studi kasus UI/UX ekosistem bank sampah yang dirancang untuk memudahkan pengelola bank sampah RT/RW dan warga. Fitur utama meliputi: Identifikasi jenis sampah otomatis menggunakan kamera AI dengan akurasi tinggi, manajemen tabungan poin 24/7 yang dapat ditukar saldo e-wallet, otomasi pencatatan buku kas untuk pengelola, manajemen stok gudang, serta dashboard analitik untuk admin platform.',
            image: '/assets/aistudio/Html___Body__1__946564ca.png',
            tags: ['Figma', 'UI/UX Design', 'AI Waste Identifier', 'Ecosystem Dashboard', 'Mobile & Web UI'],
            metrics: [
                { label: 'Akurasi AI Sampah', value: '98.4%' },
                { label: 'Kategori Sampah', value: '50+ Kategori' },
                { label: 'Ekosistem Pengguna', value: 'Warga · Pengelola · Admin' },
            ],
            highlights: [
                'Fitur AI Waste Scanner: Identifikasi jenis sampah plastik (PET, HDPE, LDPE) hanya dengan foto instan.',
                'Portal Warga RT/RW: Pantau tabungan poin 24/7, edukasi pemilahan sampah, dan penukaran poin jadi saldo e-wallet.',
                'Dashboard Pengelola Bank Sampah: Otomasi pencatatan buku kas, manajemen stok gudang, dan laporan bulanan otomatis.',
                'Panel Admin Platform: Kontrol penuh seluruh unit, analitik data sampah wilayah, dan manajemen kemitraan vendor.',
            ],
            repo_link: null,
            demo_link: null,
            featured: true,
        },
        {
            id: 'uiux-siakad-polinema',
            title: 'Re-Design SIAKAD Polinema - Sistem Informasi Akademik',
            category: 'UI/UX Design',
            category_slug: 'ui-ux',
            badge: 'UI/UX Academic Redesign',
            short_desc: 'Redesain antarmuka SIAKAD Politeknik Negeri Malang (POLINEMA) untuk menata akses akademik dan mendekatkan informasi mahasiswa: dari beranda, perkuliahan, data diri, pembayaran UKT, hingga tingkat akhir.',
            full_desc: 'Redesain platform Sistem Informasi Akademik (SIAKAD) POLINEMA dengan tujuan penyegaran antarmuka, navigasi yang lebih terarah, dan kemudahan menemukan informasi akademik bagi mahasiswa. Mencakup 5 modul utama: Beranda (titik awal navigasi & info kampus), Perkuliahan (KRS, jadwal, LMS, nilai, IPK), Data & Identitas Mahasiswa (biodata, verifikasi, foto KTM, KTM virtual), Layanan Sepanjang Perjalanan Studi (Pembayaran UKT, pengajuan keringanan, magang, tugas akhir/skripsi, ijazah), serta Design System dengan palet warna khas POLINEMA dan tipografi Poppins & Rammetto One.',
            image: '/assets/aistudio/image_57fca1d2.png',
            tags: ['Figma', 'UI/UX Design', 'Academic System', 'Design System', 'Redesign', 'Student Portal'],
            metrics: [
                { label: 'Modul Utama', value: '5 Modul Akademik' },
                { label: 'Fokus Redesain', value: 'Navigasi & Akses Informasi' },
                { label: 'Institusi', value: 'Politeknik Negeri Malang' },
            ],
            highlights: [
                'Beranda sebagai titik awal: Ringkasan navigasi layanan, informasi kampus, dan kelengkapan mahasiswa.',
                'Perkuliahan & LMS: Pengelompokan KRS, presensi, nilai mahasiswa, dan ringkasan IPK per semester.',
                'Data & Identitas Mahasiswa: Akses biodata, verifikasi data, foto KTM, dan KTM virtual.',
                'Perjalanan Studi & Tingkat Akhir: Manajemen pembayaran UKT, pengajuan keringanan, magang, tugas akhir/skripsi, serta kuesioner.',
                'Design System: Palet warna utama POLINEMA (#407CAE) dengan tipografi Poppins & Rammetto One.',
            ],
            repo_link: null,
            demo_link: null,
            featured: true,
        },
    ];

    const experiences = [
        {
            period: '2026',
            role: 'Finalis & Lead Tim Web Development',
            institution: 'Intercomp JTI Politeknik Negeri Malang',
            desc: 'Memimpin tim pengembang hingga berhasil lolos ke babak Finalis dalam ajang kompetisi tahunan Intercomp Jurusan Teknologi Informasi (JTI) Polinema; mengarahkan arsitektur backend, integrasi RESTful API, dan perancangan prototipe produk digital.',
        },
        {
            period: '2025 - Sekarang',
            role: 'Human Resource Development (HRD)',
            institution: 'Workshop Riset Informatika (WRI) · Sub-Internal Division',
            desc: 'Bertanggung jawab dalam divisi HRD Sub-Internal komunitas Workshop Riset Informatika (WRI) Polinema; mengelola program bonding anggota, memfasilitasi pengembangan potensi dan soft skill anggota riset, serta menjaga keselarasan komunikasi internal organisasi.',
        },
        {
            period: '2024 - Sekarang',
            role: 'Mahasiswi Jurusan Teknologi Informasi',
            institution: 'Politeknik Negeri Malang (POLINEMA)',
            desc: 'Menempuh studi vokasi di Polinema dengan fokus mendalam pada rekayasa perangkat lunak, sistem backend (Laravel, Node.js, Express.js), basis data (MySQL, PostgreSQL, DBeaver), dan eksplorasi machine learning di Google Colab.',
        },
    ];

    const filteredProjects = selectedCategory === 'all' 
        ? projects 
        : projects.filter(p => p.category_slug === selectedCategory);



    return (
        <div className="min-h-screen bg-gradient-to-br from-pink-50 via-rose-50 to-violet-50 text-slate-700 relative overflow-x-hidden">
            
            {/* Ambient Background Glow Orbs */}
            <div className="fixed inset-0 pointer-events-none overflow-hidden z-0">
                <div className="absolute -top-32 -left-32 w-96 h-96 bg-violet-300/30 rounded-full blur-3xl animate-pulse-slow"></div>
                <div className="absolute top-1/3 -right-32 w-96 h-96 bg-rose-300/30 rounded-full blur-3xl animate-pulse-slow" style={{ animationDelay: '1s' }}></div>
                <div className="absolute -bottom-32 left-1/3 w-[500px] h-[500px] bg-pink-200/30 rounded-full blur-3xl animate-pulse-slow" style={{ animationDelay: '2s' }}></div>
            </div>

            {/* Navigation Bar */}
            <header className="sticky top-0 z-50 glass-card border-b border-rose-200/80 transition-all duration-300">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="flex items-center justify-between h-20">
                        {/* Logo & Brand */}
                        <a href="#hero" className="flex items-center gap-3 group">
                            <div className="w-11 h-11 rounded-xl bg-gradient-to-tr from-pink-400 via-rose-400 to-violet-400 p-0.5 shadow-lg group-hover:scale-105 transition-transform duration-300">
                                <div className="w-full h-full bg-white rounded-[10px] flex items-center justify-center">
                                    <span className="font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-rose-500 text-lg tracking-wider">VP</span>
                                </div>
                            </div>
                            <div>
                                <span className="font-bold text-slate-800 text-lg tracking-tight group-hover:text-rose-500 transition-colors">Vanesa.dev</span>
                                <span className="block text-[11px] text-slate-500 font-mono leading-tight">Portofolio Kuliah</span>
                            </div>
                        </a>

                        {/* Desktop Navigation Links */}
                        <nav className="hidden md:flex items-center gap-8">
                            <a href="#about" className="text-sm font-medium text-slate-600 hover:text-rose-500 transition-colors">Tentang</a>
                            <a href="#skills" className="text-sm font-medium text-slate-600 hover:text-rose-500 transition-colors">Keahlian</a>
                            <a href="#running-skills" className="text-sm font-medium text-slate-600 hover:text-rose-500 transition-colors">Tech Stack</a>
                            <a href="#projects" className="text-sm font-medium text-slate-600 hover:text-rose-500 transition-colors">Portofolio Proyek</a>
                            <a href="#journey" className="text-sm font-medium text-slate-600 hover:text-rose-500 transition-colors">Pengalaman</a>
                            <a href="#contact" className="text-sm font-medium text-slate-600 hover:text-rose-500 transition-colors">Kontak</a>
                        </nav>

                        {/* Social & CTA Buttons */}
                        <div className="hidden lg:flex items-center gap-3">
                            <a href={profile.socials.github} target="_blank" rel="noopener noreferrer" title="GitHub Profile" className="p-2.5 rounded-lg text-slate-500 hover:text-rose-600 hover:bg-rose-100 transition-all">
                                <svg className="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                            </a>
                            <a href={profile.socials.linkedin} target="_blank" rel="noopener noreferrer" title="LinkedIn Profile" className="p-2.5 rounded-lg text-slate-500 hover:text-blue-600 hover:bg-rose-100 transition-all">
                                <svg className="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                            </a>
                            <a href="#contact" className="inline-flex items-center gap-2 px-4 py-2 rounded-xl text-sm font-semibold text-white bg-gradient-to-r from-pink-400 to-rose-500 hover:from-rose-500 hover:to-rose-600 shadow-md hover:shadow-rose-400/25 transition-all duration-300">
                                <span>Hubungi Aku</span>
                                <ArrowRight className="w-4 h-4" />
                            </a>
                        </div>

                        {/* Mobile Menu Toggle Button */}
                        <button 
                            type="button" 
                            onClick={() => setMobileMenuOpen(!mobileMenuOpen)}
                            className="md:hidden p-2.5 rounded-xl text-slate-500 hover:text-rose-600 hover:bg-rose-100 transition-colors"
                        >
                            {mobileMenuOpen ? <X className="w-6 h-6" /> : <Menu className="w-6 h-6" />}
                        </button>
                    </div>
                </div>

                {/* Mobile Menu Dropdown */}
                {mobileMenuOpen && (
                    <div className="md:hidden px-4 pt-2 pb-6 space-y-3 bg-white/95 border-b border-rose-200">
                        <a href="#about" onClick={() => setMobileMenuOpen(false)} className="block px-3 py-2 rounded-lg text-base font-medium text-slate-600 hover:text-rose-500 hover:bg-rose-100">Tentang</a>
                        <a href="#skills" onClick={() => setMobileMenuOpen(false)} className="block px-3 py-2 rounded-lg text-base font-medium text-slate-600 hover:text-rose-500 hover:bg-rose-100">Keahlian</a>
                        <a href="#running-skills" onClick={() => setMobileMenuOpen(false)} className="block px-3 py-2 rounded-lg text-base font-medium text-slate-600 hover:text-rose-500 hover:bg-rose-100">Tech Stack</a>
                        <a href="#projects" onClick={() => setMobileMenuOpen(false)} className="block px-3 py-2 rounded-lg text-base font-medium text-slate-600 hover:text-rose-500 hover:bg-rose-100">Portofolio Proyek</a>
                        <a href="#journey" onClick={() => setMobileMenuOpen(false)} className="block px-3 py-2 rounded-lg text-base font-medium text-slate-600 hover:text-rose-500 hover:bg-rose-100">Pengalaman</a>
                        <a href="#contact" onClick={() => setMobileMenuOpen(false)} className="block px-3 py-2 rounded-lg text-base font-medium text-slate-600 hover:text-rose-500 hover:bg-rose-100">Kontak</a>
                    </div>
                )}
            </header>

            {/* Hero Section */}
            <section id="hero" className="relative z-10 pt-16 pb-24 md:pt-24 md:pb-32 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
                <div className="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    
                    {/* Left Intro Content */}
                    <div className="lg:col-span-7 space-y-6 text-center lg:text-left">
                        <div className="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-rose-100/80 border border-rose-200 text-rose-700 text-xs sm:text-sm font-semibold tracking-wide">
                            <Sparkles className="w-4 h-4 text-rose-500" />
                            <span>{profile.status}</span>
                        </div>

                        <h1 className="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight leading-tight">
                            Hai, saya <span className="text-transparent bg-clip-text bg-gradient-to-r from-pink-600 via-rose-500 to-violet-600">{profile.name}</span>
                        </h1>

                        <p className="text-lg sm:text-xl font-semibold text-slate-700 leading-relaxed" dangerouslySetInnerHTML={{ __html: profile.role }}></p>

                        <p className="text-slate-600 text-base sm:text-lg leading-relaxed max-w-2xl mx-auto lg:mx-0">
                            Mahasiswi <strong className="text-violet-700">Politeknik Negeri Malang (POLINEMA)</strong> yang berfokus pada arsitektur backend, manajemen database, dan eksplorasi Machine Learning prediktif.
                        </p>

                        {/* CTA Action Buttons */}
                        <div className="flex flex-wrap items-center justify-center lg:justify-start gap-4 pt-4">
                            <a href="#projects" className="px-6 py-3.5 rounded-xl font-bold text-white bg-gradient-to-r from-pink-500 via-rose-500 to-violet-600 hover:from-rose-600 hover:to-violet-700 shadow-lg shadow-rose-500/25 hover:shadow-xl transition-all duration-300 flex items-center gap-2">
                                <span>Jelajahi Proyek</span>
                                <ArrowRight className="w-5 h-5" />
                            </a>
                            <a href="#contact" className="px-6 py-3.5 rounded-xl font-bold text-slate-700 bg-white/80 hover:bg-white border border-rose-200 hover:border-rose-400 shadow-sm transition-all duration-300 flex items-center gap-2">
                                <Mail className="w-5 h-5 text-rose-500" />
                                <span>Hubungi Saya</span>
                            </a>
                        </div>

                        {/* Quick Stats Grid */}
                        <div className="grid grid-cols-2 sm:grid-cols-4 gap-4 pt-8 border-t border-rose-200/60">
                            {profile.stats.map((st, idx) => (
                                <div key={idx} className="glass-card p-4 rounded-2xl text-center">
                                    <div className="text-2xl sm:text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-pink-600 to-violet-600 font-display">
                                        {st.value}
                                    </div>
                                    <div className="text-xs text-slate-500 font-medium mt-1">{st.label}</div>
                                </div>
                            ))}
                        </div>
                    </div>

                    {/* Right Avatar & Card Visual */}
                    <div className="lg:col-span-5 flex justify-center relative">
                        <div className="relative w-72 h-72 sm:w-96 sm:h-96">
                            <div className="absolute inset-0 rounded-full bg-gradient-to-tr from-pink-400 via-violet-400 to-rose-300 opacity-40 blur-2xl animate-pulse"></div>
                            
                            <div className="relative w-full h-full rounded-3xl glass-card p-4 glow-avatar flex items-center justify-center overflow-hidden border-2 border-rose-200">
                                <img 
                                    src={profile.avatar} 
                                    alt={profile.name} 
                                    className="w-full h-full object-cover rounded-2xl animate-float"
                                />
                            </div>

                            {/* Floating Badge 1 */}
                            <div className="absolute -bottom-6 -left-6 glass-card px-4 py-3 rounded-2xl shadow-xl flex items-center gap-3 border border-rose-200 animate-bounce" style={{ animationDuration: '4s' }}>
                                <div className="w-10 h-10 rounded-xl bg-violet-100 flex items-center justify-center text-violet-600">
                                    <Code className="w-5 h-5" />
                                </div>
                                <div>
                                    <div className="text-xs text-slate-500 font-medium">Spesialisasi</div>
                                    <div className="text-sm font-bold text-slate-800">Backend & ML</div>
                                </div>
                            </div>

                            {/* Floating Badge 2 */}
                            <div className="absolute -top-6 -right-6 glass-card px-4 py-3 rounded-2xl shadow-xl flex items-center gap-3 border border-rose-200">
                                <div className="w-10 h-10 rounded-xl bg-rose-100 flex items-center justify-center text-rose-600">
                                    <Award className="w-5 h-5" />
                                </div>
                                <div>
                                    <div className="text-xs text-slate-500 font-medium">Kompetisi</div>
                                    <div className="text-sm font-bold text-slate-800">Finalis Intercomp</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            {/* Running Skills Marquee Section */}
            <section id="running-skills" className="py-12 bg-white/60 border-y border-rose-200/60 overflow-hidden relative">
                <div className="max-w-7xl mx-auto px-4 mb-6 text-center">
                    <span className="text-xs font-mono uppercase tracking-wider text-rose-500 font-bold">Tech Stack & Tools Keahlian</span>
                    <h2 className="text-2xl font-display font-bold text-slate-800 mt-1">Teknologi yang Dikuasai</h2>
                </div>

                <div className="relative w-full overflow-hidden marquee-track py-2">
                    <div className="flex w-max marquee-content animate-marquee-left gap-6">
                        {[...runningSkills, ...runningSkills].map((item, idx) => (
                            <div key={idx} className="glass-card px-4 py-3 rounded-2xl flex items-center gap-3.5 border border-rose-200 shadow-xs shrink-0 hover:scale-105 hover:border-rose-400 hover:shadow-md transition-all bg-white/85 group">
                                <div className="w-10 h-10 rounded-xl bg-white shadow-xs border border-rose-100 flex items-center justify-center p-2 shrink-0 group-hover:scale-110 transition-transform">
                                    {item.icon}
                                </div>
                                <div>
                                    <span className="font-bold text-slate-800 text-sm block leading-tight">{item.name}</span>
                                    <span className="text-[11px] text-slate-500 font-medium">{item.desc}</span>
                                </div>
                            </div>
                        ))}
                    </div>
                </div>
            </section>

            {/* About Section */}
            <section id="about" className="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
                <div className="glass-card rounded-3xl p-8 sm:p-12 border border-rose-200 shadow-xl relative overflow-hidden">
                    <div className="absolute -right-20 -bottom-20 w-80 h-80 bg-rose-300/20 rounded-full blur-3xl pointer-events-none"></div>

                    <div className="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                        <div className="lg:col-span-5 space-y-4">
                            <div className="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-violet-100 text-violet-700 text-xs font-semibold">
                                <User className="w-3.5 h-3.5" />
                                <span>Profil Singkat</span>
                            </div>
                            <h2 className="text-3xl sm:text-4xl font-display font-extrabold text-slate-900 tracking-tight">
                                Dedikasi di Dunia Rekayasa Perangkat Lunak & Riset
                            </h2>
                            <p className="text-slate-600 text-base leading-relaxed">
                                Sebagai mahasiswi Informatika di Polinema, Vanesa aktif mengasah kemampuan teknis di bidang backend engineering, basis data relasional, dan pemodelan prediktif machine learning.
                            </p>
                            <div className="pt-2 flex flex-wrap gap-3">
                                <div className="px-3.5 py-2 rounded-xl bg-rose-50 border border-rose-200 text-rose-700 text-xs font-bold">
                                    🎓 POLINEMA (Teknologi Informasi)
                                </div>
                                <div className="px-3.5 py-2 rounded-xl bg-violet-50 border border-violet-200 text-violet-700 text-xs font-bold">
                                    💼 HRD WRI (Workshop Riset Informatika)
                                </div>
                                <div className="px-3.5 py-2 rounded-xl bg-amber-50 border border-amber-200 text-amber-700 text-xs font-bold">
                                    🚀 Finalis Intercomp JTI 2026
                                </div>
                            </div>
                        </div>

                        <div className="lg:col-span-7">
                            <div className="glass-card p-6 sm:p-8 rounded-2xl bg-white/90 border border-rose-200 shadow-sm space-y-4">
                                <h3 className="text-xl font-display font-bold text-slate-800 flex items-center gap-2">
                                    <Sparkles className="w-5 h-5 text-rose-500" />
                                    <span>Filosofi & Pendekatan Pengembangan</span>
                                </h3>
                                <p className="text-slate-600 text-sm sm:text-base leading-relaxed" dangerouslySetInnerHTML={{ __html: profile.bio }}></p>
                                <div className="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-4 border-t border-rose-100">
                                    <div className="flex items-start gap-3">
                                        <div className="w-8 h-8 rounded-lg bg-pink-100 flex items-center justify-center text-pink-600 shrink-0 mt-0.5">
                                            <CheckCircle2 className="w-4 h-4" />
                                        </div>
                                        <div>
                                            <div className="text-sm font-bold text-slate-800">Backend Tangguh</div>
                                            <div className="text-xs text-slate-500">Arsitektur Laravel & Node.js yang aman dan terstruktur.</div>
                                        </div>
                                    </div>
                                    <div className="flex items-start gap-3">
                                        <div className="w-8 h-8 rounded-lg bg-violet-100 flex items-center justify-center text-violet-600 shrink-0 mt-0.5">
                                            <CheckCircle2 className="w-4 h-4" />
                                        </div>
                                        <div>
                                            <div className="text-sm font-bold text-slate-800">Machine Learning</div>
                                            <div className="text-xs text-slate-500">Prediksi akurat berbasis Regresi di Google Colab.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {/* Skills Categorized Section */}
            <section id="skills" className="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
                <div className="text-center max-w-3xl mx-auto mb-16 space-y-3">
                    <span className="text-xs font-mono uppercase tracking-wider text-rose-500 font-bold">Keahlian & Kompetensi</span>
                    <h2 className="text-3xl sm:text-4xl font-display font-extrabold text-slate-900">Bidang Keahlian Utama</h2>
                    <p className="text-slate-600 text-base">Kompetensi mendalam dari pengembangan server backend, manajemen database, hingga desain UI/UX.</p>
                </div>

                <div className="grid grid-cols-1 md:grid-cols-2 gap-8">
                    {skillCategories.map((cat, idx) => (
                        <div key={idx} className="glass-card rounded-3xl p-6 sm:p-8 border border-rose-200 shadow-lg hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
                            <div>
                                <div className="flex items-center gap-3 mb-4">
                                    <div className="p-3 rounded-2xl bg-white shadow-sm border border-rose-100">
                                        {cat.icon}
                                    </div>
                                    <div>
                                        <h3 className="text-xl font-display font-bold text-slate-800">{cat.category}</h3>
                                        <p className="text-xs text-slate-500 mt-0.5">{cat.description}</p>
                                    </div>
                                </div>

                                <div className="space-y-4 pt-4 border-t border-rose-100">
                                    {cat.skills.map((skill, sIdx) => (
                                        <div key={sIdx} className="space-y-1.5">
                                            <div className="flex justify-between items-center text-sm">
                                                <span className="font-bold text-slate-800">{skill.name}</span>
                                                <span className="text-xs font-mono font-bold text-rose-600">{skill.level}%</span>
                                            </div>
                                            <div className="w-full h-2 rounded-full bg-rose-100 overflow-hidden">
                                                <div 
                                                    className="h-full rounded-full bg-gradient-to-r from-pink-400 to-violet-500 transition-all duration-1000"
                                                    style={{ width: `${skill.level}%` }}
                                                ></div>
                                            </div>
                                            <div className="text-[11px] text-slate-500 leading-tight">{skill.desc}</div>
                                        </div>
                                    ))}
                                </div>
                            </div>
                        </div>
                    ))}
                </div>
            </section>

            {/* Projects Section */}
            <section id="projects" className="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
                <div className="text-center max-w-3xl mx-auto mb-12 space-y-3">
                    <span className="text-xs font-mono uppercase tracking-wider text-rose-500 font-bold">Portofolio Karya & Riset</span>
                    <h2 className="text-3xl sm:text-4xl font-display font-extrabold text-slate-900">Proyek Pilihan & Studi Kasus</h2>
                    <p className="text-slate-600 text-base">Eksplorasi aplikasi web full-stack, model machine learning regresi, dan desain antarmuka Figma.</p>
                </div>

                {/* Category Filter Tabs */}
                <div className="flex flex-wrap justify-center gap-3 mb-12">
                    {[
                        { slug: 'all', label: 'Semua Proyek (8)' },
                        { slug: 'machine-learning', label: 'Machine Learning (1)' },
                        { slug: 'web-development', label: 'Web Development (4)' },
                        { slug: 'ui-ux', label: 'UI/UX Design (3)' },
                    ].map(tab => (
                        <button
                            key={tab.slug}
                            onClick={() => setSelectedCategory(tab.slug)}
                            className={`px-5 py-2.5 rounded-xl text-sm font-semibold transition-all duration-300 ${
                                selectedCategory === tab.slug 
                                    ? 'bg-gradient-to-r from-pink-500 to-rose-500 text-white shadow-md shadow-rose-500/25' 
                                    : 'bg-white/80 hover:bg-white text-slate-600 border border-rose-200'
                            }`}
                        >
                            {tab.label}
                        </button>
                    ))}
                </div>

                {/* Projects Grid */}
                <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    {filteredProjects.map((project) => (
                        <div 
                            key={project.id}
                            className="glass-card rounded-3xl overflow-hidden border border-rose-200 shadow-lg hover:shadow-2xl transition-all duration-300 flex flex-col justify-between group"
                        >
                            <div>
                                <div className="relative h-48 sm:h-52 overflow-hidden bg-gradient-to-br from-pink-100 to-violet-100">
                                    <img 
                                        src={project.image} 
                                        alt={project.title} 
                                        className="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    />
                                    <div className="absolute top-3 left-3">
                                        <span className="px-3 py-1 rounded-full text-xs font-bold bg-white/90 backdrop-blur-md text-rose-600 shadow-sm border border-rose-200">
                                            {project.badge}
                                        </span>
                                    </div>
                                </div>

                                <div className="p-6 space-y-3">
                                    <h3 className="text-xl font-display font-bold text-slate-800 group-hover:text-rose-600 transition-colors">
                                        {project.title}
                                    </h3>
                                    <p className="text-slate-600 text-sm leading-relaxed line-clamp-3">
                                        {project.short_desc}
                                    </p>

                                    {/* Tags */}
                                    <div className="flex flex-wrap gap-1.5 pt-2">
                                        {project.tags.slice(0, 4).map((tag, tIdx) => (
                                            <span key={tIdx} className="px-2.5 py-1 rounded-md text-[11px] font-mono bg-rose-50 text-rose-700 border border-rose-200/60">
                                                {tag}
                                            </span>
                                        ))}
                                        {project.tags.length > 4 && (
                                            <span className="px-2 py-1 rounded-md text-[11px] font-mono bg-slate-100 text-slate-600">
                                                +{project.tags.length - 4}
                                            </span>
                                        )}
                                    </div>
                                </div>
                            </div>

                            <div className="p-6 pt-0 flex items-center justify-between border-t border-rose-100/60 mt-4">
                                <button
                                    onClick={() => setActiveProjectModal(project)}
                                    className="text-sm font-bold text-rose-600 hover:text-rose-700 flex items-center gap-1.5 group-hover:translate-x-1 transition-transform"
                                >
                                    <span>Lihat Detail Lengkap</span>
                                    <ArrowRight className="w-4 h-4" />
                                </button>
                                {project.demo_link && (
                                    <a 
                                        href={project.demo_link} 
                                        target="_blank" 
                                        rel="noopener noreferrer"
                                        title="Buka Demo"
                                        className="p-2 rounded-xl bg-rose-100 text-rose-600 hover:bg-rose-200 transition-colors"
                                    >
                                        <ExternalLink className="w-4 h-4" />
                                    </a>
                                )}
                            </div>
                        </div>
                    ))}
                </div>
            </section>

            {/* Journey & Experience Section */}
            <section id="journey" className="py-20 px-4 sm:px-6 lg:px-8 max-w-5xl mx-auto">
                <div className="text-center max-w-3xl mx-auto mb-16 space-y-3">
                    <span className="text-xs font-mono uppercase tracking-wider text-rose-500 font-bold">Jejak Studi & Organisasi</span>
                    <h2 className="text-3xl sm:text-4xl font-display font-extrabold text-slate-900">Pengalaman & Pencapaian</h2>
                    <p className="text-slate-600 text-base">Perjalanan akademik di Polinema, kepengurusan HRD di WRI, dan finalis kompetisi web.</p>
                </div>

                <div className="space-y-6">
                    {experiences.map((exp, idx) => (
                        <div key={idx} className="glass-card rounded-3xl p-6 sm:p-8 border border-rose-200 shadow-md relative overflow-hidden flex flex-col sm:flex-row gap-6 items-start">
                            <div className="px-4 py-2 rounded-xl bg-gradient-to-r from-pink-500 to-rose-500 text-white font-mono text-xs font-bold shadow-sm shrink-0">
                                {exp.period}
                            </div>
                            <div className="space-y-2">
                                <h3 className="text-xl font-display font-bold text-slate-800">{exp.role}</h3>
                                <div className="text-sm font-semibold text-rose-600">{exp.institution}</div>
                                <p className="text-slate-600 text-sm sm:text-base leading-relaxed">{exp.desc}</p>
                            </div>
                        </div>
                    ))}
                </div>
            </section>

            {/* Contact Section */}
            <section id="contact" className="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
                <div className="glass-card rounded-3xl p-8 sm:p-14 border border-rose-200 shadow-xl relative overflow-hidden">
                    <div className="absolute top-0 right-0 w-96 h-96 bg-violet-300/20 rounded-full blur-3xl pointer-events-none"></div>

                    <div className="max-w-3xl mx-auto text-center space-y-8 relative z-10">
                        <div className="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-rose-100 text-rose-700 text-xs sm:text-sm font-semibold">
                            <Mail className="w-4 h-4" />
                            <span>Hubungi Vanesa</span>
                        </div>

                        <div className="space-y-3">
                            <h2 className="text-3xl sm:text-4xl font-display font-extrabold text-slate-900 tracking-tight">
                                Mari Berkolaborasi dalam Proyek & Peluang Karir
                            </h2>
                            <p className="text-slate-600 text-base leading-relaxed max-w-2xl mx-auto">
                                Tertarik mendiskusikan peluang magang backend, proyek full-stack, konsultasi basis data, atau kolaborasi machine learning? Silakan hubungi langsung melalui email atau profil di bawah ini.
                            </p>
                        </div>

                        {/* Direct Contact Cards */}
                        <div className="grid grid-cols-1 sm:grid-cols-3 gap-5 pt-4">
                            {/* Email */}
                            <a 
                                href={`mailto:${profile.socials.email}`} 
                                className="glass-card p-6 rounded-2xl border border-rose-200/80 hover:border-rose-400 hover:scale-105 transition-all text-center flex flex-col items-center gap-3 group bg-white/90 shadow-sm hover:shadow-lg"
                            >
                                <div className="w-14 h-14 rounded-2xl bg-rose-100 flex items-center justify-center text-rose-600 shadow-sm group-hover:bg-rose-200 transition-colors">
                                    <Mail className="w-6 h-6" />
                                </div>
                                <div>
                                    <div className="text-xs text-slate-500 font-medium">Email Resmi</div>
                                    <div className="text-sm font-bold text-slate-800 group-hover:text-rose-600 transition-colors mt-0.5 break-all">
                                        {profile.socials.email}
                                    </div>
                                </div>
                            </a>

                            {/* LinkedIn */}
                            <a 
                                href={profile.socials.linkedin} 
                                target="_blank" 
                                rel="noopener noreferrer" 
                                className="glass-card p-6 rounded-2xl border border-rose-200/80 hover:border-violet-400 hover:scale-105 transition-all text-center flex flex-col items-center gap-3 group bg-white/90 shadow-sm hover:shadow-lg"
                            >
                                <div className="w-14 h-14 rounded-2xl bg-violet-100 flex items-center justify-center text-violet-600 shadow-sm group-hover:bg-violet-200 transition-colors">
                                    <svg className="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                </div>
                                <div>
                                    <div className="text-xs text-slate-500 font-medium">LinkedIn Profile</div>
                                    <div className="text-sm font-bold text-slate-800 group-hover:text-violet-600 transition-colors mt-0.5">
                                        Vanesa Mardiana Putri
                                    </div>
                                </div>
                            </a>

                            {/* GitHub */}
                            <a 
                                href={profile.socials.github} 
                                target="_blank" 
                                rel="noopener noreferrer" 
                                className="glass-card p-6 rounded-2xl border border-rose-200/80 hover:border-pink-400 hover:scale-105 transition-all text-center flex flex-col items-center gap-3 group bg-white/90 shadow-sm hover:shadow-lg"
                            >
                                <div className="w-14 h-14 rounded-2xl bg-pink-100 flex items-center justify-center text-pink-600 shadow-sm group-hover:bg-pink-200 transition-colors">
                                    <svg className="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                                </div>
                                <div>
                                    <div className="text-xs text-slate-500 font-medium">GitHub Repository</div>
                                    <div className="text-sm font-bold text-slate-800 group-hover:text-pink-600 transition-colors mt-0.5">
                                        github.com/vanesamrd
                                    </div>
                                </div>
                            </a>
                        </div>

                        {/* Direct Email Action Button */}
                        <div className="pt-2">
                            <a 
                                href={`mailto:${profile.socials.email}`} 
                                className="inline-flex items-center gap-2 px-8 py-3.5 rounded-xl font-bold text-white bg-gradient-to-r from-pink-500 via-rose-500 to-violet-600 hover:from-rose-600 hover:to-violet-700 shadow-lg shadow-rose-500/25 hover:shadow-xl hover:scale-105 transition-all duration-300"
                            >
                                <Mail className="w-5 h-5" />
                                <span>Kirim Email Langsung ke Vanesa</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            {/* Footer */}
            <footer className="py-12 bg-white/80 border-t border-rose-200 text-center text-slate-600 text-sm">
                <div className="max-w-7xl mx-auto px-4 space-y-4">
                    <div className="flex items-center justify-center gap-3">
                        <div className="w-9 h-9 rounded-xl bg-gradient-to-tr from-pink-400 via-rose-400 to-violet-400 p-0.5 shadow-md">
                            <div className="w-full h-full bg-white rounded-[10px] flex items-center justify-center">
                                <span className="font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-rose-500 text-sm">VP</span>
                            </div>
                        </div>
                        <span className="font-bold text-slate-800 text-base">Vanesa Mardiana Putri</span>
                    </div>
                    <p className="text-xs text-slate-500">
                        © 2026 Vanesa Mardiana Putri · Politeknik Negeri Malang (POLINEMA). All rights reserved.
                    </p>
                </div>
            </footer>

            {/* Project Detail Modal */}
            {activeProjectModal && (
                <div className="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-sm animate-fade-in">
                    <div className="bg-white rounded-3xl max-w-3xl w-full max-h-[90vh] overflow-y-auto shadow-2xl border border-rose-200 p-6 sm:p-8 space-y-6 relative">
                        <button 
                            onClick={() => setActiveProjectModal(null)}
                            className="absolute top-6 right-6 p-2 rounded-full bg-rose-100 text-rose-600 hover:bg-rose-200 transition-colors"
                        >
                            <X className="w-5 h-5" />
                        </button>

                        <div className="space-y-2">
                            <span className="px-3 py-1 rounded-full text-xs font-bold bg-rose-100 text-rose-700">
                                {activeProjectModal.category}
                            </span>
                            <h2 className="text-2xl sm:text-3xl font-display font-extrabold text-slate-900">
                                {activeProjectModal.title}
                            </h2>
                        </div>

                        <div className={`rounded-2xl overflow-hidden bg-slate-100 border border-rose-100 ${activeProjectModal.category_slug === 'ui-ux' ? 'max-h-[75vh] overflow-y-auto shadow-inner' : 'max-h-64'}`}>
                            <img 
                                src={activeProjectModal.image} 
                                alt={activeProjectModal.title} 
                                className={activeProjectModal.category_slug === 'ui-ux' ? 'w-full h-auto object-contain block' : 'w-full h-full object-cover'} 
                            />
                        </div>

                        {/* Metrics Grid */}
                        <div className="grid grid-cols-2 sm:grid-cols-4 gap-3">
                            {activeProjectModal.metrics.map((m: any, mIdx: number) => (
                                <div key={mIdx} className="p-3 rounded-2xl bg-rose-50/60 border border-rose-200/60 text-center">
                                    <div className="text-xs text-slate-500 font-medium">{m.label}</div>
                                    <div className="text-sm font-bold text-slate-800 mt-1">{m.value}</div>
                                </div>
                            ))}
                        </div>

                        <div className="space-y-3">
                            <h3 className="text-lg font-display font-bold text-slate-800">Deskripsi Proyek</h3>
                            <p className="text-slate-600 text-sm sm:text-base leading-relaxed">
                                {activeProjectModal.full_desc}
                            </p>
                        </div>

                        <div className="space-y-3">
                            <h3 className="text-lg font-display font-bold text-slate-800">Poin Utama & Implementasi</h3>
                            <ul className="space-y-2">
                                {activeProjectModal.highlights.map((h: string, hIdx: number) => (
                                    <li key={hIdx} className="flex items-start gap-2 text-sm text-slate-600">
                                        <CheckCircle2 className="w-4 h-4 text-rose-500 shrink-0 mt-0.5" />
                                        <span>{h}</span>
                                    </li>
                                ))}
                            </ul>
                        </div>

                        <div className="space-y-2">
                            <h3 className="text-sm font-bold text-slate-700 uppercase tracking-wider">Tech Stack</h3>
                            <div className="flex flex-wrap gap-2">
                                {activeProjectModal.tags.map((t: string, tIdx: number) => (
                                    <span key={tIdx} className="px-3 py-1 rounded-lg text-xs font-mono bg-violet-50 text-violet-700 border border-violet-200">
                                        {t}
                                    </span>
                                ))}
                            </div>
                        </div>

                        <div className="pt-4 border-t border-rose-200 flex flex-wrap gap-4 justify-end">
                            {activeProjectModal.repo_link && (
                                <a 
                                    href={activeProjectModal.repo_link} 
                                    target="_blank" 
                                    rel="noopener noreferrer"
                                    className="px-5 py-2.5 rounded-xl font-bold text-slate-700 bg-white hover:bg-rose-50 border border-rose-200 transition-colors flex items-center gap-2"
                                >
                                    <Github className="w-4 h-4" />
                                    <span>GitHub Repository</span>
                                </a>
                            )}
                            {activeProjectModal.category_slug !== 'ui-ux' && activeProjectModal.demo_link && (
                                <a 
                                    href={activeProjectModal.demo_link} 
                                    target="_blank" 
                                    rel="noopener noreferrer"
                                    className="px-6 py-2.5 rounded-xl font-bold text-white bg-gradient-to-r from-pink-500 to-rose-500 hover:from-rose-600 hover:to-rose-700 shadow-md transition-all flex items-center gap-2"
                                >
                                    <span>Buka Tautan Demo</span>
                                    <ExternalLink className="w-4 h-4" />
                                </a>
                            )}
                        </div>
                    </div>
                </div>
            )}

        </div>
    );
}

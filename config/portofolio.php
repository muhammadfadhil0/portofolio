<?php

return [
    'personal' => [
        'name' => 'Muhammad Fadhil',
        'title' => 'Developer Anthusiast',
        'about' => 'I\'m a passionate developer enthusiast who loves exploring web technologies. I specialize in building applications using Laravel, HTML, and JavaScript, and I’m deeply interested in the integration of AI in education. My goal is to create impactful, user-friendly tech solutions that make life and learning easier',
        'photo' => 'img/aku.jpg',
        'background_photo' => 'img/background.png',
        'email' => 'hello@dillion.io',
    ],

    'work_experience' => [
        [
            'title' => 'Fullstack Dev & IT Support',
            'company' => 'SMP & SMA Muhammadiyah Gatak',
            'logo' => 'img/smaga.png',
            'period' => 'Sep 2024 - Present',
            'description' => 'Leading frontend development for multiple web applications using React.js and Vue.js. Responsible for creating responsive, user-friendly interfaces and collaborating with design and backend teams.',
            'achievements' => [
                'Improved application performance by 40% through code optimization',
                'Implemented design system resulting in 60% faster development cycles',
                'Mentored 3 junior developers and conducted code reviews',
                'Successfully delivered 8+ projects on time and within budget'
            ],
            // 'link' => 'link-to-github.com/tech-innovation'
        ]
    ],

    'education' => [
        [
            'degree' => 'Bachelor of Islamic Education',
            'institution' => 'Universitas Muhammadiyah Surakarta',
            'logo' => 'img/ums.png',
            'period' => 'Aug 2020 - Jan 2024',
            'description' => 'Focused on web development and software engineering. Active in student organizations and participated in various programming competitions and hackathons.',
            'achievements' => [
                'GPA: 3.75/4.00 - Magna Cum Laude',
                '2nd Place in National Web Development Competition 2022',
                'President of Computer Science Student Association',
                'Teaching Assistant for Web Programming Course'
            ],
            'link' => 'https://ums.ac.id'
        ]
    ],

    'projects' => [
        [
            'title' => 'SMAGAEdu LMS',
            'description' => 'Custom LMS for SMP & SMA Muhammadiyah Gatak with digital learning, assessments. AI-powered using Groq AI.',
            // ukuran gambar 400x200 px
            'image' => 'img/smagaedu.png',
            'technologies' => ['PHP', 'Javascript', 'MySQL'],
            'link' => 'https://github.com/muhammadfadhil0/LMS',
            'live_demo' => 'https://lms-demo.zya.me/?i=1'
        ],
        [
            'title' => 'Absenku',
            'description' => 'Modern attendance web app for SMP Muhammadiyah with geolocation check-in, barcode scanning, selfie verification, and analytics dashboard. Features PWA support for mobile use.',
            'image' => 'img/absenku.png',
            'technologies' => ['PHP', 'Javascript', 'MySQL'],
            'link' => 'https://github.com/muhammadfadhil0/Absensi',
            'live_demo' => 'https://absensi-demo.iceiy.com/'
        ]
    ],

    'hobbies' => [
        [
            'title' => 'Weather App',
            'description' => 'React Native mobile application',
            'link' => '#',
            'icon' => 'fas fa-mobile-alt',
            'color' => 'blue'
        ],
        [
            'title' => 'Analytics Dashboard',
            'description' => 'Vue.js dashboard with D3.js charts',
            'link' => '#',
            'icon' => 'fas fa-chart-line',
            'color' => 'green'
        ]
    ],

    // 'social' => [
    //     'instagram' => 'https://instagram.com',
    //     'linkedin' => 'https://linkedin.com'
    // ],

    'navigation' => [
        [
            'platform_name' => 'Instagram',
            'platform_icon' => 'fab fa-instagram',
            'hover_color' => 'hover:text-pink-500',
            'link' => 'https://www.instagram.com/fadhil.manfa/'
        ],
        [
            'platform_name' => 'Linkedin',
            'platform_icon' => 'fab fa-linkedin',
            'hover_color' => 'hover:text-blue-500',
            'link' => 'https://www.linkedin.com/in/muhammad-fadhil-manfa/'
        ],
        [
            'platform_name' => 'GitHub',
            'platform_icon' => 'fab fa-github',
            'hover_color' => 'hover:text-gray-500',
            'link' => 'https://github.com'
        ],
        [
            'platform_name' => 'Gmail',
            'platform_icon' => 'fas fa-envelope',
            'hover_color' => 'hover:text-blue-400',
            'link' => 'mailto:izzanmaula0@gmail.com'
        ]
    ]
];

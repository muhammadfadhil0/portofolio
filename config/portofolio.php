<?php

return [
    'personal' => [
        'name' => 'Your Name',
        'title' => 'Your Job Title',
        'about' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum esse debitis minima inventore veritatis corrupti quod
dolores sit velit, excepturi, fugiat laudantium omnis mollitia necessitatibus commodi dolorem, eligendi odio amet?',
        'photo' => 'img/person.jpg',
        'background_photo' => 'img/background.png',
        'resume_link' => 'https://example.com/resume.pdf',
        'location' => 'Surakarta, Indonesia',
        'location_link' => 'https://www.google.com/maps/place/Your+Location',
    ],

    'work_experience' => [
        [
            'title' => 'Your Job Title',
            'company' => 'Your Company Name',
            // 'logo' => 'img/smaga.png',
            'period' => 'Sep 2024 - Present',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum esse debitis minima inventore veritatis corrupti quod
dolores sit velit, excepturi, fugiat laudantium omnis mollitia necessitatibus commodi dolorem, eligendi odio amet?',
            // 'achievements' => [
            //     'Improved application performance by 40% through code optimization',
            //     'Implemented design system resulting in 60% faster development cycles',
            //     'Mentored 3 junior developers and conducted code reviews',
            //     'Successfully delivered 8+ projects on time and within budget'
            // ],
            'link' => 'link-to-github.com/tech-innovation'
        ]
    ],

    'education' => [
        [
            'degree' => 'Your Degree',
            'institution' => 'Your Institution Name',
            // 'logo' => 'img/ums.png',
            'period' => 'Aug 2020 - Jan 2024',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum esse debitis minima inventore veritatis corrupti quod
dolores sit velit, excepturi, fugiat laudantium omnis mollitia necessitatibus commodi dolorem, eligendi odio amet?',
            // 'achievements' => [
            //     'GPA: 3.75/4.00 - Magna Cum Laude',
            //     '2nd Place in National Web Development Competition 2022',
            //     'President of Computer Science Student Association',
            //     'Teaching Assistant for Web Programming Course'
            // ],
            'link' => 'https://ums.ac.id'
        ]
    ],

    'projects' => [
        [
            'title' => 'Your Project Title',
            'description' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, cumque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, cumque?',
            // ukuran gambar 400x200 px
            // 'image' => 'img/smagaedu.png',
            'technologies' => ['PHP', 'Javascript', 'MySQL'],
            // 'link' => 'https://github.com/muhammadfadhil0/LMS',
            'live_demo' => 'https://lms-demo.zya.me/?i=1'
        ],
        [
            'title' => 'Your Project Title 2',
            'description' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, cumque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, cumque?',
            // 'image' => 'img/absenku.png',
            'technologies' => ['PHP', 'Javascript', 'MySQL'],
            'link' => '#',
            'live_demo' => '#'
        ]
    ],

    // 'hobbies' => [
    //     [
    //         'title' => 'Weather App',
    //         'description' => 'React Native mobile application',
    //         'link' => '#',
    //         'icon' => 'fas fa-mobile-alt',
    //         'color' => 'blue'
    //     ],
    //     [
    //         'title' => 'Analytics Dashboard',
    //         'description' => 'Vue.js dashboard with D3.js charts',
    //         'link' => '#',
    //         'icon' => 'fas fa-chart-line',
    //         'color' => 'green'
    //     ]
    // ],

    // 'social' => [
    //     'instagram' => 'https://instagram.com',
    //     'linkedin' => 'https://linkedin.com'
    // ],

    'navigation' => [
        [
            'platform_name' => 'Instagram',
            'platform_icon' => 'fab fa-instagram',
            'hover_color' => 'hover:text-pink-500',
            'link' => '#'
        ],
        [
            'platform_name' => 'Linkedin',
            'platform_icon' => 'fab fa-linkedin',
            'hover_color' => 'hover:text-blue-500',
            'link' => '#'
        ],
        [
            'platform_name' => 'GitHub',
            'platform_icon' => 'fab fa-github',
            'hover_color' => 'hover:text-gray-500',
            'link' => '#'
        ],
        [
            'platform_name' => 'Gmail',
            'platform_icon' => 'fas fa-envelope',
            'hover_color' => 'hover:text-blue-400',
            'link' => 'mailto:#'
        ]
    ]
];

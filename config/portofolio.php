<?php

/*|--------------------------------------------------------------------------
| Portofolio Configuration
| Ini adalah isi dari file konfigurasi portofoliomu, kamu bisa mengubah data ini
| sesuai dengan informasi yang ingin ditampilkan di portofolio.
|
| Pastikan untuk mengisi data yang diperlukan dan menghapus komentar dengan cara
| menghapus tanda // di depan baris yang ingin kamu aktifkan. Atau cara gampangnya dengan 
| ctrl + /. 
| Jika ada data yang tidak ingin ditampilkan, cukup hapus atau comment baris tersebut.
|--------------------------------------------------------------------------
*/

return [
    /*
    |--------------------------------------------------------------------------
    | Personal Information - Hero Section
    |--------------------------------------------------------------------------
    | Data yang digunakan untuk section hero/profil utama
    |--------------------------------------------------------------------------
    */
    'personal' => [
        'name' => 'Your Name',
        'title' => 'Your Job Title',
        'about' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum esse debitis minima inventore veritatis corrupti quod
dolores sit velit, excepturi, fugiat laudantium omnis mollitia necessitatibus commodi dolorem, eligendi odio amet?',

        /*
         * Profile Photo Settings
         * - Taruh gambar profil di folder public/img
         * - Ukuran gambar: 200x200 px
         * - Format: JPG/PNG
         */
        'photo' => 'img/person.jpg',

        /*
         * Background Photo Settings
         * - Taruh gambar background di folder public/img
         * - Format: JPG/PNG
         */
        'background_photo' => 'img/background.png',

        /*
         * Resume/CV Link
         * - Link ke resume atau CV (Google Drive, Dropbox, dll)
         * - Pastikan link dapat diakses publik
         * - Hapus jika tidak ada, tombol download akan disembunyikan
         */
        'resume_link' => 'https://example.com/resume.pdf',

        /*
         * Location Settings
         * - Hapus jika tidak diperlukan, tombol lokasi akan disembunyikan
         */
        'location' => 'Surakarta, Indonesia',
        'location_link' => 'https://www.google.com/maps/place/Your+Location',
    ],

    /*
    |--------------------------------------------------------------------------
    | Work Experience
    |--------------------------------------------------------------------------
    | Riwayat pengalaman kerja
    |--------------------------------------------------------------------------
    */
    'work_experience' => [
        [
            'title' => 'Your Job Title',
            'company' => 'Your Company Name',

            /*
             * Company Logo (Optional)
             * - Taruh logo perusahaan di folder public/img
             * - Ukuran: 100x100 px
             * - Uncomment baris di bawah untuk menampilkan logo
             * - Jika tidak ada logo, akan diganti dengan icon default
             */
            // 'logo' => 'img/smaga.png',

            'period' => 'Sep 2024 - Present',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum esse debitis minima inventore veritatis corrupti quod
dolores sit velit, excepturi, fugiat laudantium omnis mollitia necessitatibus commodi dolorem, eligendi odio amet?',

            /*
             * Achievements (Optional)
             * - Uncomment untuk menampilkan pencapaian
             */
            // 'achievements' => [
            //     'Improved application performance by 40% through code optimization',
            //     'Implemented design system resulting in 60% faster development cycles',
            //     'Mentored 3 junior developers and conducted code reviews',
            //     'Successfully delivered 8+ projects on time and within budget'
            // ],

            'link' => 'link-to-github.com/tech-innovation'
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Education
    |--------------------------------------------------------------------------
    | Riwayat pendidikan
    |--------------------------------------------------------------------------
    */
    'education' => [
        [
            'degree' => 'Your Degree',
            'institution' => 'Your Institution Name',

            /*
             * Institution Logo (Optional)
             * - Uncomment untuk menampilkan logo institusi
             */
            // 'logo' => 'img/ums.png',

            'period' => 'Aug 2020 - Jan 2024',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum esse debitis minima inventore veritatis corrupti quod
dolores sit velit, excepturi, fugiat laudantium omnis mollitia necessitatibus commodi dolorem, eligendi odio amet?',

            /*
             * Academic Achievements (Optional)
             * - Uncomment untuk menampilkan prestasi akademik
             */
            // 'achievements' => [
            //     'GPA: 3.75/4.00 - Magna Cum Laude',
            //     '2nd Place in National Web Development Competition 2022',
            //     'President of Computer Science Student Association',
            //     'Teaching Assistant for Web Programming Course'
            // ],

            'link' => 'https://ums.ac.id'
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Projects Portfolio
    |--------------------------------------------------------------------------
    | Daftar project yang akan ditampilkan
    |--------------------------------------------------------------------------

    */
    'projects' => [
        [
            'title' => 'Your Project Title',
            'description' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, cumque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, cumque?',

            /*
             * Project Image (Optional)
             * - Ukuran gambar: 400x200 px
             * - Uncomment untuk menampilkan gambar
             */
            // 'image' => 'img/smagaedu.png',

            'technologies' => ['PHP', 'Javascript', 'MySQL'],

            /*
             * Project Links (Optional)
             * - Uncomment sesuai kebutuhan
             */
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

    /*
    |--------------------------------------------------------------------------
    | Hobbies Section (Optional)
    |--------------------------------------------------------------------------
    | - Uncomment section ini untuk menampilkan hobi
    | - Gunakan untuk menampilkan aplikasi atau proyek pribadi
    | - Icon menggunakan Font Awesome, color sesuai keinginan
    |--------------------------------------------------------------------------

    */
    // 'hobbies' => [
    //     [
    //         'title' => 'Weather App',
    //         'description' => 'React Native mobile application',
    //         'link' => '#',
    //         'icon' => 'fas fa-mobile-alt',
    //         'color' => 'blue'
    //     },
    //     [
    //         'title' => 'Analytics Dashboard',
    //         'description' => 'Vue.js dashboard with D3.js charts',
    //         'link' => '#',
    //         'icon' => 'fas fa-chart-line',
    //         'color' => 'green'
    //     ]
    // ],

    /*
    |--------------------------------------------------------------------------
    | Social Media (Optional)
    |--------------------------------------------------------------------------
    | Uncomment untuk menampilkan social media links
    |--------------------------------------------------------------------------

    */
    // 'social' => [
    //     'instagram' => 'https://instagram.com',
    //     'linkedin' => 'https://linkedin.com'
    // ],

    /*
    |--------------------------------------------------------------------------
    | Navigation Social Links
    |--------------------------------------------------------------------------
    | - Link social media yang tampil di navigation
    | - Icon menggunakan Font Awesome, color sesuai keinginan
    | - Hapus jika tidak diperlukan, menu akan disembunyikan
    | - Gunakan hover_color untuk efek warna saat hover
    | - Link pastikan kalau di klik akan masuk ke profil sosial mediamu
    | - Gunakan 'mailto:' untuk email
    | - Uncomment untuk menampilkan menu sosial media
    | - Hapus atau comment menu yang tidak diperlukan
    |--------------------------------------------------------------------------

    */
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
        ],
        // [
        //     'platform_name' => 'WhatsApp',
        //     'platform_icon' => 'fab fa-whatsapp',
        //     'hover_color' => 'hover:text-green-500',
        //     'link' => '#'
        // ],
        // [
        //     'platform_name' => 'Telegram',
        //     'platform_icon' => 'fab fa-telegram',
        //     'hover_color' => 'hover:text-blue-400',
        //     'link' => '#'
        // ],
        // [
        //     'platform_name' => 'Twitter',
        //     'platform_icon' => 'fab fa-twitter',
        //     'hover_color' => 'hover:text-blue-400',
        //     'link' => '#'
        // ],
        // [
        //     'platform_name' => 'YouTube',
        //     'platform_icon' => 'fab fa-youtube',
        //     'hover_color' => 'hover:text-red-500',
        //     'link' => '#'
        // ],
        // [
        //     'platform_name' => 'Facebook',
        //     'platform_icon' => 'fab fa-facebook',
        //     'hover_color' => 'hover:text-blue-600',
        //     'link' => '#'
        // ],
        // [
        //     'platform_name' => 'TikTok',
        //     'platform_icon' => 'fab fa-tiktok',
        //     'hover_color' => 'hover:text-black',
        //     'link' => '#'
        // ],
        // [
        //     'platform_name' => 'Pinterest',
        //     'platform_icon' => 'fab fa-pinterest',
        //     'hover_color' => 'hover:text-red-600',
        //     'link' => '#'
        // ]
    ]
];

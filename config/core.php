<?php

return [
    // theme
    'theme' => 'theme2',
    // admin menu
    'admin_menu' => [
        [
            "name" => "Dashboard",
            "id" => "dashboard",
            "icon" => "fa-chart-line",
            "url" => "/backend/dashboard",
            "permission" => "Dashboard",
            "children" => []
        ],
        [
            "name" => "Slider",
            "id" => "slider",
            "icon" => "far fa-image",
            "url" => "/backend/slider",
            "permission" => "Cms",
            "children" => []
        ],
        [
            "name" => "About us",
            "id" => "about-us",
            "icon" => "fas fa-users",
            "url" => "",
            "permission" => "Cms",
            "children" => [
                [
                    "name" => "About organiser",
                    "id" => "about-organiser",
                    "icon" => "fa-arrow-right",
                    "url" => "/backend/page/1/edit",
                    "permission" => "Event",
                ],
                [
                    "name" => "Achievement",
                    "id" => "event-invitation",
                    "icon" => "fa-arrow-right",
                    "url" => "/backend/page/2/edit",
                    "permission" => "Event",
                ],
                [
                    "name" => "License",
                    "id" => "welcome-message",
                    "icon" => "fa-arrow-right",
                    "url" => "/backend/page/3/edit",
                    "permission" => "Event",
                ],
                [
                    "name" => "Company profile",
                    "id" => "welcome-message",
                    "icon" => "fa-arrow-right",
                    "url" => "/backend/page/4/edit",
                    "permission" => "Event",
                ],
                [
                    "name" => "Standard of Hiring Criteria",
                    "id" => "welcome-message",
                    "icon" => "fa-arrow-right",
                    "url" => "/backend/page/5/edit",
                    "permission" => "Event",
                ],
                [
                    "name" => "Chairman Message",
                    "id" => "welcome-message",
                    "icon" => "fa-arrow-right",
                    "url" => "/backend/page/14/edit",
                    "permission" => "Event",
                ]
                
            ]
        ],
        [
            "name" => "Our Services",
            "id" => "about-us",
            "icon" => "fas fa-users",
            "url" => "",
            "permission" => "Cms",
            "children" => [
                [
                    "name" => "How we recruit",
                    "id" => "about-organiser",
                    "icon" => "fa-arrow-right",
                    "url" => "/backend/page/6/edit",
                    "permission" => "Event",
                ],
                [
                    "name" => "What we do",
                    "id" => "event-invitation",
                    "icon" => "fa-arrow-right",
                    "url" => "/backend/page/8/edit",
                    "permission" => "Event",
                ],
                [
                    "name" => "License",
                    "id" => "Training partnership",
                    "icon" => "fa-arrow-right",
                    "url" => "/backend/page/15/edit",
                    "permission" => "Event",
                ],
                [
                    "name" => "We serve globally",
                    "id" => "welcome-message",
                    "icon" => "fa-arrow-right",
                    "url" => "/backend/page/16/edit",
                    "permission" => "Event",
                ]
            ]
        ],

        [
            "name" => "Members",
            "id" => "committee",
            "icon" => "fa-arrow-right",
            "url" => "/backend/committee-member",
            "permission" => "Content",
        ],
       
        [
            "name" => "Publication",
            "id" => "cms",
            "icon" => "fas fa-newspaper",
            "url" => "",
            "permission" => "Cms",
            "children" => [
                [
                    "name" => "News",
                    "id" => "news",
                    "icon" => "fa-arrow-right",
                    "url" => "/backend/content?category_id=2",
                    "permission" => "Content",
                ],
                [
                    "name" => "Notice",
                    "id" => "notice",
                    "icon" => "fa-arrow-right",
                    "url" => "/backend/content?category_id=3",
                    "permission" => "Content",
                ],


            ]
        ],
        [
            "name" => "Sister concern",
            "id" => "news",
            "icon" => "fa-arrow-right",
            "url" => "/backend/content?category_id=4",
            "permission" => "Content",
        ],
        [
            "name" => "Article",
            "id" => "article",
            "icon" => "fas fa-file-invoice",
            "url" => "",
            "permission" => "Article",
            "children" => [
                [
                    "name" => "Articles",
                    "id" => "approved_article",
                    "icon" => "fa-arrow-right",
                    "url" => "/backend/article",
                    "permission" => "Approved Article",
                ],
                [
                    "name" => "Write Article",
                    "id" => "write_article",
                    "icon" => "fa-arrow-right",
                    "url" => "/backend/article/create",
                    "permission" => "Write Article",
                ]
            ]
        ],



        // [
        //     "name" => "Registration",
        //     "id" => "registration",
        //     "icon" => "far fa-copy",
        //     "url" => "/backend/registration",
        //     "permission" => "Registration",
        //     "children" => []
        // ],





        [
            "name" => "Countries",
            "id" => "participating-countries",
            "icon" => "fas fa-flag",
            "url" => "/backend/content?category_id=7",
            "permission" => "Content",
        ],
        [
            "name" => "Basic & Social Info",
            "id" => "contact",
            "icon" => "fas fa-phone-alt",
            "url" => "/backend/contact",
            "permission" => "Contact",
        ],
        [
            "name" => "Contact Message",
            "id" => "inbox",
            "icon" => "fas fa-envelope",
            "url" => "/backend/form",
            "permission" => "Inbox",
        ],

        [
            "name" => "Faq",
            "id" => "faq",
            "icon" => "fas fa-question-circle",
            "url" => "/backend/faq",
            "permission" => "Faq",
        ],


        // [
        //     "name" => "Core Settings",
        //     "id" => "core_settings",
        //     "icon" => "fa-cog",
        //     "url" => "",
        //     "permission" => "Core Settings",
        //     "children" => [
        //         [
        //             "name" => "Event",
        //             "id" => "event",
        //             "icon" => "fa-arrow-right",
        //             "url" => "/backend/event",
        //             "permission" => "Event",
        //         ]
        //     ]
        // ],
        [
            "name" => "Create Category",
            "id" => "category_settings",
            "icon" => "fas fa-cogs",
            "url" => "",
            "permission" => "Common Settings",
            "children" => [
                [
                    "name" => "Page Category",
                    "id" => "page_category",
                    "icon" => "fa-arrow-right",
                    "url" => "/backend/page-category",
                    "permission" => "Common Settings",
                ],
                [
                    "name" => "Content Category",
                    "id" => "content_category",
                    "icon" => "fa-arrow-right",
                    "url" => "/backend/content-category",
                    "permission" => "Common Settings",
                ],
                [
                    "name" => "Article Category",
                    "id" => "article_category",
                    "icon" => "fa-arrow-right",
                    "url" => "/backend/article-category",
                    "permission" => "Common Settings",
                ],
                [
                    "name" => "Member Category",
                    "id" => "committee_category",
                    "icon" => "fa-arrow-right",
                    "url" => "/backend/committee-category",
                    "permission" => "Common Settings",
                ],
                // [
                //     "name" => "Batch",
                //     "id" => "batch",
                //     "icon" => "fa-arrow-right",
                //     "url" => "/backend/batch",
                //     "permission" => "Common Settings",
                // ],
                // [
                //     "name" => "Academic Session",
                //     "id" => "academic_session",
                //     "icon" => "fa-arrow-right",
                //     "url" => "/backend/academic-session",
                //     "permission" => "Common Settings",
                // ],
            ]
        ],

        // [
        //     "name" => "Countries & Exhibitors Number",
        //     "id" => "site",
        //     "icon" => "fa-arrow-right",
        //     "url" => "/backend/numbers",
        //     "permission" => "Site",
        // ],

        // [
        //     "name" => "App Settings",
        //     "id" => "app_settings",
        //     "icon" => "fa-tools",
        //     "url" => "",
        //     "permission" => "App Settings",
        //     "children" => [
        //       [
        //           "name" => "Site",
        //           "id" => "site",
        //           "icon" => "fa-arrow-right",
        //           "url" => "/backend/site",
        //           "permission" => "Site",
        //       ],
        // //         // [
        // //         //     "name" => "Contact",
        // //         //     "id" => "contact",
        // //         //     "icon" => "fa-arrow-right",
        // //         //     "url" => "/backend/contact",
        // //         //     "permission" => "Contact",
        // //         // ],


        // //         /*[
        // //             "name" => "Seo",
        // //             "id" => "seo",
        // //             "icon" => "fa-arrow-right",
        // //             "url" => "/backend/seo",
        // //             "permission" => "Seo",
        // //         ]*/
        //     ]
        //  ],


        [
            "name" => "Access Controls",
            "id" => "access_controls",
            "icon" => "fa-sliders-h",
            "url" => "",
            "permission" => "Access Controls",
            "children" => [
                [
                    "name" => "Role",
                    "id" => "role",
                    "icon" => "fa-arrow-right",
                    "url" => "/backend/role",
                    "permission" => "Role",
                ],
                [
                    "name" => "User",
                    "id" => "user",
                    "icon" => "fa-arrow-right",
                    "url" => "/backend/user",
                    "permission" => "User",
                ]
            ]
        ],
        [
            "name" => "My Profile",
            "id" => "my_profile",
            "icon" => "fa-user-circle",
            "url" => "/backend/profile/personal-info",
            "permission" => "My Profile",
            "children" => []
        ],
    ],
    // profile menu
    'profile_menu' => [
        [
            "name" => "Personal Info.",
            "id" => "personal_info",
            "icon" => "fa-user",
            "url" => "/backend/profile/personal-info",
            "permission" => "profile",
            "children" => []
        ],
        [
            "name" => "Residential Info.",
            "id" => "residential_info",
            "icon" => "fa-user",
            "url" => "/backend/profile/residential-info",
            "permission" => "profile",
            "children" => []
        ],
        [
            "name" => "Educational Info.",
            "id" => "educational_info",
            "icon" => "fa-user",
            "url" => "/backend/profile/educational-info",
            "permission" => "profile",
            "children" => []
        ],
        [
            "name" => "Work/Experience Info.",
            "id" => "work_info",
            "icon" => "fa-user",
            "url" => "/backend/profile/work-info",
            "permission" => "profile",
            "children" => []
        ],
        [
            "name" => "Skill",
            "id" => "skill_info",
            "icon" => "fa-user",
            "url" => "/backend/profile/skill",
            "permission" => "profile",
            "children" => []
        ],
        [
            "name" => "Language",
            "id" => "language_info",
            "icon" => "fa-user",
            "url" => "/backend/profile/language",
            "permission" => "profile",
            "children" => []
        ],
        [
            "name" => "Interest",
            "id" => "interest_info",
            "icon" => "fa-user",
            "url" => "/backend/profile/interest",
            "permission" => "profile",
            "children" => []
        ],
        [
            "name" => "Social Accounts",
            "id" => "social_account",
            "icon" => "fa-user",
            "url" => "/backend/profile/social-account",
            "permission" => "profile",
            "children" => []
        ],
        [
            "name" => "Account Info",
            "id" => "account_info",
            "icon" => "fa-user",
            "url" => "/backend/profile/account-info",
            "permission" => "account_info",
            "children" => []
        ],
        [
            "name" => "Password Change",
            "id" => "password_change",
            "icon" => "fa-user",
            "url" => "/backend/profile/password-change",
            "permission" => "password_change",
            "children" => []
        ]
    ],
    "geoip2" => [
        "country_db" => resource_path('geoip/GeoLite2-Country.mmdb'),
        "city_db" => resource_path('geoip/GeoLite2-City.mmdb'),
    ],
    "blood_groups" => [
        "A+" => "A+",
        "A-" => "A-",
        "B+" => "B+",
        "B-" => "B-",
        "O+" => "O+",
        "O-" => "O-",
        "AB+" => "AB+",
        "AB-" => "AB-",
    ],
    "genders" => [
        "1" => "Male",
        "2" => "Female",
        "3" => "Others"
    ],
    "language_proficiency" => [
        "1" => "Elementary Proficiency",
        "2" => "Limited Working Proficiency",
        "3" => "Professional Working Proficiency",
        "4" => "Full Professional Proficiency",
        "5" => "Native / Bilingual Proficiency",
    ],
    "skill_proficiency" => [
        "1" => "Basic Proficiency",
        "2" => "Novice/Limited Proficiency",
        "3" => "Intermediate Proficiency",
        "4" => "Advanced Proficiency",
        "5" => "Expert Proficiency",
    ],
    "course_types" => [
        "Theory" => "Theory",
        "Lab" => "Lab",
        "Non-credit" => "Non-credit"
    ],
    "credits" => [
        "1" => 0.5,
        "2" => 1.0,
        "3" => 1.5,
        "4" => 2.0,
        "5" => 2.5,
        "6" => 3.0,
        "7" => 3.5,
        "8" => 4.0,
    ],
    // media collection
    'media_collection' => [
        'slider' => [
            'image' => 'slider_image',
        ],
        'page' => [
            'image' => 'page_feature_image',
            'attachment' => 'page_attachment',
        ],
        'testimonial' => [
            'avatar' => 'testimonial_avatar',
        ],
        'quote' => [
            'avatar' => 'quote_avatar',
        ],
        'important_people' => [
            'avatar' => 'important_people_avatar',
        ],
        'content' => [
            'image' => 'content_image',
            'attachment' => 'content_attachment'
        ],
        'article' => [
            'image' => 'article_image',
            'attachment' => 'article_attachment'
        ],
        'user' => [
            'avatar' => 'user_avatar',
        ],
        'user_personal_info' => [
            'image' => 'user_personal_info_image'
        ],
        'setting_site' => [
            'logo' => 'setting_site_logo',
            'favicon' => 'setting_site_favicon',
            'testimonial_bg' => 'setting_site_testimonial_bg',
        ],
        'committee_member' => [
            'avatar' => 'committee_member_avatar',
        ]
    ],
    'image' => []
];

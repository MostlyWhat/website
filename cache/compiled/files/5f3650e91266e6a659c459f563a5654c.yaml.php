<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/MAMP/htdocs/grav/user/config/plugins/admin.yaml',
    'modified' => 1698903815,
    'size' => 2393,
    'data' => [
        'enabled' => true,
        'route' => '/admin',
        'cache_enabled' => true,
        'theme' => 'grav',
        'logo_text' => NULL,
        'body_classes' => NULL,
        'content_padding' => true,
        'twofa_enabled' => true,
        'sidebar' => [
            'activate' => 'tab',
            'hover_delay' => 100,
            'size' => 'auto'
        ],
        'dashboard' => [
            'days_of_stats' => 7
        ],
        'widgets_display' => [
            'dashboard-maintenance' => 'true',
            'dashboard-statistics' => 'true',
            'dashboard-notifications' => 'true',
            'dashboard-feed' => 'true',
            'dashboard-pages' => 'true'
        ],
        'pages' => [
            'show_parents' => 'both',
            'show_modular' => true,
            'parents_levels' => NULL
        ],
        'session' => [
            'timeout' => 1800
        ],
        'edit_mode' => 'normal',
        'frontend_preview_target' => 'inline',
        'show_github_msg' => true,
        'admin_icons' => 'line-awesome',
        'enable_auto_updates_check' => true,
        'notifications' => [
            'feed' => true,
            'dashboard' => true,
            'plugins' => true,
            'themes' => true
        ],
        'popularity' => [
            'enabled' => true,
            'ignore' => [
                0 => '/test*',
                1 => '/modular'
            ],
            'history' => [
                'daily' => '30',
                'monthly' => '12',
                'visitors' => '20'
            ]
        ],
        'whitelabel' => [
            'quicktray_recompile' => false,
            'codemirror_theme' => 'cobalt',
            'codemirror_fontsize' => 'md',
            'codemirror_md_font' => 'sans',
            'logo_custom' => [
                
            ],
            'logo_login' => [
                
            ],
            'color_scheme' => [
                'accents' => [
                    'primary-accent' => 'notice',
                    'secondary-accent' => 'update',
                    'tertiary-accent' => 'tabs'
                ],
                'colors' => [
                    'logo-bg' => '#0e1d2b',
                    'logo-link' => '#ffffff',
                    'nav-bg' => '#122739',
                    'nav-text' => '#88929c',
                    'nav-link' => '#ffffff',
                    'nav-selected-bg' => '#0E1D2B',
                    'nav-selected-link' => '#ffc600',
                    'nav-hover-bg' => '#142B40',
                    'nav-hover-link' => '#ffffff',
                    'toolbar-bg' => '#122739',
                    'toolbar-text' => '#acb8c5',
                    'page-bg' => '#0e1d2b',
                    'page-text' => '#E1EFFE',
                    'page-link' => '#0088FF',
                    'content-bg' => '#193549',
                    'content-text' => '#E1EFFE',
                    'content-link' => '#0088ff',
                    'content-link2' => '#ffc600',
                    'content-header' => '#ffc600',
                    'content-tabs-bg' => '#173043',
                    'content-tabs-text' => '#acb8c5',
                    'button-bg' => '#0476e0',
                    'button-text' => '#ffffff',
                    'notice-bg' => '#0476e0',
                    'notice-text' => '#ffffff',
                    'update-bg' => '#ffc600',
                    'update-text' => '#0e1d2b',
                    'critical-bg' => '#d13e46',
                    'critical-text' => '#dfe3ed',
                    'content-highlight' => '#ffffd7'
                ],
                'name' => NULL
            ],
            'custom_footer' => NULL,
            'custom_css' => '* {
	font-family: "Metropolis, DM Sans, Arial, sans-serif";
}

h1, h2, h3, h4, h5, h6 {
	font-family: "Metropolis, DM Sans, Arial, sans-serif";
}',
            'custom_presets' => NULL
        ],
        'show_beta_msg' => NULL,
        'pagemedia' => [
            'resize_width' => 0,
            'resize_height' => 0,
            'res_min_width' => 0,
            'res_min_height' => 0,
            'res_max_width' => 0,
            'res_max_height' => 0,
            'resize_quality' => 0.8000000000000000444089209850062616169452667236328125
        ]
    ]
];

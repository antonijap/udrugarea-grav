<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/antonijapek/Development/Valet/udrugarea-grav/user/themes/rea/blueprints.yaml',
    'modified' => 1499449489,
    'data' => [
        'name' => 'rea',
        'version' => '1.0.0',
        'description' => 'A high-performance Grav theme using the Zurb Foundation front-end framework.',
        'icon' => 'rocket',
        'author' => [
            'name' => 'Brett DeWoody',
            'email' => 'antonijapek@gmail.com',
            'url' => 'http://antonijapek.com'
        ],
        'homepage' => 'https://github.com/brettdewoody/grav-theme-foundation',
        'demo' => 'http://udrugarea.hr',
        'bugs' => 'https://github.com/getgrav/grav-theme-antimatter/issues',
        'keywords' => 'foundation, theme, modern, fast, responsive, html5, css3',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];

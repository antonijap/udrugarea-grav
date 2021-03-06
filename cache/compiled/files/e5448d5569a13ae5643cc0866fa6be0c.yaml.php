<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/antonijapek/Development/Valet/udrugarea-grav/user/plugins/srcset/blueprints.yaml',
    'modified' => 1499449489,
    'data' => [
        'name' => 'srcset Helper',
        'version' => '1.0.0',
        'description' => '**srcset Helper** is a powerful plugin, that levels Grav\'s media processing features to make all images in pages responsive. For now limited to .jpg files.',
        'icon' => 'trello',
        'author' => [
            'name' => 'Simon Cramer',
            'email' => 'cramer.simon@gmail.com'
        ],
        'homepage' => 'https://github.com/simoncramer/grav-plugin-srcset',
        'keywords' => 'srcset, responsive, image, mobile, friendly, page speed',
        'bugs' => 'https://github.com/simoncramer/grav-plugin-srcset/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'active' => [
                    'type' => 'toggle',
                    'label' => 'Activate Site-Wide',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'This will ensure the plugin is activated site wide. You can override with page header options.'
                ],
                'maxWidth' => [
                    'type' => 'number',
                    'label' => 'Maximum Width',
                    'placeholder' => 1320
                ],
                'minWidth' => [
                    'type' => 'number',
                    'label' => 'Minimum Width',
                    'placeholder' => 320
                ],
                'stepSize' => [
                    'type' => 'number',
                    'label' => 'Step Size',
                    'placeholder' => 200
                ],
                'defaultImageSize' => [
                    'type' => 'text',
                    'label' => 'Default Image Size',
                    'default' => '100vw'
                ],
                'size' => [
                    'type' => 'list',
                    'label' => 'Image Sizes',
                    'btnLabel' => 'Add image size',
                    'fields' => [
                        '.screenSize' => [
                            'type' => 'text',
                            'label' => 'Screen Size',
                            'placeholder' => '(min-width:36em)'
                        ],
                        '.imageSize' => [
                            'type' => 'text',
                            'label' => 'Image Size',
                            'placeholder' => '50vw'
                        ]
                    ]
                ]
            ]
        ]
    ]
];

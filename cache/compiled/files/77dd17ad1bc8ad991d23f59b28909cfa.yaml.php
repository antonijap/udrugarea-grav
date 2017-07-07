<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/antonijapek/Development/Valet/udrugarea/user/plugins/minify-html/blueprints.yaml',
    'modified' => 1499372908,
    'data' => [
        'name' => 'Minify Html',
        'version' => '0.0.1',
        'description' => 'plugin to minify HTML output',
        'icon' => 'compress',
        'author' => [
            'name' => 'Jim Blue'
        ],
        'homepage' => 'https://github.com/jimblue/grav-plugin-minify-html',
        'keywords' => 'grav-cms, gra-plugin, minify-html',
        'bugs' => 'https://github.com/jimblue/grav-plugin-minify-html/issues',
        'docs' => 'https://github.com/jimblue/grav-plugin-minify-html/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'settings' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_MINIFYHTML.SECTION_NAME',
                    'fields' => [
                        'enabled' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'mincss' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_MINIFYHTML.MINCSS',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'minjs' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_MINIFYHTML.MINJS',
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
        ]
    ]
];
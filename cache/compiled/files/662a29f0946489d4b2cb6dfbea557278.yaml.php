<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/antonijapek/Development/Valet/udrugarea-grav/user/plugins/autoseo/blueprints.yaml',
    'modified' => 1499449489,
    'data' => [
        'name' => 'Auto SEO',
        'version' => '1.1.0',
        'description' => 'Automatically fills the description and keyword metadata of a page using its content.',
        'icon' => 'magic',
        'author' => [
            'name' => 'Laurent ongaro',
            'email' => 'laurent@steamlead.com',
            'url' => 'http://www.steamlead.com'
        ],
        'homepage' => 'https://github.com/steamlead/grav-plugin-autoseo',
        'keywords' => 'plugin, seo, metadata extraction, auto fill',
        'bugs' => 'https://github.com/steamlead/grav-plugin-autoseo/issues',
        'docs' => 'https://github.com/steamlead/grav-plugin-autoseo/blob/master/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'admin',
                'version' => '>=1.2.3'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'global' => [
                    'type' => 'section',
                    'title' => 'PLUGINS.AUTO_SEO.GLOBAL_CONFIG',
                    'underline' => 1,
                    'fields' => [
                        'enabled' => [
                            'type' => 'toggle',
                            'label' => 'PLUGINS.AUTO_SEO.PLUGIN_STATUS',
                            'highlight' => 1,
                            'default' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ],
                'metadata' => [
                    'type' => 'section',
                    'title' => 'PLUGINS.AUTO_SEO.DEFAULT_CONFIG',
                    'underline' => 1,
                    'fields' => [
                        'description.enabled' => [
                            'type' => 'toggle',
                            'label' => 'PLUGINS.AUTO_SEO.DESCRIPTION_ENABLED_LABEL',
                            'help' => 'PLUGINS.AUTO_SEO.DESCRIPTION_ENABLED_HELP',
                            'highlight' => 1,
                            'default' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'description.length' => [
                            'type' => 'text',
                            'size' => 'x-small',
                            'label' => 'PLUGINS.AUTO_SEO.DESCRIPTION_LENGTH_LABEL',
                            'help' => 'PLUGINS.AUTO_SEO.DESCRIPTION_LENGTH_HELP',
                            'default' => 30,
                            'validate' => [
                                'type' => 'number',
                                'min' => 2,
                                'max' => 50
                            ]
                        ],
                        'keyword.enabled' => [
                            'type' => 'toggle',
                            'label' => 'PLUGINS.AUTO_SEO.KEYWORD_ENABLED_LABEL',
                            'help' => 'PLUGINS.AUTO_SEO.KEYWORD_ENABLED_HELP',
                            'highlight' => 1,
                            'default' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'keyword.length' => [
                            'type' => 'text',
                            'size' => 'x-small',
                            'label' => 'PLUGINS.AUTO_SEO.KEYWORD_LENGTH_LABEL',
                            'help' => 'PLUGINS.AUTO_SEO.KEYWORD_LENGTH_HELP',
                            'default' => 20,
                            'validate' => [
                                'type' => 'number',
                                'min' => 2,
                                'max' => 30
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];

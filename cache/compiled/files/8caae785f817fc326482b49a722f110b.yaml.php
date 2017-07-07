<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/antonijapek/Development/Valet/udrugarea-grav/user/plugins/social-meta-tags/blueprints.yaml',
    'modified' => 1499449489,
    'data' => [
        'name' => 'Social Meta Tags',
        'version' => '0.2.0',
        'description' => 'Facebook Open Graph and Twitter Cards Meta Tags',
        'icon' => 'code',
        'author' => [
            'name' => 'Victor Rosset',
            'email' => 'victorrosset@gmail.com'
        ],
        'homepage' => 'https://github.com/tucho235/grav-plugin-social-meta-tags',
        'demo' => 'https://github.com/tucho235/grav-plugin-social-meta-tags',
        'keywords' => 'grav, plugin, facebook, open graph, twitter cards, google',
        'bugs' => 'https://github.com/tucho235/grav-plugin-social-meta-tags/issues',
        'docs' => 'https://github.com/tucho235/grav-plugin-social-meta-tags/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'social_pages_types' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'title' => 'Pages',
                    'fields' => [
                        'plugin' => [
                            'type' => 'tab',
                            'title' => 'Plugin',
                            'fields' => [
                                'enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.SOCIAL_META_TAGS.PLUGIN_STATUS',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'Enabled',
                                        0 => 'Disabled'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ]
                            ]
                        ],
                        'twitter' => [
                            'type' => 'tab',
                            'title' => 'PLUGINS.SOCIAL_META_TAGS.TWITTER.NAME',
                            'fields' => [
                                'social_pages.pages.twitter.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.SOCIAL_META_TAGS.TWITTER.ENABLED',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGINS.SOCIAL_META_TAGS.YES',
                                        0 => 'PLUGINS.SOCIAL_META_TAGS.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'social_pages.pages.twitter.type' => [
                                    'type' => 'select',
                                    'size' => 'medium',
                                    'label' => 'PLUGINS.SOCIAL_META_TAGS.TWITTER.TYPE',
                                    'help' => 'PLUGINS.SOCIAL_META_TAGS.TWITTER.TYPE_HELP',
                                    'default' => 'summary_large_image',
                                    'options' => [
                                        'summary_large_image' => 'PLUGINS.SOCIAL_META_TAGS.TWITTER.TYPE_CARDS.LARGE',
                                        'summary' => 'PLUGINS.SOCIAL_META_TAGS.TWITTER.TYPE_CARDS.SUMMARY'
                                    ]
                                ],
                                'social_pages.pages.twitter.aboutme' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.SOCIAL_META_TAGS.TWITTER.ABOUTME',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGINS.SOCIAL_META_TAGS.YES',
                                        0 => 'PLUGINS.SOCIAL_META_TAGS.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'social_pages.pages.twitter.username' => [
                                    'type' => 'text',
                                    'label' => 'PLUGINS.SOCIAL_META_TAGS.TWITTER.USERNAME',
                                    'help' => 'PLUGINS.SOCIAL_META_TAGS.TWITTER.USERNAME_HELP',
                                    'size' => 'small',
                                    'placeholder' => '@'
                                ]
                            ]
                        ],
                        'facebook' => [
                            'type' => 'tab',
                            'title' => 'PLUGINS.SOCIAL_META_TAGS.FACEBOOK.NAME',
                            'fields' => [
                                'social_pages.pages.facebook.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.SOCIAL_META_TAGS.FACEBOOK.ENABLED',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGINS.SOCIAL_META_TAGS.YES',
                                        0 => 'PLUGINS.SOCIAL_META_TAGS.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'social_pages.pages.facebook.appid' => [
                                    'type' => 'text',
                                    'label' => 'PLUGINS.SOCIAL_META_TAGS.FACEBOOK.APPID',
                                    'help' => 'PLUGINS.SOCIAL_META_TAGS.FACEBOOK.APPID_HELP',
                                    'size' => 'small'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];

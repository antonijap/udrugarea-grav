<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/antonijapek/Development/Valet/udrugarea-grav/user/config/site.yaml',
    'modified' => 1499449489,
    'data' => [
        'title' => 'Udruga Rea',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Antonija',
            'email' => 'info@udrugarea.hr'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Udruga Rea je registrirana neprofitna nevladina organizacija, skupina volontera čiji je cilj udomljavanje napuštenih pasa i mačaka grada Samobora i okolice.'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 140,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];

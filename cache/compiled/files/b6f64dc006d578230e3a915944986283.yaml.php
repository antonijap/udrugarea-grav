<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/antonijapek/Development/Valet/udrugarea-grav/user/plugins/seo/blueprints/seo.yaml',
    'modified' => 1499449489,
    'data' => [
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'seo' => [
                            'type' => 'tab',
                            'title' => 'SEO',
                            'fields' => [
                                'tabs1' => [
                                    'type' => 'tabs',
                                    'active' => 1,
                                    'title' => 'Settings',
                                    'fields' => [
                                        'googlefields' => [
                                            'type' => 'tab',
                                            'title' => 'Google',
                                            'fields' => [
                                                'header.googletitle' => [
                                                    'type' => 'text',
                                                    'label' => 'PLUGINS.SEO.GOOGLE_TITLE',
                                                    'id' => 'text'
                                                ],
                                                'header.googledesc' => [
                                                    'type' => 'textarea',
                                                    'label' => 'PLUGINS.SEO.GOOGLE_DESC',
                                                    'id' => 'desc'
                                                ],
                                                'header.googlepreview' => [
                                                    'type' => 'google',
                                                    'label' => 'PLUGINS.SEO.GOOGLE_PREVIEWDESC'
                                                ]
                                            ]
                                        ],
                                        'twitterfields' => [
                                            'type' => 'tab',
                                            'title' => 'Twitter',
                                            'fields' => [
                                                'columns' => [
                                                    'type' => 'columns',
                                                    'fields' => [
                                                        'column1' => [
                                                            'type' => 'column',
                                                            'fields' => [
                                                                'twitter.twitterenable' => [
                                                                    'type' => 'toggle',
                                                                    'label' => 'PLUGIN_ADMIN.ENABLED',
                                                                    'default' => 1,
                                                                    'highlight' => 1,
                                                                    'help' => 'PLUGIN_ADMIN.ENABLED_HELP',
                                                                    'options' => [
                                                                        1 => 'PLUGIN_ADMIN.YES',
                                                                        0 => 'PLUGIN_ADMIN.NO'
                                                                    ],
                                                                    'validate' => [
                                                                        'type' => 'bool'
                                                                    ]
                                                                ],
                                                                'header.twittercardoptions' => [
                                                                    'type' => 'select',
                                                                    'label' => 'PLUGINS.SEO.TWITTER_CARD_SELECT',
                                                                    'options' => [
                                                                        'summary' => 'PLUGINS.SEO.TWITTER_CARD_SUMMARY',
                                                                        'summary_large_image' => 'PLUGINS.SEO.TWITTER_CARD_SUMLARGIMG'
                                                                    ]
                                                                ],
                                                                'header.titlecardtwitter' => [
                                                                    'type' => 'section',
                                                                    'title' => 'PLUGINS.SEO.TWITTER_CARD_SECTITLE',
                                                                    'underline' => true
                                                                ],
                                                                'header.twittershareimg' => [
                                                                    'type' => 'filepicker',
                                                                    'label' => 'PLUGINS.SEO.TWITTER_SHAREIMG',
                                                                    'preview_images' => true,
                                                                    'id' => 'twittimgselect'
                                                                ],
                                                                'header.twittertitle' => [
                                                                    'type' => 'text',
                                                                    'label' => 'PLUGINS.SEO.TWITTER_TITLE',
                                                                    'id' => 'twittertitle'
                                                                ],
                                                                'header.twitterdescription' => [
                                                                    'type' => 'textarea',
                                                                    'text' => 'PLUGINS.SEO.TWITTER_DESCRIPTION',
                                                                    'id' => 'twitterdescription'
                                                                ]
                                                            ]
                                                        ],
                                                        'column2' => [
                                                            'type' => 'column',
                                                            'fields' => [
                                                                'header.twitterlabel' => [
                                                                    'type' => 'section',
                                                                    'text' => 'PLUGINS.SEO.TWITTER_PREVIEWDESC'
                                                                ],
                                                                'header.twitterpreview' => [
                                                                    'type' => 'twitter'
                                                                ]
                                                            ]
                                                        ]
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'jsonfield' => [
                                            'type' => 'tab',
                                            'title' => 'Microdata',
                                            'fields' => [
                                                'columns' => [
                                                    'type' => 'columns',
                                                    'fields' => [
                                                        'column4' => [
                                                            'type' => 'column',
                                                            'fields' => [
                                                                'header.articleenabled' => [
                                                                    'type' => 'toggle',
                                                                    'label' => 'add Article Microdata',
                                                                    'default' => 0,
                                                                    'options' => [
                                                                        1 => 'PLUGIN_ADMIN.YES',
                                                                        0 => 'PLUGIN_ADMIN.NO'
                                                                    ],
                                                                    'validate' => [
                                                                        'type' => 'bool'
                                                                    ]
                                                                ],
                                                                'header.article.@context' => [
                                                                    'type' => 'hidden',
                                                                    'default' => 'http://schema.org/'
                                                                ],
                                                                'header.article.@type' => [
                                                                    'type' => 'hidden',
                                                                    'default' => 'NewsArticle'
                                                                ],
                                                                'header.article.headline' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Headline',
                                                                    'disabled' => false,
                                                                    'field_classes' => 'togglearticle'
                                                                ],
                                                                'header.article.datePublished' => [
                                                                    'type' => 'date',
                                                                    'label' => 'Article Description',
                                                                    'disabled' => false,
                                                                    'field_classes' => 'togglearticle'
                                                                ],
                                                                'header.article.description' => [
                                                                    'type' => 'date',
                                                                    'label' => 'Date published',
                                                                    'disabled' => false,
                                                                    'field_classes' => 'togglearticle'
                                                                ],
                                                                'header.article.image.@type' => [
                                                                    'type' => 'hidden',
                                                                    'default' => 'ImageObject',
                                                                    'disabled' => false,
                                                                    'field_classes' => 'togglearticle'
                                                                ],
                                                                'header.article.image.url' => [
                                                                    'type' => 'filepicker',
                                                                    'label' => 'Image',
                                                                    'preview_images' => true,
                                                                    'disabled' => false,
                                                                    'field_classes' => 'togglearticle'
                                                                ],
                                                                'header.article.image.height' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Image Height (px)',
                                                                    'disabled' => false,
                                                                    'field_classes' => 'togglearticle'
                                                                ],
                                                                'header.article.image.width' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Image Width (px)',
                                                                    'disabled' => false,
                                                                    'field_classes' => 'togglearticle'
                                                                ],
                                                                'header.article.author' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Article Author',
                                                                    'disabled' => false,
                                                                    'field_classes' => 'togglearticle'
                                                                ],
                                                                'header.article.publisher.@type' => [
                                                                    'type' => 'hidden',
                                                                    'label' => 'Article Publisher',
                                                                    'default' => 'Organization',
                                                                    'disabled' => false,
                                                                    'field_classes' => 'togglearticle'
                                                                ],
                                                                'header.article.publisher.logo.@type' => [
                                                                    'type' => 'hidden',
                                                                    'default' => 'ImageObject',
                                                                    'disabled' => false,
                                                                    'field_classes' => 'togglearticle'
                                                                ],
                                                                'header.article.publisher.logo.url' => [
                                                                    'type' => 'filepicker',
                                                                    'label' => 'Publisher logo',
                                                                    'disabled' => false,
                                                                    'preview_images' => true,
                                                                    'field_classes' => 'togglearticle'
                                                                ],
                                                                'header.article.publisher.name' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Publisher Name',
                                                                    'disabled' => false,
                                                                    'field_classes' => 'togglearticle'
                                                                ],
                                                                'header.article.articleBody' => [
                                                                    'type' => 'textarea',
                                                                    'label' => 'Full Article Body',
                                                                    'disabled' => false,
                                                                    'field_classes' => 'togglearticle'
                                                                ],
                                                                'header.musiceventenabled' => [
                                                                    'type' => 'toggle',
                                                                    'label' => 'Add Music Event Microdata',
                                                                    'default' => 0,
                                                                    'options' => [
                                                                        1 => 'PLUGIN_ADMIN.YES',
                                                                        0 => 'PLUGIN_ADMIN.NO'
                                                                    ],
                                                                    'validate' => [
                                                                        'type' => 'bool'
                                                                    ]
                                                                ],
                                                                'header.musicevent.@context' => [
                                                                    'type' => 'hidden',
                                                                    'default' => 'http://schema.org/'
                                                                ],
                                                                'header.musicevent.@type' => [
                                                                    'type' => 'hidden',
                                                                    'default' => 'MusicEvent'
                                                                ],
                                                                'header.musicevent.location.@type' => [
                                                                    'type' => 'hidden',
                                                                    'default' => 'MusicVenue'
                                                                ],
                                                                'header.musicevent.location.name' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Location Name',
                                                                    'field_classes' => 'togglemusicevent'
                                                                ],
                                                                'header.musicevent.location.address' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Location Address',
                                                                    'field_classes' => 'togglemusicevent'
                                                                ],
                                                                'header.musicevent.name' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Event Name',
                                                                    'field_classes' => 'togglemusicevent'
                                                                ],
                                                                'header.musicevent.offers.@type' => [
                                                                    'type' => 'hidden',
                                                                    'default' => 'Offer',
                                                                    'label' => 'Event Description',
                                                                    'field_classes' => 'togglemusicevent'
                                                                ],
                                                                'header.musicevent.offers.url' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Ticket URL',
                                                                    'field_classes' => 'togglemusicevent'
                                                                ],
                                                                'header.musicevent.offers.price' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Price',
                                                                    'field_classes' => 'togglemusicevent'
                                                                ],
                                                                'header.musicevent.offers.priceCurrency' => [
                                                                    'type' => 'select',
                                                                    'label' => 'Price Currency',
                                                                    'field_classes' => 'togglemusicevent',
                                                                    'options' => [
                                                                        'AED' => 'AED',
                                                                        'AFN' => 'AFN',
                                                                        'ALL' => 'ALL',
                                                                        'AMD' => 'AMD',
                                                                        'ANG' => 'ANG',
                                                                        'AOA' => 'AOA',
                                                                        'ARS' => 'ARS',
                                                                        'AUD' => 'AUD',
                                                                        'AWG' => 'AWG',
                                                                        'AZN' => 'AZN',
                                                                        'BAM' => 'BAM',
                                                                        'BBD' => 'BBD',
                                                                        'BDT' => 'BDT',
                                                                        'BGN' => 'BGN',
                                                                        'BHD' => 'BHD',
                                                                        'BIF' => 'BIF',
                                                                        'BMD' => 'BMD',
                                                                        'BND' => 'BND',
                                                                        'BOB' => 'BOB',
                                                                        'BRL' => 'BRL',
                                                                        'BSD' => 'BSD',
                                                                        'BTN' => 'BTN',
                                                                        'BWP' => 'BWP',
                                                                        'BYN' => 'BYN',
                                                                        'BZD' => 'BZD',
                                                                        'CAD' => 'CAD',
                                                                        'CDF' => 'CDF',
                                                                        'CHF' => 'CHF',
                                                                        'CLP' => 'CLP',
                                                                        'CNY' => 'CNY',
                                                                        'COP' => 'COP',
                                                                        'CRC' => 'CRC',
                                                                        'CUC' => 'CUC',
                                                                        'CUP' => 'CUP',
                                                                        'CVE' => 'CVE',
                                                                        'CZK' => 'CZK',
                                                                        'DJF' => 'DJF',
                                                                        'DKK' => 'DKK',
                                                                        'DOP' => 'DOP',
                                                                        'DZD' => 'DZD',
                                                                        'EGP' => 'EGP',
                                                                        'ERN' => 'ERN',
                                                                        'ETB' => 'ETB',
                                                                        'EUR' => 'EUR',
                                                                        'FJD' => 'FJD',
                                                                        'FKP' => 'FKP',
                                                                        'GBP' => 'GBP',
                                                                        'GEL' => 'GEL',
                                                                        'GGP' => 'GGP',
                                                                        'GHS' => 'GHS',
                                                                        'GIP' => 'GIP',
                                                                        'GMD' => 'GMD',
                                                                        'GNF' => 'GNF',
                                                                        'GTQ' => 'GTQ',
                                                                        'GYD' => 'GYD',
                                                                        'HKD' => 'HKD',
                                                                        'HNL' => 'HNL',
                                                                        'HRK' => 'HRK',
                                                                        'HTG' => 'HTG',
                                                                        'HUF' => 'HUF',
                                                                        'IDR' => 'IDR',
                                                                        'ILS' => 'ILS',
                                                                        'IMP' => 'IMP',
                                                                        'INR' => 'INR',
                                                                        'IQD' => 'IQD',
                                                                        'IRR' => 'IRR',
                                                                        'ISK' => 'ISK',
                                                                        'JEP' => 'JEP',
                                                                        'JMD' => 'JMD',
                                                                        'JOD' => 'JOD',
                                                                        'JPY' => 'JPY',
                                                                        'KES' => 'KES',
                                                                        'KGS' => 'KGS',
                                                                        'KHR' => 'KHR',
                                                                        'KMF' => 'KMF',
                                                                        'KPW' => 'KPW',
                                                                        'KRW' => 'KRW',
                                                                        'KWD' => 'KWD',
                                                                        'KYD' => 'KYD',
                                                                        'KZT' => 'KZT',
                                                                        'LAK' => 'LAK',
                                                                        'LBP' => 'LBP',
                                                                        'LKR' => 'LKR',
                                                                        'LRD' => 'LRD',
                                                                        'LSL' => 'LSL',
                                                                        'LYD' => 'LYD',
                                                                        'MAD' => 'MAD',
                                                                        'MDL' => 'MDL',
                                                                        'MGA' => 'MGA',
                                                                        'MKD' => 'MKD',
                                                                        'MMK' => 'MMK',
                                                                        'MNT' => 'MNT',
                                                                        'MOP' => 'MOP',
                                                                        'MRO' => 'MRO',
                                                                        'MUR' => 'MUR',
                                                                        'MVR' => 'MVR',
                                                                        'MWK' => 'MWK',
                                                                        'MXN' => 'MXN',
                                                                        'MYR' => 'MYR',
                                                                        'MZN' => 'MZN',
                                                                        'NAD' => 'NAD',
                                                                        'NGN' => 'NGN',
                                                                        'NIO' => 'NIO',
                                                                        'NOK' => 'NOK',
                                                                        'NPR' => 'NPR',
                                                                        'NZD' => 'NZD',
                                                                        'OMR' => 'OMR',
                                                                        'PAB' => 'PAB',
                                                                        'PEN' => 'PEN',
                                                                        'PGK' => 'PGK',
                                                                        'PHP' => 'PHP',
                                                                        'PKR' => 'PKR',
                                                                        'PLN' => 'PLN',
                                                                        'PYG' => 'PYG',
                                                                        'QAR' => 'QAR',
                                                                        'RON' => 'RON',
                                                                        'RSD' => 'RSD',
                                                                        'RUB' => 'RUB',
                                                                        'RWF' => 'RWF',
                                                                        'SAR' => 'SAR',
                                                                        'SBD' => 'SBD',
                                                                        'SCR' => 'SCR',
                                                                        'SDG' => 'SDG',
                                                                        'SEK' => 'SEK',
                                                                        'SGD' => 'SGD',
                                                                        'SHP' => 'SHP',
                                                                        'SLL' => 'SLL',
                                                                        'SOS' => 'SOS',
                                                                        'SRD' => 'SRD',
                                                                        'STD' => 'STD',
                                                                        'SVC' => 'SVC',
                                                                        'SYP' => 'SYP',
                                                                        'SZL' => 'SZL',
                                                                        'THB' => 'THB',
                                                                        'TJS' => 'TJS',
                                                                        'TMT' => 'TMT',
                                                                        'TND' => 'TND',
                                                                        'TOP' => 'TOP',
                                                                        'TRY' => 'TRY',
                                                                        'TTD' => 'TTD',
                                                                        'TVD' => 'TVD',
                                                                        'TWD' => 'TWD',
                                                                        'TZS' => 'TZS',
                                                                        'UAH' => 'UAH',
                                                                        'UGX' => 'UGX',
                                                                        'USD' => 'USD',
                                                                        'UYU' => 'UYU',
                                                                        'UZS' => 'UZS',
                                                                        'VEF' => 'VEF',
                                                                        'VND' => 'VND',
                                                                        'VUV' => 'VUV',
                                                                        'WST' => 'WST',
                                                                        'XAF' => 'XAF',
                                                                        'XCD' => 'XCD',
                                                                        'XDR' => 'XDR',
                                                                        'XOF' => 'XOF',
                                                                        'XPF' => 'XPF',
                                                                        'YER' => 'YER',
                                                                        'ZAR' => 'ZAR',
                                                                        'ZMW' => 'ZMW',
                                                                        'ZWD' => 'ZWD'
                                                                    ]
                                                                ],
                                                                'header.musicevent.performer' => [
                                                                    'type' => 'list',
                                                                    'label' => 'Add performer',
                                                                    'field_classes' => 'togglemusicevent',
                                                                    'fields' => [
                                                                        '.@type' => [
                                                                            'type' => 'select',
                                                                            'label' => 'Performer type',
                                                                            'options' => [
                                                                                'MusicGroup' => 'MusicGroup',
                                                                                'Person' => 'Person'
                                                                            ],
                                                                            'field_classes' => 'togglemusicevent'
                                                                        ],
                                                                        '.name' => [
                                                                            'type' => 'text',
                                                                            'label' => 'Name of performer'
                                                                        ],
                                                                        '.sameAs' => [
                                                                            'type' => 'text',
                                                                            'label' => 'Same as',
                                                                            'placeholder' => 'http://en.wikipedia.org/wiki/Artist_Page'
                                                                        ]
                                                                    ]
                                                                ],
                                                                'header.musicevent.startDate' => [
                                                                    'type' => 'datetime',
                                                                    'label' => 'Date Event',
                                                                    'field_classes' => 'togglemusicevent'
                                                                ],
                                                                'header.musicevent.workPerformed' => [
                                                                    'type' => 'list',
                                                                    'label' => 'Work Performed',
                                                                    'field_classes' => 'togglemusicevent',
                                                                    'fields' => [
                                                                        '.@type' => [
                                                                            'type' => 'hidden',
                                                                            'default' => 'CreativeWork'
                                                                        ],
                                                                        '.name' => [
                                                                            'type' => 'text',
                                                                            'label' => 'Name of work'
                                                                        ],
                                                                        '.sameAs' => [
                                                                            'type' => 'text',
                                                                            'label' => 'Wikipedia URL',
                                                                            'field_classes' => 'togglemusicevent'
                                                                        ]
                                                                    ]
                                                                ]
                                                            ]
                                                        ],
                                                        'column5' => [
                                                            'type' => 'column',
                                                            'fields' => [
                                                                'header.personenabled' => [
                                                                    'type' => 'toggle',
                                                                    'label' => 'Add person microdata',
                                                                    'default' => 0,
                                                                    'options' => [
                                                                        1 => 'PLUGIN_ADMIN.YES',
                                                                        0 => 'PLUGIN_ADMIN.NO'
                                                                    ],
                                                                    'validate' => [
                                                                        'type' => 'bool'
                                                                    ]
                                                                ],
                                                                'header.person.@context' => [
                                                                    'type' => 'hidden',
                                                                    'default' => 'http://schema.org/'
                                                                ],
                                                                'header.person.@type' => [
                                                                    'type' => 'hidden',
                                                                    'default' => 'person'
                                                                ],
                                                                'header.person.name' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Name',
                                                                    'field_classes' => 'toggleperson'
                                                                ],
                                                                'header.person.jobTitle' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Job Title',
                                                                    'field_classes' => 'toggleperson'
                                                                ],
                                                                'header.person.address.@type' => [
                                                                    'type' => 'hidden',
                                                                    'default' => 'PostalAddress'
                                                                ],
                                                                'header.person.address.addressLocality' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Address Locality',
                                                                    'field_classes' => 'toggleperson'
                                                                ],
                                                                'header.person.address.addressRegion' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Address Region',
                                                                    'field_classes' => 'toggleperson'
                                                                ],
                                                                'header.eventenabled' => [
                                                                    'type' => 'toggle',
                                                                    'label' => 'Add Event Microdata',
                                                                    'default' => 0,
                                                                    'options' => [
                                                                        1 => 'PLUGIN_ADMIN.YES',
                                                                        0 => 'PLUGIN_ADMIN.NO'
                                                                    ],
                                                                    'validate' => [
                                                                        'type' => 'bool'
                                                                    ]
                                                                ],
                                                                'header.event.@context' => [
                                                                    'type' => 'hidden',
                                                                    'default' => 'http://schema.org/'
                                                                ],
                                                                'header.event.@type' => [
                                                                    'type' => 'hidden',
                                                                    'default' => 'Event'
                                                                ],
                                                                'header.event.name' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Event Name',
                                                                    'field_classes' => 'toggleevent'
                                                                ],
                                                                'header.event.description' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Event Description',
                                                                    'field_classes' => 'toggleevent'
                                                                ],
                                                                'header.event.startDate' => [
                                                                    'type' => 'date',
                                                                    'label' => 'Event start date',
                                                                    'field_classes' => 'toggleevent'
                                                                ],
                                                                'header.event.endDate' => [
                                                                    'type' => 'date',
                                                                    'label' => 'Event end date',
                                                                    'field_classes' => 'toggleevent'
                                                                ],
                                                                'header.event.location.@type' => [
                                                                    'type' => 'hidden',
                                                                    'default' => 'Place',
                                                                    'field_classes' => 'toggleevent'
                                                                ],
                                                                'header.event.location.name' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Location Name',
                                                                    'field_classes' => 'toggleevent'
                                                                ],
                                                                'header.event.location.address.streetAddress' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Location Street address',
                                                                    'field_classes' => 'toggleevent'
                                                                ],
                                                                'header.event.location.address.addressLocality' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Address Locality',
                                                                    'field_classes' => 'toggleevent'
                                                                ],
                                                                'header.event.location.address.addressRegion' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Address Region',
                                                                    'field_classes' => 'toggleevent'
                                                                ],
                                                                'header.musicalbumenabled' => [
                                                                    'type' => 'toggle',
                                                                    'label' => 'Add Music Album Microdata',
                                                                    'default' => 0,
                                                                    'options' => [
                                                                        1 => 'PLUGIN_ADMIN.YES',
                                                                        0 => 'PLUGIN_ADMIN.NO'
                                                                    ],
                                                                    'validate' => [
                                                                        'type' => 'bool'
                                                                    ]
                                                                ],
                                                                'header.musicalbum.@context' => [
                                                                    'type' => 'hidden',
                                                                    'default' => 'http://schema.org/',
                                                                    'field_classes' => 'togglemusicalbum'
                                                                ],
                                                                'header.musicalbum.@type' => [
                                                                    'type' => 'hidden',
                                                                    'default' => 'MusicAlbum'
                                                                ],
                                                                'header.musicalbum.name' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Album Name',
                                                                    'field_classes' => 'togglemusicalbum'
                                                                ],
                                                                'header.musicalbum.byArtist.@type' => [
                                                                    'type' => 'hidden',
                                                                    'default' => 'MusicGroup'
                                                                ],
                                                                'header.musicalbum.byArtist.name' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Name of band',
                                                                    'field_classes' => 'togglemusicalbum'
                                                                ],
                                                                'header.musicalbum.image' => [
                                                                    'type' => 'filepicker',
                                                                    'label' => 'album image',
                                                                    'field_classes' => 'togglemusicalbum'
                                                                ],
                                                                'header.musicalbum.url' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Music Album url',
                                                                    'field_classes' => 'togglemusicalbum'
                                                                ],
                                                                'header.musicalbum.genre' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Music Abum Genre',
                                                                    'field_classes' => 'togglemusicalbum'
                                                                ],
                                                                'header.musicalbum.numtracks' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Number of tracks',
                                                                    'field_classes' => 'togglemusicalbum'
                                                                ],
                                                                'header.musicalbum.track' => [
                                                                    'type' => 'list',
                                                                    'field_classes' => 'togglemusicalbum',
                                                                    'default' => NULL,
                                                                    'fields' => [
                                                                        '.@type' => [
                                                                            'type' => 'hidden',
                                                                            'default' => 'MusicRecording'
                                                                        ],
                                                                        '.position' => [
                                                                            'type' => 'text',
                                                                            'label' => 'track position'
                                                                        ],
                                                                        '.name' => [
                                                                            'type' => 'text',
                                                                            'label' => 'Name'
                                                                        ],
                                                                        '.url' => [
                                                                            'type' => 'text',
                                                                            'label' => 'Track url'
                                                                        ],
                                                                        '.duration' => [
                                                                            'type' => 'text',
                                                                            'label' => 'Track duration'
                                                                        ]
                                                                    ]
                                                                ],
                                                                'header.restaurantenabled' => [
                                                                    'type' => 'toggle',
                                                                    'label' => 'Add Restaurant Microdata',
                                                                    'default' => 0,
                                                                    'options' => [
                                                                        1 => 'PLUGIN_ADMIN.YES',
                                                                        0 => 'PLUGIN_ADMIN.NO'
                                                                    ],
                                                                    'validate' => [
                                                                        'type' => 'bool'
                                                                    ]
                                                                ],
                                                                'header.restaurant.@context' => [
                                                                    'type' => 'hidden',
                                                                    'default' => 'http://schema.org/'
                                                                ],
                                                                'header.restaurant.@type' => [
                                                                    'type' => 'hidden',
                                                                    'default' => 'Restaurant'
                                                                ],
                                                                'header.restaurant.name' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Restaurant Name',
                                                                    'field_classes' => 'togglerestaurant'
                                                                ],
                                                                'header.restaurant.acceptsReservations' => [
                                                                    'type' => 'select',
                                                                    'label' => 'Accept Reservation',
                                                                    'field_classes' => 'togglerestaurant',
                                                                    'options' => [
                                                                        'yes' => 'yes',
                                                                        'no' => 'no'
                                                                    ]
                                                                ],
                                                                'header.restaurant.menu' => [
                                                                    'type' => 'text',
                                                                    'label' => 'menu url',
                                                                    'field_classes' => 'togglerestaurant'
                                                                ],
                                                                'header.restaurant.image' => [
                                                                    'type' => 'filepicker',
                                                                    'label' => 'Restaurant Image',
                                                                    'preview_images' => true,
                                                                    'field_classes' => 'togglerestaurant'
                                                                ],
                                                                'header.restaurant.servesCuisine' => [
                                                                    'placeholder' => 'seafood',
                                                                    'type' => 'text',
                                                                    'label' => 'Cuisine',
                                                                    'field_classes' => 'togglerestaurant'
                                                                ],
                                                                'header.restaurant.priceRange' => [
                                                                    'type' => 'select',
                                                                    'label' => 'Price Range',
                                                                    'field_classes' => 'togglerestaurant',
                                                                    'options' => [
                                                                        '$' => '$',
                                                                        '$$' => '$$',
                                                                        '$$$' => '$$$'
                                                                    ]
                                                                ],
                                                                'header.restaurant.address.@type' => [
                                                                    'type' => 'hidden',
                                                                    'default' => 'PostalAddress'
                                                                ],
                                                                'header.restaurant.address.streetAddress' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Street Address',
                                                                    'field_classes' => 'togglerestaurant'
                                                                ],
                                                                'header.restaurant.address.addressLocality' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Address Locality',
                                                                    'field_classes' => 'togglerestaurant'
                                                                ],
                                                                'header.restaurant.address.addressRegion' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Address Region',
                                                                    'field_classes' => 'togglerestaurant'
                                                                ],
                                                                'header.restaurant.address.postalCode' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Postal Code',
                                                                    'field_classes' => 'togglerestaurant'
                                                                ],
                                                                'header.restaurant.telephone' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Telephone',
                                                                    'field_classes' => 'togglerestaurant'
                                                                ],
                                                                'header.scripttoggle' => [
                                                                    'type' => 'schema'
                                                                ]
                                                            ]
                                                        ]
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'facebookfields' => [
                                            'type' => 'tab',
                                            'title' => 'Facebook',
                                            'fields' => [
                                                'columns2' => [
                                                    'type' => 'columns',
                                                    'fields' => [
                                                        'column3' => [
                                                            'type' => 'column',
                                                            'fields' => [
                                                                'header.facebookenable' => [
                                                                    'type' => 'toggle',
                                                                    'label' => 'PLUGINS.SEO.FACEBOOK_ENABLE',
                                                                    'default' => 1,
                                                                    'highlight' => 1,
                                                                    'options' => [
                                                                        1 => 'PLUGIN_ADMIN.YES',
                                                                        0 => 'PLUGIN_ADMIN.NO'
                                                                    ],
                                                                    'validate' => [
                                                                        'type' => 'bool'
                                                                    ]
                                                                ],
                                                                'header.facebooktitle' => [
                                                                    'type' => 'text',
                                                                    'label' => 'PLUGINS.SEO.FACEBOOK_TITLE',
                                                                    'id' => 'facebooktitle'
                                                                ],
                                                                'header.facebookdesc' => [
                                                                    'type' => 'textarea',
                                                                    'label' => 'PLUGINS.SEO.FACEBOOK_DESC',
                                                                    'id' => 'facebookdesc',
                                                                    'placeholder' => 'Max 300 character'
                                                                ],
                                                                'header.facebookimg' => [
                                                                    'type' => 'filepicker',
                                                                    'id' => 'fbimgselect',
                                                                    'label' => 'PLUGINS.SEO.FACEBOOK_SHAREIMG',
                                                                    'preview_images' => true
                                                                ]
                                                            ]
                                                        ],
                                                        'column4' => [
                                                            'type' => 'column',
                                                            'fields' => [
                                                                'header.facebookpreview' => [
                                                                    'type' => 'facebook',
                                                                    'label' => 'PLUGINS.SEO.FACEBOOK_PREVIEWDESC'
                                                                ]
                                                            ]
                                                        ]
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];

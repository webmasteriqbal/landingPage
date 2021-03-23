<?php

/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "IQBAL HASAN", // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'iqbalhasan.dev is a portfolio and multipurpose website. This website will be used primarily as a portfolio of IQBAL HASN and will be used for public blogging, open source packages, free tutorials and client management through several subdomains.', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['iqbal', 'hasan', 'dev', 'iqbalhasandev', 'iqbal hasan dev', 'iqbal hasan', 'iqbalhasan.dev', 'iqbalhasndev', 'web', 'developer', 'open source package', 'laravel', 'laravel developer', 'web designer', 'node js developer', 'vue js developer'],
            'canonical'    => null, // Set null for using Url::current(), set false to total remove
            'robots'       => false, // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => 'a-Xr6Dur7lfvJHXO3XtU-ufgUVosHLkcqh9xqJaJ4Yw',
            'bing'      => '0769EA1BE7114D8AD839FC2AA5C35303',
            'alexa'     => null,
            'pinterest' => '2f6a1f0b7ca951c6f9009e0d48e86998',
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'IQBAL HASAN', // set false to total remove
            'description'  => 'iqbalhasan.dev is a portfolio and multipurpose website. This website will be used primarily as a portfolio of IQBAL HASN and will be used for public blogging, open source packages, free tutorials and client management through several subdomains.', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => 'iqbalhasan.dev',
            'images'      => [
                'https://iqbalhasan.dev/img/profile/iqbal-1.jpg',
                'https://iqbalhasan.dev/img/profile/iqbal-2.jpg',
                'https://iqbalhasan.dev/img/profile/iqbal-3.jpg',
                'https://iqbalhasan.dev/img/profile/iqbal-4.jpg',
                'https://iqbalhasan.dev/img/profile/iqbal-5.jpg',
                'https://iqbalhasan.dev/img/profile/iqbal-6.jpg',
                'https://iqbalhasan.dev/img/profile/iqbal-7.jpg',
                'https://iqbalhasan.dev/img/profile/iqbal-8.jpg',
                'https://iqbalhasan.dev/img/profile/iqbal-9.jpg'
            ],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'IQBAL HASAN', // set false to total remove
            'description'  => 'iqbalhasan.dev is a portfolio and multipurpose website. This website will be used primarily as a portfolio of IQBAL HASN and will be used for public blogging, open source packages, free tutorials and client management through several subdomains.', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [
                'https://iqbalhasan.dev/img/profile/iqbal-1.jpg',
                'https://iqbalhasan.dev/img/profile/iqbal-2.jpg',
                'https://iqbalhasan.dev/img/profile/iqbal-3.jpg',
                'https://iqbalhasan.dev/img/profile/iqbal-4.jpg',
                'https://iqbalhasan.dev/img/profile/iqbal-5.jpg',
                'https://iqbalhasan.dev/img/profile/iqbal-6.jpg',
                'https://iqbalhasan.dev/img/profile/iqbal-7.jpg',
                'https://iqbalhasan.dev/img/profile/iqbal-8.jpg',
                'https://iqbalhasan.dev/img/profile/iqbal-9.jpg'
            ],
        ],
    ],
];

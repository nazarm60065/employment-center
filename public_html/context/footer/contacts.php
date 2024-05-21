<?

return [
    'items' => collect([
        [
            'title' => 'присылайте резюме',
            'link' => [
                'href' => 'mailto:priem@zanamur.ru',
                'text' => 'priem@zanamur.ru',
            ],
        ],
        [
            'title' => 'звоните',
            'link' => [
                'href' => 'tel:+74162493103',
                'text' => '+7 (4162) 493-103',
            ],
        ],
        [
            'title' => 'следите в соцсетях',
            'socials' => collect([
                [
                    'href' => '#',
                    'text' => 'VK',
                ],
                [
                    'href' => '#',
                    'text' => 'TG',
                ],
                [
                    'href' => '#',
                    'text' => 'OK',
                ],
            ]),
        ],
    ])
];
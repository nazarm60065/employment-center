<?

/** @var array $pageConfig */

return [
    'isMainPage' => $pageConfig['isMainPage'],
    'menu' => collect([
        [
            'href' => '#features',
            'text' => 'О регионе',
            'active' => false,
        ],
        [
            'href' => '#career',
            'text' => 'Вакансии',
            'active' => false,
        ],
        [
            'href' => '#support',
            'text' => 'Меры поддержки',
            'active' => false,
        ],
        [
            'href' => '#transfer',
            'text' => 'Кому подойдет',
            'active' => false,
        ],
        [
            'href' => '#news',
            'text' => 'Новости',
            'active' => false,
        ],
    ])
];
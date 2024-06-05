<?

$mustache = new Mustache_Engine([
    'loader' => new Mustache_Loader_FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . '/local/assets/mustache/')
]);

return [
    'ajax_component_id' => 'modal-form',
    'action' => '',
    'title' => 'Хотите <em>переехать</em><br> в Амурскую область?',
    'sub_title' => 'Оставьте свои данные и рекрутер<br> свяжется с вами',
    'submit_text' => 'Отправить данные',
    'successMessageTitle' => 'Спасибо за обращение!',
    'successMessageText' => 'Наш рекрутер свяжется с вами в ближайшее время',
    'html_fields' => [
        [
            'html' => $mustache->render('form__control_type_text', [
                'placeholder' => 'Ваш номер',
                'code' => 'PHONE',
                'required' => true,
                'requiredCssClass' => 'form__control_required',
                'additionalCssClass' => 'form__control_tel',
                'inputmode' => 'tel',
                'label' => '',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 20 20"><path stroke="#005DE9" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.541 4.166a4.167 4.167 0 0 1 3.292 3.292M12.541.833a7.5 7.5 0 0 1 6.625 6.617m-.833 6.65v2.5a1.667 1.667 0 0 1-1.816 1.666 16.49 16.49 0 0 1-7.192-2.558 16.25 16.25 0 0 1-5-5 16.492 16.492 0 0 1-2.558-7.225 1.666 1.666 0 0 1 1.658-1.817h2.5A1.667 1.667 0 0 1 7.592 3.1c.105.8.3 1.585.583 2.341A1.667 1.667 0 0 1 7.8 7.2L6.742 8.258a13.333 13.333 0 0 0 5 5L12.8 12.2a1.665 1.665 0 0 1 1.758-.375 10.7 10.7 0 0 0 2.342.583 1.666 1.666 0 0 1 1.433 1.692Z"/></svg>',
            ])
        ],
        [
            'html' => $mustache->render('form__control_type_text', [
                'placeholder' => 'Ваша почта',
                'code' => 'EMAIL',
                'required' => true,
                'requiredCssClass' => 'form__control_required',
                'additionalCssClass' => '',
                'inputmode' => 'email',
                'label' => '',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 20 20"><path stroke="#005DE9" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.333 3.333h13.334c.916 0 1.666.75 1.666 1.667v10c0 .916-.75 1.666-1.666 1.666H3.332c-.917 0-1.667-.75-1.667-1.666V5c0-.917.75-1.667 1.667-1.667Z"/><path stroke="#005DE9" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.333 5 10 10.833 1.667 5"/></svg>',
            ])
        ],
        [
            'html' => $mustache->render('form__control_type_textarea', [
                'placeholder' => 'Комментарий',
                'code' => 'MESSAGE',
                'required' => false,
                'requiredCssClass' => '',
                'additionalCssClass' => '',
                'label' => '',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 20 20"><path stroke="#005DE9" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12.5a1.666 1.666 0 0 1-1.667 1.667h-10L2.5 17.5V4.167A1.667 1.667 0 0 1 4.167 2.5h11.666A1.666 1.666 0 0 1 17.5 4.167V12.5Z"/></svg>',
            ])
        ],
    ],
];
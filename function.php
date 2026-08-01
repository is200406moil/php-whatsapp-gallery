<?php

function handler($event, $context)
{
    $phone = '79991234567';

    $photo1 = 'https://images.unsplash.com/photo-1501785888041-af3ef285b470?w=600';
    $photo2 = 'https://images.unsplash.com/photo-1441974231531-c6227db76b6e?w=600';
    $photo3 = 'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?w=600';

    $link1 = 'https://wa.me/' . $phone . '?text=' . rawurlencode('Фото: ' . $photo1);
    $link2 = 'https://wa.me/' . $phone . '?text=' . rawurlencode('Фото: ' . $photo2);
    $link3 = 'https://wa.me/' . $phone . '?text=' . rawurlencode('Фото: ' . $photo3);

    $html = <<<HTML
<h1>Фотографии</h1>

<a href="$link1"><img src="$photo1" width="300" alt="Фото"></a>
<a href="$link2"><img src="$photo2" width="300" alt="Фото"></a>
<a href="$link3"><img src="$photo3" width="300" alt="Фото"></a>
HTML;

    return [
        'statusCode' => 200,
        'headers' => ['Content-Type' => 'text/html; charset=UTF-8'],
        'body' => $html,
    ];
}

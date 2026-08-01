<?php
$phone = '79966550666';

$photo1 = 'https://images.unsplash.com/photo-1501785888041-af3ef285b470?w=600';
$photo2 = 'https://images.unsplash.com/photo-1441974231531-c6227db76b6e?w=600';
$photo3 = 'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?w=600';

$link1 = 'https://wa.me/' . $phone . '?text=' . urlencode('Фото: ' . $photo1);
$link2 = 'https://wa.me/' . $phone . '?text=' . urlencode('Фото: ' . $photo2);
$link3 = 'https://wa.me/' . $phone . '?text=' . urlencode('Фото: ' . $photo3);
?>

<h1>Фотографии</h1>

<a href="<?php echo $link1; ?>">
    <img src="<?php echo $photo1; ?>" width="300">
</a>

<a href="<?php echo $link2; ?>">
    <img src="<?php echo $photo2; ?>" width="300">
</a>

<a href="<?php echo $link3; ?>">
    <img src="<?php echo $photo3; ?>" width="300">
</a>

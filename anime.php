<?php
$data = json_encode([
    'anime' => [
        [
            'title' => 'Naruto',
            'synopsis' => 'A story about a young ninja.',
        ],
        [
            'title' => 'One Piece',
            'synopsis' => 'A story about pirates searching for treasure.',
        ],
    ]
]);
echo $data;
?>

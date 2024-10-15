<?php
function recommendMood($mood) {
    // Creamos un array asociativo con diferentes estados de ánimo y recomendaciones
    $moodMenu = [
        'feliz' => [
            'cancion' => 'canciones/loveyousobad.mp3',
            'imagen' => 'imagenes/loveyousobad.jpg',
            'titulo' => 'Love You So Bad - Ezra Furman',
            'color' => '#FFD700',
            'otras_canciones' => [
                'The Interrupters - Gave You Everything',
                'Pharrell Williams - Happy'
            ]
        ],
        'triste' => [
            'cancion' => 'canciones/badliar.mp3',
            'imagen' => 'imagenes/badliar.jpg',
            'titulo' => 'Bad Liar - Imagine Dragons',
            'color' => '#0000FF',
            'otras_canciones' => [
                'Silvia Pérez Cruz - No Hay Tanto Pan',
                'Ezio Bosso - Rain, In Your Black Eyes'
            ]
        ],
        'energetico' => [
            'cancion' => 'canciones/thunderstruck.mp3',
            'imagen' => 'imagenes/thunderstruck.jpg',
            'titulo' => 'Thunderstruck - AC/DC',
            'color' => '#FF4500',
            'otras_canciones' => [
                'Rage Against the Machine - Killing in the Name',
                'Queen - Don\'t Stop Me Now'
            ]
        ],
        'relajado' => [
            'cancion' => 'canciones/ilovesyouporgy.mp3',
            'imagen' => 'imagenes/ilovesyouporgy.jpg',
            'titulo' => 'I loves You Porgy - Paolo Fresu',
            'color' => '#00FF7F',
            'otras_canciones' => [
                'Ludovico Einaudi - Nuvole Bianche',
                'Norah Jones - Don\'t Know Why'
            ]
        ],
        'inspirado' => [
            'cancion' => 'canciones/nicetomeetyou.mp3',
            'imagen' => 'imagenes/nicetomeetyou.jpg',
            'titulo' => 'Nice to Meet You - Imagine Dragons',
            'color' => '#8A2BE2',
            'otras_canciones' => [
                'Alt-J - Breezeblocks',
                'Beethoven - Moonlight Sonata'
            ]
        ],
        'estresado' => [
            'cancion' => 'canciones/imsosorry.mp3',
            'imagen' => 'imagenes/imsosorry.jpg',
            'titulo' => 'I\'m So Sorry - Imagine Dragons',
            'color' => '#FF6347',
            'otras_canciones' => [
                'John Coltrane - Giant Steps',
                'Miles Davis - So What'
            ]
        ]
    ];

    // Verificamos si el estado de ánimo está en el array
    if (array_key_exists($mood, $moodMenu)) {
        return $moodMenu[$mood];
    }
    return null;
}
?>
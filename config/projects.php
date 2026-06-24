<?php

return [

    'front' => [

        [
            'title' => 'Usine Chocolat',
            'type' => 'video',
            'media' => 'projects/front/usinechoco.mp4',
            'description' => 'Site vitrine réalisé pour les visiteurs de l\'usine chocolat des journées portes ouverts de l\'IUT d\'Haguenau',
            'tags' => [
                'HTML',
                'CSS',
                'Javascript'
            ]
        ],

        [
            'title' => 'Le jeu Dé\'cheh',
            'type' => 'video',
            'media' => 'projects/front/decheh.mp4',
            'description' => 'Projet réalisé pour "La maison pour la science" lors d\'une SAE. Dans celui-ci il est possible de trier des déchets dans des cases. Ce projet a été fait en grande partie avec Javascript afin de permettre le glisser déposer et la validation des tris',
            'tags' => [
                'Js',
                'Symfony',
                'PHP'
            ]
        ]

    ],

    'back' => [

        [
            'title' => 'Screllum',
            'type' => 'video',
            'media' => 'projects/back/screllum.mp4',
            'description' => 'Projet de SAE visant à créer un site de gestion de projet semblable à Trello',
            'tags' => [
                'Laravel',
                'MySql',
                'Tailwind'
            ]
        ],

        [
            'title' => 'Si la vie m\'était chantée',
            'type' => 'video',
            'media' => 'projects/back/silavie.mp4',
            'description' => 'Gestion complète des utilisateurs.',
            'tags' => [
                'Admin',
                'CRUD',
                'PHP'
            ]
        ]

    ]

];
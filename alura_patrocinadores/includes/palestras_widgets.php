<?php

class PatrocinadoresAlura extends WP_Widget{
    public function __construct()
    {
        parent::__construct(
            'al_patrocinadores_widget',
            'Patrocinadores Palestras',
            [
                'description' => 'Selecione os patrocinadores da palestras'
            ]
        );
    }
}
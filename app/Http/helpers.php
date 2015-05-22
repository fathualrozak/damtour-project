<?php

function getProperties() {
    $return = [
        'genders' => [
            'male' => 'Laki-laki',
            'female' => 'Perempuan'
        ],
        'idcard_types' => [
            'ktp'   => 'KTP',
            'sim'   => 'SIM',
            'passport'  => 'Passport'
        ],
        'educations' => [
            'sd' => 'SD',
            'smp' => 'SMP',
            'sma' => 'SMA',
            'd1' => 'D1',
            'd2' => 'D2',
            'd3' => 'D3',
            's1' => 'S1',
            's2' => 'S2'
        ],
        'dress_sizes' => [
            's' => 'S',
            'm' => 'M',
            'l' => 'L',
            'x' => 'X',
            'xl' => 'XL',
            'xxl' => 'XXL'
        ]
    ];

    return $return;
}
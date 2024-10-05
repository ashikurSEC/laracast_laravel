<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'jobs' => [
            [
                'title'     => 'Director',
                'salary'    => '$30000'
            ],
            [
                'title'     => 'Manager',
                'salary'    => '$20000'
            ],
            [
                'title'     => 'Developer',
                'salary'    => '$60000'
            ]
        ]
    ]);
});


Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id'        => 1,
                'title'     => 'Director',
                'salary'    => '$30000'
            ],
            [
                'id'        => 2,
                'title'     => 'Manager',
                'salary'    => '$20000'
            ],
            [
                'id'        => 3,
                'title'     => 'Developer',
                'salary'    => '$60000'
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function($id) {
    $jobs = [
        [
            'id'        => 1,
            'title'     => 'Director',
            'salary'    => '$30000'
        ],
        [
            'id'        => 2,
            'title'     => 'Manager',
            'salary'    => '$20000'
        ],
        [
            'id'        => 3,
            'title'     => 'Developer',
            'salary'    => '$60000'
        ]
    ];

   $job = Arr::first($jobs, fn($job)=>$job['id']==$id);

   if ( !$job ) {
    abort(404);
   }

   return view('job', ['job'=>$job]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

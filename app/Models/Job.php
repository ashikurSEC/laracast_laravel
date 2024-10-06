<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job{
    public static function all ()
    {
        return [
            ['id' => 1, 'title' => 'Software Developer', 'salary' => '$100,000'],
            ['id' => 2, 'title' => 'Software Architect', 'salary' => '$200,000'],
            ['id' => 3, 'title' => 'Product Manager', 'salary' => '$300,000'],
            ['id' => 4, 'title' => 'Marketing Manager', 'salary' => '$400,000'],
            ['id' => 5, 'title' => 'Marketing Coordinator', 'salary' => '$500,000'],
        ];
    }

    public static function find ( $id ): array
    {
        $job = Arr::first( self::all(),fn( $job ) => $job['id'] == $id );

        if ( ! $job ) {
            abort(404);
        }

        return $job;
    }
}



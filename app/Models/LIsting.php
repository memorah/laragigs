<?php

namespace App\Models;

class Listing
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'lorem psum dolorelorem psum dolorelorem psum dolorelorem psum dolorelorem psum dolorelorem psum dolorelorem psum dolorelorem psum dolorelorem psum dolorelorem psum dolore'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => ' orem psum dolorelorem psum dolorelorem psum dolorelorem psum dolorelorem psum dolorelorem psum dolorelorem psum dolorelorem psum dolorelorem psum dolorelorem psum dolore'
            ]
        ];
    }
    public static function find($id)
    {
        $listings = self::all();

        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}

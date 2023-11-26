<?php

    namespace App\helpers;

    use Illuminate\Http\Request;

    class Uploads
    {
        public static function uploadFile ( Request $request , string $key ) : string
        {
            return basename( $request -> file( $key ) -> store( 'public' ) );
        }
    }

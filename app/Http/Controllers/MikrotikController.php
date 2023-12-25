<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class MikrotikController extends Controller
    {
        public function getData ( Request $request )
        {
            $router_url = 'us-1.hostddns.us:17190';

//            $response   = Http ::post( "http://192.168.88.1/rest/ip/hotspot/user/add" , [
//                'name' => 'Steve' ,
//                'role' => 'Network Administrator' ,
//            ] );
//            info( $request -> all() );
            return redirect( '' );
        }

        public function redirect ()
        {
            return redirect() -> to( 'https://www.google.com' ) -> send();

        }
    }

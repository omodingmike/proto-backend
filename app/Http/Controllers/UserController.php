<?php

    namespace App\Http\Controllers;

    use App\helpers\Response;
    use App\Models\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Hash;

    class UserController extends Controller
    {
        public function login ( Request $request )
        {
            $user = User :: where( 'email' , $request -> email ) -> first();
            if ( $user ) {
                if ( Hash ::check( $request -> password , $user -> password ) ) {
                    return Response ::success( $user );
                } else {
                    return Response ::error( 'Invalid login credentials' , 401 );
                }
            } else {
                return Response ::error( 'Invalid login credentials' , 404 );
            }
        }

        public function signup ( Request $request )
        {
            $user = User :: create( [
                'name'     => $request -> name ,
                'email'    => $request -> email ,
                'password' => Hash ::make( $request -> password ) ,
                'role'     => 'user' ,
            ] );
            if ( $user ) {
                return Response ::success( $user );
            } else {
                return Response ::error( 'user could not be created' );
            }
        }
    }

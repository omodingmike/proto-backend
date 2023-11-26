<?php

    namespace App\Http\Controllers;

    use App\helpers\Response;
    use App\helpers\Uploads;
    use App\Models\Destination;
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Hash;

    class DestinationController extends Controller
    {
        public function index () : JsonResponse
        {
            return Response ::success( Destination ::all() );
        }

        public function test ()
        {
            return Hash ::make( "admin@gmail.com" );
        }

        public function store ( Request $request )
        {
            $image                = Uploads ::uploadFile( $request , "image" );
            $destination_category = Destination ::create( [
                'name'        => $request -> name ,
                'cost'        => $request -> cost ,
                'description' => $request -> description ,
                'distance'    => $request -> distance ,
                'image'       => $image ,
                'duration'    => $request -> duration ,
            ] );
            return Response ::success( $destination_category );
        }

        public function update ( Request $request )
        {
            $destination = Destination ::find( $request -> id );
            $destination -> update( [
                'name'        => $request -> name ,
                'cost'        => $request -> cost ,
                'description' => $request -> description ,
                'distance'    => $request -> distance ,
                'image'       => $request -> hasFile( 'image' ) ? Uploads ::uploadFile( $request , 'image' ) : basename( $destination -> image ) ,
                'duration'    => $request -> duration ,
            ] );
            return Response ::success( Destination ::all() );
        }

        public function show ( Request $request )
        {
            return Response ::success( Destination ::find( $request -> id ) );
        }

        public function destroy ( Request $request )
        {
            Destination ::find( $request -> id ) -> delete();
            return Response ::success( Destination ::all() );
        }
    }

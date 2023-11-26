<?php

    namespace App\Http\Controllers;

    use App\helpers\Response;
    use App\Models\Destination;
    use App\Models\DestinationCategory;
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;

    class DestinationCategoryController extends Controller
    {
        public function index ( Request $request ) : JsonResponse
        {
            return Response ::success( DestinationCategory ::find( $request -> id ) -> destinations );
        }

        public function search ( Request $request ) : JsonResponse
        {
            $name = $request -> name;
//            $data = DestinationCategory ::whereHas( 'destinations' , function ( $query ) use ( $name ) {
//                $query -> where( 'name' , 'like' , '%' . $name . '%' );
//            } ) -> with( [
//                'destinations' => function ( $query ) use ( $name ) {
//                    $query -> where( 'name' , 'like' , '%' . $name . '%' );
//                }
//            ] ) -> get();

//            Destination ::where( 'name' , 'like' , '%' . $name . '%' ) -> get();

            return Response ::success( Destination ::where( 'name' , 'like' , '%' . $name . '%' ) -> get() );
        }

        public function store ( Request $request )
        {
            $destination_category = DestinationCategory ::create( [
                'name' => $request -> name
            ] );
            return Response ::success( $destination_category );
        }

        public function update ( Request $request )
        {
            $destination_category = DestinationCategory ::find( $request -> id );
            $destination_category -> update( [ 'name' => $request -> name ] );
            return Response ::success( DestinationCategory ::all() );
        }

        public function destroy ( Request $request )
        {
            $destination_category = DestinationCategory ::find( $request -> id ) -> delete();
            return Response ::success( DestinationCategory ::all() );
        }
    }

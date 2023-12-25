<?php

    namespace App\Providers;

    use Illuminate\Support\Facades\Artisan;
    use Illuminate\Support\Facades\File;
    use Illuminate\Support\ServiceProvider;

    class AppServiceProvider extends ServiceProvider
    {
        /**
         * Register any application services.
         */
        public function register () : void
        {
            //
        }

        /**
         * Bootstrap any application services.
         */
        public function boot () : void
        {
            $directory  = storage_path( 'app/images' );
            $files      = File ::files( $directory );
            $file_names = array_map( 'basename' , $files );
//            $data       = [
//                [
//                    'name'        => 'Singapore' ,
//                    'description' => 'Singapore, officially the Republic of Singapore, is a sovereign island city-state in maritime Southeast.' ,
//                    'image'       => 'singapore' ,
//                    'distance'    => '1000 Kms' ,
//                    'duration'    => 'Approx 2 night trip' ,
//                    'cost'        => '€ 10,000' ,
//                ] ,
//                [
//                    'name'        => 'Thailand' ,
//                    'description' => 'Thailand is a Southeast Asian country. It\'s known for tropical beaches, opulent royal palaces' ,
//                    'image'       => 'thailand' ,
//                    'distance'    => '1000 Kms' ,
//                    'duration'    => 'Approx 2 night trip' ,
//                    'cost'        => '€ 10,000' ,
//                ] ,
//                [
//                    'name'        => 'Paris' ,
//                    'description' => 'Paris, France\'s capital, is a major European city and a global center for art, fashion, gastronomy and' ,
//                    'image'       => 'paris' ,
//                    'distance'    => '1000 Kms' ,
//                    'duration'    => 'Approx 2 night trip' ,
//                    'cost'        => '€ 10,000' ,
//                ] ,
//                [
//                    'name'        => 'New Zealand' ,
//                    'description' => 'New Zealand is an island country in the southwestern Pacific Ocean. It consists of two' ,
//                    'image'       => 'newZealand' ,
//                    'distance'    => '1000 Kms' ,
//                    'duration'    => 'Approx 2 night trip' ,
//                    'cost'        => '₹ 38,800' ,
//                ] ,
//                [
//                    'name'        => 'Bora Bora' ,
//                    'description' => 'Bora Bora is a small South Pacific island northwest of Tahiti in French Polynesia. Surrounded by sand' ,
//                    'image'       => 'bora' ,
//                    'distance'    => '1000 Kms' ,
//                    'duration'    => 'Approx 2 night trip' ,
//                    'cost'        => '₹ 38,800' ,
//                ] ,
//                [
//                    'name'        => 'London' ,
//                    'description' => 'London, the capital of England and the United Kingdom, is a 21st-century city with history' ,
//                    'image'       => 'england' ,
//                    'distance'    => '1000 Kms' ,
//                    'duration'    => 'Approx 2 night trip' ,
//                    'cost'        => '₹ 38,800' ,
//                ] ,
//            ];
            $additionalData = [
                [
                    'name'        => 'Tokyo' ,
                    'description' => 'Tokyo is the capital of Japan and one of the 47 prefectures. It offers a mix of modern and traditional attractions.' ,
                    'image'       => 'tokyo' ,
                    'distance'    => '1500 Kms' ,
                    'duration'    => 'Approx 3 night trip' ,
                    'cost'        => '¥ 15,000' ,
                ] ,
                [
                    'name'        => 'Seoul' ,
                    'description' => 'Seoul is the capital and largest metropolis of South Korea, known for its vibrant culture and historic landmarks.' ,
                    'image'       => 'seoul' ,
                    'distance'    => '1200 Kms' ,
                    'duration'    => 'Approx 2 night trip' ,
                    'cost'        => '₩ 12,000' ,
                ] ,
                [
                    'name'        => 'Beijing' ,
                    'description' => 'Beijing is the capital of China and one of the world\'s oldest and most populous cities. It has a rich history and cultural heritage.' ,
                    'image'       => 'beijing' ,
                    'distance'    => '1800 Kms' ,
                    'duration'    => 'Approx 4 night trip' ,
                    'cost'        => '¥ 18,000' ,
                ] ,
                [
                    'name'        => 'Bangkok' ,
                    'description' => 'Bangkok is the capital and largest city of Thailand, known for its ornate shrines and vibrant street life.' ,
                    'image'       => 'bangkok' ,
                    'distance'    => '1000 Kms' ,
                    'duration'    => 'Approx 2 night trip' ,
                    'cost'        => '฿ 8,000' ,
                ] ,
                [
                    'name'        => 'Mumbai' ,
                    'description' => 'Mumbai is the financial, commercial, and entertainment capital of India, known for its bustling markets and historic landmarks.' ,
                    'image'       => 'mumbai' ,
                    'distance'    => '1200 Kms' ,
                    'duration'    => 'Approx 3 night trip' ,
                    'cost'        => '₹ 20,000' ,
                ] ,
                [
                    'name'        => 'Hanoi' ,
                    'description' => 'Hanoi is the capital of Vietnam, known for its centuries-old architecture and a rich culture with Southeast Asian, Chinese, and French influences.' ,
                    'image'       => 'hanoi' ,
                    'distance'    => '900 Kms' ,
                    'duration'    => 'Approx 2 night trip' ,
                    'cost'        => '₫ 9,000,000' ,
                ] ,
            ];
            $africanData    = [
                [
                    'name'        => 'Cape Town' ,
                    'description' => 'Cape Town is a port city on South Africa’s southwest coast, known for its stunning landscapes, including Table Mountain and the Cape of Good Hope.' ,
                    'image'       => 'cape_town' ,
                    'distance'    => '1200 Kms' ,
                    'duration'    => 'Approx 3 night trip' ,
                    'cost'        => 'ZAR 15,000' ,
                ] ,
                [
                    'name'        => 'Marrakech' ,
                    'description' => 'Marrakech is a major city in the Kingdom of Morocco, known for its vibrant markets, palaces, and gardens.' ,
                    'image'       => 'marrakech' ,
                    'distance'    => '1000 Kms' ,
                    'duration'    => 'Approx 2 night trip' ,
                    'cost'        => 'MAD 10,000' ,
                ] ,
                [
                    'name'        => 'Nairobi' ,
                    'description' => 'Nairobi is the capital and largest city of Kenya, known for its national parks, wildlife, and cultural attractions.' ,
                    'image'       => 'nairobi' ,
                    'distance'    => '800 Kms' ,
                    'duration'    => 'Approx 2 night trip' ,
                    'cost'        => 'KES 8,000' ,
                ] ,
                [
                    'name'        => 'Cairo' ,
                    'description' => 'Cairo is the capital of Egypt and a major city in the Arab world, known for its ancient pyramids and historic landmarks.' ,
                    'image'       => 'cairo' ,
                    'distance'    => '1500 Kms' ,
                    'duration'    => 'Approx 4 night trip' ,
                    'cost'        => 'EGP 20,000' ,
                ] ,
                [
                    'name'        => 'Cape Verde' ,
                    'description' => 'Cape Verde is an island country in the central Atlantic Ocean, known for its diverse landscapes and rich cultural heritage.' ,
                    'image'       => 'cape_verde' ,
                    'distance'    => '2000 Kms' ,
                    'duration'    => 'Approx 5 night trip' ,
                    'cost'        => 'CVE 25,000' ,
                ] ,
                [
                    'name'        => 'Accra' ,
                    'description' => 'Accra is the capital and largest city of Ghana, known for its vibrant markets, colonial architecture, and cultural sites.' ,
                    'image'       => 'accra' ,
                    'distance'    => '1200 Kms' ,
                    'duration'    => 'Approx 3 night trip' ,
                    'cost'        => 'GHS 12,000' ,
                ] ,
            ];
            $americanData   = [
                [
                    'name'        => 'New York City' ,
                    'description' => 'New York City is the most populous city in the United States, known for its iconic landmarks, Broadway theaters, and diverse culture.' ,
                    'image'       => 'new_york' ,
                    'distance'    => '1500 Kms' ,
                    'duration'    => 'Approx 4 night trip' ,
                    'cost'        => '$ 2,000' ,
                ] ,
                [
                    'name'        => 'Rio de Janeiro' ,
                    'description' => 'Rio de Janeiro is a vibrant city in Brazil, famous for its annual carnival, beautiful beaches, and iconic Christ the Redeemer statue.' ,
                    'image'       => 'rio_de_janeiro' ,
                    'distance'    => '2000 Kms' ,
                    'duration'    => 'Approx 5 night trip' ,
                    'cost'        => 'R$ 5,000' ,
                ] ,
                [
                    'name'        => 'Toronto' ,
                    'description' => 'Toronto is the capital of the province of Ontario in Canada, known for its diverse cultural scene, iconic CN Tower, and waterfront.' ,
                    'image'       => 'toronto' ,
                    'distance'    => '1200 Kms' ,
                    'duration'    => 'Approx 3 night trip' ,
                    'cost'        => 'CAD 2,500' ,
                ] ,
                [
                    'name'        => 'Buenos Aires' ,
                    'description' => 'Buenos Aires is the capital and largest city of Argentina, known for its tango music and dance, historic architecture, and vibrant street life.' ,
                    'image'       => 'buenos_aires' ,
                    'distance'    => '1800 Kms' ,
                    'duration'    => 'Approx 4 night trip' ,
                    'cost'        => 'ARS 10,000' ,
                ] ,
                [
                    'name'        => 'Mexico City' ,
                    'description' => 'Mexico City is the capital of Mexico, known for its rich history, ancient ruins, and vibrant arts and culture scene.' ,
                    'image'       => 'mexico_city' ,
                    'distance'    => '1600 Kms' ,
                    'duration'    => 'Approx 4 night trip' ,
                    'cost'        => 'MXN 15,000' ,
                ] ,
                [
                    'name'        => 'Vancouver' ,
                    'description' => 'Vancouver is a major city in western Canada, known for its natural beauty, diverse neighborhoods, and outdoor recreational activities.' ,
                    'image'       => 'vancouver' ,
                    'distance'    => '1400 Kms' ,
                    'duration'    => 'Approx 3 night trip' ,
                    'cost'        => 'CAD 3,000' ,
                ] ,
            ];


//            for ( $i = 0 ; $i < count( $americanData ) ; $i++ ) {
//                $count               = 13;
//                $datum               = $americanData[ $i ];
//                $datum[ 'image' ]    = $file_names[ $count - $i ];
//                $datum[ 'category' ] = 4;
//                $destination         = Destination ::create( $datum );
//            }
//            foreach ( $data as $datum ) {
//                $datum[ 'image' ] = $file_names[  ];
//                $destination      = Destination ::create( $datum );
//            }

            Artisan ::call( 'optimize:clear' );
        }
    }

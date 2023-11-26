<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Destination extends Model
    {
        use HasFactory;

        protected $fillable = [ 'name' , 'cost' , 'description' , 'image' , 'distance' , 'duration' , 'category' ];

        public function getImageAttribute ( $value )
        {
            return url( '/' ) . '/' . $value;
        }
    }

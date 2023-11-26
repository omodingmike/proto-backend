<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;

    class DestinationCategory extends Model
    {
        use HasFactory;

        public function destinations () : HasMany
        {
            return $this -> hasMany( Destination::class , 'category' , 'id' );
        }
    }

<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;

    protected $table = 'categories';
    
    // castings
    protected function casts(): array{
        return [
            'is_active' => 'boolean'
        ];
    }
    // esto me sirve para que me acepten campos de asignacion masiva cuando se envia el formulario
    protected $fillable = [
        'name',
        'lastname',
        'correo'
    ];


    // esto me sirve para que me haga un casting del campo identificador que va a tomar
    /* public function getRouteKeyName(){
        return 'slug';
    } */

    // mutadores 
    protected  function name(): Attribute{
        return Attribute::make(
            set: function($value){
                return strtolower($value);
            },
            get: function($value){
                return ucfirst($value);
            }
        );
    }

}

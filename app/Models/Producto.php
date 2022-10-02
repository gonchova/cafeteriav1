<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $primaryKey = 'idproducto';
    
    protected $fillable = [
        'descripcion'
    ];

    //1 paciente -> * reponsables
    /*public function stock() 
    {
        return $this->belongsTo("App\Models\Stock",'idproducto','idproducto');
        //return $this->belongsTo(Stock::class);
    }
*/
    

}


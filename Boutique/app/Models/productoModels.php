<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class productoModels extends Model
{
    protected $table = 'producto';
    protected $primaryKey = 'idProducto';
    protected $fillable = [
        'nombreProducto',
        'fotoProducto',
        'idTipoProducto',
    ];
    public $timestamps = false;
    
    public function tipoProducto()
    {
        return $this->belongsTo('App\Models\tipoProductoModels', 'idTipoProducto', 'idTipoProducto');
        // el primer idTipoProducto es la Foreign Key
        // el segundo idTipoProducto es la Primary Key de la tabla tipoproducto
    }
}



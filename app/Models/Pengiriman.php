<?php
// app/Models/Pengiriman.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    protected $table = 'pengiriman';
    protected $primaryKey = 'id_pengiriman';
    
    protected $fillable = [
        'id_truck',
        'id_transaksi',
        'id_lokasi',
    ];
    
    public function lokasis()
    {
        return $this->hasMany(Lokasi::class, 'id_pengiriman');
    }

    public function kurir()
    {
        return $this->belongsTo(Kurir::class, 'id_kurir');
    }

    public function truck()
    {
        return $this->belongsTo(Truck::class, 'id_truck');
    }
}

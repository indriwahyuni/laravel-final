<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    //ini adalah nama tablenya
    protected $table = 'artikel';
    //primary key dari tabel artikel
    protected $primarykey = 'id';
    //field yag bisa di isi di dalam tabel artikel
    protected $fillable = ['judul_artikel', 'isi_artikel'];
    //dibuat true agar field create at dan update at bisa dibuat otomatis
    //bila diganti false maka akan jadi kebalikannya
    public $timestamps = true;
    
}

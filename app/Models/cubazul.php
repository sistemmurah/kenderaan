<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class cubazul extends Authenticatable
{
  public $nama;
  public $umur;

public function __construct($nama, $umur){
    $this->nama = $nama;
    $this->umur = $umur;
}
public function greet(){
    return "Hello {$this->nama}";
}


    protected $table = 'cubazul';

    // protected $primaryKey = 'KOD_FAKULTI';

    const CREATED_AT = 'TKH_CIPTA';
    const UPDATED_AT = 'TKH_KEMASKINI';
    const DELETED_AT = 'TKH_HAPUS';

    //protected $dates = ['TKH_HAPUS'];

    protected $fillable = [
        'id', 'tkhCipta', 'tkhHapus', 'tkhKemaskini'];
}

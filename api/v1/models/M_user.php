<?php
 
use Illuminate\Database\Eloquent\Model;
 
class M_user extends Model {
    protected $table = 'tbl_user';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'nama',
        'jurusan',
        'email',
        'password'
    ];
}
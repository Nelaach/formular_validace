<?php namespace App\Models;

use CodeIgniter\Model;

class formular extends Model
{
    protected $table      = 'validace_formulare';
    protected $primaryKey = 'id';
    protected $allowedFields = ['prezdivka','oblibene_cislo','text','email','datum','vek','barva'];
    protected $updatedField  = 'updated_at';


}
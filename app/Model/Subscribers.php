<?php
namespace Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribers extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function telephone()
    {
        return $this->belongsTo(Telephone::class, 'telephone_id', 'telephone_id');
    }
}
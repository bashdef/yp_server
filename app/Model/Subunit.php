<?php
namespace Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subunit extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function subunit_type()
    {
        return $this->belongsTo(Subunit_type::class, 'type_id', 'type_id');
    }
}
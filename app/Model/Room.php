<?php
namespace Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function room_type()
    {
        return $this->belongsTo(Room_type::class, 'type_id', 'type_id');
    }
    public function subunit()
    {
        return $this->belongsTo(Subunit::class, 'subunit_id', 'subunit_id');
    }
    public function telephone()
    {
        return $this->belongsTo(Telephone::class, 'telephone_id', 'telephone_id');
    }
}
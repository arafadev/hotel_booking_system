<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Reservation extends Model
{
    use HasFactory;
    protected $guarded = [];

   /**
    * The rooms that belong to the Reservation
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
   public function rooms(): BelongsToMany
   {
    return $this->belongsToMany(Room::class);
   }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrant extends Model {
  /**
   * @return mixed
   */
  public function profile() {
    return $this->belongsTo('App\Profile', 'profile_id');
  }

  /**
   * @return mixed
   */
  public function companions() {
    return $this->hasMany('App\Companion');
  }
}

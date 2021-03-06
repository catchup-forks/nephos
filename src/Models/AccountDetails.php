<?php

namespace BluebeansSystems\Nephos\Models;

use Illuminate\Database\Eloquent\Model;

class AccountDetails extends Model {

	protected $fillable = ['subscription','controlno','client','accountclass','accounttype','accountentry','accountno','transactionrefno','amount'];

	protected $table = 'account_details';

}

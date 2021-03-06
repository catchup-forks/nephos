<?php

namespace BluebeansSystems\Nephos\Models;

use Illuminate\Database\Eloquent\Model;

class AccountSummary extends Model {

	protected $fillable = ['subscription','controlno','client','accountclass','accounttype','accountentry','accountno','transactionrefno','user'];

	protected $table = 'account_summary';

}
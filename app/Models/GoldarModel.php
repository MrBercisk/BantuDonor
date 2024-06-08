<?php

namespace App\Models;

use CodeIgniter\Model;

class GoldarModel extends Model
{
	protected $table = "goldar";
	protected $allowedFields = ['id', 'nama_goldar','deskripsi','created_at','updated_at'];
	protected $primaryKey = 'id';
	protected $column_search = ['nama_goldar','deskripsi'];
	protected $column_order = [null, 'nama_goldar','deskripsi', null];
	protected $order = ['goldar.id' => 'desc'];
	protected $useTimestamps = true;
	protected $request;
	protected $session;
	protected $db;
	protected $dt;


}

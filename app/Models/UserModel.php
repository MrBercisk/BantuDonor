<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
	protected $table = "user";
	protected $allowedFields = ['id', 'role', 'nama', 'email', 'password', 'role_id', 'rs_id', 'created_at', 'token', 'reset_token_created_at'];
	protected $primaryKey = 'id';
	protected $column_search = ['nama', 'email', 'created_at'];
	protected $column_order = [null, 'nama', 'email', 'created_at', null];
	protected $order = ['user.id' => 'desc'];
	protected $useTimestamps = true;
	protected $request;
	protected $session;
	protected $db;
	protected $dt;

	public function getUserData()
	{
		return $this
			->join('rumahsakit', 'rumahsakit.id = user.rs_id')
			->select('user.* ,  rumahsakit.nama_rs')
			->findAll();
	}
}

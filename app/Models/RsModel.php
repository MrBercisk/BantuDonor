<?php

namespace App\Models;

use CodeIgniter\Model;

class RsModel extends Model
{
	protected $table = "rumahsakit";
	protected $allowedFields = ['id', 'nama_rs', 'alamat', 'no_telp', 'email', 'created_at', 'updated_at'];
	protected $primaryKey = 'id';
	protected $column_search = ['nama_rs', 'alamat', 'no_telp', 'email'];
	protected $column_order = [null, 'nama_rs', 'alamat', 'no_telp', 'email', null];
	protected $order = ['rumahsakit.id' => 'desc'];
	protected $useTimestamps = true;
	protected $request;
	protected $session;
	protected $db;
	protected $dt;

	public function getDataById($user_id)
	{
		return $this
			->join('user', 'user.rs_id = rumahsakit.id')
			->Where('user.id', $user_id)
			->select('rumahsakit.*')
			->findAll();
	}
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class PendonorModel extends Model
{
	protected $table = "pendonor";
	protected $allowedFields = ['id', 'goldar_id', 'rs_id', 'tanggal', 'nama', 'no_id', 'no_telp', 'keterangan', 'created_at', 'updated_at'];
	protected $primaryKey = 'id';
	protected $column_search = ['tanggal', 'nama', 'no_id', 'no_telp', 'keterangan', 'created_at'];
	protected $column_order = [null, 'tanggal', 'nama', 'no_id', 'no_telp', 'keterangan', 'created_at', null];
	protected $order = ['pendonor.id' => 'desc'];
	protected $useTimestamps = true;
	protected $request;
	protected $session;
	protected $db;
	protected $dt;

	public function getDonorData()
	{
		return $this
			->join('goldar', 'goldar.id = pendonor.goldar_id')
			->join('rumahsakit', 'rumahsakit.id = pendonor.rs_id')
			->select('pendonor.* , goldar.nama_goldar, rumahsakit.nama_rs')
			->findAll();
	}
	

	public function getDataByRs($user_id)
	{
		return $this
			->join('goldar', 'goldar.id = pendonor.goldar_id')
			->join('rumahsakit', 'rumahsakit.id = pendonor.rs_id')
			->join('user', 'user.rs_id = pendonor.rs_id')
			->Where('user.id', $user_id)
			->select('pendonor.* , goldar.nama_goldar, rumahsakit.nama_rs')
			->findAll();
	}

	public function hitungTotal()
	{
		return $this
			->join('goldar', 'goldar.id = pendonor.goldar_id')
			->select('pendonor.*, goldar.nama_goldar, goldar_id, COUNT(*) as stock')
			->groupBy('goldar_id')
			->findAll();
	}

	public function hitungStock($user_id)
	{
		return $this
			->join('goldar', 'goldar.id = pendonor.goldar_id')
			->join('rumahsakit', 'rumahsakit.id = pendonor.rs_id')
			->join('user', 'user.rs_id = pendonor.rs_id')
			->Where('user.id', $user_id)
			->select('pendonor.*, goldar.nama_goldar, goldar_id, COUNT(*) as stock')
			->groupBy('goldar_id')
			->findAll();
	}
}

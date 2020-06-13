<?php namespace App\Models;

	use CodeIgniter\Model;

	class UsersModel extends Model
	{
		protected $table = 'users';

		protected $allowedFields = ['username', 'password', 'email'];

		public function getUsers($username = false)
		{
			if ($username === false)
			{
				return $this->findAll();
			}

			return $this->asArray()
						->where(['username' => $username])
						->first();
		}

		public function getById($id = false)
		{
			return $this->asArray()->where(['id' => $id])->first();
		}
	}
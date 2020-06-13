<?php namespace App\Controllers;

	use App\Models\UsersModel;
	use CodeIgniter\Controller;

	class Users extends Controller
	{
		public function index()
		{
			$model = new UsersModel();
			$data['users'] = $model->getUsers();

			$data = [
				'users' => $model->getUsers(),
				'title' => 'Users list',
			];

			echo view('templates/header', $data);
			echo view('users/overview', $data);
			echo view('templates/footer', $data);
		}

		public function view($username = null)
		{
			$model = new UsersModel();
			$data['users'] = $model->getUsers($username);
		
			if (empty($data['users']))
			{
				throw new \CodeIgniter\Exceptions\PageNotFoundException("Cannot found the users item".$username);
			}

			$data['title'] = $data['users']['username'];
			echo view('templates/header', $data);
			echo view('users/view', $data);
			echo view('templates/footer', $data);			
		}

		public function create()
		{
			$model = new UsersModel();

			if (!$this->validate([
				'username' => 'required|min_length[1]|max_length[255]',
				'password' => 'required|min_length[8]|max_length[255]',
				'email' => 'valid_email'
			]))
			{
				echo view('templates/header');
				echo view('users/create');
				echo view('templates/footer');	
			}
			else
			{
				$model->save([
					'username' => $this->request->getVar('username'),
					'password' => $this->request->getVar('password'),
					'email' => $this->request->getVar('email'),
				]);
				echo view('templates/header');
				echo view('users/success');
				echo view('templates/footer');
			}
		}

		public function edit($id = null)
		{
			$model = new UsersModel();
			$data['user'] = $model->where('id', $id)->first();;

			echo view('templates/header', $data);
			echo view('users/edit', $data);
			echo view('templates/footer', $data);
		}

		public function update()
		{
			helper(['form', 'url']);
			$model = new UsersModel();
			$id = $this->request->getVar('id');

			$data = [
				'username' => $this->request->getVar('username'),
				'password' => $this->request->getVar('password'),
				'email' => $this->request->getVar('email'),				
			];

			$save = $model->update($id, $data);
			echo view('templates/header');
			echo view('users/success');
			echo view('templates/footer');
		}

		public function delete($id = null)
		{
			$model = new UsersModel();
			$data['users'] = $model->where('id', $id)->delete();

			$data = [
				'users' => $model->getUsers(),
				'title' => 'Users list',
			];

			echo view('templates/header', $data);
			echo view('users/overview', $data);
			echo view('templates/footer', $data);	
		}

	}
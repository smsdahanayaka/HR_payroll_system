<?php

class Employee_controller extends CI_Controller
{
	public $perdaySal;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('EmployeeModel');
		$this->load->library('upload');
	}


	public function index()
	{
		// $this->load->helper('url');
		return $this->load->view('EmployeeView');
	}

	// get all recods
	public function getItemsRecord()
	{
		try {
			$result = $this->EmployeeModel->getAllRecods();
			echo json_encode($result);
		} catch (Exception $e) {
			echo json_encode(["error" => $e->getMessage()]);
		}
	}

	// insert new item
	public function insertData()
	{
		// validations
		$this->form_validation->set_rules("first_name", "First Name", "trim|required");
		$this->form_validation->set_rules("last_name", "Last Name", "trim|required");
		$this->form_validation->set_rules("full_name", "full Name", "trim|required");
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if ($this->form_validation->run() == false) {

			$data = array();
			$data["input_error"] = array();
			$data["status"] = false;

			if (form_error("first_name")) {

				$data["input_error"][] = "first_name";
				$data["error_desc"][] = form_error("first_name");
			}
			if (form_error("last_name")) {

				$data["input_error"][] = "last_name";
				$data["error_desc"][] = form_error("last_name");
			}
			if (form_error("full_name")) {

				$data["input_error"][] = "full_name";
				$data["error_desc"][] = form_error("full_name");
			}
			if (form_error("email")) {

				$data["input_error"][] = "email";
				$data["error_desc"][] = form_error("email");
			}

			echo json_encode($data);
			exit();
		} else {


			// File upload handling
			if (!empty($_FILES['imageFile']['name'])) {
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['max_size'] = 1024;

				$this->upload->initialize($config);

				// var_dump($config['upload_path']);
				if (!$this->upload->do_upload('imageFile')) {
					$error = $this->upload->display_errors();
					echo json_encode(["error" => $error]);
					return;
				} else {

					$image_data = $this->upload->data();
					$data = [
						"first_name" => $this->input->post('first_name'),
						"last_name" => $this->input->post('last_name'),
						"full_name" => $this->input->post('full_name'),
						"address" => $this->input->post('address'),
						"contact_number" => $this->input->post('contact_number'),
						"email" => $this->input->post('email'),
						"nic" => $this->input->post('nic'),
						"basic_salary" => $this->input->post('basic_salary'),
						"allowns" => $this->input->post('allowns'),
						"profile_image" => '../uploads/' . $image_data['file_name'],
					];
					// var_dump($data); url: "<?php echo site_url('Employee_controller/getItemsRecord'); 
					$result = $this->EmployeeModel->insertRecods($data);
					if ($result) {
						$data1 = array();
						$data1["status"] = true;
					}

					echo json_encode($data1);
				}
			} else {
				echo json_encode("false");
			}
		}
	}

	// view by id
	public function viewById()
	{
		try {
			$id = $this->input->post('id');
			$result = $this->EmployeeModel->getRecodsById($id);
			echo json_encode($result);
		} catch (Exception $e) {
			echo json_encode(["error" => $e->getMessage()]);
		}
	}


	// update
	public function updateSup()
	{
		try {

			$id = $this->input->post('id');

			$data = [
				"first_name" => $this->input->post('first_name'),
				"last_name" => $this->input->post('last_name'),
				"full_name" => $this->input->post('full_name'),
				"address" => $this->input->post('address'),
				"contact_number" => $this->input->post('contact_number'),
				"email" => $this->input->post('email'),
				"nic" => $this->input->post('nic'),
				"basic_salary" => $this->input->post('basic_salary'),
				"allowns" => $this->input->post('allowns'),
			];
			// print_r($data);
			$result = $this->EmployeeModel->updateRecods($id, $data);
			echo json_encode($result);
		} catch (Exception $e) {
			echo json_encode(["error" => $e->getMessage()]);
		}
	}

	// delete
	public function deleteData()
	{
		try {
			$id = $this->input->post('id');
			$result =  $this->EmployeeModel->deleteRecods($id);
			echo json_encode($result);
		} catch (Exception $e) {
			json_encode(["error" => $e->getMessage()]);
		}
	}

	// get employee per aday salary
	public function employeePerDaySalary()
	{
		try {
			$this->perdaySal = 0;
			$id = $this->input->post('id');
			$result = $this->EmployeeModel->getRecodsById($id);
			$array1 = $result[0];
			$this->perdaySal = (($array1->basic_salary) + ($array1->allowns)) / 30;
			// echo json_encode(["per_day_Salary" => round($this->perdaySal, 2)]);
		} catch (Exception $e) {
			echo json_encode(["error" => $e->getMessage()]);
		}
	}
}

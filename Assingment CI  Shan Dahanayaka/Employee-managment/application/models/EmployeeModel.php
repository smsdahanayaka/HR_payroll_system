<?php
class EmployeeModel extends CI_Model
{

    // get all recods
    public function getAllRecods()
    {

        try {
            $quary = $this->db->get('tbl_employee_details');
            return $quary->result();
        } catch (Exception $e) {

            throw new Exception('Error fetching records: ' . $e->getMessage());
        }
    }


    // insert recods
    public function insertRecods($data)
    {
        try {
            return $this->db->insert('tbl_employee_details', $data);
        } catch (Exception $e) {

            throw new Exception('Error fetching records: ' . $e->getMessage());
        }
    }


    // update recods
    public function updateRecods($id, $data)
    {
        try {
            $this->db->where('id', $id);
            return $this->db->update('tbl_employee_details', $data);
        } catch (Exception $e) {

            throw new Exception('Error fetching records: ' . $e->getMessage());
        }
    }


    // delete recods
    public function deleteRecods($id)
    {
        try {
            $this->db->where('id', $id);
            $this->db->delete('tbl_employee_details');
            // $result =  $this->db->delete('tbl_master_items', array('id' => $id));
        } catch (Exception $e) {

            throw new Exception('Error fetching records: ' . $e->getMessage());
        }
    }


    // get reods by id
    public function getRecodsById($id)
    {
        try {
            $quary = $this->db->get_where('tbl_employee_details', array('id' => $id));
            return $quary->result();
        } catch (Exception $e) {

            throw new Exception('Error fetching records: ' . $e->getMessage());
        }
    }
}

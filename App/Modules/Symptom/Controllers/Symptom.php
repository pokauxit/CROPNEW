<?php
/**
 * Created by PhpStorm.
 * User: Error404
 * Date: 29/5/2559
 * Time: 9:52
 */

namespace App\Modules\Symptom\Controllers;

use \App\Models\symptom as spm;
use System\HMVC\HMVC;

class Symptom extends HMVC
{

    protected $db;
    protected $row;

    public function index()
    {
        $this->db = new spm();
        $this->db->select();
        $this->view();
    }

    public function Add()
    {
        if (SUBMIT) {
            $this->controller();
        } else {
            $this->view("Add");
        }
    }

    public function Edit()
    {
        $this->db = new spm();
        if (SUBMIT) {
            $this->controller();
        } else {
            $this->row = $this->db->get(ID);
            $this->view("Edit");
        }
    }

    public function Delete()
    {
        $this->controller();
    }
}
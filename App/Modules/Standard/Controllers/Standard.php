<?php
/**
 * Created by PhpStorm.
 * User: Error404
 * Date: 29/5/2559
 * Time: 9:27
 */

namespace App\Modules\Standard\Controllers;


use System\HMVC\HMVC;
use \App\Models\standard as std;

class Standard extends HMVC
{

    protected $db;
    protected $row;

    public function index()
    {
        $this->db = new std();
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
        $this->db = new std();
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
    
    public function getStandardAll($id) {// รับ ID มา Selected
        $this->id = $id;
        $this->db = new std();
        $this->db->select();
        $this->view("Option_List");
    }
}
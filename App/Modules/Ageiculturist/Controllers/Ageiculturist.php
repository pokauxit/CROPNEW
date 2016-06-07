<?php
namespace App\Modules\Ageiculturist\Controllers;

use System\HMVC\HMVC;
use App\Models\ageiculturist as agl;
use System\Security\ACL;

class Ageiculturist extends HMVC
{

    protected $db;
    protected $row;

    public function __construct()
    {
        ACL::check("STAFF");
        parent::__construct();
    }

    public function index()
    {
        $this->db = new agl();
        $this->db->left("tambon_id", "tambon.tambon_name");

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
        $this->db = new agl();
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

?>
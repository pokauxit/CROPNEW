<?php
namespace App\Modules\Login\Controllers;

use System\HMVC\HMVC;
use App\Models\staff as stf;
use System\Utils\JS;
use System\Utils\Validate;

class Login extends HMVC
{
    protected $staff;

    public function index()
    {
        $this->view();
        if (SUBMIT) {
            $this->take();
        }
    }

    public function take()
    {
        Validate::has("staff_user");
        Validate::has("staff_pass");

        $this->staff = new stf();
        $this->staff->find("staff_user = '" . trim($_POST['staff_user']) . "' AND staff_pass = '" . trim($_POST["staff_pass"]) . "' LIMIT 1");
        if ($this->staff->num() == TRUE) {
            $row = $this->staff->fetch();
            $this->session("STAFF", $row);
            print_r($this->session("STAFF"));
            echo JS::re('?');
        } else {
            echo JS::alert("ผิดพลาดกรุณาลองใหม่");
            echo JS::back();
        }
    }
}


?>

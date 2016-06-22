<?php

namespace App\Modules\NewsItem\Controllers;

use System\HMVC\HMVC;
use App\Models\news_item as nit;
use App\Models\news_category as nct;
use App\Models\staff as stf;
use System\Security\ACL;
use System\Utils\Paging;

class NewsItem extends HMVC {

    protected $dbNewsItem;
    protected $dbNewsCategory;
    protected $row;
    protected $allRow;
    protected $pageLimit =2;
    protected $paging;
    public function __construct() {
        ACL::check("STAFF");
        parent::__construct();
    }

    public function index(){ 
        $this->dbNewsItem = new nit();
   
        $this->paging = new Paging();
        $this->paging->total =  $this->dbNewsItem->count($this->dbNewsItem->pk());
        $this->paging->currentPage = $this->param(1);
        $this->paging->perPage = $this->pageLimit;
        $this->paging->url =  $this->route->backToModule()."///";
             
        $this->dbNewsItem->limit = $this->paging->limit();
        $this->dbNewsItem->order = $this->dbNewsItem->pk();
        $this->dbNewsItem->orderSort = "DESC";
        
        
        $news_category = new nct();
        $news_category->display = "news_category_name";
        $news_category->fk = "news_category_id";
        
        $staff = new stf();
        $staff->display = "staff_name";
        $staff->fk = "staff_id";
        
        $fk1 = "new_category_id";
        $branch1 = array($news_category);
        
        $fk2 = "staff_id";
        $branch2 = array($staff);
        
        $fkList = array($fk1, $fk2);
        $arrayFomat = array($branch1, $branch2);
        $this->dbNewsItem->multiFKJoin($fkList, $arrayFomat);
        $this->dbNewsItem->select();
        $this->view();
    }

    public function Add() {
        if (SUBMIT) {
            $this->controller();
        } else {
            $this->dbNewsCategory = new nct();
            $this->dbNewsCategory->select();

            $this->view("Add");
        }
    }

    public function Edit() {
        $this->dbNewsItem = new nit();
        if (SUBMIT) {
            $this->controller();
        } else {
            $this->dbNewsCategory = new nct();
            $this->dbNewsCategory->select();

            $this->row = $this->dbNewsItem->get(ID);
            $this->view("Edit");
        }
    }

    public function Delete() {
        $this->controller();
    }

    public function getPlantAll($id) {// รับ ID มา Selected
        $this->id = $id;
        $this->dbNewsItem = new nit();
        $this->dbNewsItem->select();
        $this->view("Option_List");
    }

}
?>


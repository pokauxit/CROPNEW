<?php

 

namespace System\Utils;

/**
 * Description of Paging
 *
 * @author 
 */
class Paging {
    private $start = 0 ;
    var $perPage  =0;
    var $currentPage = 0;
    var $total = 0;
    var $url = "";
    public function limit(){
        
        $perPage = $this->perPage;
        $page  = $this->currentPage;
        if($page=="" || $page=="0"){$page=1;$this->currentPage=1;} 
        $start = ($page*$perPage)-($perPage);
        $this->start = $start;
        return $start.",".$perPage;
    }
    public function start(){
        return $this->start; 
    }

    public  function build() {
        $total = $this->total;
        $limit = $this->perPage;
        $baseurl =  $this->url;
        $pagenumber = $this->currentPage;
         if($pagenumber=="" || $pagenumber=="0"){$pagenumber=1;}
    if ($total <= $limit) {
        return $html = "";
    }
    
    $html .= '<style>.pagination li{padding: 0px;}.pagination li .padding-10{padding: 0 10px;}.pagination li .padding-5{padding: 0 5px;}</style>';
    
    $showpages = "7"; //1,3,5,7,9...

    $pages = ceil($total / $limit);
    $offset = ($pagenumber * $limit) - $limit;
    $end = $offset + $limit;

    $html .= '<ul class="pagination">';
    $previous = $pagenumber - 1;
    if ($pagenumber > 1){
        $html .= '<li class=""><a class="padding-5" href="'.$baseurl.'1" title="หน้าแรก"><i class="fa fa-angle-double-left"></i></a></li>';
        $html .= '<li class=""><a class="padding-5" href="'.$baseurl.$previous.'" title="หน้าก่อนหน้า"><i class="fa fa-angle-left"></i></a></li>';
    }else{
        $html .= '<li class="disabled"><a class="padding-5" title="หน้าแรก"><i class="fa fa-angle-double-left"></i></a></li>';
        $html .= '<li class="disabled"><a class="padding-5" title="หน้าก่อนหน้า"><i class="fa fa-angle-left"></i></a></li>';
    }
    if ($pages >= 2) {
        $p = 1;
        $pages_before = $pagenumber - 1;
        $pages_after = $pages - $pagenumber;
        $show_before = floor($showpages / 2);
        $show_after = floor($showpages / 2);
        if ($pages_before < $show_before) {
            $dif = $show_before - $pages_before;
            $show_after = $show_after + $dif;
        }
        if ($pages_after < $show_after) {
            $dif = $show_after - $pages_after;
            $show_before = $show_before + $dif;
        }
        $minpage = $pagenumber - ($show_before + 1);
        $maxpage = $pagenumber + ($show_after + 1);

        if ($pagenumber > ($show_before + 1) && $showpages > 0) {
            //$html .= '<li class=""><a title="">...</a></li>';
        }
        while ($p <= $pages) {
            if ($p > $minpage && $p < $maxpage) {
                if ($pagenumber == $p) {
                    $html .= '<li class="active"><a class="padding-10" title="หน้า '.$p.'">'.$p.'</a></li>';
                } else {
                    $html .= '<li class=""><a class="padding-10" href="'.$baseurl.$p.'" title="หน้า '.$p.'">'.$p.'</a></li>';
                }
            }
            $p++;
        }
        if ($maxpage - 1 < $pages && $showpages > 0) {
            //$html .= '<li class=""><a title="">...</a></li>';
        }
    }

    $next = $pagenumber + 1;
    if ($pagenumber < $pages){
        $html .= '<li class=""><a class="padding-5" href="'.$baseurl.$next.'" title="หน้าถัดไป"><i class="fa fa-angle-right"></i></a></li>';
        $html .= '<li class=""><a class="padding-5" href="'.$baseurl.$pages.'" title="หน้าสุดท้าย"><i class="fa fa-angle-double-right"></i></a></li>';
    }else{
        $html .= '<li class="disabled"><a class="padding-5" title="หน้าถัดไป"><i class="fa fa-angle-right"></i></a></li>';
        $html .= '<li class="disabled"><a class="padding-5" title="หน้าสุดท้าย"><i class="fa fa-angle-double-right"></i></a></li>';
    }
    $html .= '</ul>';
    return $html;
    }
}

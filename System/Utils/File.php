<?php

namespace System\Utils;

class File {

    public static function createRandom() {
        $chars = "abcdefghijkmnopqrstuvwxyz023456789";
        srand((double) microtime() * 1000000);
        $i = 0;
        $pass = '';

        while ($i <= 10) {
            $num = rand() % 33;
            $tmp = substr($chars, $num, 1);
            $pass = $pass . $tmp;
            $i++;
        }
        return $pass;
    }

    //
    /**
     * 
     * @param type $path จบด้วย / 
     * @param type $file ชื่อ ของ input
     * @return boolean
     */
    public static function upPic($path, $file) {

        $name = $_FILES[$file]['name'];
        $exp = explode(".", $name);
        if (
                $exp[count($exp) - 1] == "gif" ||
                $exp[count($exp) - 1] == "GIF" ||
                $exp[count($exp) - 1] == "jpg" ||
                $exp[count($exp) - 1] == "JPG" ||
                $exp[count($exp) - 1] == "jpeg" ||
                $exp[count($exp) - 1] == "JPEG" ||
                $exp[count($exp) - 1] == "png" ||
                $exp[count($exp) - 1] == "PNG" ||
                $exp[count($exp) - 1] == "bmp" ||
                $exp[count($exp) - 1] == "BMP"
        )
            return File::upFile($path, $file);
        else
            return false;
    }

    public static function upPdf($path, $file) {

        $name = $_FILES[$file]['name'];
        $exp = explode(".", $name);
        if (
                $exp[count($exp) - 1] == "pdf" ||
                $exp[count($exp) - 1] == "PDF" ||
                $exp[count($exp) - 1] == "Pdf"
        )
            return File::upFile($path, $file);
        else
            return false;
    }

    public static function upFile($path, $file) {
        $data = $_FILES[$file]['tmp_name'];
        $name = $_FILES[$file]['name'];
        $ext = end(explode('.', $name));

        $name = File::createRandom() . "." . $ext;
        $ofile = @fopen($path . $name, "r");

        if ($ofile) {
            $name = str_replace("." . $ext, "", $name);
            $name = File::createRandom() . "." . $ext;
        }

        $cop = copy($data, $path . $name);
        @fclose($ofile);

        if ($cop) {
            return $name;
        } else {
            return false;
        }
    }

}

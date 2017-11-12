<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Lop_Bus
 *
 * @author hungk
 */

require_once __DIR__.'/../DAL/Data.php';
require_once __DIR__.'/../DTO/CauHoi.php';

class Lop_Bus {
    //put your code here
    private $data;
    private $cauHoi;
    
    function __construct() {
        $this->data = new Data();
        $this->cauHoi = new CauHoi();
    }

    function getAllCauHoi(){
        $sql = "select * from cauhoi";
        $kq = $this->data->getArray($sql);
        return $kq;
    }
    
    function getAllCauHoiToJson()
    {
        return json_encode($this->getAllCauHoi());
    }
    
    function getTheoMaLoai($maloai = 1)
    {
        $sql = "select * from cauhoi where MaLoaiCauHoi = :ml";
        $kq = $this->data->getArray($sql,array(':ml' => $maloai));
        return $kq;
    }
    
    function getTheoMaLoaiToJson($maloai = 1)
    {
        return json_encode($this->getTheoMaLoai($maloai));
    }
    
    function getTheoMaDe($made = 1)
    {
        $sql = "select * from dethi inner join cauhoi on dethi.MaCauHoi = cauhoi.MaCauHoi where MaDe = :md";
        $kq = $this->data->getArray($sql,array(':md' => $made));
        return $kq;
    }
    
    function getTheoMaDeToJson($made = 1)
    {
        return json_encode($this->getTheoMaDe($made));
    }
}
         
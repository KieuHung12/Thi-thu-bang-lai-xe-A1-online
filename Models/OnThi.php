<?php
    require_once PATH_LIB.'data.php';
    class OnThi_M
    {
        private $db;

        public function __construct()
        {
            $data = new data();
            $this->db = $data->getDb();
        }

        public function getAllCauHoi()
        {
            try
            {
                $sql = "select * from CauHoi";
                $stmt = $this->db->prepare($sql);
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $stmt->execute();
                $result = $stmt->fetchAll();
                return $result;
            }
            catch (PDOException $e)
            {
                echo $e->getMessage();
            }
        }

        public function getLoaiCauHoi($loai)
        {
            try
            {
                $sql = "select * from CauHoi where MaLoaiCauHoi = :ma";
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(':ma',$loai);
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $stmt->execute();
                $result = $stmt->fetchAll();
                return $result;
            }
            catch (PDOException $e)
            {
                echo $e->getMessage();
            }            
        }
    }
?>
<?php
    class modelServices extends CI_Model{
        function getAllServices(){
            $sql = $this->db->query("select idService, nomService from service");
            return $sql->result();
        }
}
?>
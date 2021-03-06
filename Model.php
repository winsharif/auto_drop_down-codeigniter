class Db_model extends CI_Model{
	
	function __construct() {
        parent::__construct();
    }

/**
* Drop-down Menu From Database
* @param	mixed	$label
* @param	mixed	$Name of Drop-down input
* @param	mixed	$id = <option value="id"> 
* @param	mixed	$value display
* @param	mixed	$selected single / multiple = array('2','5')
* @param	mixed	$where condition
* @param	mixed	$DB table
* @param	mixed	$extra
* @return	string  complete Drop-down Menu
*/
    function auto_drop_down($label,$name,$id,$value,$selected='',$where='',$table,$extra = '')
    {
        $data[''] = 'Select '.$label;
        
        $this->db->select($id.",".$value);
        
        if(!empty($where)) { $this->db->where($where); }
        
        $query = $this->db->get($table);
        
        if($query->num_rows() > 0)
        {
            foreach($query->result() as $row)
            {
                $data[htmlspecialchars($row->$id)] = htmlspecialchars($row->$value);
                
            }
            return form_dropdown($name,$data,$selected,$extra);
        }
    }
}

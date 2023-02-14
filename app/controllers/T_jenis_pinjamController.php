<?php 
/**
 * T_Jenis_Pinjam Page Controller
 * @category  Controller
 */
class T_Jenis_PinjamController extends BaseController{
	/**
     * Load Record Action 
     * $arg1 Field Name
     * $arg2 Field Value 
     * $param $arg1 string
     * $param $arg1 string
     * @return View
     */
	function index($fieldname = null , $fieldvalue = null){
		$db = $this->GetModel();
		$fields = array('kode_jenis_pinjam', 	'nama_pinjaman', 	'lama_angsuran', 	'maks_pinjam', 	'bunga', 	'u_entry', 	'tgl_entri');
		$limit = $this->get_page_limit(MAX_RECORD_COUNT); // return pagination from BaseModel Class e.g array(5,20)
		if(!empty($this->search)){
			$text=$this->search;
			$db->orWhere('kode_jenis_pinjam',"%$text%",'LIKE');
			$db->orWhere('nama_pinjaman',"%$text%",'LIKE');
			$db->orWhere('lama_angsuran',"%$text%",'LIKE');
			$db->orWhere('maks_pinjam',"%$text%",'LIKE');
			$db->orWhere('bunga',"%$text%",'LIKE');
			$db->orWhere('u_entry',"%$text%",'LIKE');
			$db->orWhere('tgl_entri',"%$text%",'LIKE');
		}
		if(!empty($this->orderby)){
			$db->orderBy($this->orderby,$this->ordertype);
		}
		else{
			$db->orderBy('kode_jenis_pinjam', ORDER_TYPE);
		}
		if( !empty($fieldname) ){
			$db->where($fieldname , urldecode($fieldvalue));
		}
		//page filter command
		$tc = $db->withTotalCount();
		$records = $db->get('t_jenis_pinjam', $limit, $fields);
		$data = new stdClass;
		$data->records = $records;
		$data->record_count = count($records);
		$data->total_records = intval($tc->totalCount);
		render_json($data);
	}
	/**
     * Load csv|json data
     * @return data
     */
	function import_data(){
		if(!empty($_FILES['file'])){
			$finfo = pathinfo($_FILES['file']['name']);
			$ext = strtolower($finfo['extension']);
			if(!in_array($ext , array('csv','json'))){
				render_error("File format not supported");
			}
			$file_path = $_FILES['file']['tmp_name'];
			if(!empty($file_path)){
				$db = $this->GetModel();
				if($ext == 'csv'){
					$options = array('table' => 't_jenis_pinjam', 'fields' => '', 'delimiter' => ',', 'quote' => '"');
					$data = $db->loadCsvData( $file_path , $options , false );
				}
				else{
					$data = $db->loadJsonData( $file_path, 't_jenis_pinjam' , false );
				}
				if($db->getLastError()){
					render_error($db->getLastError());
				}
				else{
					render_json($data);
				}
			}
			else{
				render_error(html-lang-0047);
			}
		}
	}
	/**
     * View Record Action 
     * @return View
     */
	function view( $rec_id = null , $value = null){
		$db = $this->GetModel();
		$fields = array( 'kode_jenis_pinjam', 	'nama_pinjaman', 	'lama_angsuran', 	'maks_pinjam', 	'bunga', 	'u_entry', 	'tgl_entri' );
		if( !empty($value) ){
			$db->where($rec_id, urldecode($value));
		}
		else{
			$db->where('kode_jenis_pinjam' , $rec_id);
		}
		$record = $db->getOne( 't_jenis_pinjam', $fields );
		if(!empty($record)){
			render_json($record);
		}
		else{
			if($db->getLastError()){
				render_error($db->getLastError());
			}
			else{
				render_error("Record not found",404);
			}
		}
	}
	/**
     * Add New Record Action 
     * If Not $_POST Request, Display Add Record Form View
     * @return View
     */
	function add(){
		if(is_post_request()){
			$modeldata=transform_request_data($_POST);
			$rules_array = array(
				'kode_jenis_pinjam' => 'required',
				'nama_pinjaman' => 'required',
				'lama_angsuran' => 'required|numeric',
				'maks_pinjam' => 'required',
				'bunga' => 'required|numeric',
				'u_entry' => 'required',
				'tgl_entri' => 'required',
			);
			$is_valid = GUMP::is_valid($modeldata, $rules_array);
			if($is_valid != true) {
				render_error($is_valid);
			}
			$db = $this->GetModel();
			$rec_id = $db->insert('t_jenis_pinjam',$modeldata);
			if(!empty($rec_id)){
				render_json($rec_id);
			}
			else{
				if($db->getLastError()){
					render_error($db->getLastError());
				}
				else{
					render_error("Error inserting record");
				}
			}
		}
		else{
			render_error("Invalid request");
		}
	}
	/**
     * Edit Record Action 
     * If Not $_POST Request, Display Edit Record Form View
     * @return View
     */
	function edit($rec_id=null){
		$db = $this->GetModel();
		if(is_post_request()){
			$modeldata=transform_request_data($_POST);
			$db->where('kode_jenis_pinjam' , $rec_id);
			$bool = $db->update('t_jenis_pinjam',$modeldata);
			if($bool){
				render_json($rec_id);
			}
			else{
				render_error($db->getLastError());
			}
			return null;
		}
		else{
			$fields=array('kode_jenis_pinjam','nama_pinjaman','lama_angsuran','maks_pinjam','bunga','u_entry','tgl_entri');
			$db->where('kode_jenis_pinjam' , $rec_id);
			$data = $db->getOne('t_jenis_pinjam',$fields);
			if(!empty($data)){
				render_json($data);
			}
			else{
				if($db->getLastError()){
					render_error($db->getLastError());
				}
				else{
					render_error("Record not found",404);
				}
			}
		}
	}
	/**
     * Delete Record Action 
     * @return View
     */
	function delete( $rec_ids = null ){
		$db = $this->GetModel();
		$arr_id = explode( ',', $rec_ids );
		foreach( $arr_id as $rec_id ){
			$db->where('kode_jenis_pinjam' , $rec_id,"=",'OR');
		}
		$bool = $db->delete( 't_jenis_pinjam' );
		if($bool){
			render_json( $bool );
		}
		else{
			if($db->getLastError()){
				render_error($db->getLastError());
			}
			else{
				render_error("Error deleting the record. please make sure that the record exit");
			}
		}
	}
}

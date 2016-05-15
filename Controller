class Country{

  public function index()
  {
      $this->load->model("Db_model");
      
      $countries = $this->Db_model->auto_drop_down('Country','country_name','id','name','','','country_info','class="form-control"');
  
      $this->load->view('header');
      
      $this->load->view('content_contact', $countries);
  
  }
}  

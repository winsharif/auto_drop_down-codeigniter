# auto_drop_down-codeigniter
Build drop down menu from database using just one simple function- Codeigniter 3.

/*
        Would produce for single selected item
        $countries = $this->Db_model->auto_drop_down('Country','country_name','id','name','3','','country_info','class="form-control"');
        
        <select name="country_name">
                <option value="1">Bangladesh</option>
                <option value="2">Canada</option>
                <option value="3" selected="selected">England</option>
                <option value="4">Turkey</option>
        </select>
*/

/*
        Would produce multiple selected item in array  Like array('1', '3');
       $countries = $this->Db_model->auto_drop_down('Country','country_name','id','name','array('1', '3')','','country_info','class="form-control"');
        <select name="country_name" multiple="multiple">
                <option value="1" selected="selected">Bangladesh</option>
                <option value="2">Canada</option>
                <option value="3" selected="selected">England</option>
                <option value="4">Turkey</option>
        </select>
*/

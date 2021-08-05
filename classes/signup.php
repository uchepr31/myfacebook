<?php
class signup{

    private $error = "";
    public function evaluate($data)
    {
        foreach ($data as $key => $value) {
            # code...
            if (empty($value)) 
            {
                $error = $eror . $key . "is empty!<br>";
            }
        }
            if ($error == "" ) {
                // no error
                $this->create_user($data)
            }
            else {
                return $error;
            }
    }

    public function create_user($data)
    {
        $query = "insert into users ('$userid', '$first_name', '$last_name', '$gender', '$email', '$password', '$url_address') values ()";
        $DB = new Database();
        
    }
}
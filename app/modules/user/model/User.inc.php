<?php
include_once 'app/core/DefaultModel.inc.php';

class User extends DefaultModel {

    private $username;
    private $password;
    private $email;
    private $admin;
    private $company_id;

    public function __construct($id, $name, $username, $password, $email, $admin, $active, $company_id, $created_at, $updated_at) {
        parent::__construct($id, $name, $active, $created_at, $updated_at);
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->admin = $admin;
        $this->company_id = $company_id;
    }

    public function get_username() {
        return $this->username;
    }

    public function get_password() {
        return $this->password;
    }

    public function set_password($password) {
        $this->password = $password;
    }

    public function get_email() {
        return $this->email;
    }

    public function set_email($email) {
        $this->email = $email;
    }

    public function is_admin() {
        return $this->admin;
    }

    public function get_company_id() {
        return $this->company_id;
    }

    public function set_company_id($company_id) {
        $this->company_id = $company_id;
    }

}
?>
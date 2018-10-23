<?php 
class User {
    private $_db,
            $_data,
            $_sessionName,
            $_cookieName,
            $isLoggedIn;
           

    public function __construct($user = null) {
        $this->_db = DB::getInstance();
        //$this->_sessionName = Config::get('sessions/session_name');
        //var_dump( $this->_sessionName);
        //$this->_cookieName = Config::get('remember/cookie_name');
        
     
        if(!$user) {
            if(Session::exists($this->_sessionName)) {
                $user = Session::get($this->_sessionName);
                if($this->find($user)) {
                    $this->isLoggedIn = true;
                } else {
                    //Logout
                }
            }
        } else {
            $this->find($user);
        }
    }

    public function create($fields = array()) {
        if(!$this->_db->insert('users', $fields)) {
            throw new Exception('Sorry, there was a problem creating your account;');
        }
    }

    public function update($fields = array(), $id = null) {

        if(!$id && $this->isLoggedIn()) {
            $id = $this->data()->id;
        }

        if(!$this->_db->update('users', $id, $fields)) {
            throw new Exception('There was a problem updating');
        }
    }

    public function find($user = null) {
        if($user) {
            $field = (is_numeric($user)) ? 'id' : 'username';
            $data = $this->_db->get('users', array($field, '=', $user));

            if($data->count()) {
                $this->_data = $data->first();
                return $this->_data;
            }
        }
        return false;
    }
    public function login($username = null, $password = null, $remember = false) {

        $user = $this->find($username);
        debugger($user);
        if($user){
            if(sha1($username.$password) == $user->password){
                // Validate from password
                $session = new Session();
                $session->put('id', $user->id);                
                $session->put('name', $user->name);
                return true;                
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    public function exists() {
        return (!empty($this->_data)) ? true : false;
    }

    public function logout() {
        $this->_db->delete('users_session', array('user_id', '=', $this->data()->id));

        Session::delete($this->_sessionName);
        Cookie::delete($this->_cookieName);
    }

    public function data(){
        return $this->_data;
    }

    public function isLoggedIn() {
        return $this->isLoggedIn;
    }
}
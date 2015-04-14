<?php
require_once(APPPATH . 'classes/ExposedModel.php');
class User extends ExposedModel {
    /**
     * @Override
     */
    public function getTable() {
        return 'user';
    }
    public function newUser($params) {
        $req = array("name","age","status","phno");
        
        $existingUsers = $this->getEntries ($params, array('phno'));
        if(count($existingUsers)!=0) return $existingUsers[0];
        
        $this->newEntry ($params, $req);
    }
    public function getUser($params) {
        $req = array('userid');        
        return $this->getEntries($params, $req);
    }
}

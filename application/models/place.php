<?php
require_once(APPPATH . 'classes/ExposedModel.php');
class Place extends ExposedModel {
    
    //@Override
    public function getTable() {
        return 'place';
    }
    //creates an independent request
    public function newPlace($params) {
        $req = ['name','lat','lon'];
        $this->newEntry($params,$req);
    }
    //new interest for a user
    public function getAllPlaces($params) {
        $req = [];
        return $this->getEntries($params, $req);
    }
}

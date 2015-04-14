<?php
require_once(APPPATH . 'classes/ExposedModel.php');
class Offer extends ExposedModel {
    
    //@Override
    public function getTable() {
        return 'offer';
    }
    //creates a new offer for a place
    public function newOffer($params) {
        $req = ['pid','title','desc'];
        $this->newEntry($params,$req);
    }
    //gets offer for a place
    public function getOffer($params) {
        $req = ['pid'];
        return $this->getEntries($params, $req);
    }
}

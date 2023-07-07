<?php

class Biodata extends Controller {
    public function index() {
        $data['nama'] = 'Ryan Giggs';
        $data['nim'] = 'D112111032';
        $data['kelas'] = 'IF4B';
    
        $this->view('biodata', $data);
    }
}

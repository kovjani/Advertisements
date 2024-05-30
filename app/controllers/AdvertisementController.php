<?php

class AdvertisementController extends Controller
{
    public function index(){
        // Create an Advertisement (model) object, get data from it and show it on the advertisements page (view).
        $advertisementModel = $this->model('Advertisement');
        $advertisements = $advertisementModel->getAllAdvertisements();
        $this->view('advertisements/index', ['advertisements' => $advertisements]);
    }
}
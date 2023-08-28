<?php
class AdminHome extends Controller
{
    public function index()
    {
        $data["title"] = "Masuk";
        $this->AdminView("home/index", $data);
    }
}

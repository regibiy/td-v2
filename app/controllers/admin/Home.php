<?php
class Home extends Controller
{
    public function index()
    {
        $data["title"] = "Dashboard";
        $this->AdminView("templates/header", $data);
        $this->AdminView("home/index", $data);
        $this->AdminView("templates/footer");
    }
}

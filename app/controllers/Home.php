<?php
class Home extends Controller
{
    public function index()
    {
        $data["title"] = "Home";
        $data["marker"] = ["active", "", ""];
        $this->view("templates/header", $data);
        $this->view("home/index", $data);
        $this->view("templates/footer");
    }
}

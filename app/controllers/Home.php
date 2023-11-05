<?php
class Home extends Controller
{
    public function index()
    {
        $data["title"] = "Home";
        $data["marker"] = ["active", "", "", ""];
        $this->UserView("templates/header", $data);
        $this->UserView("home/index", $data);
        $this->UserView("templates/footer");
    }
}

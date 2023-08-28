<?php
class Petarung extends Controller
{
    public function index()
    {
        $data["title"] = "Petarung";
        $data["marker"] = ["", "", "", "active"];
        $this->UserView("templates/header", $data);
        $this->UserView("petarung/index", $data);
        $this->UserView("templates/footer");
    }

    public function detail()
    {
        $data["title"] = "Detail Petarung";
        $data["marker"] = ["", "", "", "active"];
        $this->UserView("templates/header", $data);
        $this->UserView("petarung/detail", $data);
        $this->UserView("templates/footer");
    }
}

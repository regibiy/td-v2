<?php
class Satlat extends Controller
{
    public function index()
    {
        $data["title"] = "Satuan Latihan";
        $data["marker"] = ["", "active", "", ""];
        $this->UserView("templates/header", $data);
        $this->UserView("satlat/index");
        $this->UserView("templates/footer");
    }

    public function detail()
    {
        $data["title"] = "Detail Satuan Latihan";
        $data["marker"] = ["", "active", "", ""];
        $this->UserView("templates/header", $data);
        $this->UserView("satlat/detail");
        $this->UserView("templates/footer");
    }
}

<?php
class Satlat extends Controller
{
    public function index()
    {
        $data["title"] = "Satuan Latihan";
        $data["marker"] = ["", "active", "", ""];
        $this->view("templates/header", $data);
        $this->view("satlat/index");
        $this->view("templates/footer");
    }

    public function detail()
    {
        $data["title"] = "Detail Satuan Latihan";
        $data["marker"] = ["", "active", "", ""];
        $this->view("templates/header", $data);
        $this->view("satlat/detail");
        $this->view("templates/footer");
    }
}

<?php
class Pelatih extends Controller
{
    public function index()
    {
        $data["title"] = "Pelatih";
        $data["marker"] = ["", "", "active", ""];
        $this->UserView("templates/header", $data);
        $this->UserView("pelatih/index", $data);
        $this->UserView("templates/footer");
    }

    public function detail()
    {
        $data['title'] = "Detail Pelatih";
        $data["marker"] = ["", "", "active", ""];
        $this->UserView("templates/header", $data);
        $this->UserView("pelatih/detail", $data);
        $this->UserView("templates/footer");
    }
}

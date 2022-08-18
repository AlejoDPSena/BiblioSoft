<?php

class Registro extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = []; //temporal porque no hay
        $this->renderView('Registro', $data);
    }
}

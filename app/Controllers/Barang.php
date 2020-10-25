<?php

namespace App\Controllers;


class Barang extends BaseController
{

    public function __construct()
    {
        if (session()->email == null || session()->email == '') {
            return redirect()->to('/auth');
        }
    }



    //--------------------------------------------------------------------

}

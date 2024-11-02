<?php

namespace App\Http\Controllers;



use App\Exports\ExportName;
use App\Models\Categoria;
use App\Models\Estado;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Libro;
use mysql_xdevapi\Exception;
use Excel;
use Termwind\Components\Li;


class Controller extends BaseController
{

   


    function main(){
        return view('main');
    }
    

    
  



}

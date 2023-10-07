<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\commerce\Categorie;
use App\Models\admin\commerce\CmdDetail;
use App\Models\admin\commerce\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index() : View
    {

        //Nombre Tottal de product disponible aux Stock

        $nombreStock = Product::where('stock','>',0)->count();

        //nombre e produt dispanible par categorrie
        //Nombre de Categorie
        $totalCategorie = Categorie::count();

              // Calcul du revenu total
    $totalRevenue = $this->calculateTotalRevenue();
        return view('admin.dashboard', [
           'nombreStock'  => $nombreStock ,
            'totalCategorie' =>$totalCategorie,
            'totalRevenue' => $totalRevenue, 
        ]);
    }


    public function calculateTotalRevenue()
    {
        $totalRevenue = CmdDetail::join('commandes', 'cmd_details.cmd_id', '=', 'commandes.id')
            ->selectRaw('SUM(cmd_details.prix_unit * cmd_details.quantité) as totalRevenue')
            ->first()
            ->totalRevenue;
    
        return $totalRevenue;
    }

    


    
    
    
}







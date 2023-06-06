<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Item;

class OutputController extends Controller
{
    public function output() {

        // 商品一覧取得
        $items = Item::where('items.status', 'active')
            ->get();

        $pdf = PDF::loadView('output',['items' => $items])->setOption('encoding', 'utf-8');
        
        return $pdf->inline('items.pdf'); 
    }
}
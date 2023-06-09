<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Models\User;

class ItemController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * 商品一覧
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;

        $items = Item::where('name', 'LIKE', "%$keyword%")->orWhere('detail', 'LIKE', "%$keyword%")->get();
        
        // dump($items);
        // 商品一覧取得
        /* $items = Item
            ::where('items.status', 'active')
            ->select()
            ->get(); */

        return view('item.index', compact('items','keyword'));
    }

    /**
     * 商品登録
     */
    public function add(Request $request)
    {
        // POSTリクエストのとき
        if ($request->isMethod('post')) {
            // バリデーション
            $this->validate($request, [
                'name' => 'required|max:100',
            ]);

            // 商品登録
            Item::create([
                'user_id' => Auth::user()->id,
                'name' => $request->name,
                'type' => $request->type,
                'detail' => $request->detail,
            ]);

            return redirect('/items');
        }

        return view('item.add');
    }

    public function delete(Request $request)
    {
        $item = User::where('id', '=', $request->id)->first();
        $item->delete();

        return redirect('/items')->with('delete_message', '削除しました');;
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;

        $items = Item::where('name', 'LIKE', "%$keyword%")->orWhere('detail', 'LIKE', "%$keyword%")->get();
        
        // dump($items);

        return view('item.index', compact('items','keyword'));
    }

}

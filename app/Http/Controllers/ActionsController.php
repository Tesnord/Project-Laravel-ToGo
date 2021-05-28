<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Utils\MarketFavorites;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ActionsController extends Controller
{
    public function index()
    {
        MarketFavorites::getInstance();
        $actions = Action::all();

        foreach ($actions as $promotion) {
            $start = Carbon::create($promotion->start)->formatLocalized('%d %B %Y');

            $finish = date('d F', strtotime($promotion->finish));
        }
        return view('actions.index', [
            'actions' => $actions,
            'start' => $start,
            'finish' => $finish,
        ]);
    }

    public function show($slug_action)
    {
        MarketFavorites::getInstance();
        $action = Action::query()->where('slug_action', '=', $slug_action)->first();
        $start = date('d F', strtotime($action->start));
        $finish = date('d F', strtotime($action->finish));

        return view('actions.item', [
            'action' => $action,
            'start' => $start,
            'finish' => $finish,
        ]);
    }
}

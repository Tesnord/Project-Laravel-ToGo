<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Utils\MarketFavorites;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class BasketController extends Controller
{
    private $basket;

    public function __construct()
    {
        $this->getBasket();
    }

    /**
     * Показывает корзину покупателя
     */
    public function index()
    {
        MarketFavorites::getInstance();
        $products = $this->basket->products;
        return view('basket.index', compact('products'));
    }

    /**
     * Форма оформления заказа
     */
    public function checkout()
    {
        MarketFavorites::getInstance();
        return view('basket.checkout');
    }

    // /**
    //  * Добавляет товар с идентификатором $id в корзину
    //  */
    // public function add(Request $request, $id)
    // {
    //     $quantity = $request->input('quantity') ?? 1;
    //     $this->basket->increase($id, $quantity);
    //     // выполняем редирект обратно на ту страницу,
    //     // где была нажата кнопка «В корзину»
    //     return back();
    // }

    public function add(Request $request, $id)
    {
        $quantity = $request->input('quantity') ?? 1;
        $this->basket->increase($id, $quantity);

    }

    public function changeProductQuantity(Request $request)
    {
        // $this->basket->increase($id);
        // выполняем редирект обратно на страницу корзины
        // return redirect()->route('basket.index');

        $msg = "Меняем количество у товара {$request->get('product')} на {$request->get('quantity')}";

        $res = array(
            'status' => true,
            'data' => array(
                'message' => $msg
            )
        );

        return $res;
    }

    /**
     * Увеличивает кол-во товара $id в корзине на единицу
     */
    public function plus($id)
    {
        $this->basket->increase($id);
        // выполняем редирект обратно на страницу корзины
        return redirect()->route('basket.index');
    }

    /**
     * Уменьшает кол-во товара $id в корзине на единицу
     */
    public function minus($id)
    {
        $this->basket->decrease($id);
        // выполняем редирект обратно на страницу корзины
        return redirect()->route('basket.index');
    }

    /**
     * Возвращает объект корзины; если не найден — создает новый
     */
    private function getBasket()
    {
        $basket_id = request()->cookie('basket_id');
        if (!empty($basket_id)) {
            try {
                $this->basket = Basket::findOrFail($basket_id);
            } catch (ModelNotFoundException $e) {
                $this->basket = Basket::create();
            }
        } else {
            $this->basket = Basket::create();
        }
        Cookie::queue('basket_id', $this->basket->id, 525600);
    }

    /**
     * Удаляет товар с идентификаторм $id из корзины
     */
    public function remove($id)
    {
        $this->basket->remove($id);
        // выполняем редирект обратно на страницу корзины
        return redirect()->route('basket.index');
    }

    /**
     * Полностью очищает содержимое корзины покупателя
     */
    public function clear()
    {
        $this->basket->delete();
        // выполняем редирект обратно на страницу корзины
        return redirect()->route('basket.index');
    }
}

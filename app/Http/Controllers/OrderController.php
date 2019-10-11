<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_obj = Order::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.order.list')->with('list_obj', $list_obj);
    }
    public function create(){
        return view('admin.order.form');
    }
    public function store(Request $request){
        return redirect('/admin/order');
    }
    public function getData(){
        $currentMonth = date('m');
        $balance = DB::table('order_details')
            ->join('orders', 'order_details.order_id', '=', 'orders.id')
            ->whereRaw('MONTH(created_at) = ?',[$currentMonth])
            ->sum('quantity');
        $data = DB::table('order_details')
            ->join('orders', 'order_details.order_id', '=', 'orders.id')
            ->whereRaw('Date(created_at) = CURDATE()')
            ->sum('quantity');
        $done = DB::table('order_details')
            ->join('orders', 'order_details.order_id', '=', 'orders.id')
            ->whereRaw('MONTH(created_at) = ?',[$currentMonth])
            ->where('status',1)
            ->sum('quantity');
        return view('admin.dashboard.chart',compact('balance','data','done'));
    }
    public function getChartDataApi()
    {
        $start_date = Input::get('startDate');
        $end_date = Input::get('endDate');
        $chart_data = Order::select(DB::raw('sum(total_price) as revenue'), DB::raw('date(created_at) as day'))
            ->whereBetween('created_at', array($start_date . ' 00:00:00', $end_date . ' 23:59:59'))
            ->groupBy('day')
            ->orderBy('day', 'desc')
            ->get();
        return $chart_data;
    }

    public function getChartPieDataApi()
    {
        $chart_data = OrderDetail::select(DB::raw('product_id as product_id'), DB::raw('products.name as product_name'),DB::raw('sum(quantity) as number'))
            ->join('products', 'products.id', '=', 'order_details.product_id')
            ->groupBy('product_id')
            ->groupBy('product_name')
            ->get();
        return $chart_data;
    }

    public function changeStatus()
    {
        $id = Input::get('id');
        $status = Input::get('status');
        $order = Order::find($id);
        if ($order == null) {
            return view('error.404');
        }
        $order->status = $status;
        $order->save();
        return redirect('/admin/order');
    }
    public function __construct() {
        $this->middleware('auth');
    }

}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderBillAddress;
use App\Models\OrderDeliveryAddress;
use App\Models\OrderDetail;
use App\Models\OrderPayment;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    public function index()
    {
        return view('admin.orders.index');
    }

    public function show()
    {
        return datatables()->of(
            Order::query()->with('user.customer' , 'paymentMethod', 'shippingMethod', 'orderPayment')->orderBy('id', 'asc')
        )->toJson();
    }

    public function detail($id)
    {

        $order = Order::with('customer', 'orderDeliveryAddress', 'orderBillAddress', 'paymentMethod', 'shippingMethod', 'orderPayment.paymentMethod')->find($id);
        if(!$order){
            return abort(404);
        }
        $i = 1;
        $orderDetails = OrderDetail::with('product')->where('order_id', $id)->get();
        // return $order;

        return view('admin.orders.detail', compact('order', 'i', 'orderDetails'));
    }

    public function store(Request $req)
    {
    }

    public function destroy(Request $req)
    {

        $id = $req->id;
        $or = Order::find($id);
        if ($or) {

            Order::find($id)->delete();
            OrderPayment::where('order_id', $id)->delete();
            OrderDetail::where('order_id', $id)->delete();
            OrderDeliveryAddress::where('order_id', $id)->delete();
            OrderBillAddress::where('order_id', $id)->delete();

            $data = [
                'title' => 'สำเร็จ!',
                'msg' => 'ลบออเดอร์สำเร็จ',
                'status' => 'success',
            ];

            return $data;
        } else {

            $data = [
                'title' => 'ไม่สำเร็จ!',
                'msg' => 'ลบออเดอร์ไม่สำเร็จ',
                'status' => 'error',
            ];

            return $data;
        }
    }

    public function changeStatus(Request $req)
    {
        $validated = $req->validate([
            'status' => 'required',
            'orderId' => 'required',
        ]);
        $id = $req->orderId;
        $status = $req->status;

        $order = Order::find($id);
        if (!$order) {
            return abort(404);
        }

        $order->status = $status;
        $order->save();

        return redirect()->back()->with('success', 'บันทึกสำเร็จ!');

    }


    public function orderCustomer($id)
    {
        return datatables()->of(
            Order::query()->with('user.customer', 'paymentMethod', 'shippingMethod', 'orderPayment')->where('customer_id', $id)->orderBy('id', 'asc')
        )->toJson();
    }

    public function getCountOrder()
    {
        $count = Order::whereIn('status', [0,1])->count();

        return $count;
    }
}

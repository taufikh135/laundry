<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Service;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class ApiOrderController extends Controller
{
    public function order(Request $request): JsonResponse
    {
        try {
            $data = $request->validate([
                'orders' => ['required', 'array', 'min:1'],
                'orders.*.service_id' => ['required', 'exists:services,id'],
                'orders.*.quantity' => ['required', 'integer', 'min:1'],
                'service' => ['required', 'enum:Antar Jemput,Mandiri'],
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'errors' => $e->errors()
            ], 400);
        }

        try {
            DB::transaction(function () use ($data) {
                $userId = Auth::user()->id;
                $user = User::find($userId);

                $user->point = 0;
                $user->update();

                $order = new Order();
                $order->user_id = $user->id;
                $order->payment_id = null;
                $order->service = $data['service'];
                $order->total_price = 0;
                $order->status = 'Menunggu Konfirmasi';
                $order->save();

                foreach ($data['orders'] as $order) {
                    $service = Service::find($order['service_id']);
                    $product = $service->product;
                    $quantity = $order['quantity'];

                    $orderDetail = new OrderDetail();
                    $orderDetail->order_id = $order->id;
                    $orderDetail->product_code = $product->code;
                    $orderDetail->name = $product->name;
                    $orderDetail->product_price = $product->price;
                    $orderDetail->quantity = $quantity;
                    $orderDetail->total_price = $orderDetail->product_price * $orderDetail->quantity;
                    $orderDetail->save();

                    $order->totalPrice += $orderDetail->total_price;
                }

                $order->update();
            });
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'errors' => [
                    'message' => [
                        $e->getMessage()
                    ]
                ]
            ], 400);
        }

        return response()->json([
            'success' => true
        ]);
    }

    public function getOne(string $id): JsonResponse
    {
        try {
            $order = Order::where('id', $id)->where('user_id', Auth::user()->id)->firstOrFail();
        } catch (Exception) {
            return response()->json([
                'success' => false,
                'errors' => [
                    'message' => ['Order tidak ditemukan']
                ]
            ], 400);
        }

        $orderResponse = $order->toArray();
        $orderResponse['products'] = $order->product;

        return response()->json([
            'success' => true,
            'data' => $orderResponse
        ]);
    }

    public function getAll(): JsonResponse
    {
        $orders = Order::where('user_id', Auth::user()->id)->get();

        return response()->json([
            'success' => true,
            'data' => $orders
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function voucher(Request $request)
    {

        $limit = $request->input('limit', 6);
        $name = $request->input('name');
        $type = $request->input('type');
        $point_from = $request->input('price_from');
        $point_to = $request->input('price_to');
        $data = Voucher::paginate($limit);

        if ($name)
            $data->where('name', '=',  $name);

        if ($type)
            $data->where('type', 'like', '%' . $type . '%');

        if ($point_from)
            $data->where('point', '>=' . $point_from);

        if ($point_to)
            $data->where('point', '<=' . $point_to);

        return response()->json([
            'status' => 'success',
            'data' => $data,
        ]);
    }
}

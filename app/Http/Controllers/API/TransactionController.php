<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use DB;

class TransactionController extends Controller
{
    /**
     * Display list laporan tanggal, merchant & omset.
     *
     * @return \Illuminate\Http\Response
     */
    public function laporan1(Request $request)
    {
        $perPage = $request->perPage?:5;
        $currentPage = $request->currentPage?:1;

        $data = Transaction::select(DB::raw('date_format(transactions.created_at, \'%Y-%m-%d\') tanggal'), DB::raw('coalesce(sum(transactions.bill_total), 0) as omzet'), 'merch.merchant_name')->
                                leftJoin('merchants as merch', 'merch.id', '=', 'transactions.merchant_id')->
                                leftJoin('users', 'users.id', '=', 'merch.user_id')->
                                whereMonth('transactions.created_at', 11);

        $data = $data->where('users.id', auth()->user()->id);
        $data = $data->groupBy(DB::raw('date_format(`transactions`.`created_at`, \'%Y-%m-%d\'),
            `merch`.`merchant_name`'));
        $data = $data->paginate($perPage, ['*'], 'page', $currentPage);

        if(!empty($data)) {
            $status = 200;
        } else {
            $status = 400;
        }

        $item[] = $data;

        return response()->json($item, $status);
    }

    /**
     * Display list laporan tanggal, merchant, outlet & omset.
     *
     * @return \Illuminate\Http\Response
     */
    public function laporan2(Request $request)
    {
        $perPage = $request->perPage?:5;
        $currentPage = $request->currentPage?:1;

        $data = Transaction::select(DB::raw('date_format(transactions.created_at, \'%Y-%m-%d\') tanggal'), DB::raw('coalesce(sum(transactions.bill_total),0) as omzet'), 'merch.merchant_name', 'outlets.outlet_name')->
                                leftJoin('outlets', 'outlets.id', '=', 'transactions.outlet_id')->
                                leftJoin('merchants as merch', 'merch.id', '=', 'transactions.merchant_id')->
                                leftJoin('users', 'users.id', '=', 'merch.user_id')->
                                whereMonth('transactions.created_at', 11);

        $data = $data->where('users.id', auth()->user()->id);
        $data = $data->groupBy(DB::raw('date_format(`transactions`.`created_at`, \'%Y-%m-%d\'),
            `merch`.`merchant_name`,
            `outlets`.`outlet_name`'));

        $data = $data->paginate($perPage, ['*'], 'page', $currentPage);

        if(!empty($data)) {
            $status = 200;
        } else {
            $status = 400;
        }

        $item[] = $data;

        return response()->json($item, $status);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

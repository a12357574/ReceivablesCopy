<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Receipt;
use Illuminate\Http\Request;
use App\Http\Requests\ReceiptFormRequest;

class ReceiptController extends Controller
{
    public function index()
    {
        $receipts = Receipt::all();
        return view('admin.receipts.index', compact('receipts'));
    }

    public function create()
    {
        $receipts =  Receipt::all();
        return view('admin.receipts.create', compact('receipts'));
    }

    public function store(ReceiptFormRequest $request)
    {
        $validatedData = $request->validated();

        $receipts = new Receipt;
        $receipts->ReceiptID = $validatedData['ReceiptID'];
        $receipts->StudentNumber = $validatedData['StudentNumber'];
        $receipts->StudentName = $validatedData['StudentName'];
        $receipts->Amount = $validatedData['Amount'];
        $receipts->College = $validatedData['College'];
        $receipts->DueDate = $validatedData['DueDate'];
        $receipts->DatePaid = $validatedData['DatePaid'];

        $receipts->status = $request->status == true ? '1':'0';
        $receipts->save();

        return redirect('admin/receipts')->with('message','Receipt Added');
    }

    public function edit(int $ReceiptID)
    {
        $receipts =  Receipt::all();
        $receipts = Receipt::findOrFail($ReceiptID);
        return view('admin.receipts.edit', compact('receipts'));
    }

    public function update(ReceiptFormRequest $request, int $ReceiptID)
    {
        $validatedData = $request->validated();
        $receipts = Receipt::findOrFail($validatedData['ReceiptID']);

        if($receipts)
        {
            $receipts->update([
                $receipts->ReceiptID = $validatedData['ReceiptID'],
                $receipts->StudentNumber = $validatedData['StudentNumber'],
                $receipts->StudentName = $validatedData['StudentName'],
                $receipts->Amount = $validatedData['Amount'],
                $receipts->College = $validatedData['College'],
                $receipts->DueDate = $validatedData['DueDate'],  
                $receipts->DatePaid = $validatedData['DatePaid']
            ]);

            return redirect('admin/receipts')->with('message','Receipts Updated Successfully');
        }
        else{
            return redirect()->with('message','No such Receipt is Found');
        }
    }
    public function delete(int $ReceiptID)
    {
        $receipts = Receipt::findOrFail($ReceiptID);
        $receipts ->delete();
        return redirect()->back()->with('message','Deleted Receipt');
    }
}


@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-12">
        @if (session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3>Invoices
                    <a href="{{ url('admin/invoices/create') }}" class="btn btn-primary btn-sm text-white float-end">
                        Add Invoices
                    </a>
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Invoice ID</th>
                            <th>Student Number</th>
                            <th>Student Name</th>
                            <th>Amount</th>
                            <th>College</th>
                            <th>Due Date</th>
                            <th>Date Paid</th>
                    </thead>
                    <tbody>
                        @forelse ($invoices as $invoice)
                            <tr>
                               <td>{{$invoice->InvoiceID}}</td>
                               <td>{{$invoice->StudentNumber}}</td> 
                               <td>{{$invoice->StudentName}}</td> 
                               <td>{{$invoice->Amount}}</td>
                               <td>{{$invoice->College}}</td> 
                               <td>{{$invoice->DueDate}}</td> 
                               <td>{{$invoice->DatePaid}}</td>
                               <td>
                                    <a href="{{ url('admin/invoices/'.$invoice->InvoiceID.'/edit') }}" class= "btn btn-sm btn-success">Edit</a>
                                    <a href=" {{ url('admin/invoices/'.$invoice->InvoiceID.'/delete')}}" onclick="return confirm('Are you sure you want to delete this data?')"class= "btn btn-sm btn-danger">Delete</a>
                               </td> 
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">No Invoices Available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Expense List</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Expense Date</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Description</th>
                                <th scope="col">
                                    <a href="{{ route('expenses.create') }}" class="btn btn-primary">(+ New)</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($expenses->isEmpty())
                                <tr>
                                    <td colspan="6">
                                        <span>No expenses</span>
                                    </td>
                                </tr>
                            @else
                                @foreach($expenses as $expense)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $expense->title }}</td>
                                        <td>{{ $expense->expense_date }}</td>
                                        <td>{{ $expense->amount }}</td>
                                        <td>{{ $expense->description }}</td>
                                        <td>

                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

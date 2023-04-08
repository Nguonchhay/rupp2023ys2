@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Expense</div>

                <div class="card-body">
                <form method="POST" action="{{ route('expenses.update', ['expense' => $expense->id]) }}">
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Title</label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" required value="{{ $expense->title }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="expense_date" class="col-md-4 col-form-label text-md-end">Expense Date</label>
                            <div class="col-md-6">
                                <input id="expense_date" type="text" class="form-control" name="expense_date" required value="{{ $expense->expense_date }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="amount" class="col-md-4 col-form-label text-md-end">Amount</label>
                            <div class="col-md-6">
                                <input id="amount" type="text" class="form-control" name="amount" required value="{{ $expense->amount }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">Description</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control" name="description">
                                    {{ $expense->description }}
                                </textarea>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="{{ route('expenses.index') }}" class="btn btn-default">
                                    Back to list
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

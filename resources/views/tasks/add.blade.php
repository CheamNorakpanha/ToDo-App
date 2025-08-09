@extends('layouts.default')

@section('content')
    <div class="d-flex align-items-center">
        <div class="container card shadow-sm" style="margin-top: 100px; max-width: 500px;">

            <div class="fs-3 fw-bold text-center mt-3">Add new task</div>

            <form class="p-3" method="POST" action="{{ route('task.add.post') }}">
                @csrf
                <div class="mb-3 mt-1">
                    <input type="text" name="title" class="form-control">
                </div>

                <div class="mb-3">
                    <input type="datetime-local" name="deadline" class="form-control">
                </div>

                <div class="mb-3">
                    <textarea name="description" class="form-control" rows="3"></textarea>
                </div>

                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}

                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
@endsection

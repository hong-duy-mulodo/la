@extends('layouts.app');

@section('content')
    <table class="table table-striped table-inverse">
        <thead class="thead-inverse">
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
        </tr>
        </thead>
        <tbody>
            @include('account._list')
        </tbody>
    </table>
@endsection
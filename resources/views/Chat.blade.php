@extends('layouts.app')
@section('content')
<chat></chat>
{{-- <table>
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Status</th>
    </thead>
    <tbody>
        @foreach ($friends as $item)


        <tr>
        <td>{{$item->user->name}}</td>
        <td>{{$item->user->email}}</td>
        @if($item->isOnline())
        <td>online</td>
        @else
        <td>Offline</td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table> --}}
@endsection

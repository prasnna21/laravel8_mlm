@extends('user.layout')
@section('levelgroup_active','active')
@section('content')

<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Sl No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Self Group</th>
                </tr>
            </thead>
            <tbody>
                <?php $s=1;?>
                @foreach($members as $item)
                <tr>
                    <td>#{{$s}}</td>
                    <td>{{$item->first_name}} {{$item->last_name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->level_group}}</td>
                </tr>
                <?php $s++; ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

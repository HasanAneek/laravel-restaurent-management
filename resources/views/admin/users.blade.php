<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

<x-app-layout/>
{{--</x-app-layout>--}}
<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.admincss')

    <style>
        table{
            border-collapse: collapse;
            position: relative;
            left: 180px;
            top: 50px;
        }
        td,th{
            border: 3px solid gray;
            padding: 20px 60px;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container-scroller">

    @include('admin.navbar')
    <div>
        <table>
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Usertype</th>
                <th>Action</th>
            </tr>
            </thead>
            @foreach($data as $data)
                <tbody>
                <tr>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->usertype }}</td>
                    @if($data->usertype == 0)
                        <td><a style="text-decoration: none" href="{{ url('/delete',$data->id) }}">Delete</a> </td>
                    @else
                        <td><a style="text-decoration: none" >Not Allowed</a> </td>
                    @endif
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>

</div>
@include('admin.adminscript')

</body>
</html>


</body>
</html>

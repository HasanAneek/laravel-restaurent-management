<x-app-layout/>

    @include('admin.admincss')

<div class="container-scroller">
    @include('admin.navbar')

    <div style="position: relative; top: 30px; right: -200px">
        <table style="background-color: gray; border: 1px">
            <tr>
                <th style="padding: 30px">Name</th>
                <th style="padding: 30px">Email</th>
                <th style="padding: 30px">Phone</th>
                <th style="padding: 30px">Date</th>
                <th style="padding: 30px">Time</th>
                <th style="padding: 30px">Message</th>
            </tr>

            @foreach($data as $data)
            <tr style="text-align: center">
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->phone }}</td>
                <td>{{ $data->date }}</td>
                <td>{{ $data->time }}</td>
                <td>{{ $data->message }}</td>
            </tr>
            @endforeach

        </table>
    </div>

</div>
    @include('admin.adminscript')

</div>


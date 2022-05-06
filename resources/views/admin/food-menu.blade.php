<x-app-layout/>

    @include('admin.admincss')

    <div class="container-scroller">
@include('admin.navbar')

        <div style="position: relative; top: 60px; left: 300px;  ">
            <form action="{{ url('uploadfood') }}" method="POST" enctype="multipart/form-data" style="border: 2px solid gray; padding: 20px 20px;" >
                @csrf
                <div style="padding: 10px">
                    <label for="title">Title</label>
                    <input style="color: dodgerblue" type="text" name="title" placeholder="Write a Title" required>
                </div>
                <div style="padding: 10px">
                    <label for="price">Price</label>
                    <input style="color: dodgerblue" type="number" name="price" placeholder="Write a price" required>
                </div>
                <div style="padding: 10px">
                    <label for="image">Image</label>
                    <input type="file" name="image"  required>
                </div>
                <div style="padding: 10px">
                    <label for="description">Description</label>
                    <input style="color: dodgerblue" type="text" name="description" placeholder="Write a description" required>
                </div>
                <div style="padding: 10px">
                    <button style="background-color: tomato;padding: 6px 23px; border-radius: 15px" type="submit">Save</button>
                </div>
            </form>
            <div style="padding-top: 30px">
                <table style="background-color: black; padding-top: 20px">
                  <tr>
                      <th style="padding: 20px">Food Name</th>
                      <th style="padding: 20px">Price</th>
                      <th style="padding: 20px">Description</th>
                      <th style="padding: 20px">Image</th>
                      <th style="padding: 20px">Action</th>
                      <th style="padding: 20px">Action</th>
                  </tr>

                    @foreach($data as $data)
                    <tr style="text-align: center";>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->price }}</td>
                        <td>{{ $data->description }}</td>
                        <td><img height="200px" width="200px" src="/foodimage/{{ $data->image }}"> </td>
                        <td><a style="text-decoration: none" href="{{ url('/editmenu',$data->id) }}">Edit</a></td>
                        <td><a style="text-decoration: none" href="{{ url('/deletemenu',$data->id) }}">Delete</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>


        </div>
    </div>
@include('admin.adminscript')

</div>

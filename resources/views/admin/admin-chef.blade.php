<x-app-layout/>

@include('admin.admincss')

<div class="container-scroller">
    @include('admin.navbar')

    <div style="position: relative; top: 60px; left: 300px;  ">
        <form action="{{ url('uploadchef') }}" method="POST" enctype="multipart/form-data" style="border: 2px solid gray; padding: 20px 20px;">
            @csrf
            <div style="padding: 10px">
                <label for="name">Name</label>
                <input style="color: dodgerblue" type="text" name="name" placeholder="Enter name" required>
            </div>
            <div style="padding: 10px">
                <label for="speciality">Speciality</label>
                <input style="color: dodgerblue" type="text" name="speciality" placeholder="Enter Speciality" required>
            </div>
            <div style="padding: 10px">
                <input style="color: dodgerblue" type="file" name="image"  required>
            </div>
            <div style="padding: 10px">
                <input style="background-color: tomato;padding: 6px 23px; border-radius: 15px" type="submit" value="Save">
            </div>
        </form>
    </div>


</div>
@include('admin.adminscript')

</div>


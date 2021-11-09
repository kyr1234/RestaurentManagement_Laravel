<html>

<head>
    <title></title>
</head>

<body>
    <x-app-layout>
    </x-app-layout>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        @include("admin.admincss")
    </head>

    <body>

        <div class="container-scroller">
  @include("admin.sidebar")

            <div class="form" style="display:flex; justify-content:center; align-items:center; flex-direction:column; position:relative; left:30%;" >
                <form  method="POST" action="{{ url('/addchef') }}" enctype="multipart/form-data" >
                    <h3>Add And Update Chef Data</h3>

                    <div style="margin-bottom:20px; ">
                    <label>Name</label>
                    <input type="text" placeholder="Enter the Name" style="margin-left:10px;color:black;" name="name">
                   </div>

                    <div  style="margin-bottom:20px;">
                    <label>Speciality</label>
                    <input type="text" placeholder="Enter the Speciality" name="speciality" style="margin-left:10px;color:black;">
                    </div>

                    <div  style="margin-bottom:20px;">
                    <label>Price</label>
                    <input style="margin-left:10px;color:black;" type="file" name="image">
                    </div>


                    <div style="display:flex; justify-content:center; align-items:center;">
                        <button type="submit" style="background-color:white; padding:10px;color:black;"> <a href="addfood">Submit</a></button>
                    </div>
                </form>

<div style="margin-top:25px;">
   <table>
                <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Speciality</td>
                <td>Image</td>
                <td>Action</td>
                </tr>

   @foreach($datas as $data)
                <tr>
                  <td>{{ $data->id }}</td>
                  <td>{{ $data->name }}</td>
                  <td>{{ $data->speciality }}</td>
                  <td><img src="/chefimage/{{ $data->image }}"></td>
                  <td><a href="chefdelete/{{ $data->id }}">Delete</a></td>
                  <td><a href="chefupdate/{{ $data->id }}">Update</a></td>
                </tr>
   @endforeach
   </table>
      </div>
    </div>
</div>

        @include("admin.scripts")
    </body>
    </html>
</body>
</html>

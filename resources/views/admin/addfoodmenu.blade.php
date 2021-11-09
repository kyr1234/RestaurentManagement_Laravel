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
                <form  method="POST" enctype="multipart/form-data" >
                    <h3>Add New Food Item To Menu</h3>

                    <div style="margin-bottom:20px; ">
                    <label>Title</label>
                    <input type="text" placeholder="Enter the Title" style="margin-left:10px;color:black;" name="title">
                   </div>

                    <div  style="margin-bottom:20px;">
                    <label>Description</label>
                    <input type="text" placeholder="Enter the Description" name="description" style="margin-left:10px;color:black;">
                    </div>

                    <div  style="margin-bottom:20px;">
                    <label>Price</label>
                    <input style="margin-left:10px;color:black;" type="text" placeholder="Enter the Price" name="price">
                  </div>
                    <div  style="margin-bottom:20px; ">
                    <label>Image Upload</label>
                    <input style="margin-left:10px;color:black;" type="file" placeholder="Enter the Image" name="image">
                    </div>
                    <div style="display:flex; justify-content:center; align-items:center;">
                        <button type="submit" style="background-color:white; padding:10px;color:black;"> <a href="addfood">Submit</a></button>
                    </div>
                </form>

<div style="margin-top:25px;">
   <table>
                <tr>
                <td>Id</td>
                <td>Title</td>
                <td>Description</td>
                <td>Price</td>
                  <td>Image</td>
                <td>Action</td>
                </tr>

   @foreach($datas as $data)
                <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->title }}</td>
                <td>{{ $data->description }}</td>
                <td>{{ $data->price }}</td>
                <td><img src="/foodfolder/{{ $data->image }}"></td>
                <td><a href="fooddelete/{{ $data->id }}">Delete</a></td>
                <td><a href="foodupdate/{{ $data->id }}">Update</a></td>
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

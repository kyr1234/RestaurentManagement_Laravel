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
                <form action="updatechefdata/{{ $data->id }}"  method="POST" enctype="multipart/form-data" >
                    <h3>Update Menu Item</h3>

                    <div style="margin-bottom:20px; ">
                    <label>Id</label>
                    <input value="{{ $data->id }}" type="text" disabled>
                    </div>

                    <div style="margin-bottom:20px; ">
                    <label>Name</label>
                    <input type="text"  style="margin-left:10px;color:black;" name="name" value="{{ $data->name }}">
                   </div>

                    <div  style="margin-bottom:20px;">
                    <label>Speciality</label>
                    <input type="text"  value="{{ $data->speciality }}"  name="speciality" style="margin-left:10px;color:black;">
                    </div>

                    <div  style="margin-bottom:20px;">
                     <label>Old Image</label>
                     <img src="/chefimage/{{ $data->image }}" style="height:80px; width:50px;">
                   </div>

                   <div>
                        <label>New Image</label>
                  <input type="file" name="image" >
                  </div>


                  <div style="display:flex; justify-content:center; align-items:center;">
                        <button type="submit" style="background-color:white; padding:10px;color:black;">Update</button>
                  </div>
                </form>

    </div>

</div>


        @include("admin.scripts")
    </body>

    </html>


</body>

</html>

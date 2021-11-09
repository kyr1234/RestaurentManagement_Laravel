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
                <form action="updatedata/{{ $data->id }}"  method="POST" enctype="multipart/form-data" >
                    <h3>Update Menu Item</h3>

                    <div style="margin-bottom:20px; ">
                    <label>Id</label>
                    <input value="{{ $data->id }}" type="text" disabled>
                    </div>

                    <div style="margin-bottom:20px; ">
                    <label>Title</label>
                    <input type="text"  style="margin-left:10px;color:black;" name="title" value="{{ $data->title }}">
                   </div>

                    <div  style="margin-bottom:20px;">
                    <label>Description</label>
                    <input type="text"  value="{{ $data->description }}"  name="description" style="margin-left:10px;color:black;">
                    </div>

                    <div  style="margin-bottom:20px;">
                     <label>Price</label>
                     <input style="margin-left:10px;color:black;"  value="{{ $data->price }}" type="text"  name="price">
                   </div>

                   <div>
                     <img src="foodfolder/{{ $data->image }}" >
                  </div>

                  <div  style="margin-bottom:20px; ">
                    <label>Image Upload</label>
                    <input style="margin-left:10px;color:black;" type="file"  name="image">
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

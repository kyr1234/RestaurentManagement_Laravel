<!DOCTYPE html>
<html lang="en">
  <head>
  </head>
  <body>

    <x-app-layout>
    </x-app-layout>

    <html lang="en">
      <head>
    @include("admin.admincss")
      </head>
      <body>
    <div class="container-scroller">

        @include("admin.sidebar")

        <div style="position:relative; top:10rem; left:10rem">

        <h3 style="text-align:center;margin-bottom:2rem;">Users Table</h3>

        <table style="border:3px solid gray; padding:30px;">

        <tr style="border:3px solid gray; padding:30px;">
        <td style="border-right:3px solid gray;padding:30px;">Name</td>
        <td style="border-right:3px solid gray;padding:30px;">Email</td>
        <td style="border-right:3px solid gray;padding:30px;">Id</td>
    <td style="border-right:3px solid gray;padding:30px;">Action</td>
        </tr>

        @foreach($datas as $data)

          <tr style="border:3px solid gray; padding:30px;">
          <td style="border-right:3px solid gray; padding:30px;">{{ $data->name }}</td>
          <td  style="border-right:3px solid gray; padding:30px;">{{ $data->email }}</td>
          <td  style="border-right:3px solid gray; padding:30px;">{{ $data->id }}</td>

          @if($data->usertype=="0")
          <td  style="border-right:3px solid gray; padding:30px;"><a href="{{"data/$data->id "}}">Delete</a></td>
        @else
<td  style="border-right:3px solid gray; padding:30px;">Not Allowed</td>
@endif

</tr
@endforeach

        </table>

        </div>











      </div>





        @include("admin.scripts")
      </body>
    </html>





  </body>
</html>

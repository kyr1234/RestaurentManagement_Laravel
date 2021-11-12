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

        <h3 style="text-align:center;margin-bottom:2rem;"> Search Results</h3>

<div>
    <form action="search" method="get">
        @csrf
        <input type="text" name="search" value="{{ searchvalue }}">
        <input type="submit" value="Search" class="btn btn-success" style="color:white;">
    </form>
</div>











        <table style="border:3px solid gray; padding:30px;">

        <tr style="border:3px solid gray; padding:30px;">
            <td style="border-right:3px solid gray;padding:30px;">Name</td>
            <td style="border-right:3px solid gray;padding:30px;">Phone Number</td>
            <td style="border-right:3px solid gray;padding:30px;">Address</td>
            <td style="border-right:3px solid gray;padding:30px;">FoodName</td>
             <td style="border-right:3px solid gray;padding:30px;">Price</td>
            <td style="border-right:3px solid gray;padding:30px;">Quantity</td>
            <td style="border-right:3px solid gray;padding:30px;">Total Price</td>
        </tr>

        @foreach($datas as $data)
            <td style="border-right:3px solid gray;padding:30px;">{{ $data->name }}</td>
            <td style="border-right:3px solid gray;padding:30px;"> {{ $data->phoneno }}</td>
            <td style="border-right:3px solid gray;padding:30px;">{{ $data->address }}</td>
            <td style="border-right:3px solid gray;padding:30px;">{{ $data->foodname }}</td>
            <td style="border-right:3px solid gray;padding:30px;">${{ $data->price }}</td>
            <td style="border-right:3px solid gray;padding:30px;">{{ $data->quantity }}</td>
            <td style="border-right:3px solid gray;padding:30px;">${{ $data->price * $data->quantity }} </td>
        @endforeach
    
        </table>

        </div>

      </div>


        @include("admin.scripts")
      </body>
    </html>

  </body>
</html>

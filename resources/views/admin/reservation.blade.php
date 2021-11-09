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

        <div style="position:relative; top:10rem; left:10rem; overflow-y:hidden;">

        <h3 style="text-align:center;margin-bottom:2rem;">Reservation Table</h3>

        <table style="border:3px solid gray; padding:30px;">

            <tr style="border:3px solid gray; padding:30px;">
                  <td style="border-right:3px solid gray;padding:30px;">Id</td>
                  <td style="border-right:3px solid gray;padding:30px;">Name</td>
                  <td style="border-right:3px solid gray;padding:30px;">Email</td>
                  <td style="border-right:3px solid gray;padding:30px;">Phone Number</td>
                  <td style="border-right:3px solid gray;padding:30px;">No Of Guests</td>
                  <td style="border-right:3px solid gray;padding:30px;">Date</td>
                  <td style="border-right:3px solid gray;padding:30px;">Time</td>
                  <td style="border-right:3px solid gray;padding:30px;">Message</td>
            </tr>

        @foreach($datas as $data)

          <tr style="border:3px solid gray; padding:30px;">
                <td  style="border-right:3px solid gray; padding:30px;">{{ $data->id }}</td>
                <td style="border-right:3px solid gray; padding:30px;">{{ $data->name }}</td>
                <td  style="border-right:3px solid gray; padding:30px;">{{ $data->email }}</td>
                <td  style="border-right:3px solid gray; padding:30px;">{{ $data->phonenumber }}</td>
                <td  style="border-right:3px solid gray; padding:30px;">{{ $data->noofguests }}</td>
                <td  style="border-right:3px solid gray; padding:30px;">{{ $data->date }}</td>
                <td  style="border-right:3px solid gray; padding:30px;">{{ $data->time }}</td>
                <td  style="border-right:3px solid gray; padding:30px;">{{ $data->message }}</td>
          </tr>

         @endforeach

        </table>

        </div>

      </div>
        @include("admin.scripts")
      </body>
    </html>

  </body>


</html>

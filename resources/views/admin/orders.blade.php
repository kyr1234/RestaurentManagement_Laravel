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

        <h3 style="text-align:center;margin-bottom:2rem;"> Customers Orders</h3>

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

    
        </table>

        </div>

      </div>


        @include("admin.scripts")
      </body>
    </html>

  </body>
</html>

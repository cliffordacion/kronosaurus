@extends('layouts.mail')

@section('content')
Dear {{ $username }},

<br>
    <div>
      <p>Your email address is : {{ $email }}</p>

      <p>timestamp : {{ $timestamp }}</p>

      <p>this is a test email with a lorem ipsum content.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eleifend et metus sit amet vulputate. Sed accumsan aliquam porttitor. In hac habitasse platea dictumst. Fusce feugiat dictum est, sed finibus erat gravida vel. Etiam ut blandit leo. In consequat, sapien et dignissim accumsan, sapien ligula feugiat nulla, vel pulvinar est ipsum ut elit. Vivamus bibendum varius velit. Vestibulum diam ipsum, ultrices sit amet urna id, volutpat rutrum mi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer lobortis, tellus vel maximus mollis, elit mi posuere urna, id tempus ligula orci vel augue. Cras vel tellus pellentesque, tempus enim a, molestie elit.</p>
   </div>
<br>
Sincerely,
<br>
French Clifford Dacion
@endsection

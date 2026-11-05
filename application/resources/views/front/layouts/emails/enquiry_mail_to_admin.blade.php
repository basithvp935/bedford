<body style="background-color: #f3f5f7; margin: 0 !important; padding: 0 !important;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td align="center">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 640px;background-color: #f3f5f7;">
                    <tr>
                        <td align="left" valign="top" style="padding: 40px 10px 40px 10px;">
                            <a href="{{ route('main') }}" target="_blank" style="text-decoration: none;">
                                <img src="{{ asset('Front/images/logo.png')}}">
                            </a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td align="center" style="padding: 0px 10px 0px 10px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 640px;">
                    <tr>
                        <td bgcolor="#ffffff" align="left"
                        style="padding: 0px 30px 20px 30px; color: #666666; font-family: Poppins, sans-serif; font-size: 15px; font-weight: 400; line-height: 25px;">
                        </td>
                    </tr>
                    @php
                        $product = \App\Models\Produce::find($datas['produce_id']);
                    @endphp
                    <tr>
                        <td bgcolor="#ffffff" align="left"
                        style="padding: 0px 30px 20px 30px; color: #666666; font-family: Poppins, sans-serif; font-size: 15px; font-weight: 400; line-height: 25px;">
                            <p style="margin: 0;">Dear Admin,</p><br>
                            <p style="margin: 0;">Please note that an enquiry has been placed by a customer on the @if(!empty($product)) <b>{{$product->title}} </b>  @endif from our website with the below details. Kindly check the same and get back to them at the earliest.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td align="center" style="padding: 0px 10px 0px 10px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 640px;">
                    <tr>
                        <td bgcolor="#ffffff" align="left"
                            style="padding: 0px 30px 20px 30px; color: #666666; font-family: Poppins, sans-serif; font-size: 15px; font-weight: 400; line-height: 25px;">
                            <p style="margin: 0;">Product : <b>{{$product->title}} </b> </p>
                            <p style="margin: 0;">Name : {{ $datas['name'] }}</p>
                            <p style="margin: 0;">E-Mail : {{ $datas['email'] }}</p>
                            <p style="margin: 0;">Phone : {{ $datas['phone'] }}</p>
                            <p style="margin: 0;">Message : <pre>{{ $datas['message'] }}</pre></p>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#ffffff" align="left"
                            style="padding: 0px 30px 0px 30px; color: #666666; font-family: Poppins, sans-serif; font-size: 15px; font-weight: 400; line-height: 25px;">
                            <p style="margin: 0;">For all your queries contact <a href="tel:97144425871"
                                target="_blank" style="color: #06426a;"> +97144425871</a></p>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#ffffff" align="left"
                            style="padding: 0px 5px 10px 5px; border-radius: 0px 0px 0px 0px; color: #666666; font-family: Poppins, sans-serif; font-size: 14px; font-weight: 400; line-height: 25px;">
                            <p style="margin: 0;">&nbsp;</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td align="center" style="padding: 10px 10px 0px 10px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 640px;">
                    <tr>
                        <td bgcolor="#198754" align="center"
                            style="padding: 30px 30px 30px 30px; border-radius: 4px 4px 4px 4px; color: #ffffff; font-family: Poppins, sans-serif; font-size: 15px; font-weight: 400; line-height: 25px;">
                            <p style="margin: 0;">© {{date('Y')}} <sup></sup>  Armela Farms</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td align="center" style="padding: 10px 10px 50px 10px;">
            </td>
        </tr>
    </table>

</body>

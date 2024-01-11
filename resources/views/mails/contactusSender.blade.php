<table align="center"
    style="text-align: left; vertical-align: top; width: 600px; max-width: 600px; background-color: #ffffff;"
    width="600">
    <tbody>
        <tr>
            <td style="width: 596px; vertical-align: top; padding-left: 30px; padding-right: 30px; padding-top: 30px; padding-bottom: 40px;"
                width="596">

                <h1
                    style="font-size: 20px; line-height: 24px; font-family: 'Helvetica', Arial, sans-serif; font-weight: 600; text-decoration: none; color: #000000;">
                    Message Details
                </h1>

                <p
                    style="font-size: 15px; line-height: 24px; font-family: 'Helvetica', Arial, sans-serif; font-weight: 400; text-decoration: none; color: #919293;">
                    My name is {{ $mailData['name'] }}. I have sent below message please read it cordially.
                    <br>
                    <br>
                    <strong>SENDER DETAILS</strong>
                    <br>
                    Email : <strong> {{ $mailData['email'] }}</strong>
                    <br>
                    Phone : <strong> {{ $mailData['phone'] }}</strong>
                    <br>
                    <br>
                    Subject : <strong> {{ $mailData['subject'] }}</strong>
                    <br>
                    <strong>Message</strong>
                    <br>
                    {{ $mailData['message'] }}
                </p>

            </td>
        </tr>
    </tbody>
</table>

<!-- Free to use, HTML email template designed & built by FullSphere. Learn more about us at www.fullsphere.co.uk -->

<!DOCTYPE HTML
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
    xmlns:o="urn:schemas-microsoft-com:office:office">

<head>

    <!--[if gte mso 9]>
  <xml>
    <o:OfficeDocumentSettings>
      <o:AllowPNG/>
      <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
  </xml>
  <![endif]-->

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="x-apple-disable-message-reformatting">
    <!--[if !mso]><!-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<![endif]-->

    <!-- Your title goes here -->
    <title>Newsletter</title>
    <!-- End title -->

    <!-- Start stylesheet -->
    <style type="text/css">
        a,
        a[href],
        a:hover,
        a:link,
        a:visited {
            /* This is the link colour */
            text-decoration: none !important;
            color: #0000EE;
        }

        .link {
            text-decoration: underline !important;
        }

        p,
        p:visited {
            /* Fallback paragraph style */
            font-size: 15px;
            line-height: 24px;
            font-family: 'Helvetica', Arial, sans-serif;
            font-weight: 300;
            text-decoration: none;
            color: #000000;
        }

        h1 {
            /* Fallback heading style */
            font-size: 22px;
            line-height: 24px;
            font-family: 'Helvetica', Arial, sans-serif;
            font-weight: normal;
            text-decoration: none;
            color: #000000;
        }

        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td {
            line-height: 100%;
        }

        .ExternalClass {
            width: 100%;
        }
    </style>
    <!-- End stylesheet -->

    <!-- Fundraise Up: the new standard for online giving -->
    <script>
        (function(w, d, s, n, a) {
            if (!w[n]) {
                var l = 'call,catch,on,once,set,then,track'
                    .split(','),
                    i, o = function(n) {
                        return 'function' == typeof n ? o.l.push([arguments]) && o :
                            function() {
                                return o.l.push([n, arguments]) && o
                            }
                    },
                    t = d.getElementsByTagName(s)[0],
                    j = d.createElement(s);
                j.async = !0;
                j.src = 'https://cdn.fundraiseup.com/widget/' + a;
                t.parentNode.insertBefore(j, t);
                o.s = Date.now();
                o.v = 4;
                o.h = w.location.href;
                o.l = [];
                for (i = 0; i < 7; i++) o[l[i]] = o(l[i]);
                w[n] = o
            }
        })(window, document, 'script', 'FundraiseUp', 'AAGLYUUE');
    </script>
    <!-- End Fundraise Up -->

</head>

<!-- You can change background colour here -->

<body
    style="text-align: center; margin: 0; padding-top: 10px; padding-bottom: 10px; padding-left: 0; padding-right: 0; -webkit-text-size-adjust: 100%;background-color: #f2f4f6; color: #000000"
    align="center">

    <!-- Fallback force center content -->
    <div style="text-align: center;">

        <!-- Email not displaying correctly
    <table align="center" style="text-align: center; vertical-align: middle; width: 600px; max-width: 600px;" width="600">
      <tbody>
        <tr>
          <td style="width: 596px; vertical-align: middle;" width="596">

            <p style="font-size: 11px; line-height: 20px; font-family: 'Helvetica', Arial, sans-serif; font-weight: 400; text-decoration: none; color: #000000;">Is this email not displaying correctly? <a class="link" style="text-decoration: underline;" target="_blank" href="https://fullsphere.co.uk/html-emails/free-template/"><u>Click here</u></a> to view in browser</p>

          </td>
        </tr>
      </tbody>
    </table>
     Email not displaying correctly -->

        <!-- Start container for logo -->
        <table align="center"
            style="text-align: center; vertical-align: top; width: 600px; max-width: 600px; background-color: #ffffff;"
            width="600">
            <tbody>
                <tr>
                    <td style="width: 596px; vertical-align: top; padding-left: 0; padding-right: 0; padding-top: 15px; padding-bottom: 15px;"
                        width="596">

                        <!-- Your logo is here -->
                        <img style="width: 550px; max-width: 550px; height: 85px; max-height: 85px; text-align: center; color: #ffffff;"
                            alt="Logo" src="https://ICDTR.com/file/img/demos/medical-2/logos/logo.png"
                            align="center" width="auto" height="85">

                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End container for logo -->

        <!-- Hero image -->
        <img style="width: 600px; max-width: 600px; height: 350px; max-height: 350px; text-align: center;"
            alt="Hero image" src="https://ICDTR.com/file/img/default/som.jpg" align="center" width="600"
            height="350">
        <!-- Hero image -->

        <!-- Start single column section -->
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
        <!-- End single column section -->


        <!-- Start image -->
        <img style="width: 600px; max-width: 600px; height: 240px; max-height: 240px; text-align: center;"
            alt="Image" src="https://fullsphere.co.uk/misc/free-template/images/image-3.jpg" align="center"
            width="600" height="240">
        <!-- End image -->

        <!-- Start footer -->
        <table align="center"
            style="text-align: center; vertical-align: top; width: 600px; max-width: 600px; background-color: #000000;"
            width="600">
            <tbody>
                <tr>
                    <td style="width: 596px; vertical-align: top; padding-left: 30px; padding-right: 30px; padding-top: 30px; padding-bottom: 30px;"
                        width="596">

                        <!-- Your inverted logo is here -->
                        <img style="width: 550px; max-width: 550px; height: 85px; max-height: 85px; text-align: center; color: #ffffff;"
                            alt="Logo" src="https://ICDTR.com/file/img/demos/medical-2/logos/logo.png"
                            align="center" width="180" height="85">

                        <p
                            style="font-size: 13px; line-height: 24px; font-family: 'Helvetica', Arial, sans-serif; font-weight: 400; text-decoration: none; color: #ffffff;">
                            89/17 New Chashara, Muktijoddha Farida Akter Road,Chanmari, (West Side of Proposed
                            N.ganj DOHS) Narayanganj-1400, Bangladesh.
                        </p>

                        <p
                            style="margin-bottom: 0; font-size: 13px; line-height: 24px; font-family: 'Helvetica', Arial, sans-serif; font-weight: 400; text-decoration: none; color: #ffffff;">
                            <a target="_blank" style="text-decoration: underline; color: #ffffff;"
                                href="https://www.ICDTR.com">
                                www.ICDTR.com
                            </a>
                        </p>

                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End footer -->

    </div>

</body>

</html>

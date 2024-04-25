<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Package Booking</title>
    <style media="all" type="text/css">
      /* -------------------------------------
    GLOBAL RESETS
------------------------------------- */

      body {
        font-family: Helvetica, sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 16px;
        line-height: 1.3;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
      }

      table {
        border-collapse: separate;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        width: 100%;
      }

      table td {
        font-family: Helvetica, sans-serif;
        font-size: 16px;
        vertical-align: top;
      }
      /* -------------------------------------
    BODY & CONTAINER
------------------------------------- */

      body {
        background-color: #f4f5f6;
        margin: 0;
        padding: 0;
      }

      .body {
        background-color: #f4f5f6;
        width: 100%;
      }

      .container {
        margin: 0 auto !important;
        max-width: 600px;
        padding: 0;
        padding-top: 24px;
        width: 600px;
      }

      .content {
        box-sizing: border-box;
        display: block;
        margin: 0 auto;
        max-width: 600px;
        padding: 0;
      }
      /* -------------------------------------
    HEADER, FOOTER, MAIN
------------------------------------- */

      .main {
        background: #ffffff;
        border: 1px solid #eaebed;
        border-radius: 16px;
        width: 100%;
      }

      .wrapper {
        box-sizing: border-box;
        padding: 24px;
      }

      .footer {
        clear: both;
        padding-top: 24px;
        text-align: center;
        width: 100%;
      }

      .footer td,
      .footer p,
      .footer span,
      .footer a {
        color: #9a9ea6;
        font-size: 16px;
        text-align: center;
      }
      /* -------------------------------------
    TYPOGRAPHY
------------------------------------- */

      p {
        font-family: Helvetica, sans-serif;
        font-size: 16px;
        font-weight: normal;
        margin: 0;
        margin-bottom: 16px;
      }

      a {
        color: #ecaf08;
        text-decoration: underline;
      }
      /* -------------------------------------
    BUTTONS
------------------------------------- */

      .btn {
        box-sizing: border-box;
        min-width: 100% !important;
        width: 100%;
      }

      .btn > tbody > tr > td {
        padding-bottom: 16px;
      }

      .btn table {
        width: auto;
      }

      .btn table td {
        background-color: #ffffff;
        border-radius: 4px;
        text-align: center;
      }

      .btn a {
        background-color: #ffffff;
        border: solid 2px #ecaf08;
        border-radius: 4px;
        box-sizing: border-box;
        color: #ecaf08;
        cursor: pointer;
        display: inline-block;
        font-size: 16px;
        font-weight: bold;
        margin: 0;
        padding: 12px 24px;
        text-decoration: none;
        text-transform: capitalize;
      }

      .btn-primary table td {
        background-color: #ecaf08;
      }

      .btn-primary a {
        background-color: #ecaf08;
        border-color: #ecaf08;
        color: #ffffff;
      }

      @media all {
        .btn-primary table td:hover {
          background-color: #ecaf08 !important;
        }
        .btn-primary a:hover {
          background-color: #ecaf08 !important;
          border-color: #ecaf08 !important;
        }
      }

      /* -------------------------------------
    OTHER STYLES THAT MIGHT BE USEFUL
------------------------------------- */

      .last {
        margin-bottom: 0;
      }

      .first {
        margin-top: 0;
      }

      .align-center {
        text-align: center;
      }

      .align-right {
        text-align: right;
      }

      .align-left {
        text-align: left;
      }

      .text-link {
        color: #0867ec !important;
        text-decoration: underline !important;
      }

      .clear {
        clear: both;
      }

      .mt0 {
        margin-top: 0;
      }

      .mb0 {
        margin-bottom: 0;
      }

      .preheader {
        color: transparent;
        display: none;
        height: 0;
        max-height: 0;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        mso-hide: all;
        visibility: hidden;
        width: 0;
      }

      .powered-by a {
        text-decoration: none;
      }

      /* -------------------------------------
    RESPONSIVE AND MOBILE FRIENDLY STYLES
------------------------------------- */

      @media only screen and (max-width: 640px) {
        .main p,
        .main td,
        .main span {
          font-size: 16px !important;
        }
        .wrapper {
          padding: 8px !important;
        }
        .content {
          padding: 0 !important;
        }
        .container {
          padding: 0 !important;
          padding-top: 8px !important;
          width: 100% !important;
        }
        .main {
          border-left-width: 0 !important;
          border-radius: 0 !important;
          border-right-width: 0 !important;
        }
        .btn table {
          max-width: 100% !important;
          width: 100% !important;
        }
        .btn a {
          font-size: 16px !important;
          max-width: 100% !important;
          width: 100% !important;
        }
      }
      /* -------------------------------------
    PRESERVE THESE STYLES IN THE HEAD
------------------------------------- */

      @media all {
        .ExternalClass {
          width: 100%;
        }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
          line-height: 100%;
        }
        .apple-link a {
          color: inherit !important;
          font-family: inherit !important;
          font-size: inherit !important;
          font-weight: inherit !important;
          line-height: inherit !important;
          text-decoration: none !important;
        }
        #MessageViewBody a {
          color: inherit;
          text-decoration: none;
          font-size: inherit;
          font-family: inherit;
          font-weight: inherit;
          line-height: inherit;
        }
      }
    </style>
  </head>
  <body>
    <table
      role="presentation"
      border="0"
      cellpadding="0"
      cellspacing="0"
      class="body"
    >
      <tr>
        <td>&nbsp;</td>
        <td class="container">
          <div class="content">
            <!-- START CENTERED WHITE CONTAINER -->
            <span class="preheader">We got a new Package Booking</span>
            <table
              role="presentation"
              border="0"
              cellpadding="0"
              cellspacing="0"
              class="main"
            >
              <!-- START MAIN CONTENT AREA -->
              <tr>
                <td class="wrapper">
                  <p>Hi there</p>
                  <p>
                    We are delighted to inform you that a new Package booking
                    has been confirmed for Mr/Mrs. <strong>{{$booking->name}}</strong>. He has
                    reserved the <strong>{{$booking->package->package_name}}</strong> scheduled for
                    <strong>{{$booking->date->format('d F Y')}}</strong>. Please take a moment to
                    review all the details provided and make any necessary
                    arrangements to ensure a seamless experience for our valued
                    client. For more information, you can also check the admin
                    panel.
                  </p>

                  <table
                    role="presentation"
                    border="0"
                    cellpadding="0"
                    cellspacing="0"
                    class="btn btn-primary"
                  >
                    <tbody>
                      <tr>
                        <td align="center">
                          <table
                            role="presentation"
                            border="0"
                            cellpadding="0"
                            cellspacing="0"
                          >
                            <tbody>
                              <tr>
                                <td>
                                  <a href="{{ env('APP_URL') }}/admin" target="_blank"
                                    >To Admin Panel</a
                                  >
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <p>
                    Please ensure to review all the provided information
                    thoroughly before contacting the client.
                  </p>
                  <p>Good luck!</p>
                </td>
              </tr>

              <!-- END MAIN CONTENT AREA -->
            </table>

            <!-- START FOOTER -->
            <div class="footer">
              <table
                role="presentation"
                border="0"
                cellpadding="0"
                cellspacing="0"
              >
                <tr>
                  <td class="content-block">
                    <span class="apple-link">Nata Bali Tours</span>
                    <br />
                  </td>
                </tr>
              </table>
            </div>

            <!-- END FOOTER -->

            <!-- END CENTERED WHITE CONTAINER -->
          </div>
        </td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </body>
</html>
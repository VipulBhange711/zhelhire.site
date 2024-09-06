<!DOCTYPE html>
<html>

<head>
    <title>Internship Letter</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom Styles -->


    <style>
         .watermark {
            position: fixed;
            top: 10;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('{{ public_path('/images/zhelhireLogo.jpg') }}');
            background-size: 150%;
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            opacity: 0.2; /* Adjust the opacity as needed */
            z-index: -1; /* Send the watermark to the background */
        }

        body {
            font-family: 'Arial', sans-serif;
            color: #333;
            line-height: 1.5;
        }

        .header {
            text-align: center;
        }

        .header img {
            width: 100px;
        }

        .letter-title {
            text-align: center;
            font-size: 20px;
            margin-top: 20px;
            font-weight: bold;
            text-decoration: none;
        }

        .content {
            margin: 20px;
        }

        .content p {
            margin: 10px 0;
        }

        .footer {
            text-align: center;
            margin-top: 50px;
        }

        .signature {
            margin-top: 30px;
        }

        .details {
            display: flex;
            justify-content: space-between;
        }

        .details .left,
        .details .right {
            width: 48%;
        }
    </style>
</head>

<body>

    <body>
        <div class="header">
            <img src="{{ $logo }}" style="width: 30%; height: auto;" alt="Company Logo">

        </div>
        <div class="watermark"></div>

        <div class="letter-title text-dark" style="font-size: 25px ;">INTERNSHIP OFFER LETTER</div>
        <hr style="background-color:black">
        <div class="content">
            <div class="details mt-3">
                <div>
                    <span class="text-left "><b> Date: {{ $date }} </b></span> <span class=""><b style="margin-left: 340px;" > ID: {{ $id }}</b></span>

                </div>
            </div>

            <p class="mt-4">Dear,</p>
            <p class="ml-5"><b>{{ $candidateName }}</b></p>

            <p>We would like to congratulate you on being selected for the “<strong>{{ $profile }}</strong>” virtual internship position with “<strong>{{ $companyName }}</strong>”. We at {{ $companyName }} are excited that you will join our team.</p>

            <p>The duration of the internship will be of <strong>{{ $duration }}</strong>, starting from <strong>{{ $startAt }}</strong> to <strong>{{ $endAt }}</strong>.</p>

            <p>The internship is an educational opportunity for you hence the primary focus is on learning and developing new skills and gaining hands-on knowledge. We believe that you will perform all your tasks/projects.</p>

            <p>As an intern, we expect you to perform all assigned tasks to the best of your ability and follow any lawful and reasonable instructions provided to you.</p>

            <p>We are confident that this internship will be a valuable experience for you, we look forward to working with you and helping you achieve your career goals.</p>

            <p>By accepting this offer, you commit to executing assigned tasks diligently and ensuring excellence in all aspects of your work.</p>

            <p>Best of Luck!</p>
            <p> <b> Thank You! </b></p>

            <div class="signature mt-5">
                <p>Sincerely,</p>
                <p>Human Resources
                    <br><b>
                ({{ $companyName }})
                </b></p>
            </div>
        </div>

        <div class="footer">
            <p>({{ $companyWebsite }}) | ({{ $companyEmail }})</p>
        </div>
    </body>
</body>

</html>
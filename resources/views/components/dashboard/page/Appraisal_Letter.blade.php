<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Appraisal Letter</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        body {
            font-family: 'Arial', sans-serif;
            color: #333;
            line-height: 1.5;
        }
        .letter-title {
            font-size: 24px;
            margin-top: 20px;
            font-weight: bold;
            text-decoration: underline;
        }
        .header img {
            max-width: 150px;
        }
        .signature {
            margin-top: 50px;
        }
        .footer p {
            font-size: 12px;
        }
        .details {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header Section -->
        <div class="header text-center">
            <img src="{{ $logo }}" alt="Company Logo">
        </div>

        <!-- Title -->
        <div class="text-center letter-title">
            APPRAISAL LETTER
        </div>

        <!-- Details Section -->
        <div class="details row">
            <div class="col-md-6">
                <p><strong>Date:</strong> {{ now()->format('d/m/Y') }}</p>
            </div>
            <div class="col-md-6 text-right">
                <p><strong>ID:</strong> {{ $id }}</p>
            </div>
        </div>

        <!-- Salutation -->
        <p>Dear {{ $employeeName }},</p>

        <!-- Body Content -->
        <p>We are pleased to inform you that based on your excellent performance, dedication, and hard work during your tenure from <strong>30-Dec-2023</strong> to <strong>06-July-2024</strong>, we are happy to provide you with an appraisal.</p>

        <p>Your initial salary was <strong>₹12,000</strong>. Following your appraisal, your new salary is <strong>₹18,000</strong>, effective from <strong>May 2024</strong>. This increase reflects our appreciation for your continued efforts and the significant contributions you have made to the success of our team at <strong>Distinct Technology</strong>.</p>

        <p>We value your work and are confident that you will continue to exceed expectations in your role. We look forward to your continued growth and success within the company.</p>

        <p>Please acknowledge receipt of this letter and indicate your acceptance of the new terms.</p>

        <p>If you have any questions, feel free to reach out to the HR department.</p>

        <p>Best regards,</p>

        <!-- Signature Section -->
        <div class="signature">
            <p>Sincerely,</p>
            <p>Founder ({{ $companyName }})</p>
        </div>

        <!-- Footer Section -->
        <div class="footer text-center">
            <p>{{ $companyWebsite }} | {{ $companyEmail }}</p>
        </div>
    </div>
</body>
</html>

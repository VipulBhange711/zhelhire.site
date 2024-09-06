<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Salary Slip</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        body {
            font-family: 'Arial', sans-serif;
            color: #333;
        }
        .header img {
            max-width: 150px;
        }
        .company-info, .employee-info {
            margin-bottom: 20px;
        }
        .salary-details, .summary-details {
            margin-top: 20px;
        }
        .salary-details table, .summary-details table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .salary-details th, .salary-details td,
        .summary-details th, .summary-details td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        .footer {
            font-size: 12px;
            text-align: center;
            margin-top: 20px;
        }
        .table-title {
            background-color: #f8f9fa;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header Section -->
        <div class="text-center">
            <img src="{{ $logo }}" alt="Company Logo">
        </div>

        <!-- Employee and Company Info -->
        <div class="row company-info">
            <div class="col-md-6">
                <p><strong>Code:</strong> EMP12345</p>
                <p><strong>Employee Name:</strong> Vipul Bhange</p>
                <p><strong>Company Name:</strong> Distinct Technology</p>
                <p><strong>Date of Joining:</strong> 30-Dec-2023</p>
            </div>
            <div class="col-md-6 text-right">
                <p><strong>Department:</strong> Development</p>
                <p><strong>Location:</strong> Nagpur HO</p>
                <p><strong>Designation:</strong> PHP Laravel Developer</p>
                <p><strong>Date:</strong> {{ now()->format('d/m/Y') }}</p>
            </div>
        </div>

        <!-- Summary Details -->
        <div class="summary-details">
            <table>
                <tr>
                    <td><strong>Month:</strong> March – 2024</td>
                    <td><strong>Total Working Days:</strong> 26</td>
                    <td><strong>Present Days:</strong> 24</td>
                    <td><strong>Absent Days:</strong> 02</td>
                </tr>
                <tr>
                    <td><strong>Recruit Salary:</strong> ₹12,000.00</td>
                    <td><strong>Deduction:</strong> ₹200.00</td>
                    <td><strong>Gross Salary:</strong> ₹12,800.00</td>
                    <td><strong>Net to Hand:</strong> ₹10,876.00</td>
                    <td><strong>Payment Mode:</strong> Online</td>
                </tr>
            </table>
        </div>

        <!-- Salary Details -->
        <div class="salary-details">
            <table>
                <thead>
                    <tr>
                        <th colspan="2" class="table-title">Earnings</th>
                        <th colspan="2" class="table-title">Deductions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Salary</td>
                        <td>₹12,000.00</td>
                        <td>Advance</td>
                        <td>0.00</td>
                    </tr>
                    <tr>
                        <td>Loan Allowance</td>
                        <td>0.00</td>
                        <td>Loan</td>
                        <td>0.00</td>
                    </tr>
                    <tr>
                        <td>Rent Allowance</td>
                        <td>0.00</td>
                        <td>Petrol Exp.</td>
                        <td>0.00</td>
                    </tr>
                    <tr>
                        <td>Travelling Allowance</td>
                        <td>0.00</td>
                        <td>Leave</td>
                        <td>₹923.07</td>
                    </tr>
                    <tr>
                        <td>Other Allowance</td>
                        <td>0.00</td>
                        <td>Other Exp.</td>
                        <td>0.00</td>
                    </tr>
                    <tr>
                        <td>Round Off</td>
                        <td>0.00</td>
                        <td>P.T.</td>
                        <td>₹200.00</td>
                    </tr>
                    <tr>
                        <td>Incentive</td>
                        <td>0.00</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><strong>Total Earnings</strong></td>
                        <td><strong>₹12,000.00</strong></td>
                        <td><strong>Total Deductions</strong></td>
                        <td><strong>₹1,123.07</strong></td>
                    </tr>
                </tbody>
            </table>

            <p><strong>Net to Hand:</strong> ₹10,876.00</p>
        </div>

        <!-- Footer Section -->
        <div class="footer">
            <p>NOTE: THIS IS A COMPUTER-GENERATED SALARY SLIP, NO SIGNATURE IS REQUIRED.</p>
            <p>Distinct Technology</p>
            <p>Head Office: 2nd Floor, Plot no 35, Parag Apartment, Ring Rd, above Story House, Vaynaktesh Nagar, Kotwal Nagar, Khamla, Nagpur, Maharashtra 440025</p>
        </div>
    </div>
</body>
</html>

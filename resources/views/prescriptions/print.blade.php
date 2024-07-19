<!-- resources/views/prescriptions/print.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Print Prescription</title>
    <style>
        /* Add your print-specific styles here */
        body {
            font-family: Arial, sans-serif;
        }
        .prescription {
            width: 100%;
            max-width: 800px;
            margin: auto;
        }
        .header, .footer {
            text-align: center;
        }
        .content {
            margin-top: 20px;
        }
        h2 {
            border-bottom: 1px solid #ddd;
            padding-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="prescription">
        <div class="header">
            <h1>Prescription</h1>
            <p><strong>Patient:</strong> {{ $prescription->user->name }}</p>
            <p><strong>Doctor:</strong> {{ $prescription->doctor->name }}</p>
            <p><strong>Date:</strong> {{ $prescription->created_at->format('Y-m-d') }}</p>
        </div>
        <div class="content">
            <h2>Medicines</h2>
            <ul>
                @foreach($prescription->medicines as $medicine)
                    <li>{{ $medicine->medicine->ar_name }} - {{ $medicine->medicine->en_name }} - {{ $medicine->dosage }} - {{ $medicine->duration }} - {{ $medicine->note }}</li>
                @endforeach
            </ul>
            <h2>Tests</h2>
            <ul>
                @foreach($prescription->tests as $test)
                    <li>{{ $test->test->name }} - {{ $test->note }}</li>
                @endforeach
            </ul>
            <h2>Rays</h2>
            <ul>
                @foreach($prescription->rays as $ray)
                    <li>{{ $ray->ray->name }} - {{ $ray->note }}</li>
                @endforeach
            </ul>
            <p><strong>Note:</strong> {{ $prescription->note }}</p>
        </div>
        <div class="footer">
            <p>Thank you!</p>
        </div>
    </div>
    <script>
        window.onload = function() {
            window.print();
        }
    </script>
</body>
</html>

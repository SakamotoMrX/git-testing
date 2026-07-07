<?php
declare(strict_types=1);

$name = trim((string)($_GET['name'] ?? ''));
$displayName = $name !== '' ? $name : 'Guest';
$today = date('l, F j, Y');
$time = date('h:i A');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>git-testing</title>
    <style>
        :root {
            color-scheme: light;
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f7fb;
            color: #1f2937;
        }
        body {
            margin: 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
            background: linear-gradient(135deg, #e0f2fe, #f8fafc 45%, #fee2e2);
        }
        .card {
            width: min(92vw, 560px);
            background: white;
            border-radius: 20px;
            padding: 32px;
            box-shadow: 0 18px 45px rgba(15, 23, 42, 0.12);
        }
        h1 {
            margin-top: 0;
            font-size: 2rem;
        }
        .meta {
            color: #6b7280;
            margin: 0 0 20px;
        }
        form {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 24px;
        }
        input[type="text"] {
            flex: 1 1 220px;
            padding: 12px 14px;
            border: 1px solid #cbd5e1;
            border-radius: 12px;
            font: inherit;
        }
        button {
            padding: 12px 18px;
            border: 0;
            border-radius: 12px;
            background: #2563eb;
            color: white;
            font: inherit;
            cursor: pointer;
        }
        .hint {
            margin-top: 14px;
            font-size: 0.95rem;
            color: #475569;
        }
        code {
            background: #f1f5f9;
            padding: 0.15rem 0.35rem;
            border-radius: 6px;
        }
    </style>
</head>
<body>
    <main class="card">
        <p class="meta">Simple PHP for project git-testing</p>
        <p class="meta">Simple PHP demo git-testing</p>
        <h1>Hello, <?php echo htmlspecialchars($displayName, ENT_QUOTES, 'UTF-8'); ?>!</h1>
        <p>Today is <?php echo htmlspecialchars($today, ENT_QUOTES, 'UTF-8'); ?> and the current time is <?php echo htmlspecialchars($time, ENT_QUOTES, 'UTF-8'); ?>.</p>

        <form method="get" action="">
            <input
                type="text"
                name="name"
                placeholder="Type your name"
                value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>"
            >
            <button type="submit">Say hi</button>
        </form>

        <p class="hint">Try adding <code>?name=YourName</code> to the URL.</p>
    </main>
</body>
</html>

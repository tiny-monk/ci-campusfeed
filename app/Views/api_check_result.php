<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>System Status Check</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f4f4f4; color: #333; }
        .container { background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); max-width: 600px; margin: auto; }
        h1 { color: #0056b3; text-align: center; margin-bottom: 30px; }
        .status-item { margin-bottom: 15px; padding: 10px; border-radius: 5px; border: 1px solid #ddd; }
        .status-item strong { display: block; margin-bottom: 5px; font-size: 1.1em; }
        .status-ok { background-color: #d4edda; color: #155724; border-color: #c3e6cb; }
        .status-error { background-color: #f8d7da; color: #721c24; border-color: #f5c6cb; }
        pre { background-color: #e9ecef; padding: 10px; border-radius: 4px; overflow-x: auto; }
    </style>
</head>
<body>
    <div class="container">
        <h1>System Status Check</h1>

        <div class="status-item <?php echo ($api_status && $api_status->status === 'ok') ? 'status-ok' : 'status-error'; ?>">
            <strong>API Status:</strong>
            <?php if ($api_status && $api_status->status === 'ok'): ?>
                <p>API is working perfectly!</p>
            <?php else: ?>
                <p>API is experiencing issues.</p>
                <pre><?php print_r($api_status); ?></pre>
            <?php endif; ?>
        </div>

        <div class="status-item <?php echo (@$db_status && @$db_status->status === 'ok') ? 'status-ok' : 'status-error'; ?>">
            <strong>Database Connection Status:</strong>
            <?php if (@$db_status && @$db_status->status === 'ok'): ?>
                <p>Database connection is successful!</p>
            <?php else: ?>
                <p>Database connection failed.</p>
                <pre><?php print_r(@$db_status); ?></pre>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>

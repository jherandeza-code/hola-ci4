<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($titulo) ?></title>
    <style>
        body { font-family: sans-serif; background: #f4f4f4; display: flex; align-items: center; justify-content: center; height: 100vh; margin: 0; }
        .card { background: #fff; padding: 2rem 3rem; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,.15); text-align: center; }
        h1 { color: #dd4814; }
    </style>
</head>
<body>
    <div class="card">
        <h1><?= esc($mensaje) ?></h1>
        <p>Vista renderizada con View Renderer &mdash; CodeIgniter <?= esc($version) ?></p>
    </div>
</body>
</html>

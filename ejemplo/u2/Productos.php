<?php
    // productos.php

    // Definimos varios productos como arrays asociativos
    $productos = [
        [
            'nombre' => 'Cafetera Espresso',
            'precio' => 129.95,
            'descripcion' => 'Cafetera compacta de 15 bar, compatible con café molido y monodosis.'
        ],
        [
            'nombre' => 'Auriculares Bluetooth',
            'precio' => 59.50,
            'descripcion' => 'Auriculares circumaurales, 20 horas de batería y reducción de ruido.'
        ],
        [
            'nombre' => 'Mochila Urbana',
            'precio' => 39.99,
            'descripcion' => 'Mochila resistente al agua con compartimento para portátil de 15\".'
        ],
        [
            'nombre' => 'Cargador 20W',
            'precio' => 10.99,
            'descripcion' => 'Cargador carga rápida 20W usb tipo c'
        ]
    ];

    // (Opcional) función para escapar texto al mostrar en HTML
    function e($str) {
        return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
    }
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Listado de Productos</title>
    <style>
        /* Estilos sencillos */
        body {
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
            background: #f5f6fa;
            margin: 0;
            padding: 24px;
        }

        .productos-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 18px;
            max-width: 1100px;
            margin: 0 auto;
        }

        .product-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 16px;
            box-shadow: 0 6px 18px rgba(20,20,40,0.06);
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .product-name {
            font-size: 1.05rem;
            font-weight: 700;
            margin: 0;
        }

        .product-price {
            font-size: 1rem;
            font-weight: 600;
            color: #0b6d44; /* color para el precio */
        }

        .product-desc {
            font-size: 0.95rem;
            color: #444;
            margin-top: 6px;
            flex-grow: 1;
        }

        .product-actions {
            display: flex;
            gap: 8px;
            margin-top: 12px;
        }

        .btn {
            border: none;
            padding: 8px 12px;
            border-radius: 8px;
            cursor: pointer;
            background: #1070ca;
            color: white;
            font-weight: 600;
        }

        .btn.secondary {
            background: #e6eef8;
            color: #0b3b66;
        }
    </style>
</head>
<body>

<h1 style="text-align:center;">Nuestros Productos</h1>

<div class="productos-grid">
    <?php foreach ($productos as $p): ?>
        <div class="product-card">
            <h2 class="product-name"><?php echo e($p['nombre']); ?></h2>
            <div class="product-price">
                <?php
                    // Formatear precio con 2 decimales y símbolo (ajusta moneda si quieres)
                    echo '€ ' . number_format((float)$p['precio'], 2, ',', '.');
                ?>
            </div>
            <p class="product-desc"><?php echo e($p['descripcion']); ?></p>

            <div class="product-actions">
                <button class="btn">Comprar</button>
                <button class="btn secondary">Detalles</button>
            </div>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>

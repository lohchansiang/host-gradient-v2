<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home 3</title>
    <style>
        :root {
            --c1: #4f46e5;
            --c2: #ec4899;
            --c3: #f97316;
            --c4: #14b8a6;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Inter', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            overflow: hidden;
            background-color: #fdfcf8;
        }

        .canvas {
            position: fixed;
            inset: 0;
            background:
                radial-gradient(circle at top left,     var(--c1), transparent 70%),
                radial-gradient(circle at top right,    var(--c2), transparent 70%),
                radial-gradient(circle at bottom left,  var(--c3), transparent 70%),
                radial-gradient(circle at bottom right, var(--c4), transparent 70%);
            animation: drift 12s ease-in-out infinite alternate, orbit 28s linear infinite;
            filter: saturate(1.4) contrast(1.05);
        }

        .content {
            text-align: center;
            padding: 3.5rem 4rem;
            background-color: rgba(255, 255, 255, 0.75);
            border-radius: 1.75rem;
            box-shadow: 0 40px 80px rgba(15, 23, 42, 0.15);
            backdrop-filter: blur(12px);
            color: #0f172a;
            max-width: 520px;
        }

        h1 {
            font-size: clamp(2.4rem, 4vw, 3.2rem);
            margin: 0 0 1rem;
            letter-spacing: 0.04em;
        }

        p {
            margin: 0;
            font-size: clamp(1rem, 2vw, 1.25rem);
            color: rgba(15, 23, 42, 0.7);
        }

        @keyframes drift {
            0% {
                filter: hue-rotate(0deg) brightness(1);
            }
            25% {
                filter: hue-rotate(60deg) brightness(1.1);
            }
            50% {
                filter: hue-rotate(120deg) brightness(1.05);
            }
            75% {
                filter: hue-rotate(210deg) brightness(1.15);
            }
            100% {
                filter: hue-rotate(360deg) brightness(1);
            }
        }

        @keyframes orbit {
            0% {
                transform: translate(0px, 0px);
            }
            25% {
                transform: translate(30px, -30px);
            }
            50% {
                transform: translate(0px, -45px);
            }
            75% {
                transform: translate(-30px, -30px);
            }
            100% {
                transform: translate(0px, 0px);
            }
        }
    </style>
</head>
<body>
    <div class="canvas"></div>
    <div class="content">
        <h1>Home 3</h1>
        <p>Soft gradients blend from each corner, gently shifting through color.</p>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Title -->
    <title>JobSeek | Professional Job Portal</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/favicon.png" />

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css" />

    <!-- Tailwind Config -->
    <script>

        tailwind.config = {
            theme: {
                extend: {

                    colors: {

                        primary: '#4f46e5',
                        secondary: '#2563eb',

                    },

                    fontFamily: {

                        sans: ['Inter', 'sans-serif'],

                    },

                    boxShadow: {

                        soft: '0 10px 40px rgba(0,0,0,0.08)',

                    },

                    animation: {

                        float: 'float 6s ease-in-out infinite',

                    },

                    keyframes: {

                        float: {
                            '0%, 100%': {
                                transform: 'translateY(0px)'
                            },
                            '50%': {
                                transform: 'translateY(-10px)'
                            },
                        }

                    }

                }
            }
        }

    </script>

    <!-- Global Styling -->
    <style>

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
            background:
                radial-gradient(circle at top left, rgba(99,102,241,0.08), transparent 30%),
                radial-gradient(circle at bottom right, rgba(59,130,246,0.08), transparent 30%),
                #f8fafc;

            color: #111827;
        }

        /* Smooth Transitions */
        * {
            transition-property:
                background-color,
                border-color,
                color,
                fill,
                stroke,
                opacity,
                box-shadow,
                transform,
                filter,
                backdrop-filter;

            transition-duration: 200ms;
            transition-timing-function: ease;
        }

        /* Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #e5e7eb;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, #4f46e5, #2563eb);
            border-radius: 999px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(to bottom, #4338ca, #1d4ed8);
        }

        /* Text Selection */
        ::selection {
            background: #4f46e5;
            color: white;
        }

        /* Container Fix */
        .container {
            max-width: 1280px;
        }

        /* Glassmorphism Utility */
        .glass {
            background: rgba(255,255,255,0.7);
            backdrop-filter: blur(14px);
            border: 1px solid rgba(255,255,255,0.2);
        }

        /* Showcase Background */
        .showcase {
            background-image:
                linear-gradient(
                    rgba(15,23,42,0.75),
                    rgba(15,23,42,0.75)
                ),
                url('../images/showcase.jpg');

            background-size: cover;
            background-position: center;
        }

    </style>

</head>

<body class="min-h-screen antialiased text-gray-800">
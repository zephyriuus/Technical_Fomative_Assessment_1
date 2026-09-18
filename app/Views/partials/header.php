<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Astrelyx') ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Bree+Serif&display=swap" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Quicksand', Arial, sans-serif;
            color: #CE4A4A;
            line-height: 1.7;
            font-weight: 500;
            background-color: #FDF8F2;
            background-image:
                linear-gradient(#FFB8E3 1px, transparent 1px),
                linear-gradient(90deg, #FFB8E3 1px, transparent 1px);
            background-size: 40px 40px;
            background-position: -1px -1px;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 20px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
            padding: 25px 30px;
            margin-top: 20px;
            background: #FEF9B7;
            border-radius: 30px;
            box-shadow: 0 8px 0 #fbdd95;
        }

        .logo {
            font-size: 24px;
            font-weight: 700;
            color: #CE4A4A;
            letter-spacing: 0.5px;
        }

        nav {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        nav a {
            color: #CE4A4A;
            text-decoration: none;
            padding: 9px 18px;
            border-radius: 999px;
            font-size: 15px;
            font-weight: 700;
            transition: all 0.2s ease;
        }

        nav a:hover {
            background: #ffb2c3;
            transform: translateY(-2px);
            color: #FFFFFF;
        }

        nav a.active {
            background: #FF819C;
            color: #FFFFFF;
            box-shadow: 0 4px 0 #CE4A4A;
        }

        section {
            flex: 1;
            padding: 45px 0;
        }

        h1 {
            font-size: 34px;
            font-weight: 700;
            margin-bottom: 12px;
            color: #75172D;
            font-family: 'Berkshire Swash';
        }

        h3 {
            font-size: 19px;
            font-weight: 700;
            margin-bottom: 8px;
            color: #75172D;
        }

        p {
            margin-bottom: 15px;
            color: #CE4A4A;
        }

        .btn-row {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            margin: 25px 0;
        }

        .btn {
            display: inline-block;
            padding: 12px 28px;
            border-radius: 999px;
            text-decoration: none;
            font-weight: 700;
            font-size: 15px;
            font-family: inherit;
            transition: all 0.15s ease;
        }

        .btn-primary {
            background: #FF819C;
            color: #FFFFFF;
            box-shadow: 0 5px 0 #CE4A4A;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 7px 0 #CE4A4A;
        }

        .btn-primary:active {
            transform: translateY(3px);
            box-shadow: 0 2px 0 #CE4A4A;
        }

        .btn-ghost {
            background: #FFFFFF;
            color: #CE4A4A;
            box-shadow: 0 5px 0 #FFB8E3;
        }

        .btn-ghost:hover {
            transform: translateY(-2px);
            box-shadow: 0 7px 0 #FFB8E3;
        }

        .btn-ghost:active {
            transform: translateY(3px);
            box-shadow: 0 2px 0 #FFB8E3;
        }

        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-top: 25px;
        }

        .card {
            background: #FFFFFF;
            border: 3px solid #FFB8E3;
            border-radius: 25px;
            padding: 25px;
            transition: all 0.2s ease;
        }

        .card:hover {
            transform: translateY(-5px) rotate(-1deg);
            border-color: #FF819C;
            box-shadow: 0 10px 0 #FFB8E3;
        }

        .card p {
            margin-bottom: 0;
            font-size: 14px;
        }

        .table-wrap {
            background: #FFFFFF;
            border: 3px solid #FFB8E3;
            border-radius: 25px;
            overflow: hidden;
            margin-top: 25px;
            padding: 10px;
        }

        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 8px;
        }

        th {
            text-align: left;
            background: #FF819C;
            color: #FFFFFF;
            padding: 14px 20px;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        th:first-child {
            border-radius: 999px 0 0 999px;
        }

        th:last-child {
            border-radius: 0 999px 999px 0;
        }

        td {
            padding: 14px 20px;
            font-size: 15px;
            color: #CE4A4A;
            background: #EDF8E5;
        }

        td:first-child {
            border-radius: 999px 0 0 999px;
        }

        td:last-child {
            border-radius: 0 999px 999px 0;
        }

        tbody tr {
            transition: transform 0.15s ease;
        }

        tbody tr:hover {
            transform: translateX(5px);
        }

        tbody tr:hover td {
            background: #fffccb;
        }

        .about-card {
            background: #FFFFFF;
            border: 3px solid #FFB8E3;
            border-radius: 25px;
            padding: 30px;
            max-width: 700px;
            margin-top: 25px;
            box-shadow: 0 8px 0 #FFB8E3;
        }

        .tech-list {
            list-style: none;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 20px;
        }

        .tech-list li {
            background: #FF819C;
            color: #FFFFFF;
            padding: 7px 16px;
            border-radius: 999px;
            font-size: 13px;
            font-weight: 700;
            box-shadow: 0 3px 0 #CE4A4A;
        }

        footer {
            padding: 25px 0;
            text-align: center;
            color: #CE4A4A;
            font-size: 14px;
            font-weight: 700;
            margin-top: 20px;
        }

        @media (max-width: 600px) {
            header {
                flex-direction: column;
                align-items: flex-start;
                border-radius: 20px;
            }

            h1 {
                font-size: 26px;
            }

            th, td {
                padding: 12px 14px;
                font-size: 14px;
            }
        }
    </style>
<body>
    <div class="container">
        <header>
            <div class="logo">Astrelyx</div>
            <nav>
                <?php $active = $active ?? ''; ?>
                <a href="<?= site_url('/') ?>"         class="<?= $active === 'home'      ? 'active' : '' ?>">Home</a>
                <a href="<?= site_url('about') ?>"     class="<?= $active === 'about'     ? 'active' : '' ?>">About</a>
                <a href="<?= site_url('customers') ?>" class="<?= $active === 'customers' ? 'active' : '' ?>">Customers</a>
                <a href="<?= site_url('users') ?>"     class="<?= $active === 'users'     ? 'active' : '' ?>">Users</a>
            </nav>
        </header>
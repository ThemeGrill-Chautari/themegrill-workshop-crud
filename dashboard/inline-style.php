<?php
if (!defined('THEMEGRILL_WORKSHOP')) {
    die("Cheating? huh?");

}
?>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            overflow-x: hidden;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            width: 100%;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            width: 100%;
             bottom: 0;
        }

        .top-bar {
            background-color: #444;
            color: #fff;
            padding: 5px 0;
            text-align: center;
            width: 100%;
        }

        .container {
            max-width: 800px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            text-align: left;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 20px;
        }

        .card {
            flex: 0 0 calc(50% - 50px);
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card h2 {
            font-size: 20px;
        }

        .card p {
            font-size: 16px;
            line-height: 1.5;
        }

        /* Form and Table Styles */
        form {
            margin-top: 20px;
            text-align: left;
        }

        form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        form input[type="text"],
        form input[type="password"] {
            width: 90%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        form button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #555;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        .logout-button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .logout-button:hover {
            background-color: #555;
        }
    </style>
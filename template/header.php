<style>
    /* BACKGROUND RAINBOW ANIMATED */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background: linear-gradient(120deg,
            #ff0000, #ff7f00, #ffff00, 
            #00ff00, #00ffff, #0000ff, 
            #8b00ff);
        background-size: 600% 600%;
        animation: rainbowBG 14s ease infinite;
        color: #ffffff;
    }

    @keyframes rainbowBG {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    /* NAVBAR */
    .nav {
        padding: 15px;
        background: rgba(0,0,0,0.4);
        backdrop-filter: blur(12px);
        border-bottom: 2px solid rgba(255,255,255,0.4);
    }

    .nav a {
        color: #fff;
        margin-right: 20px;
        text-decoration: none;
        font-weight: bold;
        font-size: 18px;
        text-shadow: 0 0 10px #ffffff;
        transition: 0.3s;
    }

    .nav a:hover {
        color: #000;
        padding: 4px 10px;
        border-radius: 6px;
        background: rgba(255,255,255,0.7);
        text-shadow: none;
    }

    /* CONTAINER */
    .container {
        width: 92%;
        margin: 20px auto;
        background: rgba(255,255,255,0.1);
        padding: 20px;
        border-radius: 14px;
        backdrop-filter: blur(14px);
        border: 2px solid rgba(255,255,255,0.4);
        box-shadow: 0 0 20px rgba(255,255,255,0.5);
    }

    /* TABEL */
    table {
        width: 100%;
        border-collapse: collapse;
        color: #fff;
        font-size: 15px;
        background: rgba(0,0,0,0.2);
    }

    table th {
        padding: 12px;
        background: rgba(0,0,0,0.4);
        text-shadow: 0 0 8px white;
    }

    table td {
        padding: 10px;
        border-bottom: 1px solid rgba(255,255,255,0.3);
    }

    table tr:hover {
        background: rgba(255,255,255,0.2);
    }

    /* FORM ELEMENTS */
    input, select, textarea {
        width: 100%;
        padding: 10px;
        border-radius: 10px;
        border: 2px solid rgba(255,255,255,0.4);
        background: rgba(255,255,255,0.15);
        color: white;
        backdrop-filter: blur(8px);
        transition: 0.3s;
    }

    input:focus, textarea:focus, select:focus {
        border-color: #fff;
        box-shadow: 0 0 12px white;
        outline: none;
    }

    /* BUTTON RAINBOW */
    input[type="submit"] {
        background: linear-gradient(90deg,
            red, orange, yellow, green, cyan, blue, violet);
        background-size: 400%;
        animation: rainbowBtn 5s linear infinite;
        color: #000;
        border: none;
        cursor: pointer;
        padding: 10px 18px;
        border-radius: 10px;
        font-weight: bold;
        box-shadow: 0 0 12px #fff;
    }

    @keyframes rainbowBtn {
        0% { background-position: 0% }
        100% { background-position: 400% }
    }

    input[type="submit"]:hover {
        transform: scale(1.05);
        box-shadow: 0 0 18px #fff;
    }

    /* FOOTER */
    footer {
        color: white;
        margin-top: 40px;
        text-shadow: 0 0 10px white;
    }
</style>

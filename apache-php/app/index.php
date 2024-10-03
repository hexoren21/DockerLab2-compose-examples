<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Introduction to Containers</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f9;
    }

    header {
      background-color: #008cba;
      color: white;
      padding: 20px 0;
      text-align: center;
    }

    header h1 {
      margin: 0;
      font-size: 3rem;
    }

    .container {
      width: 80%;
      margin: 20px auto;
      padding: 20px;
      background-color: white;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }

    .intro {
      font-size: 1.2rem;
      color: #555;
    }

    .intro p {
      line-height: 1.8;
    }

    .benefits {
      margin-top: 40px;
    }

    .benefits h2 {
      font-size: 2rem;
      color: #333;
      border-bottom: 2px solid #008cba;
      padding-bottom: 10px;
      margin-bottom: 20px;
    }

    .benefits ul {
      list-style-type: none;
      padding: 0;
    }

    .benefits ul li {
      background-color: #008cba;
      color: white;
      padding: 15px;
      margin-bottom: 10px;
      border-radius: 5px;
      display: flex;
      align-items: center;
    }

    .benefits ul li i {
      margin-right: 10px;
    }

    footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 10px 0;
      margin-top: 40px;
      position: fixed;
      width: 100%;
      bottom: 0;
    }

    footer p {
      margin: 0;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>

  <header>
    <h1>Introduction to Containers</h1>
  </header>

  <div class="container">
    <section class="intro">
      <p>Containers are a lightweight, portable, and efficient way to run and deploy applications. They provide a consistent runtime environment that can run on different platforms, ensuring that your application behaves the same way everywhere.</p>
    </section>

    <section class="benefits">
      <h2>Key Benefits of Containers</h2>
      <ul>
        <li><i>⚙️</i> **Portability:** Run containers on any system with a container runtime.</li>
        <li><i>💻</i> **Isolation:** Applications run in isolated environments, reducing conflicts.</li>
        <li><i>📦</i> **Efficiency:** Containers are lightweight, start quickly, and use fewer resources.</li>
        <li><i>🔄</i> **Consistency:** Develop, test, and deploy in the same environment.</li>
        <li><i>🔒</i> **Security:** Containers provide strong boundaries for applications, improving security.</li>
      </ul>
    </section>
  </div>

  <footer>
    <p>&copy; 2024 Docker Containers | Designed by You</p>
  </footer>

</body>
</html>


<!DOCTYPE html>
<html>
<head>
  <title>Bot Control</title>
  <style>
    body {
      background-color: #f5f5f5;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #333;
      height: 50px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 20px;
    }

    header a {
      color: #fff;
      text-decoration: none;
      font-size: 18px;
    }

    .button-container {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    button {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 0 10px;
      cursor: pointer;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #3e8e41;
    }

    /* Optional: add a box shadow to the button */
    button:focus {
      outline: none;
      box-shadow: 0 0 5px #3e8e41;
    }

    footer {
      background-color: #333;
      height: 50px;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #fff;
      font-size: 14px;
    }
	.button-container {
  display: flex;
  justify-content: center;
  margin-top: 20px;
  flex-direction: column; /* добавлено свойство */
  align-items: center; /* добавлено свойство */
}

button {
  /* стили кнопок */
  margin: 10px 0; /* изменено свойство */
}

p {
  margin-top: 20px; /* добавлено свойство */
}
button.join-bot:hover,
button.join-bot:focus,
button.deactivate-bot:hover,
button.deactivate-bot:focus {
  background-color: #ff0000;
}
button.join-bot
button.deactivate-bot {
  background-color: #3b3e42;
}
  </style>
</head>
<body>
  <header>
    <a href="https://www.youtube.com/">Home</a>
  </header>
  <h1 style="text-align: center;">Bot Control</h1>
  <div class="button-container">
    <button onclick="activateBot()">Activate Bot</button>
    <button onclick="deactivateBot()" class="deactivate-bot">Deactivate Bot</button>
    <button onclick="joinBot()" class="join-bot">Join Bot</button>
    <button onclick="tpaBot()">Tpa to Anna_Drwa1</button>
    <button onclick="tpa1Bot()">Tpa to Marayd</button>
    <button onclick="tpa2Bot()">Tpa to Layl</button>
    <button onclick="tpa3Bot()">Tpa to I_0_1_P</button>
	<p>Этот бот копает 1 блок стоимость - 30к/час <a onlick="alert()" href="https://discord.gg/TWPeDdn3kc">связатся со мной</a></p>
  </div>
    <script>
      function activateBot() {
        window.location.href = "/activate";
      }
      function deactivateBot() {
        window.location.href = "/deactivate";		
      }
      function joinBot() {
        window.location.href = "/join";		
      }	  
      function tpaBot() {
        window.location.href = "/tpa";		
      }	
      function tpa1Bot() {
        window.location.href = "/tpa1";		
      }	
      function tpa2Bot() {
        window.location.href = "/tpa2";		
      }	
      function tpa3Bot() {
        window.location.href = "/tpa3";		
      }		  
    </script>
  <footer>
    By anna_drwa1 IP: mc.darkmine.ru (Режим только ONEBLOCK 1)
  </footer>
</body>
</html>
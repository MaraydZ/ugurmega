const mineflayer = require('mineflayer');
const Vec3 = require('vec3');
const express = require('express');

const app = express();
const port = 3000;

let bot;
let isDigging = false;
let mine = false;

// Функция для ломания блока
async function digBlock(block) {
  isDigging = true;
  await bot.dig(block);
  isDigging = false;
}
async function enableBot() {
  bot = mineflayer.createBot({
    host: 'mc.darkmine.ru',
    username: 'I_0_1_P',
  });
}
function dromItem(bot) {
  const currentItem = bot.inventory.slots[bot.currentSlot];

  // Если у бота нет предмета в руке, то просто возвращаемся
  if (!currentItem) {
    return;
  }

  // Выбрасываем текущий предмет на землю
  bot.tossStack(currentItem);
}
on = "<script>alert('Бот и так включен!')</script>"
off =  "<script>alert('Бот и так не включен!')</script>"
// Создаем бота
bot = mineflayer.createBot({
  host: 'mc.darkmine.ru',
  username: 'Anna_Drwa1',
});
bot.on('message', (message) => {
  console.log(message.toAnsi())
})
// После создания бота
bot.on('spawn', () => {
  bot.chat('/l ugurnelox981');
  bot.chat('/ванблок');
  console.log('Bot is ready!');
});
bot.on('physicTick', () => {
	if (mine == false) {
		return;
	}
	else {
	  setInterval(() => {
		if (!isDigging) {
		  const targetBlock = bot.blockAt(new Vec3(38400, 80, -42400)); // Замените на нужные координаты
		  if (targetBlock) {
			digBlock(targetBlock);
		  }
		}
	  }, 200);				
	}
});

// Отправка HTML-страницы
app.get('/', (req, res) => {
  res.sendFile(__dirname + '/index.html');
});


app.get('/activate', (req, res) => {
  mine = true;
  res.send('<script>window.location.href = "/";</script>');  
  
});

app.get('/deactivate', (req, res) => {
  mine = false;
  bot.quit()
  res.send('<script>window.location.href = "/";</script>');
});
app.get('/join', (req, res) => {
  enableBot();
  res.send('<script>window.location.href = "/";</script>');
});
app.get('/tpa', (req, res) => {
  bot.chat('/tpa anna_drwa1');
  res.send('<script>window.location.href = "/";</script>');
});

app.get('/tpa1', (req, res) => {
  bot.chat('/tpa Marayd');
  res.send('<script>window.location.href = "/";</script>');
});

app.get('/tpa2', (req, res) => {
  bot.chat('/tpa Layl');
  res.send('<script>window.location.href = "/";</script>');
});

app.get('/tpa3', (req, res) => {
  bot.chat('/tpa I_0_1_P');
  res.send('<script>window.location.href = "/";</script>');
});

app.get('/dropitem', (req, res) => {
  bot.tossStack('1');  
  console.log('L')
  res.send('<script>window.location.href = "/";</script>');
});

app.get('/homeCmd', (req, res) => {
  bot.chat('/cmi home q')
  res.send('<script>window.location.href = "/";</script>');
});

app.get('/repair', (req, res) => {
  bot.chat('/repair')
  res.send('<script>window.location.href = "/";</script>');
});
// Обработчик POST-запросов на команды
app.post('/command', (req, res) => {
  const { command } = req.body;
  bot.chat(command);
  res.send('Command sent: ' + command);
});

app.listen(port, () => {
  console.log(`Server is running on port ${port}`);
});

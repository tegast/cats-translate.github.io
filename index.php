<? $ver = 0.1 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Кошачий переводчик | Альфа: v<? $ver ?> </title>
	<link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>



<div id="main" style="width:500px;">
	
	<div style="text-align: center; font-size: 35px; margin-bottom: 15px;"><label>Введите текст:</label></div>
	<div style="text-align:center;">Русский</div>
	<textarea id="input_text" spellcheck="false" style="width:100%; height: 150px;"></textarea>
	<button id="start" onclick="start();" style="width:100%; height:50px;">Перевести</button>
	<div style="text-align:center;">Кошачий</div>
	<textarea spellcheck="false" id="output_text" style="width:100%; height: 150px;"></textarea>
	<div id="head" style="text-align: center; font-size:12px; margin-top: 10px;">Кошачий переводчик | Альфа: v<? $ver ?> | DEV: <a target="_blank" href="https://vk.com/twignya">https://vk.com/twignya</a> </div>
</div>

</body>
</html>

<script type="text/javascript">


	var d = document;	

	let alphabetBIG = [
		'А',
		'Б',
		'В',
		'Г',
		'Д',
		'Е',
		'Ё',
		'Ж',
		'З',
		'И',
		'Й',
		'К',
		'Л',
		'М',
		'Н',
		'О',
		'П',
		'Р',
		'С',
		'Т',
		'У',
		'Ф',
		'Х',
		'Ц',
		'Ч',
		'Ш',
		'Щ',
		'Ъ',
		'Ы',
		'Ь',
		'Э',
		'Ю',
		'Я'
	];

	let alphabet = [
		'а',
		'б',
		'в',
		'г',
		'д',
		'е',
		'ё',
		'ж',
		'з',
		'и',
		'й',
		'к',
		'л',
		'м',
		'н',
		'о',
		'п',
		'р',
		'с',
		'т',
		'у',
		'ф',
		'х',
		'ц',
		'ч',
		'ш',
		'щ',
		'ъ',
		'ы',
		'ь',
		'э',
		'ю',
		'я'
	];


	let shifrBIG = [
		'МАУ', 
		'МУБ', 
		'МВУМР',
		'МГР', 
		'МДЯ', 
		'МЕУ', 
		'МЁМ', 
		'МЯЖ', 
		'МЗАФ', 
		'МИ', 
		'МЙЯ', 
		'МЯК', 
		'МЛФ', 
		'МРР', 
		'МНЯ', 
		'МОУ', 
		'МЯП', 
		'МР', 
		'МС', 
		'МЯТ',
		'МУР', 
		'ФР', 
		'МХМ', 
		'МЦЯ', 
		'МЧЯ', 
		'МПШ', 
		'МПЩ', 
		'МЪ', 
		'МЫШ', 
		'МЬЯ', 
		'МЭУ', 
		'МЮР', 
		'МЯУ'
	];

	let shifr = [
		'мау', 
		'муб', 
		'мвумр',
		'мгр', 
		'мдя', 
		'меу', 
		'мём', 
		'мяж', 
		'мзаф', 
		'ми', 
		'мйя', 
		'мяк', 
		'млф', 
		'мрр', 
		'мня', 
		'моу', 
		'мяп', 
		'мр', 
		'мс', 
		'мят',
		'мур', 
		'фр', 
		'мхм', 
		'мця', 
		'мчя', 
		'мпш', 
		'мпщ', 
		'мъ', 
		'мыш', 
		'мья', 
		'мэу', 
		'мюр', 
		'мяу'
	];

	let secret = {}; 

	alphabetBIG.forEach((a,i) => {
	  secret[a] = shifrBIG[i];
	})

	alphabet.forEach((a,i) => {
	  secret[a] = shifr[i];
	})

	console.log(secret)


function start(){
	var str = d.getElementById('input_text').value; // Строка для обработки
	
	
	function howTo(m){
		return secret[m];  // Возвращает значение ключа `m` в объекте `secret`
	}
		// Ищем все буквы русского алфавита и вызываем функцию `howTo` для каждого случая (флаг `g`)
	str = str.replace(/[а-яёА-ЯЁ]/g, howTo); 	

	d.querySelector("textarea[id=output_text]").value = str;

	copytext(str)

	function copytext(el) {
    let textarea = document.getElementById("output_text");
  	textarea.select();
  	document.execCommand("copy");
	}


}



</script>

<style type="text/css">

	@font-face {
		font-family: 'Rounded'; 
		src: url(ttf/ofont.ru_ArbatDi.ttf); 
	}

	* {
		font-family: 'Rounded';
		color: white;
	}

	a{
		color: white;
	}

	body::before{
		content: '';
    	position: fixed; /* Фиксируем на одном месте */
    	left: 0; right: 0; /* Вся ширин */
    	top: 0; bottom: 0; /* Вся высота */
    	z-index: -1; /* Фон ниже текста */
		background-image: url('image/fon.jpg');
		filter: blur(2px);
	}


	textarea{
		font-size: 25px;
		background-color: #222222;
		color: white;
		border: none;
	}

	button{
		font-size: 25px;
		background-color: #222222;
		color: white;
		border-color: #4C6DFA;
		margin: 10px 0 10px 0;
		box-shadow: 0 0 5px #6F5CFE;
	}

	#main{
		margin: 50px auto;
	}

</style>
<?php
$wordBank = [
    [
        'word' => 'apple',
        'uk' => '/ˈæp.əl/',
        'us' => '/ˈæp.əl/',
        'meaning' => '苹果',

    ],
    [
        'word' => 'beautiful',
        'uk' => '/ˈbjuː.tɪ.fəl/',
        'us' => '/ˈbjuː.t̬ə.fəl/',
        'meaning' => '美丽的',

    ],
    [
        'word' => 'computer',
        'uk' => '/kəmˈpjuː.tər/',
        'us' => '/kəmˈpjuː.t̬ɚ/',
        'meaning' => '电脑',

    ],
    [
        'word' => 'language',
        'uk' => '/ˈlæŋ.ɡwɪdʒ/',
        'us' => '/ˈlæŋ.ɡwɪdʒ/',
        'meaning' => '语言',

    ],
    [
        'word' => 'school',
        'uk' => '/skuːl/',
        'us' => '/skuːl/',
        'meaning' => '学校',

    ],
    [
        'word' => 'world',
        'uk' => '/wɜːld/',
        'us' => '/wɝːld/',
        'meaning' => '世界',

?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>音标学习网站</title>
    <style>
        :root {
            --bg: #f5f7fb;
            --card: #ffffff;
            --text: #1f2937;
            --muted: #6b7280;
            --primary: #2563eb;
            --primary-dark: #1d4ed8;

            --border: #e5e7eb;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: "PingFang SC", "Microsoft YaHei", sans-serif;
            background: linear-gradient(120deg, #eef2ff 0%, var(--bg) 40%, #f0fdfa 100%);
            color: var(--text);
        }


            padding: 10px 12px;
            border: 1px solid var(--border);
            border-radius: 10px;
            font-size: 15px;
        }


            font-size: 13px;
            cursor: pointer;
            background: var(--primary);
            color: #fff;

    </style>
</head>
<body>
<div class="container">

        </div>
        <div class="status" id="status"></div>
    </section>


    </section>
</div>

<script>
    const statusEl = document.getElementById('status');
    const searchInput = document.getElementById('searchInput');
    const cards = Array.from(document.querySelectorAll('.word-card'));


        if (!('speechSynthesis' in window)) {
            statusEl.textContent = '当前浏览器不支持语音合成，请换用最新版 Chrome/Edge。';
            return;
        }


        };

        window.speechSynthesis.cancel();
        window.speechSynthesis.speak(utterance);
    }

    searchInput.addEventListener('input', (event) => {
        const keyword = event.target.value.trim().toLowerCase();

        cards.forEach((card) => {
            const word = card.dataset.word.toLowerCase();
            const meaning = card.dataset.meaning.toLowerCase();
            const visible = !keyword || word.includes(keyword) || meaning.includes(keyword);
            card.style.display = visible ? '' : 'none';
        });
    });
</script>
</body>
</html>

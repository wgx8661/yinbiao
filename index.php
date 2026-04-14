<?php
$wordBank = [
    [
        'word' => 'apple',
        'uk' => '/ˈæp.əl/',
        'us' => '/ˈæp.əl/',
        'meaning' => '苹果',
        'example' => 'I eat an apple every morning.'
    ],
    [
        'word' => 'beautiful',
        'uk' => '/ˈbjuː.tɪ.fəl/',
        'us' => '/ˈbjuː.t̬ə.fəl/',
        'meaning' => '美丽的',
        'example' => 'The sunset is beautiful tonight.'
    ],
    [
        'word' => 'computer',
        'uk' => '/kəmˈpjuː.tər/',
        'us' => '/kəmˈpjuː.t̬ɚ/',
        'meaning' => '电脑',
        'example' => 'My computer is very fast.'
    ],
    [
        'word' => 'language',
        'uk' => '/ˈlæŋ.ɡwɪdʒ/',
        'us' => '/ˈlæŋ.ɡwɪdʒ/',
        'meaning' => '语言',
        'example' => 'English is a global language.'
    ],
    [
        'word' => 'school',
        'uk' => '/skuːl/',
        'us' => '/skuːl/',
        'meaning' => '学校',
        'example' => 'She goes to school by bus.'
    ],
    [
        'word' => 'world',
        'uk' => '/wɜːld/',
        'us' => '/wɝːld/',
        'meaning' => '世界',
        'example' => 'The world is changing quickly.'
    ],
];
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

        .container {
            max-width: 980px;
            margin: 40px auto;
            padding: 0 16px;
        }

        .hero {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 12px 30px rgba(37, 99, 235, 0.08);
            margin-bottom: 24px;
        }

        .hero h1 { margin: 0 0 8px; }

        .hero p {
            margin: 0;
            color: var(--muted);
            line-height: 1.6;
        }

        .search-box {
            margin-top: 16px;
            display: flex;
            gap: 12px;
        }

        input[type="search"] {
            flex: 1;
            padding: 10px 12px;
            border: 1px solid var(--border);
            border-radius: 10px;
            font-size: 15px;
        }

        .card-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 16px;
        }

        .word-card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 18px;
            box-shadow: 0 6px 18px rgba(15, 23, 42, 0.06);
        }

        .word {
            font-size: 24px;
            font-weight: 700;
            margin: 0 0 8px;
            text-transform: lowercase;
        }

        .ipa {
            display: flex;
            justify-content: space-between;
            gap: 12px;
            color: var(--muted);
            font-size: 14px;
            margin-bottom: 8px;
        }

        .meaning { margin: 0 0 6px; font-weight: 600; }
        .example { margin: 0 0 12px; font-size: 14px; color: var(--muted); }

        .btn-group {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .btn {
            border: none;
            border-radius: 8px;
            padding: 8px 12px;
            font-size: 13px;
            cursor: pointer;
            background: var(--primary);
            color: #fff;
            transition: all 0.2s;
        }

        .btn:hover { background: var(--primary-dark); }

        .btn.secondary {
            background: #0f766e;
        }

        .btn.secondary:hover {
            background: #0d5d57;
        }

        .status {
            margin-top: 12px;
            min-height: 20px;
            color: #b91c1c;
            font-size: 13px;
        }
    </style>
</head>
<body>
<div class="container">
    <section class="hero">
        <h1>📘 音标学习网站</h1>
        <p>包含常见单词、英式/美式音标与发音功能。点击“英式发音”或“美式发音”即可朗读单词，适合初学者做音标跟读练习。</p>
        <div class="search-box">
            <input id="searchInput" type="search" placeholder="搜索单词，例如：apple / world">
        </div>
        <div class="status" id="status"></div>
    </section>

    <section class="card-list" id="cardList">
        <?php foreach ($wordBank as $item): ?>
            <article class="word-card" data-word="<?= htmlspecialchars($item['word']) ?>" data-meaning="<?= htmlspecialchars($item['meaning']) ?>">
                <h2 class="word"><?= htmlspecialchars($item['word']) ?></h2>
                <div class="ipa">
                    <span>UK <?= htmlspecialchars($item['uk']) ?></span>
                    <span>US <?= htmlspecialchars($item['us']) ?></span>
                </div>
                <p class="meaning">中文：<?= htmlspecialchars($item['meaning']) ?></p>
                <p class="example">例句：<?= htmlspecialchars($item['example']) ?></p>
                <div class="btn-group">
                    <button class="btn" type="button" onclick="speakWord('<?= htmlspecialchars($item['word']) ?>', 'en-GB')">🔊 英式发音</button>
                    <button class="btn secondary" type="button" onclick="speakWord('<?= htmlspecialchars($item['word']) ?>', 'en-US')">🔊 美式发音</button>
                </div>
            </article>
        <?php endforeach; ?>
    </section>
</div>

<script>
    const statusEl = document.getElementById('status');
    const searchInput = document.getElementById('searchInput');
    const cards = Array.from(document.querySelectorAll('.word-card'));

    function speakWord(word, lang) {
        if (!('speechSynthesis' in window)) {
            statusEl.textContent = '当前浏览器不支持语音合成，请换用最新版 Chrome/Edge。';
            return;
        }

        const utterance = new SpeechSynthesisUtterance(word);
        utterance.lang = lang;
        utterance.rate = 0.9;
        utterance.pitch = 1.0;
        utterance.onstart = () => {
            statusEl.textContent = `正在播放 ${word}（${lang}）...`;
        };
        utterance.onend = () => {
            statusEl.textContent = `播放完成：${word}（${lang}）`;
        };
        utterance.onerror = () => {
            statusEl.textContent = '发音播放失败，请稍后再试。';
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

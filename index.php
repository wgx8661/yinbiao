<?php
$wordBank = [
    [
        'word' => 'apple',
        'uk' => '/ˈæp.əl/',
        'us' => '/ˈæp.əl/',
        'meaning' => '苹果',
        'example' => 'I eat an apple every morning.',
        'syllables' => ['ap', 'ple']
    ],
    [
        'word' => 'beautiful',
        'uk' => '/ˈbjuː.tɪ.fəl/',
        'us' => '/ˈbjuː.t̬ə.fəl/',
        'meaning' => '美丽的',
        'example' => 'The sunset is beautiful tonight.',
        'syllables' => ['beau', 'ti', 'ful']
    ],
    [
        'word' => 'computer',
        'uk' => '/kəmˈpjuː.tər/',
        'us' => '/kəmˈpjuː.t̬ɚ/',
        'meaning' => '电脑',
        'example' => 'My computer is very fast.',
        'syllables' => ['com', 'pu', 'ter']
    ],
    [
        'word' => 'language',
        'uk' => '/ˈlæŋ.ɡwɪdʒ/',
        'us' => '/ˈlæŋ.ɡwɪdʒ/',
        'meaning' => '语言',
        'example' => 'English is a global language.',
        'syllables' => ['lan', 'guage']
    ],
    [
        'word' => 'school',
        'uk' => '/skuːl/',
        'us' => '/skuːl/',
        'meaning' => '学校',
        'example' => 'She goes to school by bus.',
        'syllables' => ['school']
    ],
    [
        'word' => 'world',
        'uk' => '/wɜːld/',
        'us' => '/wɝːld/',
        'meaning' => '世界',
        'example' => 'The world is changing quickly.',
        'syllables' => ['world']
    ],
];

$vowels = [
    ['symbol' => 'iː', 'sample' => 'see', 'hint' => '长音 i'],
    ['symbol' => 'ɪ', 'sample' => 'sit', 'hint' => '短音 i'],
    ['symbol' => 'e', 'sample' => 'bed', 'hint' => '短音 e'],
    ['symbol' => 'æ', 'sample' => 'cat', 'hint' => '张口 æ'],
    ['symbol' => 'ʌ', 'sample' => 'cup', 'hint' => '中央元音'],
    ['symbol' => 'ɑː', 'sample' => 'car', 'hint' => '长音 a'],
    ['symbol' => 'ɒ', 'sample' => 'hot', 'hint' => '短音 o(英式)'],
    ['symbol' => 'ɔː', 'sample' => 'door', 'hint' => '长音 ɔ'],
    ['symbol' => 'ʊ', 'sample' => 'book', 'hint' => '短音 u'],
    ['symbol' => 'uː', 'sample' => 'blue', 'hint' => '长音 u'],
    ['symbol' => 'ɜː', 'sample' => 'bird', 'hint' => '卷舌前中元音'],
    ['symbol' => 'ə', 'sample' => 'about', 'hint' => '弱读 schwa'],
];

$consonants = [
    ['symbol' => 'p', 'sample' => 'pen'],
    ['symbol' => 'b', 'sample' => 'bag'],
    ['symbol' => 't', 'sample' => 'tea'],
    ['symbol' => 'd', 'sample' => 'dog'],
    ['symbol' => 'k', 'sample' => 'key'],
    ['symbol' => 'g', 'sample' => 'go'],
    ['symbol' => 'f', 'sample' => 'fish'],
    ['symbol' => 'v', 'sample' => 'van'],
    ['symbol' => 'θ', 'sample' => 'think'],
    ['symbol' => 'ð', 'sample' => 'this'],
    ['symbol' => 's', 'sample' => 'sun'],
    ['symbol' => 'z', 'sample' => 'zoo'],
    ['symbol' => 'ʃ', 'sample' => 'ship'],
    ['symbol' => 'ʒ', 'sample' => 'vision'],
    ['symbol' => 'h', 'sample' => 'hat'],
    ['symbol' => 'm', 'sample' => 'man'],
    ['symbol' => 'n', 'sample' => 'nice'],
    ['symbol' => 'ŋ', 'sample' => 'sing'],
    ['symbol' => 'l', 'sample' => 'light'],
    ['symbol' => 'r', 'sample' => 'red'],
    ['symbol' => 'j', 'sample' => 'yes'],
    ['symbol' => 'w', 'sample' => 'we'],
    ['symbol' => 'tʃ', 'sample' => 'chair'],
    ['symbol' => 'dʒ', 'sample' => 'job'],
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
            --teal: #0f766e;
            --border: #e5e7eb;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: "PingFang SC", "Microsoft YaHei", sans-serif;
            background: linear-gradient(120deg, #eef2ff 0%, var(--bg) 40%, #f0fdfa 100%);
            color: var(--text);
        }

        .container { max-width: 1080px; margin: 36px auto; padding: 0 16px; }

        .panel {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 20px;
            margin-bottom: 16px;
            box-shadow: 0 8px 26px rgba(30, 64, 175, 0.08);
        }

        .panel h1, .panel h2 { margin: 0 0 8px; }
        .panel p { margin: 0; color: var(--muted); line-height: 1.6; }

        .search-box { margin-top: 14px; }
        input[type="search"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid var(--border);
            border-radius: 10px;
            font-size: 15px;
        }

        .phoneme-grid {
            margin-top: 12px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(110px, 1fr));
            gap: 10px;
        }

        .phoneme-btn {
            border: 1px solid var(--border);
            background: #f8fafc;
            border-radius: 10px;
            padding: 10px 8px;
            cursor: pointer;
            text-align: left;
        }

        .phoneme-btn .symbol {
            font-size: 18px;
            font-weight: 700;
            color: #111827;
            display: block;
        }

        .phoneme-btn .sample {
            font-size: 12px;
            color: var(--muted);
            display: block;
        }

        .word-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
            gap: 14px;
        }

        .word-card {
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 14px;
            background: #fff;
        }

        .word-title { margin: 0 0 8px; font-size: 22px; }
        .ipa { margin: 0 0 6px; font-size: 14px; color: var(--muted); }
        .meaning { margin: 0 0 5px; font-weight: 600; }
        .example { margin: 0 0 10px; font-size: 13px; color: var(--muted); }

        .btn-group, .syllables { display: flex; flex-wrap: wrap; gap: 8px; }

        .btn {
            border: none;
            border-radius: 8px;
            padding: 7px 10px;
            font-size: 13px;
            cursor: pointer;
            background: var(--primary);
            color: #fff;
        }

        .btn.secondary { background: var(--teal); }
        .btn.syllable { background: #7c3aed; }
        .btn:hover { filter: brightness(0.95); }

        .status { margin-top: 10px; min-height: 18px; color: #b91c1c; font-size: 13px; }
    </style>
</head>
<body>
<div class="container">
    <section class="panel">
        <h1>📘 音标学习网站</h1>
        <p>你现在可以点击元音、辅音进行发音练习；每个单词还支持按音节拆分并单独朗读。</p>
        <div class="search-box">
            <input id="searchInput" type="search" placeholder="搜索单词或中文释义，例如：apple / 世界">
        </div>
        <div class="status" id="status"></div>
    </section>

    <section class="panel">
        <h2>元音（点击发音）</h2>
        <div class="phoneme-grid">
            <?php foreach ($vowels as $item): ?>
                <button class="phoneme-btn" type="button" onclick="speakText('<?= htmlspecialchars($item['sample']) ?>', getLang(), '元音 <?= htmlspecialchars($item['symbol']) ?>')">
                    <span class="symbol">/<?= htmlspecialchars($item['symbol']) ?>/</span>
                    <span class="sample"><?= htmlspecialchars($item['sample']) ?> · <?= htmlspecialchars($item['hint']) ?></span>
                </button>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="panel">
        <h2>辅音（点击发音）</h2>
        <div class="phoneme-grid">
            <?php foreach ($consonants as $item): ?>
                <button class="phoneme-btn" type="button" onclick="speakText('<?= htmlspecialchars($item['sample']) ?>', getLang(), '辅音 <?= htmlspecialchars($item['symbol']) ?>')">
                    <span class="symbol">/<?= htmlspecialchars($item['symbol']) ?>/</span>
                    <span class="sample"><?= htmlspecialchars($item['sample']) ?></span>
                </button>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="panel">
        <h2>单词练习（按音节拆分）</h2>
        <div class="word-list">
            <?php foreach ($wordBank as $item): ?>
                <article class="word-card" data-word="<?= htmlspecialchars($item['word']) ?>" data-meaning="<?= htmlspecialchars($item['meaning']) ?>">
                    <h3 class="word-title"><?= htmlspecialchars($item['word']) ?></h3>
                    <p class="ipa">UK <?= htmlspecialchars($item['uk']) ?> ｜ US <?= htmlspecialchars($item['us']) ?></p>
                    <p class="meaning">中文：<?= htmlspecialchars($item['meaning']) ?></p>
                    <p class="example">例句：<?= htmlspecialchars($item['example']) ?></p>

                    <div class="btn-group">
                        <button class="btn" type="button" onclick="speakText('<?= htmlspecialchars($item['word']) ?>', 'en-GB', '整词英式')">🔊 整词英式</button>
                        <button class="btn secondary" type="button" onclick="speakText('<?= htmlspecialchars($item['word']) ?>', 'en-US', '整词美式')">🔊 整词美式</button>
                    </div>

                    <p class="example" style="margin-top:8px;">音节拆分：</p>
                    <div class="syllables">
                        <?php foreach ($item['syllables'] as $syllable): ?>
                            <button class="btn syllable" type="button" onclick="speakText('<?= htmlspecialchars($syllable) ?>', getLang(), '音节 <?= htmlspecialchars($syllable) ?>')">
                                <?= htmlspecialchars($syllable) ?>
                            </button>
                        <?php endforeach; ?>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
</div>

<script>
    const statusEl = document.getElementById('status');
    const searchInput = document.getElementById('searchInput');
    const cards = Array.from(document.querySelectorAll('.word-card'));

    function getLang() {
        return 'en-GB';
    }

    function speakText(text, lang, label = '发音') {
        if (!('speechSynthesis' in window)) {
            statusEl.textContent = '当前浏览器不支持语音合成，请换用最新版 Chrome/Edge。';
            return;
        }

        const utterance = new SpeechSynthesisUtterance(text);
        utterance.lang = lang;
        utterance.rate = 0.85;
        utterance.pitch = 1.0;
        utterance.onstart = () => {
            statusEl.textContent = `正在播放：${label}（${text}）`;
        };
        utterance.onend = () => {
            statusEl.textContent = `播放完成：${label}（${text}）`;
        };
        utterance.onerror = () => {
            statusEl.textContent = `播放失败：${label}`;
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

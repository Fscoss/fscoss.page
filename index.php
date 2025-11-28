<?php
// 単語リスト（もっと増やしてもOK！）
$adjectives = ['brisk', 'clever', 'silent', 'radiant', 'fuzzy', 'swift'];
$nouns = ['otter', 'comet', 'lantern', 'pixel', 'falcon', 'cloud'];
$verbs = ['leaps', 'spins', 'glows', 'hums', 'dives', 'soars'];

// ランダム文字列生成（英数字）
function generateRandomString($length = 4) {
    $chars = 'abcdefghijklmnopqrstuvwxyz0123456789';
    $str = '';
    for ($i = 0; $i < $length; $i++) {
        $str .= $chars[random_int(0, strlen($chars) - 1)];
    }
    return $str;
}

// ID生成
$id = strtolower(
    $adjectives[array_rand($adjectives)] . '-' .
    $nouns[array_rand($nouns)] . '-' .
    $verbs[array_rand($verbs)] . '-' .
    generateRandomString(4)
);

// プレーンテキストで出力
header('Content-Type: text/plain');
echo $id;

<?php
// 単語リスト（もっと増やしてもOK！）
$adjectives = [
    'brisk', 'clever', 'silent', 'radiant', 'fuzzy', 'swift', 'gentle', 'bold', 'mellow', 'vivid',
    'nimble', 'bright', 'stormy', 'calm', 'shiny', 'lucky', 'wild', 'quiet', 'zesty', 'snappy',
    'glossy', 'breezy', 'dizzy', 'fierce', 'graceful', 'icy', 'warm', 'lofty', 'dusty', 'foggy',
    'crispy', 'sandy', 'fluffy', 'bouncy', 'sticky', 'chunky', 'spicy', 'tasty', 'zany', 'quirky',
    'cheerful', 'sleepy', 'noisy', 'tiny', 'huge', 'gentle', 'rapid', 'slow', 'sharp', 'soft',
    'rough', 'smooth', 'sweet', 'bitter', 'salty', 'sour', 'fresh', 'dry', 'wet', 'cool',
    'hot', 'cold', 'pale', 'dark', 'light', 'heavy', 'thin', 'thick', 'long', 'short',
    'round', 'flat', 'square', 'pointy', 'curvy', 'twisty', 'bent', 'straight', 'clean', 'messy',
    'neat', 'fancy', 'plain', 'rich', 'poor', 'happy', 'sad', 'angry', 'kind', 'mean',
    'funny', 'serious', 'brave', 'shy', 'smart', 'silly', 'wise', 'young', 'old', 'new'
];
$nouns = [
    'otter', 'comet', 'lantern', 'pixel', 'falcon', 'cloud', 'ember', 'beacon', 'raven', 'quartz',
    'echo', 'drift', 'glider', 'spark', 'whale', 'canyon', 'orbit', 'flame', 'crystal', 'shadow',
    'pebble', 'stream', 'blizzard', 'nova', 'stone', 'leaf', 'tree', 'river', 'mountain', 'valley',
    'hill', 'lake', 'ocean', 'wave', 'rain', 'snow', 'wind', 'storm', 'sky', 'sun',
    'moon', 'star', 'planet', 'galaxy', 'space', 'dust', 'light', 'darkness', 'fire', 'ice',
    'fog', 'mist', 'cloud', 'thunder', 'lightning', 'echo', 'sound', 'voice', 'song', 'melody',
    'note', 'beat', 'rhythm', 'tempo', 'pulse', 'vibe', 'tone', 'chord', 'scale', 'harmony',
    'animal', 'bird', 'fish', 'fox', 'wolf', 'bear', 'lion', 'tiger', 'cat', 'dog',
    'mouse', 'rabbit', 'deer', 'horse', 'sheep', 'cow', 'pig', 'goat', 'duck', 'owl',
    'hawk', 'eagle', 'bat', 'bee', 'ant', 'bug', 'frog', 'toad', 'crab', 'snail'
];
$verbs = [
    'leaps', 'spins', 'glows', 'hums', 'dives', 'soars', 'twirls', 'dashes', 'blinks', 'rumbles',
    'shines', 'floats', 'zips', 'slides', 'flashes', 'swirls', 'pops', 'flickers', 'glides', 'sprints',
    'buzzes', 'drifts', 'shimmers', 'bounds', 'runs', 'jumps', 'walks', 'flies', 'crawls', 'hops',
    'skips', 'rolls', 'climbs', 'falls', 'swims', 'bounces', 'wiggles', 'wobbles', 'creeps', 'charges',
    'races', 'chases', 'dodges', 'dives', 'lurks', 'sneaks', 'slides', 'slips', 'trips', 'tumbles',
    'laughs', 'smiles', 'cries', 'sings', 'shouts', 'whispers', 'talks', 'yells', 'murmurs', 'chants',
    'growls', 'howls', 'barks', 'meows', 'chirps', 'roars', 'snaps', 'claps', 'stomps', 'knocks',
    'clicks', 'clinks', 'rings', 'dings', 'beeps', 'booms', 'thuds', 'thumps', 'crashes', 'bangs',
    'scratches', 'scrapes', 'rubs', 'taps', 'pokes', 'nudges', 'kicks', 'punches', 'grabs', 'throws',
    'catches', 'spits', 'licks', 'sniffs', 'chews', 'gulps', 'sips', 'slurps', 'nibbles', 'munches'
];


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

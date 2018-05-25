function wordcount() {
    var words = document.getElementById('isi-form').value;
    console.log(words);
    var wordcnt = words.split(/\s+/g).length;
    document.getElementById('word_count').value = wordcnt;
    var charcnt = words.length;
    document.getElementById('char_count').value = charcnt;
}

window.onload = wordcount();
var postReplaceList =
[
  {
    "f": "@div:([a-z|0-9 ]+)",
    "r": "<div class=\"$1\">"
  },
  {
    "f": "@divend",
    "r": "<\/div>"
  },
  {
    "f": "<hr>",
    "r": "<hr class=\"pagebreak\">"
  },
  {
    "f": "@negative:(\\d+)",
    "r": "<div style=\"margin-top:-$1mm\"><\/div>"
  },
  {
    "f": "@clear",
    "r": "<div class=\"floatclear\"><\/div>"
  },
  {
    "f": "@comment:([^@]*)@commend",
    "r": "<span class=\"comment\">$1<\/span>"
  },
  {
   "f": "〘",
   "r": "<kbd>"
  },
  {
    "f": "〙",
    "r": "<\/kbd>"
  },
  {
    "f": "<h6[^>]*>読み下し文",
    "r": "<h6 class=\"yomikudashi\">読み下し文"
  },
  {
    "f": "<h6[^>]*>chap",
    "r": "<h6 class=\"samplefile\">chap"
  },
  {
    "f": "<h6[^>]*>Chap",
    "r": "<h6 class=\"samplefile\">Chap"
  },
  {
    "f": "〔",
    "r": "<span class=\"yk-strong\">"
  },
  {
    "f": "〕",
    "r": "<\/span>"
  },
  {
    "f": "<p>(<div class=\"[^\"]+\">)</p>",
    "r": "$1"
  },
  {
      "f": "<li[^>]*>▶",
      "r": "<li class=\"aokome\">"
  },
  {
      "f": "<li[^>]*>([\u2776-\u277F\u24EB-\u24F4]+)",
      "r": "<li class=\"akakome\"><span>$1</span>"
  },
  {
      "f": "<span class=\"hljs-comment\"([^>]*)>#←",
      "r": "<span class=\"hljs-comment codered\"$1>"
  },
  {
      "f": "<span class=\"hljs-comment\"([^>]*)>//←",
      "r": "<span class=\"hljs-comment codered\"$1>"
  },
  {
      "f": "<span class=\"hljs-comment\"([^>]*)>&lt;!--←",
      "r": "<span class=\"hljs-comment codered\"$1>"
  },
  {
      "f": "###←(.*)",
      "r": "<span class=\"codered\">$1</span>"
  },
  {
      "f": "★<span[^>]*>4<\/span>字下げ",
      "r": "<span class=\"bluefurigana\">4字下げ<\/span>"
  },
  {
      "f": "★→→",
      "r": "<span class=\"bluefurigana\">➡➡<\/span>"
  },
  {
      "f": "★ブロック終了",
      "r": "<span class=\"bluefurigana2\">ブロック終了<\/span>"
  },
  {
      "f": "リ始",
      "r": "<span class=\"bluefurigana2\">リ始<\/span>"
  },
  {
      "f": "リ終",
      "r": "<span class=\"bluefurigana2\">リ終<\/span>"
  },
  {
      "f": "配始",
      "r": "<span class=\"bluefurigana2\">配始<\/span>"
  },
  {
      "f": "配終",
      "r": "<span class=\"bluefurigana2\">配終<\/span>"
  },
  {
      "f": "ルビ結果",
      "r": "<span class=\"bluefurigana2\">RUBY結果<\/span>"
  },
  {
      "f": "ルビ始",
      "r": "<span class=\"bluefurigana2\">RUBY始<\/span>"
  },
  {
      "f": "ルビ終",
      "r": "<span class=\"bluefurigana2\">RUBY終<\/span>"
  },
  {
      "f": "タ始",
      "r": "<span class=\"bluefurigana2\">タ始<\/span>"
  },
  {
      "f": "タ終",
      "r": "<span class=\"bluefurigana2\">タ終<\/span>"
  },
  {
      "f": "三重始",
      "r": "<span class=\"bluefurigana2\">三重始<\/span>"
  },
  {
      "f": "三重終",
      "r": "<span class=\"bluefurigana2\">三重終<\/span>"
  },
  {
      "f": "辞始",
      "r": "<span class=\"bluefurigana2\">辞始<\/span>"
  },
  {
      "f": "辞終",
      "r": "<span class=\"bluefurigana2\">辞終<\/span>"
  },
  {
      "f": "オ始",
      "r": "<span class=\"bluefurigana2\">オ始<\/span>"
  },
  {
      "f": "オ終",
      "r": "<span class=\"bluefurigana2\">オ終<\/span>"
  },
  {
      "f": "★改行",
      "r": "<span class=\"bluefurigana\">改行<\/span>"
  },
  {
      "f": "★折り返し",
      "r": "<span class=\"bluefurigana\">折り返し<\/span>"
  },
  {
      "f": "<p>【先輩normal】((?!<\/p>).*)<\/p>",
      "r": "<p class=\"face teacher\">$1<\/p>"
  },
  {
      "f": "<p>【後輩normal】((?!<\/p>).*)<\/p>",
      "r": "<p class=\"face student\">$1<\/p>"
  },
  {
      "f": "<p>【先輩egao】((?!<\/p>).*)<\/p>",
      "r": "<p class=\"face teacher teacher-laugh\">$1<\/p>"
  },
  {
      "f": "<p>【後輩egao】((?!<\/p>).*)<\/p>",
      "r": "<p class=\"face student student-laugh\">$1<\/p>"
  },
  {
      "f": "<p>【先輩idea】((?!<\/p>).*)<\/p>",
      "r": "<p class=\"face teacher teacher-idea\">$1<\/p>"
  },
  {
      "f": "<p>【後輩idea】((?!<\/p>).*)<\/p>",
      "r": "<p class=\"face student student-idea\">$1<\/p>"
  },
  {
      "f": "<p>【先輩shock】((?!<\/p>).*)<\/p>",
      "r": "<p class=\"face teacher teacher-shock\">$1<\/p>"
  },
  {
      "f": "<p>【後輩shock】((?!<\/p>).*)<\/p>",
      "r": "<p class=\"face student student-shock\">$1<\/p>"
  },
  {
      "f": "<p>【先輩hatena】((?!<\/p>).*)<\/p>",
      "r": "<p class=\"face teacher teacher-hatena\">$1<\/p>"
  },
  {
      "f": "<p>【後輩hatena】((?!<\/p>).*)<\/p>",
      "r": "<p class=\"face student student-hatena\">$1<\/p>"
  },
  {
    "f": "<p><\/div><\/p>",
    "r": "<\/div>"
  },
  {
    "f": "<p><\/div>",
    "r": "<\/div>"
  },
  {
    "f": "<\/div><\/p>",
    "r": "<\/div>"
  },
  {
    "f": "(<div class=\"[^\"]+\">)</p>",
    "r": "$1"
  },
  {
    "f": "<p>(<div class=\"[^\"]+\">)",
    "r": "$1"
  },
  {
    "f": "(<hr class=\"[^\"]+\">)</p>",
    "r": "$1"
  },
  {
    "f": "<p>(<hr class=\"[^\"]+\">)",
    "r": "$1"
  },
  {
    "f": "<p>(<svg [^>]+>)<\/p>",
    "r": "$1"
  },
  {
    "f": "<p>(<image [^>]+>)",
    "r": "$1"
  },
  {
    "f": "(<image [^>]+>)<\/p>",
    "r": "$1"
  },
  {
    "f": "<p>(<\/svg>)",
    "r": "$1"
  },
  {
    "f": "(<\/svg>)<\/p>",
    "r": "$1"
  },
  {
    "f": "<p><\/p>",
    "r": ""
  }
];

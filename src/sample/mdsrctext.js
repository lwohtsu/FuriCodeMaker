var mdsrctext =
`###### chap3-5-2.js
@div:furicode
\`\`\`js
for( let cnt1 = 1; cnt1 < 10; cnt1++ ){
  for( let cnt2 = 1; cnt2 < 10; cnt2++ ){
    console.log( cnt1 + '×' + cnt2
  + '＝' + cnt1 * cnt2 );
  }
}
\`\`\`
\`\`\`
……の間      新規作成  変数cnt1  入れろ 数値1  変数cnt1  小さい 数値10    変数cnt1  1増 以下を繰り返せ
     ……の間     新規作成   変数cnt2  入れろ 数値1  変数cnt2  小さい 数値10    変数cnt2  1増 以下を……
            コンソール       表示しろ    変数cnt1〔❷〕連結 文字列「×」〔❸〕連結 変数cnt2  ★折り返し
 〔❹〕連結 文字列「＝」〔❺〕連結 変数cnt1〔❶〕掛ける  変数cnt2
    ★ブロック終了
★ブロック終了
\`\`\`
@divend


###### 読み下し文
\`\`\`
〔数値1〕を、新規作成した〔変数cnt1〕に入れ、「〔変数cnt1〕が〔10〕より小さい」が真の間、以下を繰り返せ
｛   〔数値1〕を、新規作成した〔変数cnt2〕に入れ、「〔変数cnt2〕が〔10〕より小さい」が真の間、以下を繰り返せ
    ｛ 〔変数cnt1〕、〔文字列「×」〕、〔変数cnt2〕、〔文字列「＝」〕を連結し、〔変数cnt1〕に〔変数cnt2〕を掛けた結果を連結してコンソールに表示しろ。 ｝〔変数cnt2〕を1増やす。
｝〔変数cnt1〕を1増やす。
\`\`\`
`;

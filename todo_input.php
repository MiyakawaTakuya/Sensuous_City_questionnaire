<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>センシュアス・シティ アンケート </title>
  <link href="./CSS/main.css" rel="stylesheet">
</head>

<body>
  <form action="todo_create.php" method="POST">
    <fieldset>
      <legend>センシュアス・シティ アンケート </legend>
      <select name="city">
        <option value="empty">あなたの住んでいる街を選択してください
        <option value="福岡市">福岡市
        <option value="筑紫野市">筑紫野市
        <option value="久留米市">久留米市
        <option value="広島市">俺、広島だし
      </select>
      <p>
        Q1:お寺や神社にお参りをした
        <input type="radio" name="q1" value="○">はい
        <input type="radio" name="q1" value="×">いいえ
      </p>
      <p>
        Q2:地域のボランティアやチャリティに参加した
        <input type="radio" name="q2" value="○">はい
        <input type="radio" name="q2" value="×">いいえ
      </p>
      <p>
        Q3:馴染みの居酒屋で店主や常連客と盛り上がった
        <input type="radio" name="q3" value="○">はい
        <input type="radio" name="q3" value="×">いいえ
      </p>
      <p>
        Q4:買い物途中で店の人や他の客と会話を楽しんだ
        <input type="radio" name="q4" value="○">はい
        <input type="radio" name="q4" value="×">いいえ
      </p>
      <p>
        Q5:デートをした
        <input type="radio" name="q5" value="○">はい
        <input type="radio" name="q5" value="×">いいえ
      </p>
      <p>
        Q6:平日の昼から外で酒を飲んだ
        <input type="radio" name="q6" value="○">はい
        <input type="radio" name="q6" value="×">いいえ
      </p>
      <p>
        Q7:路上でキスをした
        <input type="radio" name="q7" value="○">はい
        <input type="radio" name="q7" value="×">いいえ
      </p>
      <p>
        Q8:素敵な異性に見とれた
        <input type="radio" name="q8" value="○">はい
        <input type="radio" name="q8" value="×">いいえ
      </p>
      <button>submit</button>
      </div>
      <!-- <a href="todo_read.php">一覧画面へ</a> -->
    </fieldset>
  </form>
</body>

</html>
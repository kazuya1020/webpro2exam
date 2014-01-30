<!DOCTYPE html>
<html lang="ja">
<body>
<h1>商品一覧</h1>
<p>購入したい商品を選択してください。</p>

<ul>

    <?php
    $result=$db->all();
        while($row=$result->fetch(PDO::FETCH_ASSOC)) {
         echo "<a href=/Sales/new?id=".$row['id'].">".$row['name']."</a><br>";
        }
    ?>
</ul>
</body>
</html>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>お問い合わせ | サンプル株式会社</title>
</head>

<body>
    <header>
        <!-- 576px以上の画面幅のとき、メニューを表示する（それ未満なら折りたたむ）指定を追加 「 navbar-expand-[画面サイズ]　」-->
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <!-- 画面左上に表示するサイト名のリンクとして適切な表示をするための指定を追加 「　class="navbar-brand"　をaに必ず追加する」-->
            <a href="#" class="navbar-brand">サンプル株式会社</a>

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="nav-bar">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="#" class="nav-link">会社情報</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">ニュース</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">採用情報</a></li>
                    <!-- お問い合わせページを表示していることをわかりやすくする設定を追加  「activeを加える 」-->
                    <li class="nav-item active"><a href="#" class="nav-link">お問い合わせ</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container">
        <h1 class="mt-4 pb-4 border-bottom">お問い合わせ</h1>

        <!-- グリッドを使うための指定を追加 [ <div class="container"> の内側に <div class="row">　を加える]-->
        <div class="row mt-4">
            <!-- 576px以上の画面幅のとき、左側は3つ分のカラム幅で表示する指定を追加 col-sm-3 -->
            <div class="col-sm-3">
                <!-- 電話に関するFont Awesomeのアイコンを追加 [ https://fontawesome.com/icons?d=gallery&m=free で検索 ]   -->
                <i class="fas fa-phone"></i> <strong>お電話：</strong>
            </div>

            <!-- 576px以上の画面幅のとき、右側は9つ分のカラム幅で表示する指定を追加  col-sm-3-->
            <div class="col-sm-9">
                <p>該当する内容の電話番号におかけください。</p>
                <!-- テーブルの装飾を適用する指定を追加  「　 class="tableを追加するだけ　」-->
                <!-- さらにテーブルへ枠を追加する指定、行ごとの背景色が交互に変わる指定を追加 　「　 class="table　の後に　table-bordered table-striped　などテーブルの設定を書き加える　」-->
                <table class="table table-bordered table-striped mt-4">
                    <thead>
                        <tr>
                            <th>内容</th>
                            <th>電話番号</th>
                            <th>担当</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>サービスに関するお問い合わせ</td>
                            <td>03-0000-0000</td>
                            <td>煌木</td>
                        </tr>
                        <tr>
                            <td>採用に関するお問い合わせ</td>
                            <td>03-0000-0001</td>
                            <td>煌田</td>
                        </tr>
                        <tr>
                            <td>サービスに関するお問い合わせ</td>
                            <td>03-0000-0002</td>
                            <td>煌山</td>
                        </tr>
                    </tbody>
                </table>

                <!-- カードの装飾を適用  「　class="card"　を追加　」-->
                <div class="card">
                    <!-- カードのタイトル部分として設定 「　class="card-header"　」　-->
                    <div class="card-header">
                        <!-- 時間に関するFont Awesomeのアイコンを追加 [ https://fontawesome.com/icons?d=gallery&m=free で検索 ] -->
                        <i class="fas fa-info-circle"></i> 営業時間
                    </div>

                    <!-- カードの本文部分として設定　「　class="card-body"　」-->
                    <div class="card-body">
                        平日10時〜19時（土日・祝日は対応しておりません）
                    </div>
                </div>
            </div>
        </div>

        <!-- グリッドを使うための指定を追加 -->
        <div class="row mt-4">
            <!-- 576px以上の画面幅のとき、左側は3つ分のカラム幅で表示する指定を追加 -->
            <div class="col-sm-3">
                <!-- メールに関するFont Awesomeのアイコンを追加 -->
                <i class="far fa-envelope"></i> <strong>メール：</strong>
            </div>

            <!-- 576px以上の画面幅のとき、右側は9つ分のカラム幅で表示する指定を追加 -->
            <div class="col-sm-9">
                <p>
                    プライバシーポリシーをご確認いただき、ご同意の上で、送信ボタンをクリックしてください。<br />
                    お問い合わせの内容は、受付日から3営業日以内をめどにご返信いたします。
                </p>
                <form action="complete.php" method="POST">
                    <!-- ラベルとフォーム部品を並べるためにグリッドを使う指定を追加 -->
                    <div class="row form-group">
                        <!-- 576px以上の画面幅のとき、ラベルは3つ分のカラム幅で表示する指定を追加 -->
                        <label class="col-sm-3 col-form-label">会社名：</label>

                        <!-- 576px以上の画面幅のとき、フォーム部品は9つ分のカラム幅で表示する指定を追加 -->
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="company" required>
                        </div>
                    </div>

                    <!-- ラベルとフォーム部品を並べるためにグリッドを使う指定を追加 -->
                    <div class="row form-group">
                        <!-- 576px以上の画面幅のとき、ラベルは3つ分のカラム幅で表示する指定を追加 -->
                        <label class="col-sm-3 col-form-label">氏名：</label>

                        <!-- 576px以上の画面幅のとき、フォーム部品は9つ分のカラム幅で表示する指定を追加 -->
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" required>
                        </div>
                    </div>

                    <!-- ラベルとフォーム部品を並べるためにグリッドを使う指定を追加 -->
                    <div class="row form-group">
                        <!-- 576px以上の画面幅のとき、ラベルは3つ分のカラム幅で表示する指定を追加 -->
                        <label class="col-sm-3 col-form-label">メール：</label>

                        <!-- 576px以上の画面幅のとき、フォーム部品は9つ分のカラム幅で表示する指定を追加 -->
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="mail" required>
                        </div>
                    </div>

                    <!-- ラベルとフォーム部品を並べるためにグリッドを使う指定を追加 -->
                    <div class="row form-group">
                        <!-- 576px以上の画面幅のとき、ラベルは3つ分のカラム幅で表示する指定を追加 -->
                        <label class="col-sm-3 col-form-label">電話番号：</label>

                        <!-- 576px以上の画面幅のとき、フォーム部品は9つ分のカラム幅で表示する指定を追加 -->
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="tel" required>
                        </div>
                    </div>

                    <!-- ラベルとフォーム部品を並べるためにグリッドを使う指定を追加 -->
                    <div class="row form-group">
                        <!-- 576px以上の画面幅のとき、ラベルは3つ分のカラム幅で表示する指定を追加 -->
                        <label class="col-sm-3 col-form-label">内容：</label>

                        <!-- 576px以上の画面幅のとき、フォーム部品は9つ分のカラム幅で表示する指定を追加 -->
                        <div class="col-sm-9">
                            <textarea class="form-control" name="content"  required></textarea>
                        </div>
                    </div>

                    <!-- ラベルとフォーム部品を並べるためにグリッドを使う指定を追加 -->
                    <div class="row form-group row">
                        <!-- 576px以上の画面幅のとき、3つ分のカラム幅の隙間を表示する設定を追加 [ class="offset-sm-3" ]-->
                        <!-- さらに、576px以上の画面幅のとき、9つ分のカラム幅で送信ボタンの表示部分の設定を追加 -->
                        <div class="offset-sm-3 col-sm-9">
                            <!-- 送信ボタンを緑色にする設定を追加 -->
                            <!-- さらに、送信ボタンは、指定のカラム幅に対して100％の幅となる設定を追加 [ btn-block ]-->
                            <button type="submit" class="btn btn-success btn-block">お問い合わせ内容を送信する</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="text-center pt-3 border-top">
        &copy; 2018 SAMPLE Inc.
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
</body>

</html>
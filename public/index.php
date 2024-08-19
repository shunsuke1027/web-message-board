<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex" />
    <title>ひとこと掲示板</title>
    <link rel="stylesheet" href="./assets/main.css" />
</head>

<body>
    <div class="page-cover">
        <p class="page-title">ひとこと掲示板</p>
        <hr class="page-divider" />
        <div class="form-cover">
            <form action="/" method="post">
            <div class="form-input-title">投稿者ニックネーム</div>
                <input type="text" name="author_name" maxlength="40" value="" class="input-author-name" />
                <div class="form-input-error">
                </div>
                <div class="form-input-title">投稿内容<small>(必須)</small></div>
                <textarea name="message" class="input-message"></textarea>
                <div class="form-input-error">
                </div>
                <input type="hidden" name="action_type" value="insert" />
                <button type="submit" class="input-submit-button">投稿する</button>
            </div>
            </form>
        <hr class="page-divider" />
        </div>
        <div class="message-list-cover">
            <!--投稿内容のリスト表示-->
            <small>
                1件の投稿
            </small>
            <div class="message-items">
                <div class="message-title">
                    <div>イチロー</div>
                    <small>2022-01-01 00:00:00</small>
                    <div class="spacer"></div>
                    <form action="/" method="post" style="text-align:right">
                        <input type="hidden" name="id" value="" />
                        <input type="hidden" name="action_type" value="delete" />
                        <button type="submit" class="message-delete-button">削除</button> 
                    </form>
                </div>
                <p class="message-line">明けましておめでとうございます</p>
            </div>
        </div>
    </div>

</body>

</html>
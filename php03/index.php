<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        .btn-submit {
            background-color: #007bff;
            color: #fff;
        }

        .btn-delete {
            background-color: #dc3545;
            color: #fff;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="select.php">データ一覧</a>
            </div>
        </nav>
    </header>

    <div class="container">
        <h1>フリーアンケート</h1>
        <form method="POST" action="insert.php">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">名前：</label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email：</label>
                        <input type="text" id="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="age">年齢：</label>
                        <input type="text" id="age" name="age" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="content">内容：</label>
                        <textarea id="content" name="content" rows="4" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-submit">送信</button>
                </div>
            </div>
        </form>

        <!-- データ削除フォーム -->
        <form method="POST" action="delete.php">
            <div class="card mt-4">
                <div class="card-body">
                    <h2>データ削除</h2>
                    <div class="form-group">
                        <label for="delete-id">削除するデータのID：</label>
                        <input type="text" id="delete-id" name="delete-id" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-delete">削除</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

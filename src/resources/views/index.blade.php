<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
        </div>
    </header>
    <main>
        <div class="contact-form__contact">
            <div class="contact-form__heading">
                <h2>Contact</h2>
            </div>
            <form class="form" action="/contacts/confirm" method="post">
            @csrf
                <div class="form__group">
                    <div class="form__group-ttl">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="first_name" placeholder="例:山田"/>
                            <input type="text" name="last_name" placeholder="例:太郎"/>
                        </div>
                        <div class="form__error">
                            <!--バリデーション後-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-ttl">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="radio" name="gender" value="man">男性
                            <input type="radio" name="gender" value="woman">女性
                            <input type="radio" name="gender" value="other">その他
                        </div>
                        <div class="form__error">
                            <!--バリデーション後-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-ttl">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" placeholder="例: test@exmple.com"/>
                        </div>
                        <div class="form__error">
                            <!--バリデーション後-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-ttl">
                        <span class="form__label--item">電話番号</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="tel" name="tel" placeholder=""/>
                            <!--電話番号の三つ区切り調べる-->
                        </div>
                        <div class="form__error">
                            <!--バリデーション後-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-ttl">
                        <span class="form__label--item">住所</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3"/>
                        </div>
                        <div class="form__error">
                            <!--バリデーション後-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-ttl">
                        <span class="form__label--item">建物名</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101"/>
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-ttl">
                        <span class="form__label--item">お問い合わせの種類</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <select name="kinds">
                                <option value="" hidden>選択してください</option>
                                <option value="1">商品のお届けについて</option>
                                <option value="2">商品の交換について</option>
                                <option value="3">商品トラブル</option>
                                <option value="4">ショップへのお問い合わせ</option>
                                <option value="5">その他</option>
                            </select>
                        </div>
                        <div class="form__error">
                            <!--バリデーション後-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-ttl">
                        <span class="form__label--item">お問い合わせ内容</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <textarea name="inquiry" cols="50" rows="5" placeholder="お問い合わせ内容をご記載ください"></textarea>
                        </div>
                        <div class="form__error">
                            <!--バリデーション後-->
                        </div>
                    </div>
                </div>
                <input class="contact-submit" type="submit" value="確認画面" />
            </form>
        </div>
    </main>
    
</body>
</html>